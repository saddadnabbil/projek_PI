<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Payment;
use App\Filament\Widgets\DashboardStats;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $title = 'Dashboard';
    protected static string $routeName = 'filament.admin.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            DashboardStats::class,
        ];
    }
}