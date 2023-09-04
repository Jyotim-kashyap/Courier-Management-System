<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard')}}" class="brand-link">
      <img src="{{ adminAsset('dist/img/AdminLTELogo.png') }} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard')}} " class="nav-link {{ isActive('admin/dashboard') }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ isMenuOpen('admin/members*')}}">
            <a href="#" class="nav-link {{ isActive('admin/members*') }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Members
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
           
              <li class="nav-item">
                <a href="{{ route('admin.members.add')}} " class="nav-link {{ isActive('admin/members/add') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Member</p>
                </a>
              </li>
            </ul>
          </li>
         
          
          
          <li class="nav-item has-treeview {{ isMenuOpen('admin/branch-master*')}}">
            <a href="#" class="nav-link {{ isActive('admin/branch-master*') }}">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Branch Management
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.branch.view')}} " class="nav-link {{ isActive('admin/branch-master') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Branch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.branch.add')}}" class="nav-link {{ isActive('admin/branch-master/add') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new Branch</p>
                </a>
              </li>
            </ul>
          </li>
          
         
          <li class="nav-item has-treeview {{ isMenuOpen('admin/parcel*')}}">
            <a href="#" class="nav-link {{ isActive('admin/parcel*') }}">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Parcels
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.parcel')}} " class="nav-link {{ isActive('admin/parcel') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Parcels</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.parcel.add')}} " class="nav-link {{ isActive('admin/parcel/add') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.parcel.track')}} " class="nav-link {{ isActive('admin/parcel/track') }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Track</p>
                </a>
              </li>
            </ul>
          </li>
                 </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
