<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SluggableModel, SortableModel;

    protected $fillable = [
        'name',
        'title',
        'description',
        'in_stock',
        'price'
    ];

    protected $casts = [
        'in_stock' => 'boolean',
        'price' => 'double'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
