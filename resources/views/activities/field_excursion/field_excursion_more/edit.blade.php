@extends('layout.theme')


@section('contents')
    <a href="/activities_field_excursion" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
    <h3>Edit Field Excursion</h3>

    {!! Form::open(['action'=>['fieldexcursionmorecontroller@update',$fieldexcursionmores->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

    <div class="form-group">

        {{ Form::label('title','Title')}}
        {{ Form::text('title',$fieldexcursionmores->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{ Form::label('body','Body')}}
        {{ Form::textarea('body',$fieldexcursionmores->body,['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
    </div>
    <br>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-success'])}}
    {!! Form::close() !!}

@endsection


