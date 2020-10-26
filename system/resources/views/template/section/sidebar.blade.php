@php
 function checkRouteActive($route){
     if(Route::current()->uri == $route) return 'active';
 }
@endphp
  
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Materi 3</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Meri Hamidah</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive($route)}}">
              <i class="nav-icon fas fa-home "></i>
              <p>
                Beranda
               </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{url('produk')}}"  class="nav-link {{checkRouteActive($route)}}">
              <i class="nav-icon fas fa-home "></i>
              <p>
                Produk
               </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{url('kategori')}}"  class="nav-link {{checkRouteActive($route)}}">
              <i class="nav-icon fas fa-home "></i>
              <p>
               Kategori
               </p>
            </a>
          </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home "></i>
              <p>
               Promo
               </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa- nav-icon"></i>
                  <p>Pelanggan </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suplier</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
