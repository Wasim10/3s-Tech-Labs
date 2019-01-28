<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/backend/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/backend/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  
  <link rel="stylesheet" href="/css/site.css">






   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/css/toastr.css') }}" >

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 @include('layouts.backend.navbar')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.backend.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
 


</div>
<!-- Modal -->
<div class="modal fade" id="mModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
           @yield("todoForm")
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                
            </div>
        </div>
    </div>
</div>


 
    

    <script>

       @if(Session::has('sucess'))
         toastr.success("{{Session::get('success')}}");
       @endif  

       @if(Session::has('info'))
         toastr.info("{{Session::get('info')}}");
       @endif      

    </script>

    <!-- for Summernote EDitor -->

    @yield('scripts')

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script type="text/javascript"  src="{{asset('js/toastr.js')}}" ></script>
<script src="/backend/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/backend/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/backend/js/app.min.js"></script>



   <script>
   $(function(){

       var modal = "#mModal";
       $('.create-js').click(function(e) {
           e.preventDefault();

           var mTitle = $(this).data("title");
           
            $.ajax({
                 url:'/admin/todos/create',
                 method:"GET"
             }).done(function(res){
                 $(modal).children().find(".modal-title").text(mTitle);
                 $(modal).children().find(".modal-body").html(res);

                 $(modal).modal();
            });
       });

       $('.update-js').click(function(e) {
           e.preventDefault();
           var mTitle = $(this).data("title");
           var mUrl = $(this).attr("href");

         $.ajax({
            url:mUrl,
            method:"GET"
        }).done(function(res){
            $(modal).children().find(".modal-title").text(mTitle);
            $(modal).children().find(".modal-body").html(res);

           $(modal).modal();

        });

       });

       $(".dragable-item-js").on("dragstart",function(ev){
             ev.originalEvent.dataTransfer.setData("text", ev.originalEvent.target.id);
           
       });
       $(".board").on("ondragover",function(ev){
           ev.preventDefault();
       });
       
       $(".board").on("drop",function(ev){
            ev.preventDefault();
            
            var data = ev.originalEvent.dataTransfer.getData("text");
            ev.originalEvent.target.appendChild(document.getElementById(data));
       });

    //    function drag(ev) {
    //       ev.dataTransfer.setData("text", ev.target.id);
    //    }
   });


       /** Drag and  */


    // function GetItemTempelate(id, title) {
    //   return ``;
    // }

    // function allowDrop(ev) {
    //   ev.preventDefault();
    // }

    // function drag(ev) {
    //   ev.dataTransfer.setData("text", ev.target.id);
    // }

    // function drop(ev) {
    //   ev.preventDefault();
    //   var data = ev.dataTransfer.getData("text");
    //   ev.target.appendChild(document.getElementById(data));

    // }




    </script>

</body>
</html>
