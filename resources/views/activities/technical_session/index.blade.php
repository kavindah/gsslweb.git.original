@extends('layout.theme')

@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/activities_home" class="btn membtn">Go Back</a>
                    <a href="/activities" class="btn membtn">GSSL Workshops</a>
                    <a href="/activities_publictalk" class="btn membtn">GSSL Public Talk</a>
                    <a href="/activities_technical_session" class="btn membtn_active">Technical Sessions</a>
                    <a href="activities_field_excursion" class="btn membtn">Field Excursion</a>
                    <a href="activities_annual_trip" class="btn membtn">Annual Pleasure Trip</a>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="background-color: #ffffff;padding: 10px;margin-bottom: 40px;">
            <div><h3>Technical Sessions</h3></div>
            <hr>
            <div style="background-color: #ffffff;padding: 10px;height: auto;">

                @if(count($technical_sessions)>0)
                    @foreach($technical_sessions as $technical_session)
                        <div style="height: auto;">
                            <div style="font-weight: bold;font-size:16px; ">
                                <a href="activities_technical_session/{{$technical_session->id}}"> {{$technical_session->title}}</a>
                            </div>

                        </div>
                        @if(!Auth::guest())
                            @if(Auth::user()->id==$technical_session->user_id)
                                <div class="row">
                                    <div class="col-md-3">

                                        <a href="/activities_technical_session/{{$technical_session->id}}/edit"
                                           class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['technicalsessoioncontroller@destroy',$technical_session->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </div>
                            @endif
                        @endif
                        <hr>
                    @endforeach
                    {{$technical_sessions->render()}}
                @else
                    <p>No Public Talk found</p>
                @endif

            </div>
        </div>
    </div>
    <br>
    @include('layouts.footer')
@endsection