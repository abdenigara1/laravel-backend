<?php

namespace App\Filament\Resources;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

use App\Filament\Resources\ShowcaseResource\Pages;
use App\Filament\Resources\ShowcaseResource\RelationManagers;
use App\Models\Showcase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowcaseResource extends Resource
{
    protected static ?string $model = Showcase::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('link')
                ->required()
                ->maxLength(255),
            Forms\Components\FileUpload::make('show')
                ->required()
                ->image() // Memastikan file yang diupload adalah gambar
                ->directory('showcases'), // Tentukan direktori untuk menyimpan file
            Forms\Components\Select::make('is_active')
                ->options([
                    'active' => 'Active',
                    'not_active' => 'Not Active',
                ])
                ->default('active') // Menentukan nilai default
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('link'),
                ImageColumn::make('show'),
                TextColumn::make('is_active')
                ->badge()
                ->color(fn(string $state): string => match ($state) {
                     'active' => 'succes',
                     'not_active'=>'danger' 
                }),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShowcases::route('/'),
            'create' => Pages\CreateShowcase::route('/create'),
            'edit' => Pages\EditShowcase::route('/{record}/edit'),
        ];
    }
}
