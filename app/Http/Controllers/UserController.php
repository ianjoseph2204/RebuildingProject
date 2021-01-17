<?php

namespace App\Http\Controllers;

use App\User;
use App\UserPosition;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        //Join between User and UserPositions
        $users = User::with('user_positions')->paginate(6, ['id', 'name', 'photo', 'story', 'position_id']);
        return view('about', compact('users'));
    }

    public function read($id)
    {
        $user = User::findOrFail($id);
        return view('profile', compact('user'));
    }
}
