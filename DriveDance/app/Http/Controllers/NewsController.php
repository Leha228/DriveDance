<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {
        $posts = DB::table('posts')->get()->reverse();
        if (count($posts) == 0) 
            return view('news');
        return view('news', ['posts' => $posts]);
    }
}
