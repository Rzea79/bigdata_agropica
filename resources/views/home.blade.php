@extends('adminlte::page')

 @section('title','DashBoard') 

 {{--  --}}

@section('content_header')
    <div class="card">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Hola mundo</h1>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat reprehenderit, cum rerum aperiam iste soluta, magnam quas blanditiis saepe voluptates aliquid ipsa voluptatum! Quia repellendus eveniet officia? A, ab alias?</p>
            </div>
        </div>
    </div>
@stop

@section('content')
    <p> Welcome to this beautifull  admin panel </p>
@stop

@section('css')
    <link rel= "stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> Console.log('Hi!';) </script>
@stop