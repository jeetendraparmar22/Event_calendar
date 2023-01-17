<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Event Planner</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
         
          <li class="nav-item">
            <a href="{{ route('events.create') }}" class="nav-link active">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Create Event                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('events.index') }}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Event List
              </p>
            </a>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
