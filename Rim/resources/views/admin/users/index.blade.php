@extends('layouts.backend.main')


@section('content')

<div class="content-wrapper">

<section class="content-header">


  <div class="row">
     <div class="col-xs-12">
            <div class="box">

<div class="panel panel-default">

 <div class="panel-heading" ><b>All Users</b></div>

<div class="panel-body">
	

   <table class="table table-hover">
   	  
   	  <thead>
   	  	<th>Image</th>
         <th>Name</th>
   	  	<th>Permissions | Authority</th>
   	  	<th>Delete</th>
   	  </thead>

   	  <tbody>
          
          @if($users->count() > 0)


           @foreach($users as $user)

         <tr> 

            <td><img src="{{ asset('$user->profile->avatar') }}" alt="Image"  width="180px" height="120px" style="border-radius: 50%;" ></td>

            <td>{{ $user->name }}</td>

            <td>
              
                 <span class="glyphicon glyphicon-pencil">
                   @if($user->admin)

             <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove Permissions</a>

                   @else

                   <a href="{{ route('user.admin',['id' => $user->id]) }}" class="btn btn-xs btn-success">Make Admin Permissions</a>

                   @endif
                 </span>
             
           </td>

              <td> 

              @if(Auth::id() !== $user->id)

     <span class="glyphicon glyphicon-trash">

 <a href="{{ route('user.delete',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete || Remove</a>

                 </span>


              @endif
          
               </td>
         </tr>

         @endforeach

         @else

            <tr>
               <th colspan="5" class="text-center"><h2>No Users Here Yet.</h2></th>
            </tr>

          @endif
     

   	  </tbody>

   </table>




</div>
	
  </div></div>
</div>

</div></div>
</section>
</div>


@stop