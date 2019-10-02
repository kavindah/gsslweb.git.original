@extends('layout.theme')



@section('contents')

    <div style="background-color: white;padding: 10px">
        <div class="row">
            @if(count($generalpublics)>0)
                @foreach($generalpublics as $generalpublic)
                    <div class="col-md-12" style="margin-bottom: 20px">
                        <div style="font-weight: bold;margin-bottom: 20px">{{$generalpublic->title}}</div>

                        {!!$generalpublic->body!!}
                        <hr>
                    </div>
                    @if(!Auth::guest())
                        @if(Auth::user()->id==$generalpublic->user_id)


                                    <a href="/general_public/{{$generalpublic->id}}/edit" class="btn btn-dark" style="margin-right: 10px">Edit</a>


                                    {!!Form::open(['action'=>['generalpubliccontroller@destroy',$generalpublic->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                    {!!Form::close()!!}

                        @endif
                    @endif

                @endforeach
                {{$generalpublics->render()}}
            @else
                <p>There is no posts available</p>
            @endif

        </div>
    </div>

    @include('layouts.footer')


@endsection