<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;
use Image;
use DB;

class SettingsController extends Controller
{
    public function index(){
        return view('admin.settings.generalSettings');
    }

    public function saveLogo( Request $request)
    {

        //$instituelogo = $request->file('institute_logo');
        //$uploadPath = 'institute_logo/';
        //$logoExtension = $instituelogo->getClientOriginalExtension();
        // $logoName = strtolower($request->logo_name).'.'.$logoExtension;
        //return $logoName;
        // $instituelogo->move($uploadPath, $logoName );

        $this->validate($request, [
            'institute_name' => 'required|max:100',
            'institute_address' => 'required',
            'institute_email' => 'required',
            'institute_phone_number' => 'required',
        ]);

        $instituelogo = $request->file('institute_logo');
        $fileExtension = $instituelogo->getClientOriginalExtension();
        //return $fileExtension;
        // dd($instituelogo);

        $uploadPath = 'institute_logo/';
        $logoName = $request->logo_name . '.' . $fileExtension;
        $logoUrl = $uploadPath.$logoName; // location and file's name
        Image::make($instituelogo)->resize(270, 350)->save($uploadPath . $logoName);
        //return 'success';


        $settings = new Settings();
        $settings->institute_name = $request->institute_name;
        $settings->institute_address = $request->institute_address;
        $settings->institute_email = $request->institute_email;
        $settings->institute_phone_number = $request->institute_phone_number;
        $settings->institute_logo = $request->$logoUrl;
        $settings->time_zone = $request->time_zone;
        $settings->language = $request->language;
        $settings->save();
        return redirect('/add/settings')->with('message','Settings info save successfully');
    }
}
