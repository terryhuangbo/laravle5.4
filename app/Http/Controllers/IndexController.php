<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        return "Hello World";
    }

    public function home()
    {
        return "Hello home";
    }

    public function login()
    {
        return view();
    }




}
