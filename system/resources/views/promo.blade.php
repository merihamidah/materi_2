@extends('project3.base')
@section('content')
<div class="container text-justify"  style="margin-top:50px;">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem; height:250px; ">
            <img src="{{ url('public')}}/img/promo 1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <h4><a href="#"">Detail</a></h4><br>
                <p>
            </div>
        </div>
      </div>
       <div class="col" > 
          <div class="card" style="width: 18rem; height:250px; ">
          <img src="{{ url('public')}}/img/promo3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="#">Detail</a></h4><br>
              <p>
          </div>
        </div>
  </div>
  <div class="row">
    <div class="col" >
        <div class="card" style="width: 18rem; height:250px; ">
          <img src="{{ url('public')}}/img/promo2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <h4><a href="#">Detail</a></h4><br>
              <p>
          </div>
        </div>
      </div>
              </div>
            </div>
        </div>  
        </div>
      </div>
    </div>

@endsection