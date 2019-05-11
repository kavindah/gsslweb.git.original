@extends('layout.theme')

	
@section('contents')
<a href="/home" class="btn membtn" style="width: 20%;"><span class="glyphicon glyphicon-chevron-left"></span> Go To Dashboard</a><br>
	<h3>Create P.W.Vitanage Memorial Scholarship</h3>
	
	{!! Form::open(['action'=>'pwvitanagewinnerscontroller@store','method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body','',['class'=>'form-control my-editor', 'placeholder'=>'Abstract'])}}
	</div>

	<br>

	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}



@endsection