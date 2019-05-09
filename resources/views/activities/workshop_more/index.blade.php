@extends('layout.theme')

@section('contents')
    <div class="container">
        <div class="col-md-12">
            <div style="margin-top: 10px;font-weight: bold;font-size: 18px;text-align:justify;">WorkShops</div>
            <br>
            @if(!Auth::guest())
                {{--@if(Auth::user()->id==$abvolumesmore->user_id)--}}


                {!! Form::open(['action'=>['workshopmorecontroller@store',$id],'method'=>'POST','enctype'=>'multipart/form-data' ]) !!}

                <div class="form-group" style="display: none;">


                    {{ Form::label('workshop_id','Workshop ID')}}

                    {{ Form::text('workshop_id',$id,['class'=>'form-control', 'placeholder'=>'Title'])}}

                </div>
                <div class="form-group">

                    {{ Form::label('title','Title')}}
                    {{ Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
                </div>

                <div class="form-group">
                    {{ Form::label('body','Content')}}
                    {{ Form::textarea('body','',['class'=>'form-control my-editor', 'placeholder'=>'Abstract'])}}
                </div>

                <br>


                <br>
                {{Form::submit('Submit',['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            @endif
            {{--@endif--}}
            <div style="text-align: justify;width: 95%; background-color: white;padding: 10px">

                @if(count($workshopmores)>0)

                    @foreach($workshopmores as $workshopmore)
                        <div style="color:black; font-weight:bold;">
                            {!!$workshopmore->title!!}
                        </div>
                        {!!$workshopmore->body!!}



                        @if(!Auth::guest())
                            @if(Auth::user()->id==$workshopmore->user_id)
                                <div class="row">
                                    <div class="col-md-3">

                                        <a href="/workshop_more/{{$workshopmore->id}}/edit" class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['workshopmorecontroller@destroy',$workshopmore->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </div>
                            @endif
                        @endif

                    @endforeach
                @endif
                <hr style="width:90% ">
            </div>

        </div>
    </div>
    @include('layouts.footer')
@endsection