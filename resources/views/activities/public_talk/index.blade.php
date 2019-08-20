@extends('layout.theme')

@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/activities_home" class="btn membtn">Go Back</a>
                    <a href="/activities" class="btn membtn">GSSL Workshops</a>
                    <a href="/activities_publictalk" class="btn membtn_active">GSSL Public Talk</a>
                    <a href="/activities_technical_session" class="btn membtn">Technical Sessions</a>
                    <a href="activities_field_excursion" class="btn membtn">Field Excursion</a>
                    <a href="activities_annual_trip" class="btn membtn">Annual Pleasure Trip</a>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="background-color: #ffffff;padding: 10px;float: left">
            <div><h3>GSSL Public Talk</h3></div>
            <hr>
            <div style="background-color: #ffffff;padding: 10px;height: auto;">

                    @if(count($publictalks)>0)
                        @foreach($publictalks as $publictalk)
                <div style="height: auto;">
                            <div style="font-weight: bold;font-size:15px; ">{{$publictalk->title}}</div>
                            <div style="height: auto;background-color: #ffffff;overflow: auto;text-align: justify;">{!!$publictalk->body!!}</div>
                            <div style="color: gray; font-size:10px;">{{$publictalk->created_at}}</div>
                </div>
                @if(!Auth::guest())
                    @if(Auth::user()->id==$publictalk->user_id)
                        <div class="row">
                            <div class="col-md-3">
                                <?php $id = Crypt::encrypt($publictalk->id); ?>
                                <a href="/publictalks/{{$id}}/edit" class="btn membtn">Edit</a>
                            </div>
                            <div class="col-md-3">
                                {!!Form::open(['action'=>['publictalkcontroller@destroy',$publictalk->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                {!!Form::close()!!}
                            </div>
                        </div>
                    @endif
                @endif
                <hr>
                @endforeach
                        {{$publictalks->render()}}
                @else
                    <p>No Public Talk found</p>
                @endif

            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection