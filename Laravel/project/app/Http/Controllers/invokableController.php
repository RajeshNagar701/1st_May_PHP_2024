<?php

// controller come with __construct() function then create oun function 
// php artisan make:controller invoController --invokable   


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokableController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('website.index');
    }
}
