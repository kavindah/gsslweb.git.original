@extends('layout.theme')

	
@section('contents')
<a href="/pg_cooray_medal" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
	<h3>Edit Ananda Coomaraswamy Medal -Winners </h3>
	
	{!! Form::open(['action'=>['pgwinnerscontroller@update',$pgwinners->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}
	
	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$pgwinners->body,[ 'class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>
	<br>


	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}





    @endsection


