@extends('layouts.backend.main')


@section('content')

<div class="content-wrapper">

<section class="content-header">

<div class="container">
  <div class="row">
     <div class="col-xs-12">
            <div class="box">
<div class="panel panel-default">

  <div class="panel-heading" ><b>All Published Catrgories</b>

     <div class="pull-right">
                        <a title="Add New" class="btn btn-warning" id="add-button" href="{{ route('category.create') }}"><i class="fa fa-plus-circle"></i> Add Category</a>
                    </div>


  </div>

 
<div class="panel-body">
	

   <table class="table table-hover">
   	  
   	  <thead>
   	  	<th>Name</th>
   	  	<th>Edit</th>
   	  	<th>Remove</th>
   	  </thead>

   	  <tbody>

   	   @if($categories->count() > 0)


             @foreach($categories as $category)

         <tr> 
            <td>{{ $category->name }}</td>

            <td> <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">
                 <span class="glyphicon glyphicon-pencil">Edit</span>
            </a> </td>

              <td> <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger">
                 <span class="glyphicon glyphicon-trash">Delete</span>
            </a> </td>
         </tr>

         @endforeach


         @else

            <tr>
               <th colspan="5" class="text-center"><h2>No Publish Categories Here.</h2></th>
            </tr>


         @endif

   	  </tbody>

   </table>




</div>
	
</div>
</div>
</div>
  
</div>
</div></section>


</section>
</div>
@stop