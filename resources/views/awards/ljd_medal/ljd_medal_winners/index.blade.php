@extends('layout.theme')

@section('contents')

    <div style="background-color: #ffffff">
        <div class="row">
            <div class="col-md-4">
                <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                    <div style="border-right:solid #BDBDBD;height:auto;margin: 10px;">
                        <a href="/ljd_medal" class="btn membtn">Go Back</a>


                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div style="margin-top: 10px;font-weight: bold;font-size: 18px;text-align:justify;">L.J.D.Fernando
                    Memorial Medal - Winners
                </div>
                <br>

                @if(count($ljd_medal_winners)>0)
                    @foreach($ljd_medal_winners as $ljd_medal_winner)
                        <div style="text-align: justify;width: 95%;">

                            {!!$ljd_medal_winner->body!!}
                            <hr style="width:90% ">
                        </div>
                        @if(!Auth::guest())
                            @if(Auth::user()->id==$ljd_medal_winner->user_id)
                                <div class="row">
                                    <div class="col-md-3">

                                        <a href="/ljd_medal_winners/{{$ljd_medal_winner->id}}/edit" class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['ljdmedalwinnerscontroller@destroy',$ljd_medal_winner->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
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