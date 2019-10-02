@extends('layout.theme')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Admin Dashboard</h3></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>

                        @endif

                        You are logged in!
                    </div>

                </div>
                <br><br>

                <div class="row">
                    <div class="col-md-12">
                        <div>Members</div>
                        <a href="/requests" class="btn btn-success" style="margin: 10px;">New Member Reqests
                            <div style="width: 20px;height: 20px; border-radius: 20px;background-color: red;float: left;margin-right:10px">
                                @if(count($notifications)>0)
                                    @foreach((array)$notifications as $notification)
                                        {{count($notification)}}

                                    @endforeach
                                @endif</div>
                        </a>
                        <hr>


                        <div>Highlight</div>
                        <a href="highlights_create" class="btn btn-success" style="margin: 10px">Add new Highlight</a>
                        <hr>


                        <div>Focus</div>
                        <a href="focuses_create" class="btn btn-success" style="margin: 10px">Add new Focus</a>
                        <hr>


                        <div>Calender Event</div>
                        <a href="calendar_event_create" class="btn btn-success" style="margin: 10px">Add new Calender
                            Event</a>
                        <hr>


                        <div>Articles</div>
                        <a href="article_create" class="btn btn-success" style="margin: 10px">Add New Articles</a>
                        <br>
                        <hr>

                        <div>News</div>
                        <a href="news_create" class="btn btn-success" style="margin: 10px">Add new News</a>
                        <hr>

                        <div>General Public</div>
                        <a href="general_public_create" class="btn btn-success" style="margin: 10px">Add new General Public</a>
                        <hr>

                        <div>Publications</div>
                        <a href="abstract_volume_create" class="btn btn-secondary" style="margin: 10px">Add new Abstract
                            Volume Title</a>
                        <a href="news_letters_create" class="btn btn-secondary" style="margin: 10px">Add new News Letter
                            Title</a>
                        <a href="special_publications_create" class="btn btn-success" style="margin: 10px">Add new
                            Special Publications</a>
                        <a href="gssl_book_create" class="btn btn-success" style="margin: 10px">Add new GSSL Book</a>

                        <hr>

                        <div>Activities</div>
                        <a href="new_workshop_create" class="btn btn-secondary" style="margin: 10px">Add new workshop
                            Title</a>
                        <a href="activities_publictalk_create" class="btn btn-success" style="margin: 10px">Add new
                            Public Talk</a>
                        <a href="activities_technical_session_create" class="btn btn-secondary" style="margin: 10px">Add
                            new Technical Session Title</a>
                        <a href="activities_field_excursion_create" class="btn btn-secondary" style="margin: 10px">Add new
                            Field Excursion Title</a>
                        <a href="activities_annual_trip_create" class="btn btn-secondary" style="margin: 10px">Add new
                            Annual Pleasure Trip Title</a>
                        <hr>
                        <div>JGSSL</div>
                        <a href="journal_editorialboard_create" class="btn btn-success" style="margin: 10px">Add Editor(Editorial Board)</a>
                        <a href="volume_create" class="btn btn-success" style="margin: 10px">Add Volume</a>
                        <a href="journal_create" class="btn btn-success" style="margin: 10px">Create new Volume of
                            Journal</a>
                        <hr>
                        <div>SLESO</div>
                        <a href="sleso_members_create" class="btn btn-success" style="margin: 10px">Add new SLESO
                            Committee Member</a>
                        <a href="sleso_past_members_create" class="btn btn-success" style="margin: 10px">Add new SLESO
                            Past Committee Member</a>

                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                        <a href="slesocom_create" class="btn btn-success" style="margin: 10px">Add new SLESO
                            Competition</a>
                            <a href="/slesocom_past_papers_create" class="btn btn-outline-success" style="margin: 10px">Add Past Papers</a>
                            <a href="/slesocom_syllabus_create" class="btn btn-outline-success" style="margin: 10px">Add Syllabus</a>
                        </div>
                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                        <a href="iesocom_create" class="btn btn-success" style="margin: 10px">Add new Inter. ESO
                            Competition</a>
                            <a href="/iesocom_past_papers_create" class="btn btn-outline-success" style="margin: 10px">Add Past Papers</a>
                            <a href="/iesocom_syllabus_create" class="btn btn-outline-success" style="margin: 10px">Add Syllabus</a>
                        </div>

                        <hr>


                        <div>Awards</div>

                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                        <a href="/undergraduate_research_awards_create" class="btn btn-success" style="margin: 10px">Add
                            new undergraduate research awards</a>
                            <a href="/research_awards_winners_create" class="btn btn-outline-success" style="margin: 10px">Add Winners</a>
                        </div>
                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                        <a href="/ljd_medal_create" class="btn btn-success" style="margin: 10px">Add new L.J.D.Fernando
                            Memorial Medal </a>
                            <a href="/ljd_medal_winners_create" class="btn btn-outline-success" style="margin: 10px">Add Winners</a>
                        </div>

                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                            <a href="/ananda_coomaraswamy_medal_create" class="btn btn-success" style="margin: 10px">Add new
                                Ananda Coomaraswamy Medal </a>
                            <a href="/ananda_coomaraswamy_medal_winners_create" class="btn btn-outline-success" style="margin: 10px">Add Winners</a>
                        </div>

                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                        <a href="/pg_cooray_medal_create" class="btn btn-success" style="margin: 10px">Add new PG Cooray
                            Medal </a>
                            <a href="/pg_cooray_medal_winners_create" class="btn btn-outline-success" style="margin: 10px">Add Winners</a>
                        </div>

                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                        <a href="/tissa_munasinghe_scholarship_create" class="btn btn-success" style="margin: 10px">Add
                            new Tissa Munasinghe Scholarship</a>
                            <a href="/tissa_munasinghe_sch_winners_create" class="btn btn-outline-success" style="margin: 10px">Add Winners</a>
                        </div>


                        <div style="border-radius: 5px; border: solid; border-width: 1px; width: auto">
                            <a href="/pw_vitanage_memorial_scholarship_create" class="btn btn-success" style="margin: 10px">Add
                            new P.W.Vitanage Memorial Scholarship</a>
                            <a href="/pw_vitanage_memorial_winners_create" class="btn btn-outline-success" style="margin: 10px">Add Winners</a>
                        </div>
                        <hr>

                        <div>Annual Sessions</div>
                        <a href="/annual_session_create" class="btn btn-success" style="margin: 10px">Add new Annual
                            Session</a>
                        <hr>

                        <div>Executive Committee (EC)</div>
                        <a href="/presentexcom_create" class="btn btn-success" style="margin: 10px">Add new Present
                            Executive Committee Member</a>
                        <a href="/pastexcom_create" class="btn btn-success" style="margin: 10px">Add new Past Executive
                            Committee Member</a>
                        <a href="/pastpresidents_create" class="btn btn-success" style="margin: 10px">Add new Past
                            president</a>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>@include('layouts.footer')
@endsection
