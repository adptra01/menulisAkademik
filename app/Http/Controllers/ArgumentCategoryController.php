<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ArgumentCategory;

class ArgumentCategoryController extends Controller
{
    public function index()
    {
        return view('argument_categories.index', [
            'categories' => ArgumentCategory::get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|min:5',
           'description' => 'required|min:10'
        ]);
        ArgumentCategory::create([
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return back()->with('success', 'New argument categories created successfully');
    }

    public function show($slug)
    {
        return view('argument_categories.show', [
            'category' => ArgumentCategory::whereSlug($slug)->first(),
        ]);
    }
}
