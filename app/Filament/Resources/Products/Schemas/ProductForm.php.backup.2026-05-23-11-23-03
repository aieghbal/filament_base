<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required(),
                TextInput::make('price')
                    ->numeric()
                    ->inputMode('decimal'),
                FileUpload::make('picture')
                    ->image()
                    ->imageEditor(),
            ]);
    }
}
