@extends('layout.theme')

@section('contents')

    <div class="row">

        <div class="col-md-12" style="background-color: #ffffff;padding: 10px;">
            <div><h3>Annual Sessions</h3></div>
            <hr>
            <div style="background-color: #ffffff;padding: 10px;height: auto;">
                <div style="height: auto;">
                    @if(count($annual_sessions)>0)
                        @foreach($annual_sessions as $annual_session)
                            <div style="font-weight: bold;font-size:16px; ">{{$annual_session->title}}</div>
                            {!! $annual_session->body !!}

                @if(!Auth::guest())
                    @if(Auth::user()->id==$annual_session->user_id)
                        <div class="row">
                            <div class="col-md-3">

                                <a href="/annual_session/{{$annual_session->id}}/edit" class="btn membtn">Edit</a>
                            </div>
                            <div class="col-md-3">
                                {!!Form::open(['action'=>['annualsessioncontroller@destroy',$annual_session->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                {!!Form::close()!!}
                            </div>
                        </div>
                    @endif
                @endif
                <hr>
                @endforeach
                @else
                    <p>No Annual Session found</p>
                @endif
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
