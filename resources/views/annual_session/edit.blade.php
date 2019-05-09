@extends('layout.theme')

	
@section('contents')
<a href="/home" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go To Dashboard</a><br>
	<h2>Edit Annual Session</h2>
	
	{!! Form::open(['action'=>['annualsessioncontroller@update',$annual_sessions->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}
	<div class="form-group">
		
		{{ Form::label('title','Title')}}
		{{ Form::text('title',$annual_sessions->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
	</div>

	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$annual_sessions->body,['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>
	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}


@endsection