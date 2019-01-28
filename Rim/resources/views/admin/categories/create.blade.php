@extends('layouts.backend.main')




@section('content')




<div class="content-wrapper">

<section class="content-header">
@include('admin.includes.errors')
<div class="container">
  <div class="row">
  	
<div class="panel panel-default">
	<div class="panel-heading">Create Youre News-Category</div>

	<div class="panel-body"> 

	   <form action="{{ route('category.store') }}" method="post">
	   	   {{ csrf_field() }}

	   	   <div class="form-group">
	   	   	   <label for="name">Name</label>
	   	   	   <input type="text" name="name" class="form-control">		
	   	   </div>


	   	   <div class="form-group">
	   	   	   <div class="text-center">
	   	   	   	<button class="btn btn-success" type="submit">Add Category</button>
	   	   	   </div>		
	   	   </div>

	   </form>

	</div>
</div>

	</div>
</div>

</section>
</div>
@stop