<?php

namespace App\Models;

use Spatie\EloquentSortable\SortableTrait;

trait SortableModel
{
    use SortableTrait;

    public array $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true
    ];
}
