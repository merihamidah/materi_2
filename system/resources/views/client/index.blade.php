@extends('templateproject.base')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header text-center">
                                <th>New Produk</th>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>                                
                            </thead>
                            <tbody>
                                   @foreach($list_produk as $produk)
                                <tr>                                
                                   <td>
                                       <a href={{ url('user/client', $produk->id) }}"  > {{ $produk->nama }}</a>                        
                                    </td>
                                    <td>
                                      Rp. {{ number_format($produk->harga) }}
                                        
                                    </td>
                                     <td>
                                        {{ $produk->stok }}
                                    </td>
                                 </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection