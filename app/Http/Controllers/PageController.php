<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Homepage;
use App\Service;
use App\About;
use App\Review;
use App\Blog;
use App\Hair;
use App\HairBasic;
use App\OpdPage;
use App\OpdBasic;
use App\Image;
use App\Video;
use App\Faq;
use App\Blogs;
use App\Dental;
use App\DentalBlog;
use App\DentalService;
use App\Slider;
use App\Category;

class PageController extends Controller
{
    public function index()
    {
        $data['content'] = Homepage::find(1);
        $data['about'] = About::find(1);
        $data['services'] = Service::orderBy('order')->get();
        $data['reviews'] = Review::orderBy('order')->get();
        $data['blogs'] = Blog::where('id','!=',1)->orderBy('date', 'desc')->get()->take(3);
        return view('pages.index', $data);
    }

    public function hairs()
    {
        $data['item'] = HairBasic::find(1);
        $data['hairs'] = Hair::orderBy('order')->get();
        return view('pages.hair', $data);
    }

    public function hairDetail($slug)
    {
        $data['item'] = Hair::where('slug', $slug)->first();
        return view('pages.hairDetail', $data);
    }

    public function opd()
    {
        $data['item'] = OpdBasic::find(1);
        $data['opds'] = OpdPage::orderBy('order')->get();
        return view('pages.opd', $data);
    }

    public function opdDetail($slug)
    {
        $data['item'] = OpdPage::where('slug', $slug)->first();
        return view('pages.opdDetail', $data);
    }

    public function image()
    {
        $data['item'] = Image::find(1);
        return view('pages.images', $data);
    }

    public function video()
    {
        $data['item'] = Video::find(1);
        return view('pages.videos', $data);
    }

    public function faq()
    {
        $data['items'] = Faq::orderby('order')->get();
        return view('pages.faqs', $data);
    }

    public function blog()
    {
        $data['item'] = Blog::find(1);
        $data['blogs'] = Blog::orderBy('date','desc')->get()->except(1);
        return view('pages.blogs', $data);
    }

    public function blogDetail($slug)
    {
        $data['item'] = Blog::where('slug', $slug)->first();
        return view('pages.blogdetail', $data);
    }

    public function about()
    {
        $data['item'] = About::find(1);
        $data['reviews'] = Review::orderBy('order')->get();
        return view('pages.about', $data);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    
    public function dental()
    {
        $data['item'] = Dental::find(1);
        $data['sliders'] = Slider::orderBy('order')->get();
        $data['blogs'] = DentalBlog::orderBy('date','desc')->get();
        $data['categories'] = Category::orderBy('order') ->with(['dentalservices' => function ($query) {
            $query->orderBy('order');
        }])
        ->get();
        return view('pages.dental', $data);
    }

    public function dentalBlogDetail($slug)
    {
        $data['item'] = DentalBlog::where('slug', $slug)->first();
        return view('pages.blogdetail', $data);
    }

    public function call(Request $request)
    {
        $data = $request->all();
        $email = setting('contact-us.email');
        Mail::send('email.call', ['data'=>$data], function($message) use ($data, $email){
            $message->from('noreply@carewaynepal.com');
            $message->to($email);
            $message->subject('Call Request from Website');
        });        
        return back()->with('success','Message Sent Successfully'); 
    }

    public function book(Request $request)
    {
        $data = $request->all();
        $email = setting('contact-us.email');
        Mail::send('email.call', ['data'=>$data], function($message) use ($data, $email){
            $message->from('noreply@carewaynepal.com');
            $message->to($email);
            $message->subject('Booking from Website');
        });        
        return back()->with('success','Message Sent Successfully');
    }
}
