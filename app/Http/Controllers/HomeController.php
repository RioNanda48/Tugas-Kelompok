<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outfit;

class HomeController extends Controller
{
    public function index()
    {
        $outfit = Outfit::all();
        return view('cosplays.index', ['outfit' => $outfit]);
    }
}