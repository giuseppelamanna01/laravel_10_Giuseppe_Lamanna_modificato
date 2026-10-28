<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Device;
use App\Http\Requests\DeviceRequest;

class DeviceController extends Controller
{
    public function insert(){
        return view('device.insDev');
    }

    public function store(DeviceRequest $request){
        $device = Device::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'serialNumber'=>$request->serialNumber,
            'image'=>$request->file('image')->store('images', 'public')
        ]);
        
        

        return redirect()->route('home')->with('insertSuccess', 'Inserimento del tuo dispositivo avvenuto con successo');
    }

    public function deviceList(){
        $devices = Device::all();
        return view('device.listdevices', ['devices'=>$devices]);
    }
}
