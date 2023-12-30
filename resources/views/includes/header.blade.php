<header uk-sticky="show-on-up: true; animation: uk-animation-slide-top"
        class="header uk-sticky uk-active uk-sticky-below uk-sticky-fixed">
        <nav class="uk-navbar-container uk-navbar-transparent uk-visible@m">
            <div class="uk-container">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="/" class="uk-navbar-item uk-logo">
                                    <img class="full" src="{{Voyager::image(setting('site.logo'))}}" alt="">
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="uk-navbar-center">

                        <ul class="uk-navbar-nav">
                            <li @if(!Request::segment(1)) class="uk-active" @endif><a href="/">Home</a></li>
                            <li @if(Request::segment(1) == 'hairs') class="uk-active" @endif>
                                <a href="/hairs">Hair Clinic</a>
                                @php $hairs = \App\Hair::orderBy('order')->get(); @endphp
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown">
                                        @foreach($hairs as $hair)
                                        <li><a href="/hairs/{{$hair->slug}}">{{$hair->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="/dental">Dental Aesthetics</a>
                                @php $dentals = \App\Category::orderBy('order')->get(); @endphp
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown">
                                        @foreach($dentals as $dent)
                                        <li><a href="/dental">{{$dent->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li @if(Request::segment(1) == 'opd') class="uk-active" @endif>
                                <a href="/opd">OPD</a>
                                @php $opds = \App\OpdPage::orderBy('order')->get(); @endphp
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown">
                                        @foreach($opds as $opd)
                                        <li><a href="/opd/{{$opd->slug}}">{{$opd->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li @if(Request::segment(1) == 'photo-gallery' || Request::segment(1) == 'video-gallery') class="uk-active" @endif><a>Results</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown">
                                        <li><a href="/photo-gallery">Photo gallery</a></li>
                                        <li><a href="/video-gallery">Video Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li @if(Request::segment(1) == 'faqs') class="uk-active" @endif><a href="/faqs">FAQs</a></li>
                            <li @if(Request::segment(1) == 'blogs') class="uk-active" @endif><a href="/blogs">Blogs</a></li>
                            <li @if(Request::segment(1) == 'about') class="uk-active" @endif><a href="/about">About</a></li>
                        </ul>

                    </div>

                    <div class="uk-navbar-right">
                        <a href="{{setting('contact-us.facebook')}}" class="uk-navbar-item" target="_blank">
                            <span uk-icon="icon: facebook"></span>
                        </a>

                        <a href="/contact#booking" uk-scroll class=" button">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="careway-header-mobile uk-hidden@m">
            <div class="uk-container">
                <div class="uk-navbar-container">
                    <nav uk-navbar="" class="uk-navbar">
                        <div class="uk-navbar-left uk-margin-right">
                            <a href="/" class="uk-navbar-item uk-logo">
                                <!-- <img src="{{asset('images/logo.svg')}}"> -->
                                <img src="{{Voyager::image(setting('site.logo'))}}">
                            </a>
                            <a href="tel:" target="blank" class="callonheader button">
                                +977-56490860
                            </a>
                        </div>
                        <div class="uk-navbar-right">
                            <a href="{{setting('contact-us.facebook')}}" class="uk-navbar-item" target="_blank">
                                <span uk-icon="icon: facebook"></span>
                            </a>
        
                            <a href="./contact#booking" uk-scroll class=" button">
                                Book Now
                            </a>
                            <a class="uk-navbar-item uk-navbar-toggle" href="#careway-mobile" uk-toggle="" aria-expanded="false">
                                <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"></div>
                            </a>
                        </div>
                    </nav>
                  </div>
            </div>
            <div id="careway-mobile" uk-offcanvas="" mode="slide" overlay="" class="uk-offcanvas">
              <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close uk-icon uk-close" type="button" uk-close=""></button>
                <div class="uk-panel uk-margin-top uk-margin-remove-last-child">
                    <ul class="uk-nav">
                        <li class="uk-active"><a href="/index">Home</a></li>
                        <li @if(Request::segment(1) == 'hairs') class="uk-active" @endif>
                            <a href="/hairs">Hair Clinic</a>
                            @php $hairs = \App\Hair::orderBy('order')->get(); @endphp
                            <div class="uk-navbar-dropdown uk-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav  uk-dropdown">
                                    @foreach($hairs as $hair)
                                    <li><a href="/hairs/{{$hair->slug}}">{{$hair->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/dental">Dental Aesthetics</a>
                            @php $dentals = \App\Category::orderBy('order')->get(); @endphp
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown">
                                    @foreach($dentals as $dent)
                                    <li><a href="/dental">{{$dent->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li @if(Request::segment(1) == 'opd') class="uk-active" @endif>
                            <a href="/opd">OPD</a>
                            @php $opds = \App\OpdPage::orderBy('order')->get(); @endphp
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown">
                                    @foreach($opds as $opd)
                                    <li><a href="/opd/{{$opd->slug}}">{{$opd->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li @if(Request::segment(1) == 'photo-gallery' || Request::segment(1) == 'video-gallery') class="uk-active" @endif><a>Results</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown">
                                        <li><a href="/photo-gallery">Photo gallery</a></li>
                                        <li><a href="/video-gallery">Video Gallery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li @if(Request::segment(1) == 'faqs') class="uk-active" @endif><a href="/faqs">FAQs</a></li>
                            <li @if(Request::segment(1) == 'blogs') class="uk-active" @endif><a href="/blogs">Blogs</a></li>
                            <li @if(Request::segment(1) == 'about') class="uk-active" @endif><a href="/about">About</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        
    </header>