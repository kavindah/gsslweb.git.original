<script>
    function ConfirmDelete() {
        return confirm('Are you sure?');
    }
</script>

@extends('layout.theme')

@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/activities_home" class="btn membtn">Go Back</a>
                    <a href="/activities" class="btn membtn">GSSL Workshops</a>
                    <a href="/activities_publictalk" class="btn membtn">GSSL Public Talk</a>
                    <a href="/activities_technical_session" class="btn membtn">Technical Sessions</a>
                    <a href="/activities_field_excursion" class="btn membtn_active">Field Excursion</a>
                    <a href="activities_annual_trip" class="btn membtn">Annual Pleasure Trip</a>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="background-color: #ffffff;padding: 10px;">
            <div><h3>Field Excursions</h3></div>
            <hr>
            <div style="background-color: #ffffff;padding: 10px;height: auto;">
                @if(count($field_excursions)>0)
                    @foreach($field_excursions as $field_excursion)

                        <div style="height: auto;">
                            <div style="font-weight: bold;font-size:16px;"><a
                                        href="field_excursion/{{$field_excursion->id}}"> {{$field_excursion->title}}</a>
                            </div>
                        </div>
                        @if(!Auth::guest())
                            @if(Auth::user()->id==$field_excursion->user_id)
                                <div class="row">
                                    <div class="col-md-3">

                                        <a href="/field_excursion/{{$field_excursion->id}}/edit"
                                           class="btn membtn">Edit</a>
                                    </div>
                                    <div class="col-md-3">
                                        {!!Form::open(['action'=>['fieldexcrusioncontroller@destroy',$field_excursion->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width:95%;'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </div>
                            @endif
                        @endif
                        <hr>
                    @endforeach
                    {{$field_excursions->render()}}
                @else
                    <p>No Field Excursion found</p>
                @endif

            </div>
        </div>
    </div>@include('layouts.footer')
@endsection