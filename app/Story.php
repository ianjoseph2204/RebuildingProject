<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title',
        'writer',
        'category_id',
        'content'
    ];
}
