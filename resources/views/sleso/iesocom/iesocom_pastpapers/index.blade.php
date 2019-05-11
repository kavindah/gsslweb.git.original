@extends('layout.theme')


	
@section('contents')

<div class="row">
	<div class="col-md-3">
		<div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
		<div style="border-right:solid #BDBDBD;height:auto;">
			<a href="/sleso" class="btn membtn">Go Back</a>
			<a href="sleso_members" class="btn membtn">SLESCO Committee</a>
			<a href="sleso_past_members" class="btn membtn">Past Committee</a>
			<a href="/slesocom" class="btn membtn">SLESO Competition</a>
			<a href="/iesocom" class="btn membtn_active">International ESO Competition</a>
			<a href="/iesocom_syllabus" class="btn membtn" style="width: 50%;float:right;margin-right: 5%;background-color:#1AA6B4;color: white"> > IESO Syllabus</a>
			<a href="/iesocom_past_papers" class="btn membtn_active" style="width: 50%;float:right;margin-right: 5%;"> > Past papers</a>
			</div>
	</div></div>
	<div class="col-md-9" style="background-color: white;padding-top: 10px">
		<div><h3>International Earth Science Olympiad Competition - Past Papers</h3></div>
		<div style="background-color: #ffffff;padding: 20px;">
		@if(count($iesocompastpapers)>0)
			@foreach($iesocompastpapers as $iesocompastpaper)
				{!!$iesocompastpaper->body!!}

		@if(!Auth::guest())
		@if(Auth::user()->id==$iesocompastpaper->user_id)
<div class="row">
	<div class="col-md-3">
		
<a href="/iesocom_past_papers/{{$iesocompastpaper->id}}/edit" class="btn membtn">Edit</a>
</div>
<div class="col-md-3">
{!!Form::open(['action'=>['iesocompastpaperscontroller@destroy',$iesocompastpaper->id],'method'=>'POST', 'class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
{!!Form::close()!!}
</div>
</div>
@endif
@endif
			@endforeach
		@else
			<p>No posts found</p>
		@endif
	</div>	</div>
</div>
@include('layouts.footer')
@endsection