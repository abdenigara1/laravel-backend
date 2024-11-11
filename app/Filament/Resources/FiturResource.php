<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FiturResource\Pages;
use App\Filament\Resources\FiturResource\RelationManagers;
use App\Models\Fitur;
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

class FiturResource extends Resource
{
    protected static ?string $model = Fitur::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->schema([ 
                TextInput::make('header')
                ->required()
                ->maxLength(255),
            ]),



            Placeholder::make('FITUR 1')
            ->content('Ini adalah Section A, berisi logo dan informasi tambahan.'),
            Card::make()
                ->schema([
                    Grid::make(2)
                        ->schema([
                            FileUpload::make('logo')
                                ->required(),
                            TextInput::make('judul')
                                ->required()
                                ->maxLength(10),
                            TextInput::make('deskripsi')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('link')
                                ->required()
                                ->maxLength(255),
                        ]),
                ])
                ->label('Section A'),

      
            Placeholder::make('FITUR 2')
            ->content('Ini adalah Section B, berisi logo dan informasi tambahan.'),
            Card::make()
            

                ->schema([
                    Grid::make(2)
                        ->schema([
                            FileUpload::make('logoA')
                                ->required(),
                            TextInput::make('judulA')
                                ->required()
                                ->maxLength(10),
                            TextInput::make('deskripsiA')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('linkA')
                                ->required()
                                ->maxLength(255),
                        ]),
                ])
                ->label('Section B'),


            Placeholder::make('FITUR 3')
            ->content('Ini adalah Section C, berisi logo dan informasi tambahan.'),
            Card::make()
                ->schema([
                    Grid::make(2)
                        ->schema([
                            FileUpload::make('logoB')
                                ->required(),
                            TextInput::make('judulB')
                                ->required()
                                ->maxLength(10),
                            TextInput::make('deskripsiB')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('linkB')
                                ->required()
                                ->maxLength(255),
                        ]),
                ])
                ->label('Section C'),

            Placeholder::make('FITUR 4')
            ->content('Ini adalah Section C, berisi logo dan informasi tambahan.'),
            Card::make()
                ->schema([
                    Grid::make(2)
                        ->schema([
                            FileUpload::make('logoC')
                                ->required(),
                            TextInput::make('judulC')
                                ->required()
                                ->maxLength(10),
                            TextInput::make('deskripsiC')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('linkC')
                                ->required()
                                ->maxLength(255),
                        ]),
                ])
                ->label('Section D'),

            // Status
            Select::make('is_active')
                ->options([
                    'active' => 'Active',
                    'not_active' => 'Not Active'
                ])
        ]);

    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('header'),


            Tables\Columns\ImageColumn::make('logo'),
            Tables\Columns\TextColumn::make('judul'),
            Tables\Columns\TextColumn::make('deskripsi'),
            Tables\Columns\TextColumn::make('link'),

            Tables\Columns\ImageColumn::make('logoA'),
            Tables\Columns\TextColumn::make('judulA'),
            Tables\Columns\TextColumn::make('deskripsiA'),
            Tables\Columns\TextColumn::make('linkA'),

            Tables\Columns\ImageColumn::make('logoB'),
            Tables\Columns\TextColumn::make('judulB'),
            Tables\Columns\TextColumn::make('deskripsiB'),
            Tables\Columns\TextColumn::make('linkB'),

            Tables\Columns\ImageColumn::make('logoC'),
            Tables\Columns\TextColumn::make('judulC'),
            Tables\Columns\TextColumn::make('deskripsiC'),
            Tables\Columns\TextColumn::make('linkC'),


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
            'index' => Pages\ListFiturs::route('/'),
            'create' => Pages\CreateFitur::route('/create'),
            'edit' => Pages\EditFitur::route('/{record}/edit'),
        ];
    }
}
