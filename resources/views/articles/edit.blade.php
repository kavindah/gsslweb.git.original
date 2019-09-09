@extends('layout.theme')

	
@section('contents')

<div class="container">
		<h2>Edit Article</h2>
	
	{!! Form::open(['action'=>['ArticleController@update',$articles->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
	<div class="form-group">
		
		{{ Form::label('title','Title')}}
		{{ Form::text('title',$articles->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
	</div>	
	<div class="form-group">
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body',$articles->body,['class'=>'form-control my-editor', 'placeholder'=>'Body'])}}
	</div>

	<div class="form-group">
		{{ Form::label('cover_image','Cover Image')}}
		{{ Form::textarea('cover_image',$articles->cover_image,['class'=>'form-control my-editor', 'placeholder'=>'Abstract'])}}
	</div>
	{{--<div class="form-control">--}}
		{{--<label>Cover Image:</label>--}}
		{{--{{Form::file('article_image')}}--}}
	{{--</div>--}}
	
	<br>
	{{Form::hidden('_method','PUT')}}
	{{Form::submit('Submit',['class'=>'btn btn-success'])}}
	{!! Form::close() !!}
	</div>

   @endsection