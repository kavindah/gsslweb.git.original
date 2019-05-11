@extends('layout.theme')

@section('contents')

    <div style="background-color: #ffffff;margin: 10px">
        <div class="row">
            <div class="col-md-4">
                <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                    <div style="border-right:solid #BDBDBD;height:auto;">
                        <a href="/pg_cooray_medal" class="btn membtn">Go Back</a>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div style="margin-top: 10px;font-weight: bold;font-size: 18px;text-align:justify;">PG Cooray Medal -
                    Winners
                </div>
                <br>
                <hr>
                @if(count($pgwinners)>0)
                    @foreach($pgwinners as $pgwinner)
                        <div style="text-align: justify;width: 95%;">

                            {!!$pgwinner->body!!}
                            <hr style="width:90% ">
                        </div>
                            @if(!Auth::guest())
                                @if(Auth::user()->id==$pgwinner->user_id)
                                    <div class="row">
                                        <div class="col-md-3">

                                            <a href="/pg_cooray_medal_winners/{{$pgwinner->id}}/edit"
                                               class="btn membtn">Edit</a>
                                        </div>
                                        <div class="col-md-3">
                                            {!!Form::open(['action'=>['pgwinnerscontroller@destroy',$pgwinner->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </div>
                                @endif
                            @endif

                            @endforeach
                            @else
                                <p>There is no posts available</p>
                            @endif
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection