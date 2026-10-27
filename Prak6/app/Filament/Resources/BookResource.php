<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Models\Book;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Buku';

    protected static ?string $modelLabel = 'Buku';

    protected static ?string $pluralModelLabel = 'Buku';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('isbn')
                ->label('ISBN')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            TextInput::make('title')
                ->label('Judul Buku')
                ->required()
                ->maxLength(255),

            Select::make('author_id')
                ->label('Penulis')
                ->relationship('author', 'name')
                ->searchable()
                ->preload()
                ->required(),

            TextInput::make('publisher')
                ->label('Penerbit')
                ->maxLength(255),

            TextInput::make('year')
                ->label('Tahun Terbit')
                ->numeric()
                ->minValue(1000)
                ->maxValue(2100),

            Textarea::make('description')
                ->label('Deskripsi')
                ->rows(4)
                ->columnSpanFull(),

            FileUpload::make('cover')
                ->label('Sampul Buku')
                ->image()
                ->directory('covers')
                ->imagePreviewHeight('150'),

            Select::make('status')
                ->label('Status')
                ->options([
                    'available' => 'Tersedia',
                    'borrowed' => 'Dipinjam',
                ])
                ->default('available')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('isbn')
                    ->label('ISBN')
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Judul Buku')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('author.name')
                    ->label('Penulis')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('publisher')
                    ->label('Penerbit')
                    ->searchable(),

                TextColumn::make('year')
                    ->label('Tahun Terbit')
                    ->sortable(),

                ImageColumn::make('cover')
                    ->label('Sampul'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(
                        fn (string $state): string => match ($state) {
                            'available' => 'Tersedia',
                            'borrowed' => 'Dipinjam',
                            default => $state,
                        }
                    )
                    ->color(fn (string $state): string => match ($state) {
                        'available' => 'success',
                        'borrowed' => 'warning',
                        default => 'gray',
                    }),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'available' => 'Tersedia',
                        'borrowed' => 'Dipinjam',
                    ]),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'view' => Pages\ViewBook::route('/{record}'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}