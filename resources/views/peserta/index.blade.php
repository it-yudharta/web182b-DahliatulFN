@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('peserta'))
            <div class="alert alert-success" role="alert">
                {{session('peserta')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header">Tambahkan Data
                <a class="btn btn-primary float-right" href="/peserta/show"> Tampilkan Data</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="/peserta/create">
                        @csrf 

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text" class="form-control" name="jurusan" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="delegasi" class="col-md-4 col-form-label text-md-right">Delegasi</label>

                            <div class="col-md-6">
                                <input id="delegasi" type="text" class="form-control" name="delegasi" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Input
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
