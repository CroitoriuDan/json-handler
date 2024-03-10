<!-- resources/views/devices/edit.blade.php -->

<!-- <h1>Edit Device</h1>
<form action="{{ route('devices.update', $device) }}" method="post">
    @csrf
    @method('PUT')
    <label for="device_id">Device ID:</label>
    <input type="text" name="device_id" value="{{ $device->device_id }}" required>
    <label for="location_name">Location Name:</label>
    <input type="text" name="location_name" value="{{ $device->location_name }}" required>
    <button type="submit">Update Device</button>
</form>
<a href="{{ route('devices.show', $device) }}">Back to Device Details</a> -->


<!-- Form for updating the device information -->
<!-- <form method="post" action="{{ route('devices.update', ['device' => $device->id]) }}">
    @csrf
    @method('put')

    
    <label for="location_name">Location Name:</label>
    <input type="text" name="location_name" value="{{ old('location_name', $device->location_name) }}">

   
    @foreach ($device->detergentPumps as $index => $pump)
        <label for="detergent_pumps[{{ $index }}][name]">Pump Name:</label>
        <input type="text" name="detergent_pumps[{{ $index }}][name]" value="{{ old('detergent_pumps.'.$index.'.name', $pump->name) }}">

        <label for="detergent_pumps[{{ $index }}][dosage]">Dosage:</label>
        <input type="text" name="detergent_pumps[{{ $index }}][dosage]" value="{{ old('detergent_pumps.'.$index.'.dosage', $pump->dosage) }}">

        <label for="detergent_pumps[{{ $index }}][active]">Active:</label>
        <input type="checkbox" name="detergent_pumps[{{ $index }}][active]" {{ old('detergent_pumps.'.$index.'.active', $pump->active) ? 'checked' : '' }}>

        <label for="detergent_pumps[{{ $index }}][trigger]">Trigger:</label>
        <input type="text" name="detergent_pumps[{{ $index }}][trigger]" value="{{ old('detergent_pumps.'.$index.'.trigger', $pump->trigger) }}">

        <label for="detergent_pumps[{{ $index }}][xp]">XP:</label>
        <input type="text" name="detergent_pumps[{{ $index }}][xp]" value="{{ old('detergent_pumps.'.$index.'.xp', $pump->xp) }}">

        <label for="detergent_pumps[{{ $index }}][xt]">XT:</label>
        <input type="text" name="detergent_pumps[{{ $index }}][xt]" value="{{ old('detergent_pumps.'.$index.'.xt', $pump->xt) }}">

        <label for="detergent_pumps[{{ $index }}][total]">Total:</label>
        <input type="text" name="detergent_pumps[{{ $index }}][total]" value="{{ old('detergent_pumps.'.$index.'.total', $pump->total) }}">

        <label for="detergent_pumps[{{ $index }}][remaining]">Remaining:</label>
        <input type="text" name="detergent_pumps[{{ $index }}][remaining]" value="{{ old('detergent_pumps.'.$index.'.remaining', $pump->remaining) }}">
    @endforeach

   
    <button type="submit">Update Device</button>
</form> -->


<!-- Form for updating the device information -->
<!-- <form method="post" action="{{ route('devices.update', ['device' => $device->id]) }}">
    @csrf
    @method('put')

    <div class="container mt-4">
        <h3>Edit Device</h3>

        
        <div class="form-group">
            <label for="location_name">Location Name:</label>
            <input type="text" class="form-control" name="location_name" value="{{ old('location_name', $device->location_name) }}">
        </div>

        
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Dosage</th>
                    <th>Active</th>
                    <th>Trigger</th>
                    <th>XP</th>
                    <th>XT</th>
                    <th>Total</th>
                    <th>Remaining</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($device->detergentPumps as $index => $pump)
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][name]" value="{{ old('detergent_pumps.'.$index.'.name', $pump->name) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][dosage]" value="{{ old('detergent_pumps.'.$index.'.dosage', $pump->dosage) }}">
                        </td>
                        <td>
                            <input type="checkbox" class="form-check-input" name="detergent_pumps[{{ $index }}][active]" {{ old('detergent_pumps.'.$index.'.active', $pump->active) ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][trigger]" value="{{ old('detergent_pumps.'.$index.'.trigger', $pump->trigger) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xp]" value="{{ old('detergent_pumps.'.$index.'.xp', $pump->xp) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xt]" value="{{ old('detergent_pumps.'.$index.'.xt', $pump->xt) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][total]" value="{{ old('detergent_pumps.'.$index.'.total', $pump->total) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][remaining]" value="{{ old('detergent_pumps.'.$index.'.remaining', $pump->remaining) }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       

        
        <button type="submit" class="btn btn-primary">Update Device</button>
    </div>
</form> -->



<!-- Form for updating the device information -->
<!-- <form method="post" action="{{ route('devices.update', ['device' => $device->id]) }}">
    @csrf
    @method('put')

    <div class="container mt-4">
        <h3>Edit Device</h3>

        
        <div class="form-group">
            <label for="location_name">Location Name:</label>
            <input type="text" class="form-control" name="location_name" value="{{ old('location_name', $device->location_name) }}">
        </div>

        
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Dosage</th>
                    <th>Active</th>
                    <th>Trigger</th>
                    <th>XP</th>
                    <th>XT</th>
                    <th>Total</th>
                    <th>Remaining</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($device->detergentPumps as $index => $pump)
                    <tr>
                        <input type="hidden" name="detergent_pumps[{{ $index }}][id]" value="{{ $pump->id }}">
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][name]" value="{{ old('detergent_pumps.'.$index.'.name', $pump->name) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][dosage]" value="{{ old('detergent_pumps.'.$index.'.dosage', $pump->dosage) }}">
                        </td>
                        <td>
                            <input type="checkbox" class="form-check-input" name="detergent_pumps[{{ $index }}][active]" {{ old('detergent_pumps.'.$index.'.active', $pump->active) ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][trigger]" value="{{ old('detergent_pumps.'.$index.'.trigger', $pump->trigger) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xp]" value="{{ old('detergent_pumps.'.$index.'.xp', $pump->xp) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xt]" value="{{ old('detergent_pumps.'.$index.'.xt', $pump->xt) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][total]" value="{{ old('detergent_pumps.'.$index.'.total', $pump->total) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][remaining]" value="{{ old('detergent_pumps.'.$index.'.remaining', $pump->remaining) }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        
        <button type="submit" class="btn btn-primary">Update Device</button>
    </div>
</form> -->


<!-- <form method="post" action="{{ route('devices.update', ['device' => $device->id]) }}">
    @csrf
    @method('PATCH')

    <div class="container mt-4">
        <h3>Edit Device</h3>

        <div class="form-group">
            <label for="location_name">Location Name:</label>
            <input type="text" class="form-control" name="location_name" value="{{ old('location_name', $device->location_name) }}">
        </div>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Dosage</th>
                    <th>Active</th>
                    <th>Trigger</th>
                    <th>XP</th>
                    <th>XT</th>
                    <th>Total</th>
                    <th>Remaining</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($device->detergentPumps as $index => $pump)
                    <tr>
                        <input type="hidden" name="detergent_pumps[{{ $index }}][id]" value="{{ $pump->id }}">
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][name]" value="{{ old('detergent_pumps.'.$index.'.name', $pump->name) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][dosage]" value="{{ old('detergent_pumps.'.$index.'.dosage', $pump->dosage) }}">
                        </td>
                        <td>
                            <input type="checkbox" class="form-check-input" name="detergent_pumps[{{ $index }}][active]" {{ old('detergent_pumps.'.$index.'.active', $pump->active) ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][trigger]" value="{{ old('detergent_pumps.'.$index.'.trigger', $pump->trigger) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xp]" value="{{ old('detergent_pumps.'.$index.'.xp', $pump->xp) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xt]" value="{{ old('detergent_pumps.'.$index.'.xt', $pump->xt) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][total]" value="{{ old('detergent_pumps.'.$index.'.total', $pump->total) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][remaining]" value="{{ old('detergent_pumps.'.$index.'.remaining', $pump->remaining) }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       
        <button type="submit" class="btn btn-primary">Update Device</button>
    </div>
</form> -->


<!-- resources/views/devices/edit.blade.php -->

@if(!empty($errors->messages()))
    {{ dd($errors->messages()) }}
@endif

<form method="post" action="{{ route('devices.update', ['device' => $device->id]) }}">
    @csrf
    @method('PATCH')

    <div class="container mt-4">
        <h3>Edit Device</h3>

        <!-- Device fields -->
        <div class="form-group">
            <label for="location_name">Location Name:</label>
            <input type="text" class="form-control" name="location_name" value="{{ old('location_name', $device->location_name) }}">
        </div>

        <!-- Detergent pumps fields -->
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Dosage</th>
                    <th>Active</th>
                    <th>Trigger</th>
                    <th>XP</th>
                    <th>XT</th>
                    <th>Total</th>
                    <th>Remaining</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($device->detergentPumps as $index => $pump)
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][name]" value="{{ old('detergent_pumps.'.$index.'.name', $pump->name) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][dosage]" value="{{ old('detergent_pumps.'.$index.'.dosage', $pump->dosage) }}">
                        </td>
                        <!-- <td>
                            <input type="checkbox" class="form-check-input" name="detergent_pumps[{{ $index }}][active]" {{ old('detergent_pumps.'.$index.'.active', $pump->active) ? 'checked' : '' }}>
                        </td> -->

                        <td>
                        <input type="hidden" name="detergent_pumps[{{ $index }}][active]" value="false">
                        <input type="checkbox" class="form-check-input" name="detergent_pumps[{{ $index }}][active]" {{ old('detergent_pumps.'.$index.'.active', $pump->active) ? 'checked' : '' }}>
                        </td>



                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][trigger]" value="{{ old('detergent_pumps.'.$index.'.trigger', $pump->trigger) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xp]" value="{{ old('detergent_pumps.'.$index.'.xp', $pump->xp) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][xt]" value="{{ old('detergent_pumps.'.$index.'.xt', $pump->xt) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][total]" value="{{ old('detergent_pumps.'.$index.'.total', $pump->total) }}">
                        </td>
                        <td>
                            <input type="text" class="form-control" name="detergent_pumps[{{ $index }}][remaining]" value="{{ old('detergent_pumps.'.$index.'.remaining', $pump->remaining) }}">
                        </td>
                        <input type="hidden" name="detergent_pumps[{{ $index }}][id]" value="{{ $pump->id }}">
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add more detergent pumps if needed -->

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Update Device</button>
    </div>
</form>
