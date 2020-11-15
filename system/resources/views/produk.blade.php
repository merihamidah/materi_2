@extends('project3.base')
@section('content')
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
    <div class="col" style="margin-bottom: 20px;"><div class="card" style="width: 18rem;">
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

@endsection