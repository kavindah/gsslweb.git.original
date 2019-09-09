<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function article_published()
    {
        return view('article_published');
    }

    public function members()
    {
        return view('members');
    }

    public function journalgssl()
    {
        return view('journal.index');
    }

    public function journal_editorialboard()
    {
        return view('journal.editorialboard');
    }

    public function journal_authorguidlines()
    {
        return view('journal.authorguidlines');
    }

    public function journal_browse()
    {
        return view('journal.browse.index');
    }

    public function membersRequests()
    {
        return view('membersRequests');
    }

    public function editreq()
    {
        return view('editreq');
    }

    public function articleindex()
    {
        return view('articles.create');
    }

    public function news()
    {
        return view('news.index');
    }

    public function news_create()
    {
        return view('news.create');
    }

    public function activities_home()
    {
        return view('activities.index_home');
    }

    public function activities()
    {
        return view('activities.index');
    }

    public function activities_workshop()
    {
        return view('activities.create');
    }

    public function activities_publictalk()
    {
        return view('activities.public_talk.index');
    }

    public function activities_publictalk_create()
    {
        return view('activities.public_talk.create');
    }

    public function annual_session()
    {
        return view('annual_session.index');
    }

    public function annual_session_create()
    {
        return view('annual_session.create');
    }

    public function activities_technical_session()
    {
        return view('activities.technical_session.index');
    }

    public function activities_technical_session_create()
    {
        return view('activities.technical_session.create');
    }

    public function activities_field_excursion()
    {
        return view('activities.field_excursion.index');
    }

    public function activities_field_excursion_create()
    {
        return view('activities.field_excursion.create');
    }

    public function activities_annual_trip()
    {
        return view('activities.annual_trip.index');
    }

    public function activities_annual_trip_create()
    {
        return view('activities.annual_trip.create');
    }

    public function journal_create()
    {
        return view('journal.browse.create');
    }

    public function volume_create()
    {
        return view('journal.browse.volume.create');
    }

    public function awards()
    {
        return view('awards.index');
    }

    public function undergraduate_research_awards()
    {
        return view('awards.undergraduate_research_awards.index');
    }

    public function undergraduate_research_awards_create()
    {
        return view('awards.undergraduate_research_awards.create');
    }

    public function ljd_medal()
    {
        return view('awards.ljd_medal.index');
    }

    public function ljd_medal_create()
    {
        return view('awards.ljd_medal.create');
    }

    public function ananda_coomaraswamy_medal()
    {
        return view('awards.ananda_coomaraswamy_medal.index');
    }

    public function ananda_coomaraswamy_medal_create()
    {
        return view('awards.ananda_coomaraswamy_medal.create');
    }

    public function pg_cooray_medal()
    {
        return view('awards.pg_cooray_medal.index');
    }

    public function pg_cooray_medal_create()
    {
        return view('awards.pg_cooray_medal.create');
    }

    public function tissa_munasinghe_scholarship()
    {
        return view('awards.tissa_munasinghe.index');
    }

    public function tissa_munasinghe_scholarship_create()
    {
        return view('awards.tissa_munasinghe.create');
    }

    public function pw_vitanage_memorial_scholarship()
    {
        return view('awards.pw_vitanage_memorial_scholarship.index');
    }

    public function pw_vitanage_memorial_scholarship_create()
    {
        return view('awards.pw_vitanage_memorial_scholarship.create');
    }

    public function publications()
    {
        return view('publications.index');
    }

    public function abstract_volume()
    {
        return view('publications.abstract_volume.index');
    }

    public function abstract_volume_create()
    {
        return view('publications.abstract_volume.create');
    }

    public function news_letters()
    {
        return view('publications.news_letters.index');
    }

    public function news_letters_create()
    {
        return view('publications.news_letters.create');
    }

    public function special_publications()
    {
        return view('publications.special_publications.index');
    }

    public function special_publications_create()
    {
        return view('publications.special_publications.create');
    }

    public function gssl_book()
    {
        return view('publications.gssl_book.index');
    }

    public function gssl_book_create()
    {
        return view('publications.gssl_book.create');
    }

    public function sleso()
    {
        return view('sleso.index');
    }

    public function slesocom()
    {
        return view('sleso.slesocom.index');
    }

    public function slesocom_create()
    {
        return view('sleso.slesocom.create');
    }

    public function iesocom()
    {
        return view('sleso.iesocom.index');
    }

    public function iesocom_create()
    {
        return view('sleso.iesocom.create');
    }

    public function sleso_members()
    {
        return view('sleso.sleso_members.index');
    }

    public function sleso_members_create()
    {
        return view('sleso.sleso_members.create');
    }

    public function sleso_past_members()
    {
        return view('sleso.sleso_past_members.index');
    }

    public function sleso_past_members_create()
    {
        return view('sleso.sleso_past_members.create');
    }

    public function presentexcom()
    {
        return view('excom.presentexcom.index');
    }

    public function excom()
    {
        return view('excom.index');
    }

    public function pastexcom()
    {
        return view('excom.pastexcom.index');
    }

    public function pastexcom_create()
    {
        return view('excom.pastexcom.create');
    }

    public function pastpresidents()
    {
        return view('excom.pastpresidents.index');
    }

    public function pastpresidents_create()
    {
        return view('excom.pastpresidents.create');
    }

    public function ananda_coomaraswamy_medal_winners()
    {
        return view('awards.ananda_coomaraswamy_medal.ananda_coomaraswamy_medal_winners.index');
    }

    public function ananda_coomaraswamy_medal_winners_create()
    {
        return view('awards.ananda_coomaraswamy_medal.ananda_coomaraswamy_medal_winners.create');
    }

    public function ljd_medal_winners()
    {
        return view('awards.ljd_medal.ljd_medal_winners.index');
    }

    public function ljd_medal_winners_create()
    {
        return view('awards.ljd_medal.ljd_medal_winners.create');
    }

    public function pg_cooray_medal_winners()
    {
        return view('awards.pg_cooray_medal.pg_cooray_medal_winners.index');
    }

    public function pg_cooray_medal_winners_create()
    {
        return view('awards.pg_cooray_medal.pg_cooray_medal_winners.create');
    }

    public function pw_vitanage_memorial_winners()
    {
        return view('awards.pw_vitanage_memorial_scholarship.pw_vitanage_memorial_scholarship_winners.index');
    }

    public function pw_vitanage_memorial_winners_create()
    {
        return view('awards.pw_vitanage_memorial_scholarship.pw_vitanage_memorial_scholarship_winners.create');
    }

    public function tissa_munasinghe_sch_winners()
    {
        return view('awards.tissa_munasinghe.tissa_munasinghe_winners.index');
    }

    public function tissa_munasinghe_sch_winners_create()
    {
        return view('awards.tissa_munasinghe.tissa_munasinghe_winners.create');
    }

    public function research_awards_winners()
    {
        return view('awards.undergraduate_research_awards.undergraduate_research_awards_winners.index');
    }

    public function research_awards_winners_create()
    {
        return view('awards.undergraduate_research_awards.undergraduate_research_awards_winners.create');
    }
    public function slesocom_past_papers()
    {
        return view('sleso.slesocom.slesocom_pastpapers.index');
    }

    public function slesocom_past_papers_create()
    {
        return view('sleso.slesocom.slesocom_pastpapers.create');
    }

    public function slesocom_syllabus()
    {
        return view('sleso.slesocom.slesocom_syllabus.index');
    }

    public function slesocom_syllabus_create()
    {
        return view('sleso.slesocom.slesocom_syllabus.create');
    }
    public function iesocom_past_papers()
    {
        return view('sleso.iesocom.iesocom_pastpapers.index');
    }

    public function iesocom_past_papers_create()
    {
        return view('sleso.iesocom.iesocom_pastpapers.create');
    }
    public function iesocom_syllabus()
    {
        return view('sleso.iesocom.iesocom_syllabus.index');
    }

    public function iesocom_syllabus_create()
    {
        return view('sleso.iesocom.iesocom_syllabus.create');
    }

    public function presentexcom_create()
    {
        return view('excom.presentexcom.create');
    }

    public function lifemembers()
    {
        return view('Members.lifemembers');
    }

    public function ordinarymembers()
    {
        return view('Members.ordinarymembers');
    }

    public function forignmembers()
    {
        return view('Members.forignmembers');
    }

    public function associatemembers()
    {
        return view('Members.associatemembers');
    }

    public function studentmembers()
    {
        return view('Members.studentmembers');
    }

    public function institutionalmembers()
    {
        return view('Members.institutionalmembers');
    }

    public function foreignlifemembers()
    {
        return view('Members.foreignlifemembers');
    }

    public function calendar_event_create()
    {
        return view('calendar.create');
    }

    public function focuses_create()
    {
        return view('focuses.create');
    }

    public function highlights_create()
    {
        return view('highlights.create');
    }
    public function journal_editorialboard_create()
    {
        return view('editorialboard.create');
    }

    public function journal_submit()
    {
        return view('journal.browse.submit.index');
    }

    public function user_edit()
    {
        return view('user.edit');
    }
    public function contact_us()
    {
        return view('contact_us.index');
    }


}

