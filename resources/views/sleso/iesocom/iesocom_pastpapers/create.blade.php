@extends('layout.theme')

	
@section('contents')
<a href="/home" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go To Dashboard</a><br>
	<h2>Add new International Earth Science Olympiad Competition - Past Papers</h2>
	
	{!! Form::open(['action'=>'iesocompastpaperscontroller@store','method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body','',['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>

	<br>
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}

	


@endsection