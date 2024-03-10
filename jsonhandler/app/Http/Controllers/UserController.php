<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function saveuser(){

        // $file_path = storage_path('/public/users.json');
        
        $records = Storage::json('/public/users.json');
        if($records){
        foreach($records as $record)
        {
            $user = new User;
            $user-> id = $record['id'];
            $user-> name = $record['name'];
            $user-> email = $record['email'];
            $user-> password = bcrypt(Str::password());
            $user ->save();
        }
        print('user created succesfully');
        }
        else
        {
            print('error');
        }

    }
}
