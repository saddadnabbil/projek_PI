<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Payment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected static ?string $pollingInterval = null;
    protected static bool $isLazy = false;
    
    protected function getStats(): array
    {
        return [
            Stat::make('Total Event', Event::count())
                ->description('Jumlah event yang terdaftar')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('primary'),
            
            Stat::make('Total Gallery', Gallery::count())
                ->description('Jumlah foto di gallery')
                ->descriptionIcon('heroicon-m-photo')
                ->color('success'),
            
            Stat::make('Total Pembayaran', Payment::count())
                ->description('Total semua pembayaran')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('warning'),
                
            Stat::make('Total Pendapatan', 'Rp ' . number_format(Payment::where('status', 'verified')->sum('amount'), 0, ',', '.'))
                ->description('Dari pembayaran terverifikasi')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),
        ];
    }
}