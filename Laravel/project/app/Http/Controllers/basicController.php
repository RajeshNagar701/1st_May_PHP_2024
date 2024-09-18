<?php

// create oun function 
// php artisan make:controller basicController   

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    
    function index()
    {
        return view('website.index');
    }
}
