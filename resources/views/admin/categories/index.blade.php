
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
          <button type="button" class="btn btn-primary">Update</button>
          <button type="button" class="btn btn-danger">Delete</button>
      </div>
   </td>
  </tr>
  @endforeach

</table>
</div>
@endsection
