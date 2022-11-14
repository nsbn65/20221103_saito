@extends('layouts.post')
<style>

</style>
@section('title')

@section('content')

<div class = "container">
  <div class = "card">
    <div class = "top">
      <h1>Todo List</h1>
      <div class = "form-add">
        <form action = "/Post" method="post" class="content-add">
          @csrf         
          <input type = "text" class="input-add" name="name">
          <button class = "button-add" type="submit" value="追加">追加</button>
        </form>
      </div>
    </div>
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>            
      </tr>
      @foreach ($posts as $post)
      <tr>
        <td>{{$post->created_at}}</td>
        <td>{{$post->name}}</td>
        <td>
          <button class = "button-update">更新</button>
        </td>
        <td>
          <button class = "button-delete">削除</button>
        </td> 
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection


