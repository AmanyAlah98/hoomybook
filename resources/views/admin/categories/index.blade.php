
@extends('layouts.app')

@section('content')
<div class="container">
<div class="container text-center">
  <h1> All Categories </h1>
 </div> 
<table>
  <tr>
    <th>#ID</th>
    <th>name</th>
    <th>controller</th>
  </tr>
  @foreach($categories as $category)
  <tr>
    <td>{{$category->id}}</td>
    <td>{{$category->name}}</td>
    <td>
      <div class="btn-group">
         <a class="btn btn-primary" href="/categories/edit/{{$category->id}}">Update</a>
         <a class="btn btn-danger" href="/categories/delete/{{$category->id}}">Delete</a>
      </div>
   </td>
  </tr>
  @endforeach

</table>
</div>
@endsection
