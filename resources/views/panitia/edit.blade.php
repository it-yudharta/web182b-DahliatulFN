@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('panitia'))
            <div class="alert alert-success" role="alert">
                {{session('panitia')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header">Tambahkan Data
                </div>

                <div class="card-body">
                    <form method="GET" action="/panitia/{{ $panitias -> id }}/update">
                        @csrf 

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{$panitias->nama}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jabatan" class="col-md-4 col-form-label text-md-right">Jabatan</label>

                            <div class="col-md-6">
                                <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{$panitias->jabatan}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_hp" class="col-md-4 col-form-label text-md-right">no_hp</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="text" class="form-control" name="no_hp" value="{{$panitias->no_hp}}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
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
