<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Event;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('event')
            ->orderBy('sort_order', 'asc')
            ->latest()
            ->get()
            ->groupBy(function($gallery) {
                return $gallery->event->category;
            });
            
        return view('gallery.index', compact('galleries'));
    }
}