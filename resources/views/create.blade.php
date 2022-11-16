@extends('layouts.post')
<style>
  
</style>
@section('title', 'create.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<div class = "container">
  <div class = "card">
    <div class = "top">
      <h1>Todo List</h1>
      <div class = "form-add">
        <form action = "/create" method="POST">
          @csrf         
          <input type = "text" class="input-add" name="name" >
          <button class = "button-add" type="submit" value="追加">追加</button>
        </form>
      </div>
    </div>
  </div>
  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>            
    </tr>
    <tr>
      <td>{{$form->created_at}}</td>
      <form action = "/update" method="POST">
        @csrf
        <td>
          <input type = "text" class="input-update" value="{{$form->id}}" name="name">
        </td>
        <td>
          <button class = "button-update" type="submit" value="更新">更新</button>
        </td>
      </form>
      <form action = "/delete" method = "POST">
        @csrf
        <td>
          <button class = "button-delete" type="submit" value="削除">削除</button>
        </td>
      </form>
    </tr>
  </table>
</div>
@endsection