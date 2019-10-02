@extends('layout.theme')

	
@section('contents')
<a href="/general_public" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
	<h3>Edit General Public</h3>
	
	{!! Form::open(['action'=>['generalpubliccontroller@update',$generalpublics->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	<div class="form-group">
		
		{{ Form::label('title','Title')}}
		{{ Form::text('title',$generalpublics->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
	</div>

	
	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$generalpublics->body,['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>
	<br>
	
	
	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}
	
    @endsection


