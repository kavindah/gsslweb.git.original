@extends('layout.theme')



@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/activities_home" class="btn membtn">Go Back</a>
                    <a href="/activities" class="btn membtn_active">GSSL Workshops</a>
                    <a href="/activities_publictalk" class="btn membtn">GSSL Public Talk</a>
                    <a href="/activities_technical_session" class="btn membtn">Technical Sessions</a>
                    <a href="activities_field_excursion" class="btn membtn">Field Excursion</a>
                    <a href="activities_annual_trip" class="btn membtn">Annual Pleasure Trip</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div style="background-color: #ffffff;padding: 20px;">
                <div><h3>GSSL Workshops</h3></div>
                Geological Society of Sri Lanka organizes various kinds of workshops such as applications of geophysical
                methods, water quality testing and geology for school teachers with the intent of science dissemination
                and knowledge transfer. Most of the workshops are for the benefit of the Society members and geology
                undergraduates. Some of the workshops are open for non-member and professionals in related fields.
                <hr>
                <br>
                @if(count($workshops)>0)
                    @foreach($workshops as $workshop)
                        <div style="font-weight: bold;font-size:15px; "><a href="workshop/{{$workshop->id}}"> {{$workshop->title}}</a></div><br><hr>


                        @if(!Auth::guest())
                            @if(Auth::user()->id==$workshop->user_id)
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/workshop/{{$workshop->id}}/edit" class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['workshopcontroller@destroy',$workshop->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    {{$workshops->render()}}

                @endif
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection