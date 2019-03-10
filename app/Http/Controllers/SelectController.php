<?php

namespace App\Http\Controllers;

use App\Eloquents\Board;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index(Request $request, $column, $limit = 5)
    {
        $feeds = Board::with('users')->orderBy($column, 'DESC')->take($limit)->get();
        return view('top', ['feeds' => $feeds]);
        // return response()->json($feeds);
    }

    public function top(Request $request)
    {
        $latest = Board::with('users')
            ->orderBy('updated_at', 'DESC')
            ->take(5)->get();

        return view('top', ['latest' => $latest]);
        // return response()->json($latest);
    }
}
