<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Request\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    public function create(PostRequest $request)
    {
        $post = new Todo();
        $form = $request->all();
        Post::create($form);
        unset($form['_token']);
        return redirect('/');
    }

    public function update(PostRequest $request)
    {
        $todo = Post::find($id);
        return view('update',["todo" => $todo]);
        $form = $request->all();
        unset($form['_token']);
        Post::update('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->$id);
        return view('delete', ['form' => $post]);
        return redirect('/');
    }

}