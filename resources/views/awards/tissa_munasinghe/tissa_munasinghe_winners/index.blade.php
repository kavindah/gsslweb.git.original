@extends('layout.theme')

@section('contents')

    <div style="background-color: #ffffff">
        <div class="row">
            <div class="col-md-4">
                <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                    <div style="border-right:solid #BDBDBD;height:auto;">
                        <a href="/tissa_munasinghe_scholarship" class="btn membtn_active">Go Back</a>


                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div style="margin-top: 10px;font-weight: bold;font-size: 18px;text-align:justify;">Tissa Munasinghe
                    Scholarship - Winners
                </div>
                <br>
                <hr>
                @if(count($tissawinners)>0)
                    @foreach($tissawinners as $tissawinner)
                        <div style="text-align: justify;width: 95%;">

                            {!!$tissawinner->body!!}
                            <hr style="width:90% ">
                        </div>
                        @if(!Auth::guest())
                            @if(Auth::user()->id==$tissawinner->user_id)
                                <div class="row">
                                    <div class="col-md-3">

                                        <a href="/tissa_munasinghe_sch_winners/{{$tissawinner->id}}/edit" class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['tissamunasinghewinnerscontroller@destroy',$tissawinner->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
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