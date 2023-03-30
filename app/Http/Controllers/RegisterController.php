<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('formulario');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|min:5',
        'username' => 'required|unique:users|min:3|max:30',
        'email' => 'required|unique:users|email',
        'password' => 'required'
        ]);

        User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request-> password)
        ]);

    }
}
