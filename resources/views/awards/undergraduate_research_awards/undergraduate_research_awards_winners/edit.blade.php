@extends('layout.theme')

	
@section('contents')
<a href="/undergraduate_research_awards" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
	<h3>Edit GSSL Undergraduate Research Award - Winners</h3>
	
	{!! Form::open(['action'=>['undergraduateresearchawardwinnerscontroller@update',$undergraduateresearchawardswinner->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	
	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$undergraduateresearchawardswinner->body,['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>

	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}
	
    @endsection


