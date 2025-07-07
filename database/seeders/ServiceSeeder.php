<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Engagement Event',
            'description' => 'Wujudkan momen pertunangan yang berkesan dengan dekorasi elegan dan catering premium.',
            'features' => ['Dekorasi mewah', 'Catering premium', 'Dokumentasi profesional', 'Entertainment'],
            'price' => 8000000,
            'image' => 'services/engagement-event.jpg',
            'icon' => 'fas fa-ring',
            'is_active' => true
        ]);

        Service::create([
            'name' => 'Family Gathering',
            'description' => 'Ciptakan momen kebersamaan yang tak terlupakan bersama keluarga tercinta.',
            'features' => ['Venue outdoor/indoor', 'Games seru', 'Catering', 'Dokumentasi'],
            'price' => 5000000,
            'image' => 'services/family-gathering.jpg',
            'icon' => 'fas fa-users',
            'is_active' => true
        ]);

        Service::create([
            'name' => 'Birthday Party',
            'description' => 'Rayakan hari spesial dengan pesta ulang tahun yang meriah dan berkesan.',
            'features' => ['Dekorasi tematik', 'Kue ulang tahun', 'Entertainment', 'Dokumentasi'],
            'price' => 5000000,
            'image' => 'services/birthday-party.jpg',
            'icon' => 'fas fa-birthday-cake',
            'is_active' => true
        ]);
    }
}
