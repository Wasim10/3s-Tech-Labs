@extends('layouts.backend.main')


@section('content')





<div class="content-wrapper">

<section class="content-header">


<div class="container">
  <div class="row">

  <div class="panel-heading" ><b></b>
    <div class="pull-left">
                        <a title="Add New" class="btn btn-warning create-js" id="add-button " data-title="Create Todo" href="{{ route('todo.create') }}"><i class="fa fa-plus-circle"></i> Add Todo</a>
      </div>
  </div>

  <hr/>
      
  <div id="div1" class="board todo" id="rcorners1" >
    <h3 class="heading"><strong><u>Todo's</u></strong></h3>
    @foreach($todos as $todo)

    <p class="item dragable-item-js" draggable="true"  data-tid="{{$todo->id}}" id="{{$todo->id}}">
  
    <a href="{{ route('todo.edit', ['id'=>$todo->id]) }}" title="Edit" class="btn btn-xs btn-default edit-row update-js" data-title="Update Todo" >
      {{ $todo->name }}

    </a>
  </p>
     
       
    

    <!--
    <nbsp/>

    <a href="{{ route('todo.delete', ['id'=>$todo->id]) }}" title="Delete"> - </a>

<a href="{{ route('todo.update', ['id'=>$todo->id]) }}" title="Edit" class="btn btn-xs btn-default edit-row" id="bo">
<i class="fa fa-pencil">E</i> </a>


                          
                        
<nbsp/>

@if(!$todo->completed)

    <a href="{{ route('todos.completed',['id' => $todo->id]) }}" id="bo">Mark as Complete!  </a>

    @else

    <text id="boo">    Complete Awsume</text>

@endif
-->


@endforeach
  

  </div>

  <div id="div2" class="board progress" >
      <h3 class="heading"><strong><u>Progress</u></strong></h3>

  </div>
  
  <div id="div3" class="board bugs" >
      <h3 class="heading"><strong><u>Bugs</u></strong></h3>

  </div>
  <div id="div4" class="board completed" >
      <h3 class="heading"><strong><u>Completed</u></strong></h3>

  </div>



<!-- oo -->





</section>
</div>



</div></div>




<!-- So -->


@stop