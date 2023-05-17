<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Argument;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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

    public function academies()
    {
        return view('courses.academies', [
            'academies' => Academy::latest()->get()
        ]);
    }
    public function arguments()
    {
        return view('courses.arguments', [
            'arguments' => Argument::latest()->get()
        ]);
    }

    public function details($slug)
    {
        $details = null;
        $argument = Argument::where('slug', $slug)->first();
        $academy = Academy::where('slug', $slug)->first();
        
        if ($argument) {
            $details = $argument;
        } else if ($academy) {
            $details = $academy;
        } else {
            abort(404);
        }
        
        return view('courses.details', [
            'details' => $details,
        ]);
    }


}
