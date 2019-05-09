@extends('layout.theme')

@section('contents')

<div class="row">
	<div class="col-md-3">
		<div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
		<div style="border-right:solid #BDBDBD;height:auto;">
			<a href="/excom" class="btn membtn">Go Back</a>
			<a href="/sleso_members" class="btn membtn">Committee</a>
			<a href="/sleso_past_members" class="btn membtn_active">Past Committee</a>
			<a href="/slesocom" class="btn membtn">SLESO Competition</a>
			<a href="/iesocom" class="btn membtn">International ESO Competition</a>
			
			</div>
	</div></div>
	<div class="col-md-9">
		
		<div style="background-color: #ffffff;padding: 20px;">
			<div><h3>Past Committee</h3></div><hr>

			@if(count($sleso_past_members)>0)
				@foreach($sleso_past_members as $sleso_past_member)
					{!! $sleso_past_member->body !!}

		@if(!Auth::guest())
			@if(Auth::user()->id==$sleso_past_member->user_id)
				<div class="row">
					<div class="col-md-3">

						<a href="/sleso_past_members/{{$sleso_past_member->id}}/edit" class="btn membtn">Edit</a>
					</div>
					<div class="col-md-3">
						{!!Form::open(['action'=>['slesopastmemberscontroller@destroy',$sleso_past_member->id],'method'=>'POST', 'class'=>'pull-right'])!!}
						{{Form::hidden('_method','DELETE')}}
						{{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
						{!!Form::close()!!}
					</div>
				</div>
			@endif
		@endif <hr>
		@endforeach
					{{$sleso_past_members->links()}}
		@else
			<p>No members found</p>
		@endif
		</div>
<br><br>
	</div></div>
@include('layouts.footer')
@endsection