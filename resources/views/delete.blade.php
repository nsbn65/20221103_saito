@extends('layouts.default')
<style>
  
</style>
@section('title', 'delete.blade.php')

@section('content')
<form action="/delete" method="POST">
  <table>
  @csrf
    <tr>
      <th>id</th>
      <td><input type="text" name="id" value="{{$form->id}}"></td>
    </tr>
    <tr>
      <th>name</th>
      <td><input type="text" name="name" value="{{$form->name}}"></td>
    </tr>
    <tr>
      <th>age</th>
      <td><input type="text" name="age" value="{{$form->age}}"></td>
    </tr>
    <tr>
      <th>nationality</th>
      <td><input type="text" name="nationality" value="{{$form->nationality}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
@endsection