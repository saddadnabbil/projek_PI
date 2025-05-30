<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Pages\Page;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Actions;

class ViewEvent extends ViewRecord
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\Section::make()
    //                 ->schema([
    //                     Forms\Components\TextInput::make('title')
    //                         ->label('Judul Event')
    //                         ->disabled()
    //                         ->columnSpanFull(),
    //                     Forms\Components\Select::make('category')
    //                         ->label('Kategori')
    //                         ->options([
    //                             'engagement' => 'Engagement',
    //                             'gathering' => 'Gathering',
    //                             'birthday' => 'Birthday Party'
    //                         ])
    //                         ->disabled()
    //                         ->columnSpan(6),
    //                     Forms\Components\FileUpload::make('image')
    //                         ->label('Gambar')
    //                         ->image()
    //                         ->disk('public')
    //                         ->disabled()
    //                         ->columnSpan(6),
    //                     Forms\Components\DatePicker::make('event_date')
    //                         ->label('Tanggal Event')
    //                         ->disabled()
    //                         ->columnSpan(6),
    //                     Forms\Components\TextInput::make('location')
    //                         ->label('Lokasi')
    //                         ->disabled()
    //                         ->columnSpan(6),
    //                     Forms\Components\RichEditor::make('description')
    //                         ->label('Deskripsi')
    //                         ->disabled()
    //                         ->columnSpanFull(),
    //                     Forms\Components\Select::make('status')
    //                         ->label('Status')
    //                         ->options([
    //                             'upcoming' => 'Akan Datang',
    //                             'ongoing' => 'Sedang Berlangsung',
    //                             'completed' => 'Selesai'
    //                         ])
    //                         ->disabled()
    //                         ->columnSpan(6)
    //                 ])
    //                 ->columns(12)
    //         ]);
    // }
}