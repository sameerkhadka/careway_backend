@extends('layouts.app')

@section('title')
<title>Contact Us || {{setting('site.title')}}</title>
<meta name="description" content="{{setting('site.description')}}">

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Contact Us" />
<meta property="og:description" content="{{setting('site.description')}}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="Contact Us" />
<meta property="og:image" content="{{Voyager::image(setting('site.logo'))}}" />

<link rel="canonical" href="{{Request::url()}}" >
@endsection

@section('body')
    <div class="page__intro">
        <div class="uk-container uk-container-small">
            <h1 class="pagetitle uk-text-center">Get in Touch</h1>
            <p>
                You can book an appointment immediately, or feel free to contact us via email or phone.
            </p>
        </div>
    </div>
    
    <section class="contact">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-3">
                <div class="flex__wrap contactinfo__wrap">
                    <i class="fa fa-phone"></i>
                    <div class="contactinfo flex__wrap ">
                        <h4>PHONE</h4>
                        <a href="tel:{{setting('contact-us.phone')}}">{{setting('contact-us.phone')}}</a>
                    </div>
                </div>
                <div class="flex__wrap contactinfo__wrap">
                    <i class="fas fa-envelope"></i>
                    <div class="contactinfo flex__wrap ">
                        <h4>EMAIL</h4>
                        <a href="mailto:{{setting('contact-us.email')}}">{{setting('contact-us.email')}}</a>
                    </div>
                </div>
                <div class="flex__wrap contactinfo__wrap">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="contactinfo flex__wrap ">
                        <h4>ADDRESS</h4>
                        <a href="{{setting('contact-us.address_map')}}" target="_blank">{{setting('contact-us.address')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="maps uk-position-relative">
        <div class="uk-grid">
            <div class="hours uk-position-absolute">
                <div class="contacthours__wrap">
                    <div class="working-hours-title">
                        <h2 class="text-white">Working Hours</h2>
                        <p class="paragraph-large text-white">
                            Check out our Office hours to plan your visit.
                        </p>
                    </div>
                   {!!setting('contact-us.working_days')!!}
                    <!-- <div class="working-hours-block">
                        <div class="working-hours-item">
                            <h5 class="text-light">Monday</h5>
                            <h6 class="title-hours">9 am - 7 pm</h6>
                        </div>
                        <div class="working-hours-item">
                            <h5 class="text-light">Tuesday</h5>
                            <h6 class="title-hours">9 am - 7 pm</h6>
                        </div>
                        <div class="working-hours-item">
                            <h5 class="text-light">Wednesday</h5>
                            <h6 class="title-hours">10 am - 7 pm</h6>
                        </div>
                        <div class="working-hours-item">
                            <h5 class="text-light">Thursday</h5>
                            <h6 class="title-hours">9 am - 7 pm</h6>
                        </div>
                        <div class="working-hours-item">
                            <h5 class="text-light">Friday</h5>
                            <h6 class="title-hours">9 am - 7 pm</h6>
                        </div>
                        <div class="working-hours-item">
                            <h5 class="text-light">Saturday</h5>
                            <h6 class="title-hours">10 am - 4 pm</h6>
                        </div>
                        <div class="working-hours-item without-border">
                            <h5 class="text-light">Sunday</h5>
                            <h6 class="title-hours">Closed</h6>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="uk-width-1-3 uk-visible@s">
            </div>
            <div class="uk-width-2-3@s uk-width-3-3">
                <iframe
                    src="{{setting('contact-us.map')}}"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <div class="contactform" id="booking">
        <div class="uk-container">
            <form action="{{route('book')}}" id="book" method="POST">
                @CSRF
                <h2 class="uk-text-center uk-margin-large-bottom">Book an appointment</h2>
                <div class="uk-grid uk-child-width-1-2 uk-flex-between">
                    <div class="form__group">
                        <input type="date" placeholder="Pick a date *" required name="name">
                    </div>
                    <div class="form__group">
                        <input type="time" placeholder="Time *" required name="time">
                    </div>
                    <div class="form__group">
                        <input type="text" placeholder="Name *" required name="name">
                    </div>
                    <div class="form__group">
                        <input type="number" placeholder="Number *" required name="phone">
                    </div>
                    <div class="form__group">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="form__group">
                        <select id="inputState" class="form-select" name="patient_type">
                            <option selected="" disabled>Patient type</option>
                            <option value="New Patient">New Patient</option>
                            <option value="Existing Patient">Existing Patient</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <select id="inputState" class="form-select" name="service">
                            <option selected="" disabled>Service</option>
                            <option value="Hair">Hair</option>
                            <option value="Skin">Skin</option>
                            <option value="Dental">Dental</option>
                            <option value="ENT">ENT</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <textarea name="message" id="" cols="30" rows="8" placeholder="Message" required></textarea>
                    </div>
                </div>
                <button type="submit" class="button">Book Now</button>
            </form>
        </div>
    </div>

@endsection