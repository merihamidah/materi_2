<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('public')}}/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comic+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{url('public')}}/plugins/fontawesome-free/css/all.min.css">
  
    <title>project2</title>
  </head>
  <body font-family: 'Comic Neue', cursive;>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #f2c9c9;">
  <a class="navbar-brand" href="#" ><h3>Beauty Up</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lip product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Lipcream</a>
          <a class="dropdown-item" href="#">Liptint</a>
          <a class="dropdown-item" href="#">Lipbalm</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Skincare
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Serum</a>
          <a class="dropdown-item" href="#">Toner</a>
          <a class="dropdown-item" href="#">Day Cream</a>
          <a class="dropdown-item" href="#">Night Cream</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BodyCare
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Body Lotion</a>
          <a class="dropdown-item" href="#">Body Scrub</a>
          <a class="dropdown-item" href="#">Body Wash</a>
        </div>
      </li>
    </ul>
      
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    
  </div>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Meri Hamidah
          <img src="{{url('public')}}/img/img1.jpg" alt="User Avatar" style="height:100%; width:30px; " class=" img-circle">
        </a>
        <div class="dropdown-menu">
            <form class="px-6 py-3">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                  <label class="form-check-label" for="dropdownCheck">
                    Remember me
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
          </div>
      </li>
    </ul>
</nav>
  <div class="jumbotron jumbotron-fluid" alt="responsive-image">
  <div class="container">
    <h3 class="display-4 text-center" style="margin-top: 50px;"> 
    <span text-white> Love Yourself With Your Beauty</span>   
    </h3>
  </div>
  
</div>
<div class="line">
</div>
<h2 class="text-center"> <u>Trending Items</u></h2>
<div class="container text-justify"  style="margin-top:50px;">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
            <img src="{{ url('public')}}/img/img1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <h4><a href="{{ url("/wardahliptint") }}"">Liptint Wardah</a></h4><br>
                <p >30.000</p>
                <p>
            </div>
        </div>
    </div>
    <div class="col"><div class="card" style="width: 18rem;">
          <img src="{{ url('public')}}/img/img9.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="#">Serum Acne Scarlett</a></h4><br>
              <p >62.000</p>
              <p>
          </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col"> <div class="card" style="width: 18rem;">
          <img src="{{ url('public')}}/img/img10.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="#">Serum Scarlett</a></h4><br>
              <p >62.000</p>
              <p>
          </div>
        </div>
      </div>
      <div class="col"> <div class="card" style="width: 18rem;">
          <img src="{{ url('public')}}/img/img6.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="{{ url("/wardahvelvet") }}"">LipMousee Matte Velvet</a> </h4><br>
          <p >70.000</p>
              <p>
          </div>
        </div>
      </div>
  </div>
  <div class="row">
          <div class="col"> <div class="card" style="width: 18rem;">
                <img src="{{ url('public')}}/img/img2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <h4><a href="#">BB Chusion Laneige</a></h4><br>
                    <p >80.000</p>
                    <p>
                </div>
              </div>
            </div>
        </div>  
        </div>
      </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>