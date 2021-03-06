@extends('layout.theme')


	
@section('contents')

<div class="row">
	<div class="col-md-3">
		<div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
		<div style="border-right:solid #BDBDBD;height:auto;">
				<a href="/presentexcom" class="btn membtn">Present Executive Committee</a>
				<a href="/pastexcom" class="btn membtn">Past Executive Committee</a>
				<a href="/pastpresidents" class="btn membtn">Past Presidents</a>
			
			</div>
	</div></div>
	<div class="col-md-9">
		
		<div style="background-color: #ffffff;padding: 20px;">
			<div><h3>Executive Committee</h3></div><hr>

			The Executive Committee of the Geological Society of Sri Lanka consists of the President, President Elect, Vice President, Honorary Secretary, Honorary Treasurer, two (02) Editors, seven (07) Committee members and immediate past –President”.
	</div>	</div>
</div>
@include('layouts.footer')
@endsection