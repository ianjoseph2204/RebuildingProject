<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aboutPage()
    {
        //Join between User and UserPositions
        $users = User::with('user_positions')->get();
//        return $users;
        return view('about', compact('users'));
    }

    public function read($id)
    {
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }

    public function create(Request $request)
    {
        $photo = $request->file('user_photo');
        $filename = now()->timestamp . now()->microsecond . '.' . $photo->getClientOriginalExtension();
        $photo->move(base_path('public/assets/profile/'), $filename);

        $user = new User([
            'name' => $request->input('user_name'),
            'position_id' => $request->input('user_position_id'),
            'photo' => $filename,
            'story' => $request->input('user_story')
        ]);

        $user->save();
        return redirect('/add#buttonpostmember');
    }
}
