<?php

namespace App\Http\Controllers;

use App\StoryCategory;
use App\User;
use App\UserPosition;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function page()
    {
        $story_categories = StoryCategory::list();
        $user_positions = UserPosition::list();
        return view('add', compact('story_categories', 'user_positions'));
    }

    public function insert_article()
    {

    }
}
