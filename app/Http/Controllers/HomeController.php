<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::all(); // Fetch all properties from the database
        return view('home', compact('properties')); // Pass properties to the home view
    }
}
