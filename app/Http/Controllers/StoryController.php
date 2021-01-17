<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function create(Request $request)
    {
        $story = new Story([
            'title' => $request->input('title'),
            'writer' => $request->input('writer'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content'),
        ]);

        $story->save();

        return redirect('/add');
    }

    public function list()
    {
        $stories = Story::paginate(3);

        return view('story', compact('stories'));
    }

    public function read($id)
    {
        $story = Story::findOrFail($id);

        return view('more', compact('story'));
    }
}
