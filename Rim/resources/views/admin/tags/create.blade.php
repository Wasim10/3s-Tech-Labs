@extends('layouts.backend.main')




@section('content')

@include('admin.includes.errors')

<div class="content-wrapper">

<section class="content-header">

<div class="container">
  <div class="row">

<div class="panel panel-default">
	<div class="panel-heading">Create Youre New Tag</div>

	<div class="panel-body"> 

	   <form action="{{ route('tag.store') }}" method="post">
	   	   {{ csrf_field() }}

	   	   <div class="form-group">
	   	   	   <label for="tag"> Tag Name</label>
	   	   	   <input type="text" name="tag" class="form-control">		
	   	   </div>


	   	   <div class="form-group">
	   	   	   <div class="text-center">
	   	   	   	<button class="btn btn-success" type="submit">Add Tag</button>
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