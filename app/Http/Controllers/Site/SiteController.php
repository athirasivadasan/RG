<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        

        return view('site.home-page');
    }
    public function about(){
        $data['page_title']= 'About Us';
        return view('site.about-us',$data);
    }
    public function contact(){
        $data['page_title']= 'Contact Us';
        return view('site.contact-us',$data);
    }
}
