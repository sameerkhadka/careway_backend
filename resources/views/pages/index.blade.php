@extends('layouts.app')

@section('title')
<title>{{setting('site.title')}}</title>
<meta name="description" content="{{setting('site.description')}}">

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{setting('site.title')}}" />
<meta property="og:description" content="{{setting('site.description')}}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="Careway Medical Clinic" />
<meta property="og:image" content="{{Voyager::image(setting('site.og'))}}" />

<link rel="canonical" href="{{Request::url()}}" >
@endsection

@section('body')
    <div class="share uk-position-fixed">
        <a href="tel:{{setting('contact-us.phone')}}" target="blank">
            <img src="{{asset('images/phone.png')}}" alt="">
        </a>
        <a href="viber://chat?number={{setting('contact-us.viber')}}" target="blank">
            <img src="{{asset('images/viber.png')}}" alt="">
        </a>
        <a href="https://wa.me/{{setting('contact-us.whatsapp')}}" target="blank"> 
            <img src="{{asset('images/whatsapp.png')}}" alt="">
        </a>
        <a href="{{setting('contact-us.messenger')}}" target="blank"> 
            <img src="{{asset('images/messenger.png')}}" alt="">
        </a>
    </div>

    <div class="home__video">
        <div class="video__wrap uk-position-relative">
            
            <video class="uk-visible@s" src="storage/{{json_decode($content->video)[0]->download_link}}" width="1920" height="1080" uk-video="automute: true" autoplay loop preload="" playsinline></video>
            <video class="uk-hidden@s" src="storage/{{json_decode($content->video)[0]->download_link}}" width="1920" height="1080" uk-video="automute: true" autoplay loop preload="" playsinline></video>
            <div class="results__cta uk-hidden@s uk-position-absolute">
                <a href="/images" target="blank">
                    <img src="{{asset('images/image-gallery (1).png')}}" alt="">
                </a>
                <a href="/videos" target="blank">
                    <img src="{{asset('images/play (4).png')}}" alt="">
                </a>
            </div>
        </div>
    </div>

    <section class="intro">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-2@s uk-flex-middle">
                <div class="intro__desc">
                    <div class="uk-margin-large-right">
                        <h2 class="uk-margin-medium-bottom">{{$about->subtitle}}</h2>
                       {!!$about->subintro!!}
                        <a href="/about" class="button">Learn More</a>
                    </div>
                </div>
                <div class="intro__images">
                    <div class="uk-position-relative" uk-scrollspy="cls: uk-animation-fade; target: img; delay: 500;">
                        <img class="security" src="{{Voyager::image($about->image1)}}" alt="">
                        <img class="top" src="{{Voyager::image($about->image2)}}" alt="">
                        <img class="bottom"
                            src="{{Voyager::image($about->image3)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service__tab">
        <div class="uk-container">
            <ul uk-switcher class="servicetab__wrap flex__wrap">
                @foreach($services as $service)
                <li @if($loop->first) class="uk-active" @endif><a href="">{{$service->menu_title}}</a></li>
                @endforeach
                <!-- <li><a href="">Skin</a></li>
                <li><a href="">Dental</a></li>
                <li><a href="">ENT</a></li> -->
            </ul>

            <ul class="uk-switcher uk-margin">
                @foreach($services as $service)
                <li>
                    <div class="uk-column-1-2@s">
                        <div class="" uk-scrollspy="cls: uk-animation-slide-right; outview">
                            <img src="{{Voyager::image($service->image)}}"
                                alt="">
                        </div>
                        <div class="" uk-scrollspy="cls: uk-animation-fade; delay: 400">
                            <h2>{{$service->title}}</h2>
                            <div class="servicetab__desc">
                            {!!$service->description!!}
                            </div>
                            <a href="{{$service->link}}" class="button">Learn More</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    @if(count(json_decode($content->results)) > 0)
    <!-- Results -->
    <section>
        <div class="uk-container">
            <h2 class="uk-text-center uk-margin-large-bottom">Hair Transplant Results</h2>
        </div>
        <div class="swiper beforeafter">
            <div class="swiper-wrapper">
                @foreach(json_decode($content->results) as $res)
                <div class="swiper-slide">
                    <img src="{{Voyager::image($res)}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <div class="homebook">
        <div class="uk-container">
            <div class="homebook__content  uk-background-fixed uk-background-cover uk-position-relative" style="background-image: url(../images/medical-professional-with-gloves-draws-dotted-line-head-balding-man.jpg);">
                <div class="uk-overlay uk-position-absolute">
                    
                    <h2 class="uk-text-center uk-margin-large-bottom">{{$about->book_title}}</h2>
                    <div class="width600 uk-text-center uk-margin-auto">
                        <div class="uk-margin-medium-bottom">
                            <p>{{$about->book_description}}</p>
                        </div>
                        <a class="button" href="{{$about->book_link}}">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonials__sec">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-2-5@l uk-width-1-3@m uk-width-1-1@s">
                <div class="rev__info uk-margin-large-right">
                    <h2 class="">{{$about->patient_title}}</h2>
                    <p class="">
                       {{$about->patient_intro}}
                    </p>
                </div>
            </div>
            @if(count($reviews) > 0)
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

    <!-- Blogs -->
    <section>
        <div class="uk-container">
            <div class="uk-flex uk-flex-between uk-flex-top">
                <h2 class="uk-margin-large-bottom">Blogs</h2>
                <div class="button"> <a href="/blogs"> See All </a></div>
            </div>
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-1">
                @foreach($blogs as $blog)
                <div class="blog__wrap">
                    <div class="blog uk-position-relative">
                        <img src="{{Voyager::image($blog->banner)}}"
                            alt="">
                        <div class="uk-overlay uk-overlay-default uk-position-absolute">
                            <h5>{{$blog->title}}</h5>
                            <p>
                               {{strip_tags($blog->description)}}
                            </p>
                            <div>
                                <a href="/blogs/{{$blog->slug}}" class="button">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
