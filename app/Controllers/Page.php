<?php 

namespace App\Controllers;

class Page extends BaseController
{
    public function dashboard()
    {
        return view('dashboard');
    }

    // Function Login
    public function login()
    {
        return view('login');
    }

    //Function Register
    public function register()
    {
        return view('register');
    }

} //.end of class Page