@extends('layouts.layouts')
<style>
 
</style>
@section('title', 'find.blade.php')

@section('content')
<form action="find" method="POST">
@csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="追加">
</form>
@if (@isset($posts))
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
@endif
@endsection