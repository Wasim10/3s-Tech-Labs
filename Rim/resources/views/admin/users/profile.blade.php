@extends('layouts.backend.main')




@section('content')



<div class="content-wrapper">

<section class="content-header">
@include('admin.includes.errors')
<div class="container">
  <div class="row">

<div class="panel panel-default">
	<div class="panel-heading">Edit Youre Profile</div>

	<div class="panel-body"> 

	   <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
	   	   {{ csrf_field() }}




	   	   <div class="form-group">
	   	   	   <label for="name"> User Name</label>
	   	   	   <input type="text" name="name" value="{{ $user->name }}" class="form-control">		
	   	   </div>

	   	      <div class="form-group">
	   	   	   <label for="email"> Email</label>
	   	   	   <input type="email" name="email" value="{{ $user->email }}" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="name"> Password</label>
	   	   	   <input type="password" name="password" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="image"> Upload New Image</label>
	   	   	   <input type="file" name="avatar" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="email"> Facebook Profile</label>
	   	   	   <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="email"> Youtube Profile</label>
	   	   	   <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="about"> About You</label>
	   	   	   <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>	
	   	   </div>




	   	   <div class="form-group">
	   	   	   <div class="text-center">
	   	   	   	<button class="btn btn-success" type="submit">Update Profile</button>
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