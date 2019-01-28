<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/backend/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{ url('/admin/home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

         @if(Auth::check())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('posts') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="{{ route('post.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="{{ route('posts.trashed') }}"><i class="fa fa-circle-o"></i> Draft Posts</a></li>
          </ul>
        </li>

        

         <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('categories') }}"><i class="fa fa-circle-o"></i> All Categories</a></li>
            <li><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>

            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span> Kanban Board</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('todos') }}"><i class="fa fa-circle-o"></i>Todos</a></li>
         

            
          </ul>
        </li>

             @if(Auth::user()->admin)
          <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Manage Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

         

          <ul class="treeview-menu">
            <li><a  href="{{ route('user.profile') }}"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="{{ route('users') }}"><i class="fa fa-circle-o"></i> All Users</a></li>
            <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i> Add New User</a></li>
            
          </ul>
        </li>
        @endif

        <li>
             <a href="{{ route('tags') }}">
            <i class="fa fa-folder"></i>
            <span>Tags</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        @if(Auth::user()->admin)
        <li><a href="{{ route('settings') }}"><i class="fa fa-circle"></i> <span>Site Info</span></a></li>
        @endif
      </ul>
       @endif
    </section>
    <!-- /.sidebar -->
  </aside>
