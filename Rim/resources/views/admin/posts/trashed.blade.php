@extends('layouts.backend.main')


@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container">
  <div class="row">

<div class="panel panel-default">

 <div class="panel-heading" ><b>All Trashed Posts</b></div>

<div class="panel-body">
	

   <table class="table table-hover">
   	  
   	  <thead>
   	  	<th>Image</th>
         <th>Title</th>
         <th>Category</th>
   	  	<th>Edit</th>
   	  	<th>Restore</th>
   	  </thead>

   	  <tbody>

   	     @if($posts->count() > 0)

                @foreach($posts as $post)

         <tr> 

            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="180px" height="120px"></td>

            <td>{{ $post->title }}</td>

            <td> <b> {!! $post->category->name !!}  </b> </td>


              <td> 
              <a href="{{ route('post.restore',['id' => $post->id]) }}" class="btn btn-success btn-xs">
                 <span class="glyphicon glyphicon-pencil">Restore</span>
             </a>
            </td>


              <td> 
              <a href="{{ route('post.kill',['id' => $post->id]) }}" class="btn btn-danger btn-xs">
                 <span class="glyphicon glyphicon-trash">Delete</span>
             </a>
            </td>


         </tr>

         @endforeach

         @else

            <tr>
               <th colspan="5" class="text-center"><h2>No Trash Posts Yet.</h2></th>
            </tr>
     
         @endif

   	  </tbody>

   </table>




</div>
	
</div>

</div>
</div>

</section>
</div>



@stop