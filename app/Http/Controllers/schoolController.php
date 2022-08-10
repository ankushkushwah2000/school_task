<?php

namespace App\Http\Controllers;

use App\Models\school;
use Illuminate\Http\Request;

class schoolController extends Controller
{
    public function index(){
        return view('add_school');
    }

    public function store(Request $request){
        $file =$request->file('image');
        $filename = 'image'. time().'.'.$request->image->extension();
        $file->move("upload/school_image/",$filename);
        $data = new school();
        $data->name=$request->name;
        $data->address=$request->address;
        $data->city=$request->city;
        $data->state=$request->state;
        $data->contact=$request->contact;
        $data->email=$request->email;
        $data->image=$filename;
        // dd($data);
        $data->save();
        return redirect()->route('dispaly');
    }

    public function dispaly(){
        $school = school::all();
        return view('show_school',compact('school'));
    }
}
