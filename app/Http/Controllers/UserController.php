<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if($role == '0'){
            return view('student');
        }
        if($role == '1'){
            return view('dashboard');
        }
        if($role == '2'){
            return view('panel');
        }
    }
}
