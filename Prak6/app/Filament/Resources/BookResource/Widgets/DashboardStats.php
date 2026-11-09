<?php

namespace App\Filament\Resources\BookResource\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Buku', Book::count())
                ->description('Jumlah seluruh buku')
                ->icon('heroicon-o-book-open'),

            Stat::make('Total Penulis', Author::count())
                ->description('Jumlah seluruh penulis')
                ->icon('heroicon-o-users'),

            Stat::make(
                'Buku Tersedia',
                Book::where('status', 'available')->count()
            )->description('Buku yang bisa dipinjam'),

            Stat::make(
                'Buku Dipinjam',
                Book::where('status', 'borrowed')->count()
            )->description('Buku yang sedang dipinjam'),
        ];
    }
}