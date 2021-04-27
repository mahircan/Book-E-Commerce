<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.about');
    }

    public function test($id,$name)
    {
        echo "Id Number :", $id;
        echo "<br>Name :", $name;

    }
}
