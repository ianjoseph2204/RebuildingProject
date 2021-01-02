<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function create(Request $request){
        $story = new Story([
            'title' => $request->input('title'),
            'writer' => $request->input('writer'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content'),
        ]);

        $story->save();

        return redirect('/add');
    }
}
