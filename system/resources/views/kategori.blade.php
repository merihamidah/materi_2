@extends('project3.base')
@section('content')
<div class="container text-justify"  style="margin-top:50px;">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
            <img src="{{ url('public')}}/img/lip.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <h4><a href="#"">Lip Product</a></h4><br>
                <p>
            </div>
        </div>
    </div>
    <div class="col" style="margin-bottom: 20px;"><div class="card" style="width: 18rem;">
          <img src="{{ url('public')}}/img/sk.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="#">Skincare</a></h4><br>
              <p>
          </div>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col" > <div class="card" style="width: 18rem;">
          <img src="{{ url('public')}}/img/bc.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="#">Bodycare</a></h4><br>
              <p>
          </div>
        </div>
      </div>
      <div class="col"> <div class="card" style="width: 18rem;">
          <img src="{{ url('public')}}/img/basemk.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="{{ url("/wardahvelvet") }}"">Base Make Up</a> </h4><br>
              <p>
          </div>
        </div>
      </div>
  </div>
  <div class="row">
          <div class="col" > <div class="card" style="width: 18rem;">
                <img src="{{ url('public')}}/img/eye.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                    <h4><a href="#">Eye Product</a></h4><br>
                    <p>
                </div>
              </div>
            </div>
        </div>  
        </div>
      </div>
    </div>

@endsection