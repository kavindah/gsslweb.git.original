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
				<a href="/iesocom_syllabus" class="btn membtn" style="width: 50%;float:right;margin-right: 5%;background-color:#1AA6B4;color: white"> > ESO Syllabus</a>
				<a href="/iesocom_past_papers" class="btn membtn" style="width: 50%;float:right;margin-right: 5%;background-color:#1AA6B4;color: white;"> > Past papers</a>

		</div>
	</div></div>
	<div class="col-md-9" style="background-color: white; padding-top: 10px">
		<div><h3>International Earth Science Olympiad Competition</h3></div><hr>
		The International Earth Science Olympiad (IESO) Competition is conducted by the
		International Geoscience Education Organization (IGEO) as one of its major activities, which
		is aiming to promote earth science education.
		Students winning the respective national competitions are invited to participate for this event.
		At present, Geological Society of Sri Lanka is the authorized professional
		organization for the selection of competitors from among National Schools for the IESO.<br><br>
		<div style="background-color: #ffffff;padding: 20px;">
		@if(count($iesocs)>0)
			@foreach($iesocs as $iesoc)
				<div style="font-weight: bold;font-size:15px; ">{{$iesoc->title}}</div>
				{!!$iesoc->body!!}
	

		@if(!Auth::guest())
		@if(Auth::user()->id==$iesoc->user_id)
<div class="row">
	<div class="col-md-3">
		
<a href="/iesocom/{{$iesoc->id}}/edit" class="btn membtn">Edit</a>
</div>
<div class="col-md-3">
{!!Form::open(['action'=>['iesocomcontroller@destroy',$iesoc->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
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