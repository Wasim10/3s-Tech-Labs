@extends('layouts.backend.main')




@section('content')

@include('admin.includes.errors')

<div class="content-wrapper">

<section class="content-header">



<section class="content-header">

<div class="container">
  <div class="row">

<div class="panel panel-default">
	<div class="panel-heading">Edit Tag: {{ $tag->tag }}</div>

	<div class="panel-body"> 

	   <form action="{{ route('tag.update',['id' => $tag->id]) }}" method="post">
	   	   {{ csrf_field() }}

	   	   <div class="form-group">
	   	   	   <label for="name"> Tag Name</label>
	   	   	   <input type="text"  name="tag" value="{{ $tag->tag }}" class="form-control">		
	   	   </div>


	   	   <div class="form-group">
	   	   	   <div class="text-center">
	   	   	   	<button class="btn btn-success" type="submit">Update Tag</button>
	   	   	   </div>		
	   	   </div>

	   </form>

	</div>
</div>

</div>


</section>
</div>

@stop