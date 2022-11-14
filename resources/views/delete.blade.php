@extends('layouts.post')
<style>
  
</style>
@section('title', 'delete.blade.php')

@section('content')
<div class = "container">
  <div class = "card">
    <div class = "top">
      <h1>Todo List</h1>
      <div class = "form-add">
        <form action = "/delete" method="POST">
          @csrf         
          <input type = "text" class="input-add" name="name" value ="{{$form->name}}">
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
      <tr>
        <td>{{$form->created_at}}</td>
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