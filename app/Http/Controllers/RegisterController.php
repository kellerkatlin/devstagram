<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
       //validacion
         $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'password' => 'required'
         ]);
    }
}