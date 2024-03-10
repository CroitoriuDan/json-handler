<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\DetergentPump;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class DeviceController extends Controller
{
    
    public function processJsonFile(Request $request)
    {

$jsonFiles = Storage::files('json');

    foreach ($jsonFiles as $jsonFile) {
        if(Storage::exists($jsonFile)){
        $jsonContent = json_decode(Storage::get($jsonFile), true); 
           
            // Process and store the data
            $device = Device::create([
                'device_id' => $jsonContent['device_id'],
                'location_name' => $jsonContent['location_name'],
            ]);

            foreach ($jsonContent['detergent_pumps'] as $pumpData) {
                DetergentPump::create([
                    'device_id' => $device->device_id,
                    'name' => $pumpData['name'],
                    'active' => $pumpData['active'],
                    'trigger' => $pumpData['trigger'],
                    'dosage' => $pumpData['dosage'],
                    'xp' => $pumpData['xp'],
                    'xt' => $pumpData['xt'],
                    'total' => $pumpData['total'],
                    'remaining' => $pumpData['remaining'],
                ]);
            }
            dd("1");
            return redirect('/devices')->with('success', 'Data processed and stored successfully.');
        } else {
            dd("2");
            return redirect('/devices')->with('error', 'JSON file not found.');
        }

    }

    return redirect('/devices')->with('success', 'All JSON files processed and stored successfully.');


}


public function index()
{   
    
    $devices = Device::all();

    return view('devices.index', compact('devices'));
}

public function show($id)
{
    $device = Device::findOrFail($id);

    return view('devices.show', compact('device'));
}


public function create()
{
    
    return view('devices.create');
}

public function store(Request $request)
{
    $request->validate([
        'device_id' => 'required|unique:devices',
        'location_name' => 'required',
    ]);

    Device::create($request->all());

    return redirect('/devices')->with('success', 'Device created successfully.');
}

public function edit($id)
{
    $device = Device::findOrFail($id);

    return view('devices.edit', compact('device'));
}



public function update(Request $request, Device $device)
{
    
    
    $request->validate([
        'location_name' => 'required',
        'detergent_pumps' => 'required|array',
        'detergent_pumps.*.name' => 'required|string',
        'detergent_pumps.*.dosage' => 'required|numeric',
        // 'detergent_pumps.*.active' => 'nullable|in:on', // Allow 'on' or null
        // 'detergent_pumps.*.active' => 'nullable|boolean',
        'detergent_pumps.*.active' => 'nullable|in:on,true,false',
        'detergent_pumps.*.trigger' => 'required|string',
        'detergent_pumps.*.xp' => 'required|numeric',
        'detergent_pumps.*.xt' => 'required|numeric',
        'detergent_pumps.*.total' => 'required|numeric',
        'detergent_pumps.*.remaining' => 'required|numeric',
    ]);
    
    // foreach ($request->input('detergent_pumps') as &$pumpData) {
    //     $pumpData['active'] = $pumpData['active'] === '0' ? false : true;
    // }

    // foreach ($request->input('detergent_pumps') as &$pumpData) {
    //     $pumpData['active'] = in_array($pumpData['active'], ['on', 'true'], true) ? 1 : 0;
    // }
    
    // dd($pumpData['active']);

    $device->update([
        'location_name' => $request->input('location_name'),
    ]);

   

    foreach ($request->input('detergent_pumps') as $pumpData) {
        $pumpData['active'] = in_array($pumpData['active'], ['on', 'true'], true) ? 1 : 0;

        if (isset($pumpData['id'])) {
            
            $detergentPump = DetergentPump::findOrFail($pumpData['id']);
            $detergentPump->update($pumpData);
        } else {
            
            $device->detergentPumps()->create($pumpData);
        }
    }

    return redirect('/devices')->with('success', 'Device and detergent pumps updated successfully.');
}


public function destroy($id)
{
    $device = Device::findOrFail($id);
    $device->delete();

    return redirect('/devices')->with('success', 'Device deleted successfully.');
}



public function exportToJson()
{
    $devices = Device::with('detergentPumps')->get();

    $exportData = $devices->map(function ($device) {
        return [
            'device_id' => $device->device_id,
            'location_name' => $device->location_name,
            'detergent_pumps' => $device->detergentPumps->map(function ($pump) {
                return [
                    'name' => $pump->name,
                    'dosage' => $pump->dosage,
                    'active' => $pump->active == 1 ? true : false,
                    'trigger' => $pump->trigger,
                    'xp' => $pump->xp,
                    'xt' => $pump->xt,
                    'total' => $pump->total,
                    'remaining' => $pump->remaining,
                ];
            }),
        ];
    });

    $jsonContent = json_encode($exportData, JSON_PRETTY_PRINT);

    Storage::put('exported_data.json', $jsonContent);

    return response()->download(storage_path('app/exported_data.json'))->deleteFileAfterSend();
}


}