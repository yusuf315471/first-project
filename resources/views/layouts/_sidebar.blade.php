 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ \App\profile::find([Auth::user()->id])->first()->avatar }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/profile/{{Auth::user()->id}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview menu-open">
            <a href="/pasien" class="nav-link ">
              <i class="nav-icon fas fa-file"></i>
              <p>
                pasien
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/pesan" class="nav-link ">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                pesan
              </p>
            </a>
          </li>
          <?php if (Auth::user()->id === 1): ?>
            
          <li class="nav-item has-treeview menu-open">
            <a href="/user" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                user
              </p>
            </a>
          </li>
          <?php endif ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>