@extends('layout.theme')

	
@section('contents')
<a href="/home" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go To Dashboard</a><br>
	<h2>Add New Highlight</h2>
	
	{!! Form::open(['action'=>'highlightscontroller@store','method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	<div class="form-control">
		<label>Cover Image:</label>
		{{Form::file('highlight_image')}}
	</div>

	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body','',['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>

	
	<br>
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}

	

@endsection