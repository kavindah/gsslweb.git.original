@extends('layout.theme')

	
@section('contents')
<a href="/home" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go To Dashboard</a><br>
	<h2>Create Annual Pleasure Trip</h2>
	
	{!! Form::open(['action'=>'annualtripcontroller@store','method'=>'POST','enctype'=>'multipart/form-data' ]) !!}
	<div class="form-group">
		
		{{ Form::label('title','Title')}}
		{{ Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
	</div>	

	<br>
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}


@endsection