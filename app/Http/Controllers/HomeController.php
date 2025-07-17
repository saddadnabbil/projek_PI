<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestEvents = Event::latest()->take(3)->get();
        return view('home', compact('latestEvents'));
    }
}