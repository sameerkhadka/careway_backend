@extends('layouts.app')

@section('title')
<title>{{$item->basic_title}}</title>
<meta name="description" content="{{$item->basic_meta_description}}">

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$item->basic_title}}" />
<meta property="og:description" content="{{$item->basic_meta_description}}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="{{$item->basic_title}}" />
<meta property="og:image" content="{{Voyager::image($item->basic_banner)}}" />

<link rel="canonical" href="{{Request::url()}}" >
@endsection

@section('body')
    <div class="banner uk-height-medium uk-background-cover uk-position-relative" style="background-image: url('{{Voyager::image($item->basic_banner)}}');">
        <div class="uk-container">
            <div class="uk-overlay-default uk-position-cover">
                <div class="uk-position-center">
                    <ul class="uk-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><span>{{$item->basic_title}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page__intro">
        <div class="uk-container uk-container-small">
            <h1 class="pagetitle uk-text-center">{{$item->basic_title}}</h1>
            <p>
            {{$item->basic_intro}}
            </p>
        </div>
    </div>

    <section class="results">
        <div class="uk-container"> 
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s uk-child-1-1">
                @foreach($blogs as $blog)
                <div class="post">
                    <img src="{{Voyager::image($blog->banner)}}" alt="">
                    <div class="about__post">
                        <h5>{{$blog->title}}</h5>
                        <p>
                           {!!strip_tags($blog->description)!!}
                        </p>
                        <div>
                            <a href="{{$blog->link ? $blog->link : '/blogs/' . $blog->slug }}" @if($blog->link) target="blank" @endif class="button">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection