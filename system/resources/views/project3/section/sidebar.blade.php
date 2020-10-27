    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ee5b5b;">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/project3')}}">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3" > Beauty UP </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/product') }}">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Product</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/category') }}">
          <i class="fas fa-fw fa-bars"></i>
          <span>Category</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/promo') }}">
          <i class="fas fa-fw fa-tags "></i>
          <span>Promo</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ url('public')}}/p3/buttons.html">Buttons</a>
            <a class="collapse-item" href="{{ url('public')}}/p3/cards.html">Cards</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="{{ url('public')}}/p3/utilities-color.html">Colors</a>
            <a class="collapse-item" href="{{ url('public')}}/p3/utilities-border.html">Borders</a>
            <a class="collapse-item" href="{{ url('public')}}/p3/utilities-animation.html">Animations</a>
            <a class="collapse-item" href="{{ url('public')}}/p3/utilities-other.html">Other</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Tambahan
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="{{ url('public')}}/p3/{{ url('public')}}/p3/login.html">Login</a>
            <a class="collapse-item" href="{{ url('public')}}/p3/{{ url('public')}}/p3/register.html">Register</a>
            <a class="collapse-item" href="{{ url('public')}}/p3/{{ url('public')}}/p3/forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="{{ url('public')}}/p3/{{ url('public')}}/p3/404.html">404 Page</a>
            <a class="collapse-item" href="{{ url('public')}}/p3/{{ url('public')}}/p3/blank.html">Blank Page</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
      </li>
      <li class="nav-item">
       
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>