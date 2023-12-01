<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formcontroller extends Controller
{
    public function form()
    {
        return view('form');
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
        echo $id;
        $find = form::find($id)->delete();
        print_r($find);
        return redirect('std/view');
    }
}
