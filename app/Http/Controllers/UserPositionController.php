<?php

namespace App\Http\Controllers;

use App\UserPosition;
use Illuminate\Http\Request;

class UserPositionController extends Controller
{
    public function list()
    {
        //Join between User and UserPositions
        $userPositions = UserPosition::all();
        return view('add', compact('userPositions'));
    }
}
