<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }

    public function index(){
        return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update(){

        $this->validate(request(), [
            'address' => 'required',
            'contact_email' => 'required',
            'contact_number' => 'required',
            'site_name' => 'required'
        ]);

        $settings = Setting::first();

            $settings->address = request()->address;
            $settings->contact_email = request()->contact_email;
            $settings->contact_number = request()->contact_number;
            $settings->site_name = request()->site_name;
            $settings->save();
            Session::flash('success', 'blog settings updated successfully');
            return redirect()->route('settings');
    }
}
