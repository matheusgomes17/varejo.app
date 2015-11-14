<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'description',
        'category_id',
        'category_parent_id'
    ];

    protected $table = 'products';
}
