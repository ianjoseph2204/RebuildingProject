<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StoryPicture extends Model
{
    protected $table = 'story_pictures';

    protected $fillable = [
        'story_id',
        'name'
    ];

    public function story(): BelongsTo
    {
        return $this->belongsTo(Story::class, 'story_id');
    }
}
