<?php

namespace App\Filament\Resources\AdminResource\Pages;

use App\Filament\Resources\AdminResource;
use Filament\Resources\Pages\Page;

class dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'pages.dashboard.index'; // <- deine Blade-Datei
    protected static ?string $title = 'Dashboard';
}
