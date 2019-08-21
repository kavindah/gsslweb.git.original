<script>
    function ConfirmDelete() {
        return confirm('Are you sure?');
    }
</script>

@extends('layout.theme')

@section('contents')

    <div style="background-color: #ffffff">
        <div class="row">
            <div class="col-md-3">
                <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                    <div style="border-right:solid #BDBDBD;height:auto;margin: 10px;">
                        <a href="journalgssl" class="btn membtn">Back</a>
                        <a href="journal_editorialboard" class="btn membtn">Editorial Board</a>
                        <a href="journal_browse" class="btn membtn_active">Browse</a>
                        <a href="journal_authorguidlines" class="btn membtn">Author Guidelines</a>
                        <a href="journal_submit" class="btn membtn">Submit</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">

                <h4 style="margin-top: 20px;">Online JGSSL Volumes </h4>
                @if(count($journals)>0)
                    @foreach($journals as $journal)
                        <a style="text-decoration:none;color: black;" href="volume/{{$journal->id}}">
                            <div style="font-size:15px; ">
                                <div class="articlebody journalbody" style="width: 95%;">
                                    <b>{{$journal->volume}}</b>
                                    <br>
                                    <div style="color:#7F8C8D; font-size:10px;">{{$journal->created_at}}</div>
                                </div>
                            </div>
                        </a>

                        @if(!Auth::guest())
                            @if(Auth::user()->id==$journal->user_id)
                                <div class="row">
                                    <a href="/volume/{{$journal->id}}/edit" class="btn btn-dark"
                                       style="margin-right: 10px;height: 30px">Edit</a>

                                    {!!Form::open(['action'=>['volumecontroller@destroy',$journal->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;height:30px'])}}
                                    {!!Form::close()!!}
                                </div>

                            @endif
                        @endif

                    @endforeach
                    <div style="margin-top: 60px">{{$journals->render()}}</div>

                @else
                    <p>No Journal found</p>
                @endif
            </div>
        </div>
    </div>
    {{--@if(count($journals)>0)--}}
    {{--@foreach($journals as $journal)--}}
    {{--<a style="text-decoration:none;color: black;" href="volume/{{$journal->id}}">--}}
    {{--<div style="font-size:15px; ">--}}
    {{--<div class="articlebody journalbody" style="width: 95%;">--}}
    {{--<b>{{$journal->volume}}</b>--}}
    {{--<br>--}}
    {{--<div style="color:#7F8C8D; font-size:10px;">{{$journal->created_at}}</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--@if(!Auth::guest())--}}
    {{--@if(Auth::user()->id==$journal->user_id)--}}

    {{--<a href="/volume/{{$journal->id}}/edit" class="btn btn-dark">Edit</a>--}}

    {{--{!!Form::open(['action'=>['volumecontroller@destroy',$journal->id],'method'=>'POST', 'class'=>'pull-right'])!!}--}}
    {{--{{Form::hidden('_method','DELETE')}}--}}
    {{--{{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}--}}
    {{--{!!Form::close()!!}--}}

    {{--@endif--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--<br><br>--}}
    {{--</div>--}}

    {{--@endforeach--}}
    {{--@else--}}
    {{--<p>No Journal found</p>--}}
    {{--@endif--}}

    @include('layouts.footer')
@endsection