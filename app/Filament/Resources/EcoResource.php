<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EcoResource\Pages;
use App\Filament\Resources\EcoResource\RelationManagers;
use App\Models\Eco;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EcoResource extends Resource
{
    protected static ?string $model = Eco::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('header')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subHeader')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('achA')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('achB')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('achC')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('banner')
                    ->required()
                    ->image(),
                Forms\Components\Select::make('is_active') // Fixed 'select' to 'Select'
                    ->options([
                        'active' => 'Active',
                        'not_active' => 'Not Active',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('achA'),
                Tables\Columns\TextColumn::make('achB'),
                Tables\Columns\TextColumn::make('achC'),
                Tables\Columns\TextColumn::make('header'),
                Tables\Columns\TextColumn::make('subHeader'),
                Tables\Columns\ImageColumn::make('banner'),
                Tables\Columns\TextColumn::make('is_active')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success', // Fixed 'succes' to 'success'
                        'not_active' => 'danger',
                    }),
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
            'index' => Pages\ListEcos::route('/'),
            'create' => Pages\CreateEco::route('/create'),
            'edit' => Pages\EditEco::route('/{record}/edit'),
        ];
    }
}
