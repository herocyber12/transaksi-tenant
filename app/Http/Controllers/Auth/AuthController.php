<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('pages.auth.login');
    }

    public function register_akun(){
        return view('pages.auth.register_akun');
    }

    public function register_tenant(){
        return view('pages.auth.register_tenant');
    }

    public function forget_password(){
        return view('pages.auth.forgetpass');
    }
}
