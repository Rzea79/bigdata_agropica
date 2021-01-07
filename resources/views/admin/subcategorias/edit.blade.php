@extends('layouts.appadmin')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.subcategorias.update',$subcategoria],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','SLUG') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('slug',$subcategoria->slug,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','TITLE') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('title',$subcategoria->title,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','DESCRIPTION') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('description',$subcategoria->description,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','NOMBRE') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('nombre',$subcategoria->nombre,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','DESCRIPCION') !!}
            </div>
            <div class="row form-group">
                {!!Form::textarea('descripcion',$subcategoria->descripcion,['clas'=>'form-control']) !!}
            </div>
 
            <div class="row form-group">
                <img src="/img/subcategorias/{{$subcategoria->urlfoto}}">
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
