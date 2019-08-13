<script>
    function ConfirmDelete() {
        return confirm('Are you sure?');
    }
</script>


<?php
use Illuminate\Support\Facades\Crypt;?>
@extends('layout.theme')


@section('contents')

    <link rel="stylesheet" type="text/css" href="{{asset('css/cus.css')}}">


    <div class="row">
        <div class="col-md-12">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="siteimages/1.jpg" alt="First slide" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/2.jpg" alt="Second slide" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/3.jpg" alt="Third slide" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/4.jpg" alt="Third slide" height="300px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="siteimages/5.jpg" alt="Third slide" height="300px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="aboutsite" style="color:black;background-color: white;padding:10px;font-weight: 300">The Geological Society of Sri Lanka (GSSL) established in 1983 is the premier forum
                    dedicated to geoscientists of Sri Lanka, who are responsible for research activities leading to new
                    findings, development of related industries, and promotion of geological sciences among general public.
                </div>
        </div>
    </div>


        <br>


        <div class="row" style="margin-left: 3px">
            <div class="col-md-4">
                <div style="background-color:#011947;width: 100%; height: 40px;border-radius:5px 5px 0px 0px;top: 0;">
                    <h5 style="padding-top: 5px; text-align: center;color: white;">New Articles</h5>
                </div>
                <div style="background-color: white;height: 350px;">
                @if(count($articles)>0)
                    @foreach($articles->take(1) as $article)
                        <div class="articlebodynew" style="padding: 10px;">
                            <h5 style="color:green">{{$article->title}}</h5>
                            <div class="col-md-12 p-0"><img class="articlecover" style="margin-bottom: 10px;"
                                                        src="/storage/articles_images/siteuploads/{{$article->article_image}}">
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="articletext">{!!$article->body!!}
                                    </div>
                                    <br>
                                    <a href="/articles/{{$article->id}}"
                                       style="font-size: 16px; color: #0040FF; cursor: pointer;float: left;">continue
                                        reading..</a>
                                    <div class="articletime"><span class="glyphicon glyphicon-time"></span>&#xe023;
                                        &nbsp;{{$article->created_at}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No articles here</p>
                @endif
                </div>
            </div>


            <div class="col-md-4">
                <div style="background-color:#641E16;width: 100%; height: 40px;border-radius:5px 5px 0px 0px;top: 0;">
                    <h5 style="padding-top: 5px; text-align: center;color: white;">Focuses</h5>
                </div>
                <div style="background-color: white;height: 350px">
                    @if(count($focuses)>0)
                        @foreach($focuses->take(1) as $focuse)
                            <div style="padding:10px;">
                                <div style="width: 100%;color: blue;font-size: 16px;">{{ $focuse->title }}</div>
                                <div style="text-align: center;width: 100%;">{!! $focuse->body !!}</div>
                            </div>

                            @if(!Auth::guest())
                                @if(Auth::user()->id==$focuse->user_id)
                                    <div class="row">
                                        <div class="col-md-5">

                                            <a href="/focuses/{{$focuse->id}}/edit" class="btn membtn">Edit</a>
                                        </div>
                                        <div class="col-md-5">
                                            {!!Form::open(['action'=>['focusescontroller@destroy',$focuse->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn-danger','style'=>'width:95%;'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @else
                        <p>No focuses here</p>
                    @endif
                </div>
            </div>



            <div class="col-md-4">
                <div style="background-color: black;width: 100%; height: 40px;border-radius:5px 5px 0px 0px;top: 0;">
                    <h5 style="text-align: center;color: white;padding-top:5px;">New Events</h5>
                </div>
                <div style="background-color: white;height: 350px">
                    @if(count($calender)>0)
                        @foreach($calender->take(1) as $calenders)
                            <div style="padding: 10px">
                                <a href="/calendar_event/{{$calenders->id}}">

                                    <h3 class="display-10"><span class="badge badge-secondary"
                                                                 style="background-color:#0E6655 ;"> {{ date('d M', strtotime($calenders->start_date)) }}</span>
                                    </h3>
                                    <p style="font-weight: bold;margin-left: 5px;text-align:left;">{!! $calenders->title !!}</p>

                                    <div style="font-size: 10px;">{{ date('d M Y', strtotime($calenders->start_date)) }}</div>

                                </a>
                            </div>
                            @if(!Auth::guest())
                                @if(Auth::user()->id==$calenders->user_id)
                                    <div class="row">
                                        <div class="col-md-5">

                                            <a href="/calendar_event/{{$calenders->id}}/edit" class="btn membtn">Edit</a>
                                        </div>
                                        <div class="col-md-5">
                                            {!!Form::open(['action'=>['calendercontroller@destroy',$calenders->id],'method'=>'POST', 'class'=>'pull-right','onsubmit' => 'return ConfirmDelete()'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn-danger','style'=>'width:95%;'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @else
                        <p>No events here</p>
                    @endif
                        <hr style="background-color:#F5F5F5;height: 10px;margin: 0">

                        <div  style="bottom: 0">
                            <iframe width="100%" height="62%"
                                    src="https://www.youtube.com/embed/yzX4NTRoLVI?rel=0">
                            </iframe>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!--  <div class="right_bar" style="padding: 5px; border-radius: 8px;box-shadow: 0 0 2px 0.5px #D9E0E1;">
  <a href="news_letters">
     <div class="block">
          <i class="hovicon effect-8"><img src="siteimages/h1.png" width="100%" target='_blank'></i>
          <p>GSSL Newsletters</p>
      </div> </a>

        <a href="journalgssl">
         <div class="block">

          <i class="hovicon effect-8"><img src="siteimages/blog.png" width="100%"></i>
          <p style="text-align:justify;margin-left:20px;">GSSL Journal</p>
      </div> </a>

      <a href="gssl_book">
       <div class="block">
          <i class="hovicon effect-8"><img src="siteimages/book.jpg" width="100%"></i>
          <p style="text-align:justify;margin-left:20px;">GSSL Book</p>
      </div> </a>

      <a href="special_publications">
      <div class="block">
          <i class="hovicon effect-8"><img src="siteimages/journal.png" width="100%"></i>
          <p>Special Publications</p>
      </div> </a>

    </div> -->

    <br>
    <div class="row foot">

        <div class="col-md-2">
            <div style="font-size: 20px">Publications<br><hr></div>
            <a href="abstract_volume">&nbsp; Abstract Volumes</a><br>
            <a href="news_letters">&nbsp; News Letters</a><br>
            <a href="special_publications">&nbsp; Special Publications</a><br>
            <a href="gssl_book">&nbsp; Proposed GSSL Book</a><br>

        </div>
        <div class="col-md-2">
            <div style="font-size: 20px">Activities<br><hr></div>
            <a href="activities">&nbsp; GSSL Workshops</a><br>
            <a href="activities_publictalk">&nbsp; GSSL Public Talk</a><br>
            <a href="activities_technical_session">&nbsp; Technical Sessions</a><br>
            <a href="activities_field_excursion">&nbsp; Field Excursion</a><br>
            <a href="activities_annual_trip">&nbsp; Annual Preasure Trip</a><br>
        </div>
        <div class="col-md-2">
            <div style="font-size: 20px">JGSSL<br><hr></div>
            <a href="journal_editorialboard">&nbsp; Editorial Board</a><br>
            <a href="journal_browse">&nbsp; Browse</a><br>
            <a href="journal_authorguidlines">&nbsp; Author Guidelines</a><br>
            <a href="">&nbsp; Submit</a><br>
        </div>
        <div class="col-md-2">
            <div style="font-size: 20px">SLESO<br><hr></div>
            <a href="">&nbsp; Committee</a><br>
            <a href="">&nbsp; Past Committee</a><br>
            <a href="">&nbsp; SLESO Competition</a><br>
            <a href="">&nbsp; ESO Competition</a><br>
        </div>
        <div class="col-md-2">
            <div style="font-size: 20px">Awards<br><hr></div>
            <a href="tissa_munasinghe_scholarship">&nbsp; Tissa Munasinghe</a><br>
            <a href="pw_vitanage_memorial_scholarship">&nbsp; P.W.Vitanage</a><br>
            <a href="undergraduate_research_awards">&nbsp; Undergraduate Research</a><br>
            <a href="pg_cooray_medal">&nbsp; PG Cooray</a><br>
            <a href="ljd_medal">&nbsp; L.J.D.Fernando</a><br>
            <a href="ananda_coomaraswamy_medal">&nbsp; Ananda Coomaraswamy</a><br>
        </div>
        <div class="col-md-2">
            <div style="font-size: 20px">Members<br><hr></div>
            <a href="lifemembers">&nbsp; Life Members</a><br>
            <a href="ordinarymembers">&nbsp; Ordinary Members</a><br>
            <a href="forignmembers">&nbsp; Foreign Members</a><br>
            <a href="associatemembers">&nbsp; Associate Members</a><br>
        </div>

        <br>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <a href="https://www.facebook.com/groups/gssl2014/" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-rss"></a>
                    <div>Site Visitors:</div>
                    <div id="sfcfb93a7wruglgwflu4p12t6683xrymraj"></div>
                    <script type="text/javascript"
                            src="https://counter5.wheredoyoucomefrom.ovh/private/counter.js?c=fb93a7wruglgwflu4p12t6683xrymraj&down=async"
                            async></script>
                    <noscript><a href="https://www.freecounterstat.com" title="website hit counter"><img
                                    src="https://counter5.wheredoyoucomefrom.ovh/private/freecounterstat.php?c=fb93a7wruglgwflu4p12t6683xrymraj"
                                    border="0" title="website hit counter" alt="website hit counter"></a></noscript>


                    <div style="display: none;"><a href="https://www.freecounterstat.com"
                                                   title="website hit counter"><img
                                    src="https://counter5.wheredoyoucomefrom.ovh/private/freecounterstat.php?c=fb93a7wruglgwflu4p12t6683xrymraj"
                                    border="0" title="website hit counter" alt="website hit counter"></a></div>

                </center>


                <div class="row">
                    <div class="col-md-12">
                        <label style="padding: 20px;text-align: center;font-size: 10px;">Copyright © 2018. This Site is
                            Maintained by Geological Society of Sri Lanka (GSSL). The GSSL website is being regularly
                            updated and improved. If you have any comments and suggestions, please email the Co- Editors
                            of the GSSL Dr. Lalindra Ranaweera (laliwr@yahoo.com) or Dr. Nadeesha Koralegedara
                            (nad2ko@gmail.com) </label>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection



