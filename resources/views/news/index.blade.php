@extends('layout.theme')



@section('contents')
    {{--<div>--}}
        {{--<div class="row">--}}

            {{--<div class="col-md-12">--}}
                {{--<div style="margin-top: 10px;height:auto;font-weight: bold;font-size: 18px;text-align:justify;padding-left: 10px;float: left">--}}
                    {{--News--}}
                {{--</div>--}}
                {{--<br>--}}
                {{--@if(count($newss)>0)--}}
                    {{--@foreach($newss as $news)--}}
                        {{--<div style="text-align: justify;width: 100%; height: auto;background-color: #ffffff;padding: 10px;">--}}
                            {{--<div style="color:black; font-weight:bold;padding-left: 24px;">--}}
                                {{--{{$news->title}}--}}
                            {{--</div>--}}
                            {{--<div style="padding-left: 20px; text-align: justify;float: left;margin-bottom: 25px">{!!$news->body!!}</div>--}}
                            {{--<br>--}}
                            {{--<br>--}}
                            {{--<hr style="width:100% "><br>--}}
                        {{--</div>--}}
                        {{--@if(!Auth::guest())--}}
                            {{--@if(Auth::user()->id==$news->user_id)--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-3">--}}

                                        {{--<a href="/news/{{$news->id}}/edit" class="btn membtn">Edit</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--{!!Form::open(['action'=>['newscontroller@destroy',$news->id],'method'=>'POST', 'class'=>'pull-right'])!!}--}}
                                        {{--{{Form::hidden('_method','DELETE')}}--}}
                                        {{--{{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}--}}
                                        {{--{!!Form::close()!!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endif--}}
                        {{--@endif--}}

                    {{--@endforeach--}}
                    {{--{{$newss->render()}}}--}}
                {{--@else--}}
                    {{--<p>There is no posts available</p>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



    <div style="background-color: white;padding: 10px">
        <div class="row">
            @if(count($newss)>0)
                @foreach($newss as $news)
                    <div class="col-md-12" style="margin-bottom: 20px">
                        <div style="font-weight: bold;margin-bottom: 20px">{{$news->title}}</div>

                        {!!$news->body!!}
                    </div>
                    @if(!Auth::guest())
                        @if(Auth::user()->id==$news->user_id)


                                    <a href="/news/{{$news->id}}/edit" class="btn btn-dark" style="margin-right: 10px">Edit</a>


                                    {!!Form::open(['action'=>['newscontroller@destroy',$news->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                    {!!Form::close()!!}

                        @endif
                    @endif
                @endforeach
                {{$newss->render()}}
            @else
                <p>There is no posts available</p>
            @endif

        </div>
    </div>

    @include('layouts.footer')


@endsection