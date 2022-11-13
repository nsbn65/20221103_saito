@extends('layouts.post')
<style>
  
</style>
@section('title', 'update.blade.php')

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
        <form action = "/update" method="post">
          @csrf         
          <input type = "text" class="input-add" name="name" value ="{{$form->name}}">
          <input class = "button-add" type="submit" value="追加">
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
      <tr>
        <td></td>
        <td>
          <input type = "text" class="input-update" value="{{$form->name}}" name="name">
        </td>
        <td>
          <input class = "button-update" type="submit" value="更新">
        </td>
        <td>
          <input class = "button-delete" type="submit" value="削除">
        </td> 
      </tr>
    </table>
  </div>
</div>
@endsection