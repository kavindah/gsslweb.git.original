@extends('layout.theme')

	
@section('contents')
<a href="/home" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go To Dashboard</a><br>
	<h3>Create PG Cooray Medal - Winners</h3>
	
	{!! Form::open(['action'=>'pgwinnerscontroller@store','method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	
	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body','',['class'=>'form-control my-editor', 'placeholder'=>'Abstract'])}}
	</div>

	<br>

	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}



@endsection