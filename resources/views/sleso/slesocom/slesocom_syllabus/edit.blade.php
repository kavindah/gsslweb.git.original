@extends('layout.theme')

	
@section('contents')
<a href="/slesocom" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go To Dashboard</a><br>
	<h2>Edit SLESO Competition - Syllabus</h2>
	
	{!! Form::open(['action'=>['slesocomsyllabuscontroller@update',$slesocomsyllabuses->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$slesocomsyllabuses->body,[ 'class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>
	
	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}



@endsection