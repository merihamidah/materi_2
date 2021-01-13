@extends('project3.base')
@section('content')
    <H1>Welcome Home</H1>
    <h3>
         @if(Auth::check())
                  {{ request()->user()->nama }}
            @elseif(Auth::guard('pembeli')->check())
                  {{ Auth::guard('pembeli')->user()->nama }}
            @elseif(Auth::guard('penjual')->check())
                  {{ Auth::guard('penjual')->user()->nama }}             
        @else
                  Silahkan Login Kembali
         @endif
    </h3>
   
@endsection