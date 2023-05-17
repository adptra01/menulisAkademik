<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Argument;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home', [
            'academy' => Academy::get(),
        ]);
    }

    public function materials()
    {
        return view('materials', [
            'academies' => Academy::latest()->get(),
            'arguments' => Argument::get(),
            
        ]);
    }
}
