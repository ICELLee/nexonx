<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ItemResource extends Resource
{
    protected static ?string \$model = Item::class;

    protected static ?string \$navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form \$form): Form
    {
        return \$form->schema([
            Forms\Components\TextInput::make('item_id')
                ->numeric()
                ->required()
                ->unique(ignoreRecord: true),
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\TagsInput::make('tags')
                ->placeholder('z. B. VIP, GIRL, MSP1'),
            Forms\Components\TextInput::make('colors')
                ->placeholder('#FFA3DF,#259181'),
            Forms\Components\TextInput::make('graphic_identifier')
                ->label('Graphic Identifier'),
            Forms\Components\FileUpload::make('image_path')
                ->label('Item Bild')
                ->image()
                ->directory('items'),
            Forms\Components\Toggle::make('visible')
                ->label('Auf der Website anzeigen')
                ->default(true),
        ]);
    }

    public static function table(Table \$table): Table
    {
        return \$table
            ->columns([
                Tables\Columns\TextColumn::make('item_id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TagsColumn::make('tags'),
                Tables\Columns\TextColumn::make('colors')->label('Farben'),
                Tables\Columns\IconColumn::make('visible')->boolean(),
                Tables\Columns\ImageColumn::make('image_path')->label('Bild')->circular(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('tags')
                    ->multiple()
                    ->options([
                        'VIP' => 'VIP',
                        'GIRL' => 'Girl',
                        'BOY' => 'Boy',
                        'MSP1' => 'MSP1',
                        'MSP2' => 'MSP2',
                    ]),
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
