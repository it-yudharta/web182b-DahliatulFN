@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panitia</div>

                <div class="card-body">
                {{ $panitias->links() }}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>No_hp</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($panitias as $panitia)
                                <tr>
                                    <td>{{ $panitia->id }}</td>
                                    <td>{{ $panitia->nama }}</td>
                                    <td>{{ $panitia->jabatan }}</td>
                                    <td>{{ $panitia->no_hp }}</td>
                                </tr>
                                @endforeach
                            </tbody>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
