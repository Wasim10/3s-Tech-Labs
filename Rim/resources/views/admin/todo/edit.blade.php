
<form action="{{route('todo.update',['id'=> $todo->id])}}" method="post">
      {{ csrf_field() }}
         <div class="pull-right">
         <a title="Add New" class="btn btn-info" id="add-button"><i class="fa fa-plus-circle"></i>Created:{{ $todo->created_at->diffForHumans()  }}</a>
       </div>
       <br>

      <label for="content">Todo </label>
   <input type="text" class="form-control input-lg" name="name" value="{{$todo->name}}" placeholder="Create Your'e New Todo! " >

   <br>
   	   <div class="form-group">
	   	   	   <label for="content">Content</label>
	   	   	   <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $todo->content }}</textarea>	
	   	   </div>

	   	    <div class="form-group">
             <div class="text-center">
              <button class="btn btn-success" type="submit">Update Todo</button>
             </div>  

            
         </div>
        
        
       

                        <a title="Add New" class="btn btn-danger" id="add-button" href="{{ route('todo.delete',['id'=>$todo->id]) }}"><i class="fa fa-plus-circle"></i> Delete</a>
                   
</form>


