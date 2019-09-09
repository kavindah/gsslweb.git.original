@extends('layout.theme')


	
@section('contents')

<div style="background-color: #ffffff">
	<div class="row">
		<div class="col-md-3">
			<div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
		<div style="border-right:solid #BDBDBD;height:auto;margin: 10px;">
				<a href="journalgssl" class="btn membtn">Back</a>
				<a href="journal_editorialboard" class="btn membtn_active">Editorial Board</a>
				<a href="journal_browse" class="btn membtn">Browse</a>
				<a href="journal_authorguidlines" class="btn membtn">Author Guidelines</a>
				<a href="" class="btn membtn">Submit</a>
			</div>
	</div>
		</div>
		<div class="col-md-9 m-0 p-0">

			<div style="background-color: #ffffff;padding: 20px;">
				<div><h3>Editorial Board</h3></div><hr>

				@if(count($editors)>0)
					@foreach($editors as $editor)
						{!! $editor->body !!}

						@if(!Auth::guest())
							@if(Auth::user()->id==$editor->user_id)
								<div class="row">
									<div class="col-md-3">

										<a href="/journal_editorialboard/{{$editor->id}}/edit" class="btn membtn">Edit</a>
									</div>
									<div class="col-md-3">
										{!!Form::open(['action'=>['editorialboardcontroller@destroy',$editor->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
										{{Form::hidden('_method','DELETE')}}
										{{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
										{!!Form::close()!!}
									</div>
								</div>
							@endif
						@endif <hr>
					@endforeach
					{{$editors->links()}}
				@else
					<p>No editors found</p>
				@endif
			</div>
			<br><br>
		</div>

	</div>
</div>

@endsection