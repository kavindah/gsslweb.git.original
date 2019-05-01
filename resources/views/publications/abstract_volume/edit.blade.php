@extends('layout.theme')

	
@section('contents')
<a href="/abstract_volume" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
	<h3>Edit Abstract Volumes</h3>
	
	{!! Form::open(['action'=>['abvolumecontroller@update',$abvolumes->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	<div class="form-group">
		
		{{ Form::label('title','Title')}}
		{{ Form::text('title',$abvolumes->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
	</div>

	<br>
	
	
	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}
	
    @endsection


