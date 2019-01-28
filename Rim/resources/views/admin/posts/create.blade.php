@extends('layouts.backend.main')




@section('content')



<div class="content-wrapper">
@include('admin.includes.errors')
<section class="content-header">
<div class="container">
  <div class="row">

<div class="panel panel-default">
	<div class="panel-heading">Create Youre News-Post</div>

	<div class="panel-body"> 

	   <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
	   	   {{ csrf_field() }}

	   	   <div class="form-group">
	   	   	   <label for="title">Title</label>
	   	   	   <input type="text" name="title" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="featured">Image</label>
	   	   	   <input type="file" name="featured" class="form-control">		
	   	   </div>



	   	   <div class="form-group">
	   	   	  <label for="category">Select Category</label>
	   	   	 <select name="category_id" id="category" class="form-control">
	   	   	 	@foreach($categories as $category)
	   	   	 	<option value="{{ $category->id  }}">{{ $category->name }}</option>
	   	   	 	@endforeach
	   	   	 </select>
	   	   </div>


           @if($tags->count() == 0)
             <p>No Tags Available for That Post</p>
           @else
	   	   <div class="form-group">
               <label for="tags">Select Tags</label>
	   	   	  @foreach($tags as $tag)

	   	   	  <div class="checkbox">
	   	   	  	<label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }} </label>
	   	   	  </div>

	   	   	  @endforeach

	   	   </div>

	   	   @endif



	   	   <div class="form-group">
	   	   	   <label for="title">Content</label>
	   	   	   <textarea name="content" id="summernote" cols="5" rows="5" class="form-control"></textarea>	
	   	   </div>

	   	   <div class="form-group">
	   	   	   <div class="text-center">
	   	   	   	<button class="btn btn-success" type="submit">Add Post</button>
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


<!-- For Summernote Editor -->

@section('styles')

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">


@stop


@section('scripts')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


<script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>

@stop