<?php

use Illuminate\Support\Facades\Crypt; ?>
@extends('layout.theme')


@section('contents')

    <div class="row">
        <div class="col-md-12">
                @if(count($articles)>0)
                    @foreach($articles as $article)
                        @if($article)
                        <div data-wow-delay="0.5s" class="animated fadeInUp delay-7s">
                            <div style="width:450px;border-radius: 5px;float:left;margin-left: 7%;margin-top: 2%;height: 400px;background-color: white; padding: 10px">
                                {{--<div class="col-md-12"><img class="articlecover" style="height: 70%"--}}
                                                            {{--src="{{asset('/storage/articles_images/siteuploads/'.$article->article_image)}}">--}}
                                {{--</div>--}}
                                <div style="text-align: center;margin: 0;padding: 0;">
                                    {!!$article->cover_image !!}
                                </div>

                                <h4 style="color:green;margin-top: 10px">{{$article->title}}</h4>
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                <div class="articletext"> {{ strip_tags($article->body, 'p') }}</div>
                                        {{--</div>--}}
                                        {{--<br>--}}
                                        <a href="/articles/{{$article->id}}"
                                           style="font-size: 16px; color: #0040FF; cursor: pointer;float: left;margin-left: 10px">continue
                                            reading..</a>
                                        {{--<div class="articletime"><span class="glyphicon glyphicon-time"></span>&#xe023;--}}
                                            {{--&nbsp;{{$article->created_at}}</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <div style="float: right;margin-top: 2%"> {{ $articles->render() }} </div>
                @else
                    <p>No articles here</p>
                @endif
        </div>
    </div>

    @include('layouts.footer')
@endsection
	
		
	