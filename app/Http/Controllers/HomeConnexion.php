<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeConnexion extends Controller
{
    public function create()
    {
        return view('HomeConnexion');
    }

    public function store(HomeConnexion $request)
    {
        return 'vue SeConnecter';
    }
}
