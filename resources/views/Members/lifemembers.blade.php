@extends('layout.theme')


@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="members" class="btn membtn">Go Back</a>
                    <a href="lifemembers" class="btn membtn_active">Life Members</a>
                    <a href="ordinarymembers" class="btn membtn">Ordinary Members</a>
                    <a href="forignmembers" class="btn membtn">Foreign Members</a>
                    <a href="associatemembers" class="btn membtn">Associate Members</a>
                    <a href="studentmembers" class="btn membtn">Student Members</a>
                    <a href="institutionalmembers" class="btn membtn">Institutional Members</a>
                    <a href="foreignlifemembers" class="btn membtn">Foreign Life Members</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            <div style="background-color: white;padding: 15px;">
                <h4 style="margin-bottom: 30px">Life Members</h4>


                @foreach($lifemembers as $lifemember)

                    @if($lifemember->requested_membership == "lm")
                        <div style="text-align: justify;width: 95%;">
                            <div style="color:black;">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img style="width: 80px;height: 80px;border-radius: 80px;" src="{{asset('profile_photo/'.$lifemember->profile_photo)}}">
                                    </div>
                                    <div class="col-md-6">
                                        {{$lifemember->surname_options}}.&nbsp;{{$lifemember->surname}} <br>
                                        {{$lifemember->office_tp}}<br>
                                        {{$lifemember->office_email}}<br>
                                        {{$lifemember->office_address}}<br>
                                    </div>
                                </div>
                            </div>


                            <hr style="width:90% ">
                        </div>

                    @else

                        <p>Not found</p>

                    @endif
                @endforeach

            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection