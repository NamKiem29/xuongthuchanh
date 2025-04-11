<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

class HomeController
{
    public function home()
    {
        return view('client.home');
    }
}