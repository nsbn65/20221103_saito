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
        <form action = "/create" method="post" class="content-add">
          @csrf
          <input type = "hidden" name="_token">          
          <input type = "text" class="input-add" name="content">
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
          <input type = "text" class="input-update" value="1" name="content">
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
    
    @foreach ($posts as $posts)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->name}}</td>
      <td>{{$post->age}}</td>
      <td>{{$post->nationality}}</td>
    </tr>
    @endforeach
  </table>
</div>
@endsection