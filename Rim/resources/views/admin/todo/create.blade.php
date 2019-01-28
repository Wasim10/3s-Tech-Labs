



     <form action="{{ route('todo.store') }}" method="post">
         {{ csrf_field() }}

         <div class="form-group">
             <label for="name">Name</label>
             <input type="text" name="name" class="form-control" required="required">   
         </div>

           <div class="form-group">
             <label for="title">Content</label>
             <textarea name="content" id="summernote" cols="5" rows="5" class="form-control"></textarea>  
         </div>


         <div class="form-group">
             <div class="text-center">
              <button class="btn btn-success" type="submit">Add Todo</button>
             </div>   
         </div>

     </form>
