<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SluggableModel, SortableModel;

    protected $fillable = ['name'];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
