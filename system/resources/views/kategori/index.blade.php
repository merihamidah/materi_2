@extends('project3.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">                
                 <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/kategori/filter') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                             <div class="form-group">
                                <label for="" class="control-label"> Nama </label>
                                <input type="text" name="nama" class="form-control" value="{{ $nama ?? "" }}">
                             </div>
                            </div>
                        </div>
                         <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Data Kategori
                        <a href="{{ url("admin/kategori/create") }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah Data</i></a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Produk</th>
                            </thead>
                            <tbody>
                              
                                   @foreach($list_kategori as $kategori)
                                <tr>
                                   <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/kategori', $kategori->id) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{ url('admin/kategori', $kategori->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                                            @include('project3.utils.delete', ['url' => url('admin/kategori', $kategori->id)])                             
                                        </div>
                                    </td>
                                   <td> {{ $kategori->nama }}</td>
                                   <td>{{ $kategori->produk_count }}</td>
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