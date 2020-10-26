 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('template')}}" class="nav-link">Home</a>
      </li>
  </ul>
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Meri Hamidah
          <img src="{{url('public')}}/dist/img/user1-128x128.jpg" alt="User Avatar" style="height:100%; " class=" img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <i class="fa fa-user"></i> Profile
            </a>
            <a href="#" class="dropdown-item">
              <i class="fa fa-setting"></i> Setting
            </a>
            <a href="{{url('login2')}}" class="dropdown-item">
              <i class="fa fa-sign-out"></i> Logout
            </a>
           <div class="dropdown-divider"></div>
          </div>
      </li>
    </ul>
  </nav>
  