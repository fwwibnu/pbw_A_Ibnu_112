<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\ChartWidget;

class BookStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Buku Tersedia Dan Dipinjam';

    protected static ?string $maxHeight = '300px';

    protected int | string | array $columnSpan = 'full';

    public function getDescription(): ?string
    {
        return 'Total ' . Book::count() . ' buku dari ' . Author::count() . ' penulis';
    }

    protected function getData(): array
    {
        $tersedia = Book::where('status', 'available')->count();
        $dipinjam = Book::where('status', 'borrowed')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Buku',
                    'data' => [$tersedia, $dipinjam],
                    'backgroundColor' => ['#22c55e', '#f59e0b'],
                ],
            ],
            'labels' => ['Tersedia', 'Dipinjam'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}