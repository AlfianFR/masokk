<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;

class logController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');

    }

    public function authenticate(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($cred)) {
            
        }
    }
}
