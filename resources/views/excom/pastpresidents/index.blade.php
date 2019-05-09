@extends('layout.theme')



@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/excom" class="btn membtn">Go Back</a>
                    <a href="/presentexcom" class="btn membtn">Present Executive Committee</a>
                    <a href="/pastexcom" class="btn membtn">Past Executive Committee</a>
                    <a href="/pastpresidents" class="btn membtn_active">Past Presidents</a>

                </div>
            </div>
        </div>
        <div class="col-md-9">

            <div style="background-color: #ffffff;padding: 20px;">
                <div><h3>Past Presidents</h3></div>
                <hr>
                <br>

                @if(count($pastpresidents)>0)
                    @foreach($pastpresidents as $pastpresident)
                        {!! $pastpresident->body !!}

                        @if(!Auth::guest())
                            @if(Auth::user()->id==$pastpresident->user_id)
                                <div class="row">
                                    <div class="col-md-3">

                                        <a href="/pastpresidents/{{$pastpresident->id}}/edit"
                                           class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['pastpresidentcontroller@destroy',$pastpresident->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </div>
                            @endif
                        @endif
                        <hr>
                    @endforeach
                        {{$pastpresidents->links()}}

                @else
                    <p>No members found</p>
                @endif
            </div>
        </div>
    </div>
    </div>
    @include('layouts.footer')
@endsection