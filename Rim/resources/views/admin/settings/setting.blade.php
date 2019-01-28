@extends('layouts.backend.main')




@section('content')

@include('admin.includes.errors')

<div class="content-wrapper">

<section class="content-header">
<div class="container">

  <div class="row">
  	 
      

<div class="panel panel-default">
	<div class="panel-heading">Edit Site Settings </div>

	<div class="panel-body"> 

	   <form action="{{ route('settings.update') }}" method="post">
	   	   {{ csrf_field() }}




	   	   <div class="form-group">
	   	   	   <label for="name"> Site Name</label>
	   	   	   <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="name"> Address</label>
	   	   	   <input type="text" name="address" value="{{ $settings->address }}" class="form-control">		
	   	   </div>

	   	   <div class="form-group">
	   	   	   <label for="name"> Contact No</label>
	   	   	   <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">		
	   	   </div>

	   	      <div class="form-group">
	   	   	   <label for="email">Site Email</label>
	   	   	   <input type="email" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">		
	   	   </div>


	   	   <div class="form-group">
	   	   	   <label for="title">About US</label>
	   	   	   <textarea name="about_us" id="about_us" cols="5"  rows="5" class="form-control">{{ $settings->about_us }}</textarea>	
	   	   </div>




	   	   <div class="form-group">
	   	   	   <div class="text-center">
	   	   	   	<button class="btn btn-success" type="submit">Update Site Settings</button>
	   	   	   </div>		
	   	   </div>

	   </form>

	</div>
</div>


</div>
</div>
</div>

</section>
</div>
@stop