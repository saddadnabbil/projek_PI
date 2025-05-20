<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Engagement Event',
                'description' => 'Wujudkan momen pertunangan yang berkesan dengan dekorasi elegan dan catering premium.',
                'features' => ['Dekorasi mewah', 'Catering premium', 'Dokumentasi profesional', 'Entertainment']
            ],
            [
                'title' => 'Family Gathering',
                'description' => 'Ciptakan momen kebersamaan yang tak terlupakan bersama keluarga tercinta.',
                'features' => ['Venue outdoor/indoor', 'Games seru', 'Catering', 'Dokumentasi']
            ],
            [
                'title' => 'Birthday Party',
                'description' => 'Rayakan hari spesial dengan pesta ulang tahun yang meriah dan berkesan.',
                'features' => ['Dekorasi tematik', 'Kue ulang tahun', 'Entertainment', 'Dokumentasi']
            ]
        ];

        return view('services.index', compact('services'));
    }
}