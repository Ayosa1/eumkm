 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
        </a>
        <form id="logout-form" action="{{ route('adminlogout') }}" method="GET" class="d-none">
            @csrf
        </form>
      </li>
      @endguest
    </ul>
  </nav>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="\dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">App UMKM</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="\dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block"><span class="caret"></span>{{ Auth::user()->name }}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{route('adminhome')}}" class="nav-link">   
              <i class="fas fa-home"></i>
              <p>
              &nbsp Home
              </p>
          </a>
        </li>
        @if (auth()->user()->level=="admin" )
        <li class="nav-item">
          <a href="{{route('sdmadmin')}}" class="nav-link">   
            <i class="fas fa-walking"></i>
              <p>
              &nbsp Data SDM
              </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('smauii')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff SMA UII</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('okeoc')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff OkeOC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('useradmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-store"></i> 
              <p>
                Anggota & Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('anggotaadmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Anggota UMKM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('produkadmin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Produk UMKM</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
        <a href="{{route('blogadmin')}}" class="nav-link">
            <i class="fab fa-blogger-b"></i>
            <p>
            &nbsp Blog UMKM
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('adminkategori')}}" class="nav-link">
          <i class="fas fa-tags"></i>
            <p>
            &nbsp Kategori UMKM
            </p>
        </a>
        </li>
        @endif
        @if (auth()->user()->level=="umkm" || auth()->user()->level=="admin" )
        <li class="nav-item">
          <a href="{{route('transaksiadmin')}}" class="nav-link">
            <i class="fas fa-shopping-cart"></i>
            <p>
              &nbsp Data Transaksi Pembeli
            </p>
          </a>
        </li>
        @endif
        @if (auth()->user()->level=="smauii" || auth()->user()->level=="admin" )
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-store"></i> 
              <p>
                Data Kasir SMA UII
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('requesttransaksi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi Perbulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('requestmargine')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Margine Perbulan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if (auth()->user()->level=="okeoc" || auth()->user()->level=="admin" )
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-store"></i> 
              <p>
                Data Kasir OKE OC
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('requesttransaksiokoc')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi Perbulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('requestmargineokoc')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Margine Perbulan</p>
                </a>
              </li>
            </ul>
          </li> 
          @endif
          
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>