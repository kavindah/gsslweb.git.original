@extends('layout.theme')


@section('contents')
    <a href="/activities" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
    <h3>Edit WorkShop</h3>

    {!! Form::open(['action'=>['workshopmorecontroller@update',$workshopmores->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

    <div class="form-group">

        {{ Form::label('title','Title')}}
        {{ Form::text('title',$workshopmores->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{ Form::label('body','Body')}}
        {{ Form::textarea('body',$workshopmores->body,['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
    </div>
    <br>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-success'])}}
    {!! Form::close() !!}

@endsection


