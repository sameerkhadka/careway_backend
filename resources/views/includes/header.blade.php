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
                            @foreach (menu('site','_json') as $item)
                            <li @if(Request::segment(1) == $item->url) class="uk-active" @endif><a href="{{ $item->url ? '/'.$item->url : '#'}}">{{$item->title}}</a>
                                @if(!$item->children->isEmpty())
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        @foreach ($item->children as $subitem)
                                            <li><a href="/{{ $subitem->url }}">{{$subitem->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </li>
                            @endforeach
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
                    <li @if(!Request::segment(1)) class="uk-active" @endif><a href="/">Home</a></li>
                        @foreach (menu('site','_json') as $item)
                        <li @if(Request::segment(1) == $item->url) class="uk-active" @endif><a href="{{ $item->url ? '/'.$item->url : '#'}}">{{$item->title}}</a>
                            @if(!$item->children->isEmpty())
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    @foreach ($item->children as $subitem)
                                        <li><a href="/{{ $subitem->url }}">{{$subitem->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
              </div>
            </div>
          </div>
        
    </header>