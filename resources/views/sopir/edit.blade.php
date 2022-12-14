@extends('layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Data Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Produk/Barang</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-edit mr-1"></i>Data Barang/Produk</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div>
                        <h2>Update Product</h2>
                    </div>
                </div>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops !</strong> There were some problems with your input. <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('sopir.update', $sopir->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kode Sopir:</strong>
                            <input type="text" name="kd_sopir" class="form-control"
                                value="{{ $sopir->kd_sopir }}"></input>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Sopir:</strong>
                            <input type="text" name="nm_sopir" class="form-control"
                                value="{{ $sopir->nm_sopir }}"></input>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>No Hp:</strong>
                            <input type="number" name="nohp" class="form-control" value="{{ $sopir->nohp }}"></input>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gender:</strong>
                            <input type="text" name="gender" class="form-control" value="{{ $sopir->gender }}"></input>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat:</strong>
                            <input type="text" name="alamat" class="form-control" value="{{ $sopir->alamat }}"></input>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Keterangan:</strong>
                            <textarea class="form-control" name="ket">{{ $sopir->ket }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Foto Sopir:</strong>
                            <input type="file" name="gambar" value="{{ $sopir->gambar }}"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <a class="btn btn-primary" href="{{ route('sopir.index') }}">Back</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
            @endsection