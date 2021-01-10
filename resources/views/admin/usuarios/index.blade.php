@extends('layouts.Appadmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-8">
            <div class="card">
                <table class="table">
                    <thead>
                        <th>N</th><th>Nombre</th><th>Email</th><th>Estado</th><th>Accion</th>
                    </thead>
                    <tbody>
                        @foreach($data as $r)
                            <tr>
                                <td>{{$r->id}}</td>
                                <td>{{$r->name}}</td>
                                <td>{{$r->email}}</td>
                                <td>{{$r->estado}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.usuarios.edit',$r->id) }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>               
            </div>
        </div>
    </div>
</div>
@endsection
 
