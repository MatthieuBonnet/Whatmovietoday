<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historiquecontroller extends Controller
{
    public function index()
    {
        return view('historique');
    }
}