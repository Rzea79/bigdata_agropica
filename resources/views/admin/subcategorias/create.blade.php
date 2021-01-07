
@extends('layouts.appadmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.subcategorias.store'],'method'=>'POST','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','SLUG') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('slug',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','TITLE') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('title',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','DESCRIPTION') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('description',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','NOMBRE') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('nombre',null,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','DESCRIPCION') !!}
            </div>
            <div class="row form-group">
                {!!Form::textarea('descripcion',null,['clas'=>'form-control']) !!}
            </div>
 
            <div class="row form-group">
                {!!Form::file('urlfoto') !!}
            </div>
            <div class="row form-group">
 
                <div class="col-sm-6">
                    {!!Form::submit('GUARDAR',['class'=>'btnn btn-success'])!!}
                </div>
 
                <div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('descripcion');
</script>
@endsection
 
