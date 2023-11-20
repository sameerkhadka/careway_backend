@extends('layouts.app')

@section('title')
<title>{{$item->title}}</title>
<meta name="description" content="{{strip_tags($item->intro)}}">

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$item->title}}" />
<meta property="og:description" content="{{strip_tags($item->intro)}}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="{{$item->title}}" />
<meta property="og:image" content="{{Voyager::image($item->banner)}}" />

<link rel="canonical" href="{{Request::url()}}" >
@endsection

@section('body')

    <div class="banner uk-height-medium uk-background-cover uk-position-relative"
        style="background-image: url('{{Voyager::image($item->banner)}}');">
        <div class="uk-container">
            <div class="uk-overlay-default uk-position-cover">
                <div class="uk-position-center">
                    <ul class="uk-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><span>{{$item->title}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="page__intro">
        <div class="uk-container uk-container-small">
            <h1 class="pagetitle uk-text-center">Overview</h1>
            {!!$item->intro!!}
        </div>
    </div>

    <section class="intro">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-1 uk-flex-middle">
                <div class="intro__desc ">
                    <div class="uk-margin-large-right">
                        <h2 class="uk-margin-medium-bottom">{{$item->subtitle}}</h2>
                        {!!$item->subintro!!}
                    </div>
                </div>
                <div class="intro__images">
                    <div class="uk-position-relative" uk-scrollspy="cls: uk-animation-fade; target: img; delay: 500;">
                        <img class="security" src="{{Voyager::image($item->image1)}}" alt="">
                        <img class="top" src="{{Voyager::image($item->image2)}}" alt="">
                        <img class="bottom"
                            src="{{Voyager::image($item->image3)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="counter__section">
            <div class="about__desc uk-width-xlarge@xl uk-width-auto">
                <h2 class="uk-margin-medium-bottom">{{$item->sub_heading}}</h2>
                {!!$item->sub_description!!}
            </div>
            <ul class="counter__wrap">
                <li><span><div class="data">{{$item->experience}}</div>+</span>
                    <p>Years Experience</p>
                </li>
                <li><span><div class="data">{{$item->patients}}</div>+</span>
                    <p>Happy Patients</p>
                </li>
                <li><span><div class="data">{{$item->doctors}}</div></span>
                    <p>Qualified doctors</p>
                </li>
            </ul>
        </div>
        <div class="image">
            <img src="{{Voyager::image($item->image)}}" alt="">
        </div>
    </section>

    <section class="page">
        <div class="uk-container">
          {!!$item->description!!}
        </div>
    </section>


    <div class="homebook">
        <div class="uk-container">
            <div class="homebook__content  uk-background-fixed uk-background-cover uk-position-relative" style="background-image: url(../images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg);">
                <div class="uk-overlay uk-position-absolute">
                    
                    <h2 class="uk-text-center uk-margin-large-bottom">{{$item->book_title}}</h2>
                    <div class="uk-width-xlarge uk-text-center uk-margin-auto">
                        <div class="uk-margin-medium-bottom">
                            <p>{{$item->book_description}}</p>
                        </div>
                        <a class="button" href="{{$item->book_link}}">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonials__sec">
        <div class="uk-grid-match " uk-grid>
            <div class="uk-width-2-5@l uk-width-1-3@m uk-width-1-1@s">
                <div class="rev__info uk-margin-large-right">
                    <h2 class="">{{$item->patient_title}}</h2>
                    <p class="">
                    {{$item->patient_intro}}
                    </p>
                </div>
            </div>
            @if($count($reviews) > 0)
            <div class="uk-width-3-5@l uk-width-2-3@m uk-width-1-1@s">
                <div class="swiper testimonials">
                    <div class="swiper-wrapper">
                        @foreach($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testimonials-text-wrapper dark-style">
                                <p>
                                    {{$review->review}}
                                </p>
                                <div class="testimonials-slider-author"><img alt="Photo" loading="lazy"
                                        src="{{$review->image ? Voyager::image($review->image) : '/people.jpg'}}">
                                    <div>
                                        <h4 class="">{{$review->name}}</h4>
                                        <p class="">{{$review->address}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev testimonialnav">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="swiper-button-next testimonialnav">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection