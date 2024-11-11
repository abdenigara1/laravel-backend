<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('icon')
                ->required()
                ->image(),
                Forms\Components\TextInput::make('ach')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('header')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('subHeader')
                ->required()
                ->maxLength(255),
                Forms\Components\FileUpload::make('banner')
                ->required()
                ->image(),
                Forms\Components\select::make('is_active')
                ->options([
                    'active'=>'Active',
                    'not_active' =>'Not Active'
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon'),
                Tables\Columns\TextColumn::make('ach'),
                Tables\Columns\TextColumn::make('header'),
                Tables\Columns\TextColumn::make('subHeader'),
                Tables\Columns\ImageColumn::make('banner'),
                Tables\Columns\TextColumn::make('is_active')
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
