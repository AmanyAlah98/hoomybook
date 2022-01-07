@extends('layouts.app')

@section('content')
<div class="container">
  <div class="containe text-center">
	 <h2>Update Category</h2>
  </div>
<form action="/categories/create" method="POST">
	@csrf
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="name">
  </div>


  <button type="submit" class="btn">Create</button>
</form>
</div>
@endsection