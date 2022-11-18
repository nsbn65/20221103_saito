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
        $form = $request->all();
        post::find($request->id)->update($form);
        return redirect('/');
    }

    public function delete($id)
    {
        $form = Post::find($id);
        $form->delete();
        return redirect('/');
    }

}