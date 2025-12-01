<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroler extends Controller
{
    public function home()
    {
        return view('homePage');
    }
    public function about()
    {
        return view('aboutUs');
    }
    public function games()
    {
        return view('gamesPage');
    }
    public function login()
    {
        return view('loginPage');
    }
    public function register()
    {
        return view('registerPage');
    }
    public function layout()
    {
        return view('layout');
    }
    public function myprofile()
    {
        return view('myprofile');
    }
    public function loginPage()
    {
        return view('loginPage');
    }
    public function registerPage()
    {
        return view('registerPage');
    }
}
