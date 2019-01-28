<?php

namespace App\Http\Controllers;

use App\Setting;

use Session;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    // injecting a Middleware in this controller

    public function __construct(){

    	$this->middleware('admin');
    }




    public function index(){

    	return view('admin.settings.setting')->with('settings', Setting::first());


    }



    public function update(){

// validate data
    	$this->validate(request(),[

    		'site_name' => 'required',
    		'address' => 'required',
    		'contact_number' => 'required',
    		'contact_email' => 'required',

    		]);

    	//dd(request()->all());


    	$settings = Setting::first();

    	$settings->site_name = request()->site_name;

    	$settings->address = request()->address;

    	$settings->contact_email = request()->contact_email;

    	$settings->contact_number = request()->contact_number;

    	$settings->save(); 

    	Session::flash('success', 'Site Settings Updated Successfully');

    	return redirect()->back();
    }


}
