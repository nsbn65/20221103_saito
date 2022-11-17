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
        $todo = Post::find($request->id);
        $form = $request->all();
        Post::where('id', $id)->update($todo);
        return view('update',["todo" => $todo]);
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->$id);
        return view('delete', ['form' => $post]);
        return redirect('/');
    }

}