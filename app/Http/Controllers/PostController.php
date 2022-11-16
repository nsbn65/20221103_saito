<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    public function create(PostRequest $request)
    {
        $form = $request->all();
        Post::create($form);
        return redirect('/');
    }

    public function update($id, PostRequest $request)
    {
        $todo = Post::find($id);
        return view('update',["todo" => $todo]);
        $form = $request->all();
        Post::update('id', $request->id)->update($form);
        unset($form['_token']);
        return redirect('/update');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->$id);
        return view('delete', ['form' => $post]);
        return redirect('/');
    }

}