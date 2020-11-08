<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //getting all posts
    public function index()
    {
      $posts = Post::with('user')->get();
      return response()->json($posts);
    }

    //add new post to post to the database
    public function addPosts(Request $request,$user_email)
    {
        $user_id =  DB::table('users')->where('email',$user_email)->get();
        $post = new Post([
            'link' => $request->get('link'),
            'description' => $request->get('description'),
            'user_id' =>$user_id[0]->id,
        ]);
        $post->save();
        return response()->json($post);
    }

}
