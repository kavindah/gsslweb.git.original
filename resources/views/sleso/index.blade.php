@extends('layout.theme')



@section('contents')

    <div class="row">

        <div class="col-md-3">
            <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                <div style="border-right:solid #BDBDBD;height:auto;">
                    <a href="/ieso_school" class="btn membtn">Schools Olympiad</a>
                    <a href="/sleso_members" class="btn membtn">SLESCO Committee</a>
                    <a href="/sleso_past_members" class="btn membtn">Past Committee</a>
                    <a href="/slesocom" class="btn membtn">SLESO Competition</a>
                    <a href="/iesocom" class="btn membtn">International ESO Competition</a>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div style="background-color: #ffffff;padding: 20px;">
                <div><h3>Sri Lanaka Earth Science Olympiad Committee - SLESOCom</h3></div>
                <hr>
                Sri Lanka Earth Science Olympiad Committee is a subcommittee which is affiliated to the
                GSSL and was established in 2016 to administer the Sri Lanka Earth Science Olympiad competition and
                related activities. The committee is comprised of chairman (President elect/ GSSL), Secretary
                (Secretary/GSSL), National Coordinator, former National Coordinator, nominee of the President/GSSL and
                six members.

                The committee works towards developing collaborations with the international organizations in Earth
                Science education, organizing and conducting the Sri Lanka Earth Science Olympiad Competition, selecting
                candidates for the International Earth Science Olympiad competition and training them for the
                competition, organizing and conducting activities to popularize Earth Science among schools under the
                purview of GSSL.

            </div>
        </div>
    </div><br><br><br>
    @include('layouts.footer')
@endsection