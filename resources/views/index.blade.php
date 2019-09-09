<script>
    function ConfirmDelete() {
        return confirm('Are you sure?');
    }
</script>

<?php
use Illuminate\Support\Facades\Crypt;?>
@extends('layout.theme')

@section('contents')

    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/cus.css')}}">--}}
    <div class="row">
        <div class="col-md-12">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="siteimages/1.jpg" alt="First slide" height="300px">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(46, 51, 56, 0.4)!important;">
                                <h5> Feldspar quarry, Kaikawela, Matale, Sri Lanka</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/2.jpg" alt="Second slide" height="300px">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(46, 51, 56, 0.4)!important;">
                                <h5>Migmatite, Dambulla, Sri Lanka</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/3.jpg" alt="Third slide" height="300px">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(46, 51, 56, 0.4)!important;">
                                <h5>A pegmatitic vein cross cutting Bt-gneiss</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/4.jpg" alt="Third slide" height="300px">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(46, 51, 56, 0.4)!important;">
                                <h5>A felsic dyke cross cutting Hbi-bt-gneiss</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/5.jpg" alt="Third slide" height="300px">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(46, 51, 56, 0.4)!important;">
                                <h5>Weathered serpentinite, Ussangoda, Sri Lanka</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="aboutsite" style="color:black;background-color: white;padding:10px;font-weight: 300">The
                    Geological Society of Sri Lanka (GSSL) established in 1983 is the premier forum
                    dedicated to geoscientists of Sri Lanka, who are responsible for research activities leading to new
                    findings, development of related industries, and promotion of geological sciences among general
                    public.
                </div>
            </div>
        </div>
    </div>

        <br>


        <div class="row">
            <div class="col-md-4">
                <div style="background-color:#011947;width: 100%; height: 40px;border-radius:5px 5px 0px 0px;top: 0;">
                    <h5 style="padding-top: 10px; text-align: center;color: white;">Highlights</h5>
                </div>
                <div style="background-color: white;height: 350px;overflow:hidden;overflow-y: auto">
                    @if(count($highlights)>0)
                        @foreach($highlights->take(1) as $highlight)
                            <div style="padding:10px;">
                                {{--<div style="width: 100%;font-size: 16px;">{{ $focuse->title }}</div>--}}
                                <div style="text-align: center;width: 100%;">{!! $highlight->body !!}</div>
                            </div>

                            @if(!Auth::guest())
                                @if(Auth::user()->id==$highlight->user_id)
                                    <div class="row">
                                        <div class="col-md-5">

                                            <a href="/highlights/{{$highlight->id}}/edit" class="btn membtn">Edit</a>
                                        </div>
                                        <div class="col-md-5">
                                            {!!Form::open(['action'=>['highlightscontroller@destroy',$highlight->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn-danger','style'=>'width:95%;'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @else
                        <p>No highlight here</p>
                    @endif
                </div>
            </div>


            <div class="col-md-4">
                <div style="background-color:#641E16;width: 100%; height: 40px;border-radius:5px 5px 0px 0px;top: 0;">
                    <h5 style="padding-top: 10px; text-align: center;color: white;">Focus</h5>
                </div>
                <div style="background-color: white;height: 350px;overflow:hidden;overflow-y: auto">
                    @if(count($focuses)>0)
                        @foreach($focuses->take(1) as $focuse)
                            <div style="padding:10px;">
                                <div style="text-align: center;width: 100%;">{!! $focuse->body !!}</div>
                            </div>

                            @if(!Auth::guest())
                                @if(Auth::user()->id==$focuse->user_id)
                                    <div class="row">
                                        <div class="col-md-5">

                                            <a href="/focuses/{{$focuse->id}}/edit" class="btn membtn">Edit</a>
                                        </div>
                                        <div class="col-md-5">
                                            {!!Form::open(['action'=>['focusescontroller@destroy',$focuse->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn-danger','style'=>'width:95%;'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @else
                        <p>No post here</p>
                    @endif
                </div>
            </div>


            <div class="col-md-4">
                <div style="background-color: black;width: 100%; height: 40px;border-radius:5px 5px 0px 0px;top: 0;">
                    <h5 style="text-align: center;color: white;padding-top:10px;">Events</h5>
                </div>
                <div style="background-color: white;height: 350px;">
                    @if(count($calender)>0)
                        @foreach($calender->take(1) as $calenders)
                            <div style="padding: 10px">
                                <a href="/calendar_event/{{$calenders->id}}">

                                    <h3 class="display-10"><span class="badge badge-secondary"
                                                                 style="background-color:#0E6655 ;"> {{ date('d M', strtotime($calenders->start_date)) }}</span>
                                    </h3>
                                    <p style="font-weight: bold;margin-left: 5px;text-align:left;">{!! $calenders->title !!}</p>

                                    <div style="font-size: 10px;">{{ date('d M Y', strtotime($calenders->start_date)) }}</div>

                                </a>
                            </div>
                            @if(!Auth::guest())
                                @if(Auth::user()->id==$calenders->user_id)
                                    <div class="row">
                                        <div class="col-md-5">

                                            <a href="/calendar_event/{{$calenders->id}}/edit"
                                               class="btn membtn">Edit</a>
                                        </div>
                                        <div class="col-md-5">
                                            {!!Form::open(['action'=>['calendercontroller@destroy',$calenders->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn-danger','style'=>'width:95%;'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @else
                        <p>No events here</p>
                    @endif
                    <hr style="background-color:#F5F5F5;height: 10px;margin: 0">

                    <div style="bottom: 0">
                        <iframe width="100%" height="57%" style="border: none" allowFullScreen
                                src="https://www.youtube.com/embed/yzX4NTRoLVI?rel=0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')

@endsection



