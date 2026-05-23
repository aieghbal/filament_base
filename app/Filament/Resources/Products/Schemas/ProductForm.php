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
                    ->label(__('filament/admin/product_resource.title'))
                    ->required(),
                Textarea::make('description')
                    ->label(__('filament/admin/product_resource.description'))
                    ->required(),
                TextInput::make('price')
                    ->label(__('filament/admin/product_resource.price'))
                    ->numeric()
                    ->inputMode('decimal'),
                FileUpload::make('picture')
                    ->label(__('filament/admin/product_resource.picture'))
                    ->image()
                    ->imageEditor(),
            ]);
    }
}
