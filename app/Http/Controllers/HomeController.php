<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'academy' => Academy::get(),
        ]);
    }

    public function welcome()
    {
        return view('welcome', [
        ]);
    }

    public function materials()
    {
        return view('materials', [
            'academies' => Academy::latest()->get(),
        ]);
    }
}
