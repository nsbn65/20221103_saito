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

    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $post = Post::find($request->input);
        $param = [
            'post' => $post,
            'input' => $request->input
        ];
        return view('find', $param);
    }

    public function add()
    {
    return view('add');
    }

    public function create(PostRequest $request)
    {
        $this->validate($request, Post::$rules);
        $form = $request->all();
        Post::create($form);
        unset($form['_token']);
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $post = Post::find($request->id);
        return view('edit', ['form' => $post]);
    }

    public function update(PostRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Post::where('id', $request->id)->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        return view('delete', ['form' => $post]);
    }

    public function remove(Request $request)
    {
        Post::find($request->id)->delete();
        return redirect('/');
    }
}