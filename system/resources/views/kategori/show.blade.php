@extends('project3.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                       <h3>{{ $kategori->nama }}</h3>
                    </div>
                    <div class="card-body">
                    Ini Detail Kategori
                     <hr>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection