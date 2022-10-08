<aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('Gambar/logo.png')}}" alt="Admin Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-dark">SMKI UTAMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
        <!-- <div class="image"> -->
          <!-- <img src="{{asset('Gambar/logo2.jpg')}}" class="img-circle elevation-2" alt="User Image"> -->
        <!-- </div> -->
        <!-- <div class="info">
          @if (Auth::guard('alumni')->user())
          <a href="#" class="d-block">{{ Auth::guard('alumni')->user()->name }}</a>
          @elseif (Auth::guard('user')->user())
          <a href="#" class="d-block">{{ Auth::guard('user')->user()->name }}</a>
          @endif
        </div> -->
      <!-- </div> -->

      <!-- SidebarSearch Form
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
          <li class="nav-item">
            <a href="{{ route('beranda') }}" class="nav-link {{ e($__env->yieldContent('menu')) == 'dashboard' ? 'active' : '' }}">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <i class="nav-icon fas bi-house-fill"></i>
              <p>Home</p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{ route('beranda') }}" class="nav-link {{ e($__env->yieldContent('menu')) == 'mainmenu' ? 'active' : '' }}">
              <i class="nav-icon fas bi-menu-button-wide-fill"></i>
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Main Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @if (auth()->user()->role == "admin")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('alumni') }}" class="nav-link {{ e($__env->yieldContent('submenu')) == 'alumni1' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Alumni</p>
                </a>
              </li>
            </ul>
            @endif

            @if (auth()->user()->role == "alumni")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/alumni/index_alumni" class="nav-link {{ e($__env->yieldContent('submenu')) == 'alumni2' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Alumni</p>
                </a>
              </li>
            </ul>
            @endif

            @if (auth()->user()->role == "admin")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('lowongan') }}" class="nav-link {{ e($__env->yieldContent('submenu')) == 'lowongan' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lowongan</p>
                </a>
              </li>
            </ul>
            @endif
            
            @if (auth()->user()->role == "alumni")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/lowongan/index_alumni" class="nav-link {{ e($__env->yieldContent('submenu')) == 'low' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lowongan</p>
                </a>
              </li>
            </ul>
            @endif

            @if (auth()->user()->role == "admin")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('event') }}" class="nav-link {{ e($__env->yieldContent('submenu')) == 'event' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event</p>
                </a>
              </li>
            </ul>
            @endif

            @if (auth()->user()->role == "alumni")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/event/index_alumni" class="nav-link {{ e($__env->yieldContent('submenu')) == 'ev' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event</p>
                </a>
              </li>
            </ul>
            @endif

            @if (auth()->user()->role == "admin")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('perusahaan') }}" class="nav-link {{ e($__env->yieldContent('submenu')) == 'perusahaan' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perusahaan</p>
                </a>
              </li>
            </ul>
            @endif

            @if (auth()->user()->role == "admin")
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('jabatan') }}" class="nav-link {{ e($__env->yieldContent('submenu')) == 'jabatan' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
            </ul>
            @endif

            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/alumni/profile" class="nav-link {{ e($__env->yieldContent('submenu')) == 'profile' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
            </ul> -->

          <!-- <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="return confirm('Apakah Anda Ingin Keluar?')">
              <i class="nav-icon fas bi-box-arrow-right"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>