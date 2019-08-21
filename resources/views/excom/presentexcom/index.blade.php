@extends('layout.theme')


	
@section('contents')

<div class="row">
	<div class="col-md-3">
		<div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
		<div style="border-right:solid #BDBDBD;height:auto;">
			<a href="/excom" class="btn membtn">Go Back</a>
				<a href="/presentexcom" class="btn membtn_active">Present Executive Committee</a>
				<a href="/pastexcom" class="btn membtn">Past Executive Committee</a>
				<a href="/pastpresidents" class="btn membtn">Past Presidents</a>
			
			</div>
	</div></div>
	<div class="col-md-9">
		
		<div style="background-color: #ffffff;padding: 20px;">
			<div><h3>Present Executive Committee</h3></div><hr>

			@if(count($presentexcoms)>0)
				@foreach($presentexcoms as $presentexcom)
					{!! $presentexcom->body !!}

					@if(!Auth::guest())
						@if(Auth::user()->id==$presentexcom->user_id)
							<div class="row">
								<div class="col-md-3">

									<a href="/presentexcom/{{$presentexcom->id}}/edit"
									   class="btn membtn">Edit</a>
								</div>
								<div class="col-md-3">
									{!!Form::open(['action'=>['presentexcomcontroller@destroy',$presentexcom->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
									{{Form::hidden('_method','DELETE')}}
									{{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
									{!!Form::close()!!}
								</div>
							</div>
						@endif
					@endif
					<hr>
				@endforeach
					{{$presentexcoms->links()}}
			@else
				<p>No members found</p>
			@endif
	</div>	</div>
</div>
@include('layouts.footer')
@endsection