<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryCategory extends Model
{
    public static function list()
    {
        return self::all();
    }
}
