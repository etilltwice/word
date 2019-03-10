<?php

namespace App\Http\Controllers;

use App\Eloquents\Board;
use App\Eloquents\Response;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request, $id)
    {
        $board = Board::with('users')
            ->where('id', $id)->first();

        $feeds = Response::with(['users', 'characters'])
            ->where('board_id', $id)->get();

        return view('board', ['board' => $board]);
        // return response()->json($feeds);
    }
}
