@extends('layout.theme')

	
@section('contents')
<a href="/ljd_medal" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go Back</a><br>
	<h3>Edit L.J.D.Fernando Memorial Medal - Winners</h3>
	
	{!! Form::open(['action'=>['ljdmedalwinnerscontroller@update',$ljd_medal_winners->id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}


	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$ljd_medal_winners->body,[ 'class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>
	<br>

	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}





    @endsection


