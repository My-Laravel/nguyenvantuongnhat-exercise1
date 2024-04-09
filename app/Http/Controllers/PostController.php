<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getPost(){
        $post = DB::table('posts')->find(4);
        return $post;
    }
    public function getAllPosts(){
        $posts = DB::table('posts')->get();
        return view('post',compact('posts'));
    }
}
