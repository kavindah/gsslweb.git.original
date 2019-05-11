<?php

use Illuminate\Support\Facades\Crypt; ?>
@extends('layout.theme')


@section('contents')


    <h3 style="margin-left: 2%;">Articles</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="left_bar" style="height:auto;position:relative;  ">
                @if(count($articles)>0)
                    @foreach($articles as $article)
                        <div class="articlebody" style="width:400px;float: left;margin-left: 5%;">
                            <div class="col-md-12"><img class="articlecover" style="height: 70%"
                                                        src="/storage/articles_images/siteuploads/{{$article->article_image}}">
                            </div>
                            <h4 style="color:green;margin-top: 10px">{{$article->title}}</h4>
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
                    <div style="float: left;"> {{ $articles->links() }} </div>
                @else
                    <p>No articles here</p>
                @endif
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
	
		
	