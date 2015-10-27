<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $animal = [ 'cat', 'dog', 'bird'];
        return view('index' , compact('animal'));

    }



    public function login()
    {
        return view('login');
    }



    public function dashboard()
    {
        return view('dashboard');
    }
}
