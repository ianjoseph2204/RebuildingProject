<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Story extends Model
{
    protected $fillable = [
        'title',
        'writer',
        'category_id',
        'content'
    ];

    public function story_pictures(): HasMany
    {
        return $this->hasMany(StoryPicture::class, 'story_id', 'id');
    }
}
