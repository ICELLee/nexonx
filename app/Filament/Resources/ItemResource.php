<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('item_id')
                    ->label('Item ID')
                    ->required()
                    ->numeric(),

                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),

                Forms\Components\TagsInput::make('tags')
                    ->label('Tags (z. B. VIP, GIRL, MSP2)')
                    ->separator(',')
                    ->suggestions(['VIP', 'BOY', 'GIRL', 'MSP1', 'MSP2']),

                Forms\Components\TextInput::make('colors')
                    ->label('Farben (#HEX,#HEX)')
                    ->placeholder('#FFA3DF,#259181'),

                Forms\Components\TextInput::make('graphic_identifier')
                    ->label('Graphic Identifier'),

                Forms\Components\Toggle::make('visible')
                    ->label('Sichtbar')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('item_id')
                    ->label('Item ID')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TagsColumn::make('tags')
                    ->label('Tags'),

                Tables\Columns\TextColumn::make('colors')
                    ->label('Farben'),

                Tables\Columns\TextColumn::make('graphic_identifier')
                    ->label('Graphic'),

                Tables\Columns\IconColumn::make('visible')
                    ->label('Sichtbar')
                    ->boolean(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
            'import' => Pages\ImportItems::route('/import'),
        ];
    }

}
