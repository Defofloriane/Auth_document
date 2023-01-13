<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::select('select * from posts where id = ?', [2]);
 
        return view('posts', compact('posts'));
    }
}
