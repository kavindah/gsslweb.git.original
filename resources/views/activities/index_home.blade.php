@extends('layout.theme')

@section('contents')

    <div class="row">
        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/activities" class="btn membtn">GSSL Workshops</a>
                    <a href="/activities_publictalk" class="btn membtn">GSSL Public Talk</a>
                    <a href="/activities_technical_session" class="btn membtn">Technical Sessions</a>
                    <a href="activities_field_excursion" class="btn membtn">Field Excursion</a>
                    <a href="activities_annual_trip" class="btn membtn">Annual Pleasure Trip</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div><h3>GSSL Activities</h3></div>
            <hr>
            <div style="background-color: #ffffff;padding: 20px; text-align: justify;">
                Geological Society of Sri Lanka organizes various kinds of activities such as workshops, annual
                technical session, public talks and field excursions. Workshops are intended to science dissemination,
                knowledge and skill transfer. ‘Public talks’ is a forum where distinguish speakers are invited to talk
                on interested or current topic related to geology or related discipline. ‘Annual Technical Sessions’ is
                an annual form for members to present and discuss their research findings and exchange ideas. ‘Field
                excursions’ is an event in which members explore the geology of Sri Lanka with an expert or experts.
                <br><br>


            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection