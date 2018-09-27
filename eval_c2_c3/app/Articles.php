<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

    protected $fillable = [
        'name',
        'category_id',
        'unit_id',
        'sale_price'
    ];
    
    public $timestamps = false;

}
