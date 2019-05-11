@extends('layout.theme')

	
@section('contents')
<a href="/tissa_munasinghe_scholarship" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
	<h3>Edit Tissa Munasinghe Scholarship - Winners</h3>
	
	{!! Form::open(['action'=>['tissamunasinghewinnerscontroller@update',$tissawinners->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	
	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$tissawinners->body,[ 'class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>
	<br>

	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}

    @endsection


