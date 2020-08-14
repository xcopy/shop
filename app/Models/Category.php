<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;

class Category extends Model implements Sortable
{
    use SluggableModel, SortableModel;

    protected $fillable = ['name'];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
