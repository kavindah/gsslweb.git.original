@extends('layout.theme')

	
@section('contents')
<a href="/ananda_coomaraswamy_medal" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
	<h3>Edit Ananda Coomaraswamy Medal - Winners</h3>
	
	{!! Form::open(['action'=>['anandamedalwinnerscontroller@update',$anandawinners->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$anandawinners->body,[ 'class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>
	<br>

	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}

    @endsection


