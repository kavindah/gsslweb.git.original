@extends('layout.theme')


	
@section('contents')

<div class="row">
	<div class="col-md-3">
		<div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
		<div style="border-right:solid #BDBDBD;height:auto;">
				<a href="/sleso" class="btn membtn">Go Back</a>
				<a href="" class="btn membtn">SLESCO Committee</a>
				<a href="" class="btn membtn">Past Committee</a>
				<a href="/slesocom" class="btn membtn_active">SLESO Competition</a>
				<a href="/slesocom_syllabus" class="btn membtn" style="width: 50%;float:right;margin-right: 5%;background-color:#1AA6B4;color: white"> > ESO Syllabus</a>
				<a href="/slesocom_past_papers" class="btn membtn" style="width: 50%;float:right;margin-right: 5%;background-color:#1AA6B4;color: white;"> > Past papers</a>
				<a href="/iesocom" class="btn membtn">International ESO Competition</a>
			</div>
	</div></div>
	<div class="col-md-9" style="background-color: white;padding-top: 10px">
		<div><h3>Sri Lanaka Earth Science Olympiad Competition</h3></div>
		<p>The Sri ankan Earth Science Olympiad Competition is jointly organized by the Geological
			Society of Sri Lanka and the Department of Geology, University of Peradeniya. Sri Lankan
			School students under age 19 or those who have passed or sat for the G.C.E. (O/L)
			examination are eligible to apply. The competition is held in regional centers. Best four
			students will be selected to participate in the International Earth Science Olympiad
			Competition.</p>
		<hr>
		<div style="background-color: #ffffff;padding: 20px;">
		@if(count($slesocs)>0)
			@foreach($slesocs as $slesoc)
				<div style="font-weight: bold;font-size:15px; ">{{$slesoc->title}}</div>
				{!!$slesoc->body!!}
	

		@if(!Auth::guest())
		@if(Auth::user()->id==$slesoc->user_id)
<div class="row">
	<div class="col-md-3">
		
<a href="/slesocom/{{$slesoc->id}}/edit" class="btn membtn">Edit</a>
</div>
<div class="col-md-3">
{!!Form::open(['action'=>['slesocomcontroller@destroy',$slesoc->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
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