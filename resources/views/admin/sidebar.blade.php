<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <a href="/add_docter" class="btn btn-primary">
          Add Doctor
        </a> @nbsp
        <a href="{{ url('show_apointment') }}" class="btn btn-primary">
          Show apointment
        </a> 
        <a href="{{ url('alldocters') }}" class="btn btn-primary">
          All Docters
        </a>
        <div>

          <a href="{{ url('latestnews') }}" class="btn btn-primary">
            Latest News
          </a>
        </div>
      
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-jet-responsive-nav-link href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                          this.closest('form').submit();">
              {{ __('Log Out') }}
          </x-jet-responsive-nav-link>
      </form>

          
   
      
    </nav>
    <!-- /.sidebar-menu -->
  </div>