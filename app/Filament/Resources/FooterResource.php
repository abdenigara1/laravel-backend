<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Models\footer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class FooterResource extends Resource
{
    protected static ?string $model = footer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Placeholder::make('IKON dan '),
            Card::make()
                ->schema([
                    Grid::make(2)
                        ->schema([
                            FileUpload::make('icon'),
                            TextInput::make('text'),
                            TextInput::make('link'),
                            select::make('is_active')
                            ->options([
                                'active'=>'Active',
                                'not_active' =>'Not Active'
                            ]),
                        ]),

                ]),

        ]);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon'),
                Tables\Columns\TextColumn::make('text'),
                Tables\Columns\TextColumn::make('link'),
                Tables\Columns\TextColumn::make('is_active')
                ->badge()
                ->color(fn(string $state): string => match ($state) {
                     'active' => 'succes',
                     'not_active'=>'danger' }),
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
