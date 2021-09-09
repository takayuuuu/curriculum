<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class TweetController extends Controller
{
    public function add() 
    {
        return view('admin.sns.tweet');
    }

    public function create(Request $request)
    {
       
        $validator = $request->validate([ 
            'body' => ['required', 'string', 'max:255'], 
        ]);
  
        $post = new Post;
        $form = $request->only($post->getFillable());

    
        unset($form['_token']);
  

        $post = $post->create($form);
        $post = $post->save();
  
        return redirect('admin/sns');
    }

    public function index() 
    {   
        $posts = Post::orderBy('created_at', 'desc')->get();

        $posts->load('user');
        
        return view('admin.sns.tweet', compact('posts'));
    }

    public function delete(Request $request)
    {

        $posts =Post::find($request->id);
        $posts->delete();
        return redirect('admin/sns');
    }
}
