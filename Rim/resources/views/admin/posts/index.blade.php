@extends('layouts.backend.main')

@section('title', 'Post | Index')


@section('content')

<div class="content-wrapper">

<section class="content-header">
  <div class="container">
        <div class="row">
          
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a title="Add New" class="btn btn-success" id="add-button" href="{{ route('post.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                     <div class="pull-right">
                        <a title="Add New" class="btn btn-warning" id="add-button" href="{{ route('posts.trashed') }}"><i class="fa fa-plus-circle"></i> Drasft Posts</a>
                    </div>
                </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table class="table table-bordered table-condesed">
                  <thead>
                      <tr>
                        <th>Actions </th>
                        <th> Title</th>
                        <th>Image</th>
                        <th>Category</th>
                      
                        <th>Date</th>
                        <th>Archive Post</th>
                      </tr>
                  </thead>
                  <tbody>

                       @if($posts->count() > 0)


           @foreach($posts as $post)
                      <tr>
                        <td width="70">
                            <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('post.edit',['id' => $post->id]) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a title="Delete" class="btn btn-xs btn-danger delete-row" href="{{ route('post.delete',['id' => $post->id]) }}">
                                <i class="fa fa-times"></i>
                            </a> 
                        </td>
                        
                        <td>{{ $post->title }}</td>

                        <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="180px" height="120px"></td>
                        <td>{{ $post->category->name }}</td>

                        
                        <td><abbr title="2016/12/04 6:32:00 PM">{{ $post->created_at->diffForHumans() }}</abbr> | <span class="label label-info">Schedule</span></td>

                         <td>
                               <a href="{{ route('post.delete',['id' => $post->id]) }}" class="btn btn-danger">
                <i class="fa fa-plus-circle"></i>Trash | Archive
             </a>
                      </td>


                      </tr>

                     

                                 @endforeach

                                 <nav align='center'>
                                   {{ $posts->links() }}
                                 </nav>

         @else

                
            <tr>
               <th colspan="5" class="text-center"><h2>No Publish Posts Here Yet.</h2></th>
            </tr>
                    
                  </tbody>
                </table>

                
              </div>
              <!-- /.box-body -->
          

       

          @endif
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>

    </div>


<!--
<div class="container">
  <div class="row">

<div class="panel panel-default">

 <div class="panel-heading" ><b>All Published Posts</b></div>

<div class="panel-body">
  

   <table class="table table-hover">
      
      <thead>
        <th>Image</th>
         <th>Title</th>
        <th>Edit</th>
        <th>Trash</th>
      </thead>

      <tbody>
          
          @if($posts->count() > 0)


           @foreach($posts as $post)

         <tr> 

            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="180px" height="120px"></td>

            <td>{{ $post->title }}</td>

            <td>
              <a href="{{ route('post.edit',['id' => $post->id]) }}" class="btn btn-info btn-xs">
                 <span class="glyphicon glyphicon-pencil">Edit</span>
               </a>
           </td>

              <td> 
              <a href="{{ route('post.delete',['id' => $post->id]) }}" class="btn btn-danger btn-xs">
                 <span class="glyphicon glyphicon-trash">Trash | Archive</span>
             </a>
            </td>
         </tr>

         @endforeach

         @else

            <tr>
               <th colspan="5" class="text-center"><h2>No Publish Posts Here Yet.</h2></th>
            </tr>

          @endif
     

      </tbody>

   </table>




</div>
  
</div>
</div></div>

-->
@stop