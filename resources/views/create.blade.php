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
<form action="/create" method="post">
  <table>
  @csrf
    <tr>
      <th>作成日</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>タスク名</th>
      <td><input type="text" name="age"></td>
    </tr>
    <tr>
      <th>更新</th>
      <td><button>更新</button></td>
    </tr>
    <tr>
      <th>削除</th>
      <td><button>削除</button></td>
    </tr>
  </table>
</form>
@endsection