@extends('layouts.backend.main')


@section('content')

<div class="content-wrapper">

<section class="content-header">

<div class="container">
  <div class="row">

 
            <div class="box">
<div class="panel panel-default">

  <div class="panel-heading" ><b>All Published Tags</b>
      <div class="pull-right">
                        <a title="Add New" class="btn btn-warning" id="add-button" href="{{ route('tag.create') }}"><i class="fa fa-plus-circle"></i> Add Tag</a>
                    </div>
  </div>

<div class="panel-body">
	

   <table class="table table-hover">
   	  
   	  <thead>
   	  	<th>Tag Name </th>
   	  	<th>Edit</th>
   	  	<th>Remove</th>
   	  </thead>

   	  <tbody>

   	   @if($tags->count() > 0)


             @foreach($tags as $tag)

         <tr> 
            <td>{{ $tag->tag }}</td>

            <td> <a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info">
                 <span class="glyphicon glyphicon-pencil">Edit</span>
            </a> </td>

              <td> <a href="{{ route('tag.delete', ['id' => $tag->id ]) }}" class="btn btn-xs btn-danger">
                 <span class="glyphicon glyphicon-trash">Delete</span>
            </a> </td>
         </tr>

         @endforeach


         @else

            <tr>
               <th colspan="5" class="text-center"><h2>No Publish Tags yet.</h2></th>
            </tr>


         @endif

   	  </tbody>

   </table>




</div>
	
  </div></div>
</div>


</div></div>

</section></div>

@stop