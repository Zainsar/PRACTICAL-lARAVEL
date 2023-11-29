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
    }
}
