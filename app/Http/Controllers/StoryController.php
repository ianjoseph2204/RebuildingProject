<?php

namespace App\Http\Controllers;

use App\Story;
use App\StoryPicture;
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
        $pictures = array();

        foreach ($request->file('story_pictures') as $file) {

            $filename = now()->timestamp . now()->microsecond . '.' . $file->getClientOriginalExtension();
            $file->move(base_path('public/assets/story/'.$story->id.'/'), $filename);

            array_push($pictures, [
                'name' => $filename
            ]);
        }

        $story->story_pictures()->createMany($pictures);

        return redirect('/add');
    }

    public function list()
    {
        $stories = Story::latest()->paginate(6, ['id', 'title', 'writer', 'created_at']);

        return view('stories', compact('stories'));
    }

    public function read($id)
    {
        $story = Story::findOrFail($id);

        return view('story', compact('story'));
    }
}
