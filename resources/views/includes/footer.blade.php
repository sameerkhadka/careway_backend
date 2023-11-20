    <footer>
        <div class="uk-container">
            <div class="footer__top uk-text-center">
                <h2>Contact</h2>
                <a href="/contact" class="button">Let's Connect</a>
            </div>
            <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-1">
                <div class="footer__wrap">
                    <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-1 uk-flex-between@s uk-flex-bottom">
                        <div class="col">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{Voyager::image(setting('site.logo'))}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <ul class="uk-flex">
                                <li><a href="{{setting('contact-us.facebook')}}" target="_blank"><span
                                            uk-icon="icon: facebook"></span></a></li>
                                <li><a href="tel:{{setting('contact-us.phone')}}"><span uk-icon="icon: receiver"
                                            target="_blank"></span></a></li>
                                <li><a href="https://wa.me/{{setting('contact-us.whatsapp')}}"><span uk-icon="icon: whatsapp" target="_blank"></span></a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="https://maps.app.goo.gl/B7BRfWATss7u237WA" target="_blank">{{setting('contact-us.address')}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="tel:{{setting('contact-us.phone')}}" target="_blank">{{setting('contact-us.phone')}}</a></li>
                                <li><a href="mailto:{{setting('contact-us.email')}}" target="_blank">{{setting('contact-us.email')}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="/blogs">Blogs</a></li>
                                <li><a href="/faqs">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h6>Stay in Touch</h6>
                    <p>Fill the form and we’ll reach out to you asap.</p>
                    <form action="{{route('call')}}" method="POST">
                        @csrf
                        <div class="form__group">
                            <input type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="form__group">
                            <input type="number" placeholder="Contact Number" name="phone" required>
                        </div>
                        <button type="submit" class="button">Get a call</button>
                    </form>
                </div>
            </div>
            <div class="footer__bottom uk-text-center uk-margin-medium-top">
                <span>Ⓒ {{now()->year}} Careway Medical</span>
            </div>
        </div>
    </footer>