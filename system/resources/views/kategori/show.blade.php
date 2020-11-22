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
                      <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach($kategori->produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $produk->nama }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->stok }}</td>                        
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