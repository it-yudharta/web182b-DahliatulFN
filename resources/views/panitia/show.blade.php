@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class ="table">
                        <thead>
                        <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">No_hp</th>
                        <th scope="col">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $panitias as $item)
                        <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jabatan}}</td>
                        <td>{{$item->no_hp}}</td>
                        <td>
                            <a class="btn btn-warning" href="/panitia/{{$item->id}}/edit" role="button">Edit</a>
                            <a class="btn btn-danger" href="/panitia/{{$item->id}}/hapus" role="button">Hapus</a>
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
