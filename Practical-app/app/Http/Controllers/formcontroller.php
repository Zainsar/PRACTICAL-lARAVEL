<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formcontroller extends Controller
{
    public function form()
    {
        $url = url('/form');
        $title = "Rigester form";
        $record1 = compact('url' , 'title');
        return view('form')->with($record1);
    }
    public function data(Request $request)
    {
        print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required'
        ]);
        $_students = new form();
        $_students->name=$request['name'];
        $_students->email=$request['email'];
        $_students->password=$request['password'];
        $_students->save();
        return redirect('std/view');
    }

    public function std_view()
    {
        $stdData = form::all();
        $data = compact('stdData');
        return view('std-view')->with($data);
    }

    public function std_dlt($id)
    {
        // echo $id;
        $find = form::find($id)->delete();
        print_r($find);
        return redirect('std/view');
    }
    public function std_edit($id)
    {
        // echo $id;
        $edit = form::find($id);
        // dd($edit);
        $url = url("std/update"). "/" . $id;
        $title = "Update User Information";
        $records = compact('edit' , 'url' , 'title');
        return view('form')->with($records);
    }
    public function std_update($id , request $request){
        $_student = form::find($id);
        $_student->name=$request['name'];
        $_student->email=$request['email'];
        $_student->password=$request['password'];
        $_student->save();
        return redirect('std/view');
    }
}
