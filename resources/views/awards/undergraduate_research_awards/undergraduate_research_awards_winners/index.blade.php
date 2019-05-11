@extends('layout.theme')

@section('contents')

    <div style="background-color: #ffffff">
        <div class="row">
            <div class="col-md-4">
                <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                    <div style="border-right:solid #BDBDBD;height:auto;margin: 10px;">
                        <a href="/undergraduate_research_awards" class="btn membtn_active">Go Back</a>


                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div style="margin-top: 10px;font-weight: bold;font-size: 18px;text-align:justify;">GSSL Undergraduate
                    Research Awards - Winners
                </div>
                <br>
                @if(count($undergraduateresearchawardswinners)>0)
                    @foreach($undergraduateresearchawardswinners as $undergraduateresearchawardswinner)
                        <div style="text-align: justify;width: 95%;">
                            {!!$undergraduateresearchawardswinner->body!!}
                            <hr style="width:90% ">
                        </div>
                        @if(!Auth::guest())
                            @if(Auth::user()->id==$undergraduateresearchawardswinner->user_id)
                                <div class="row">
                                    <div class="col-md-3">

                                        <a href="/research_awards_winners/{{$undergraduateresearchawardswinner->id}}/edit"
                                           class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['undergraduateresearchawardwinnerscontroller@destroy',$undergraduateresearchawardswinner->id],'method'=>'POST', 'class'=>'pull-right'])!!}
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