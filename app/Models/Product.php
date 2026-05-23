<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['id', 'title', 'description', 'price', 'created_at', 'picture', 'updated_at', 'deleted_at'])]
class Product extends Model
{
    use SoftDeletes;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'picture' => 'array',
        ];
    }
}
