@extends('site.layouts.page-layout')
@section('page_title')
   RRG - About US
@endsection

@section('content')
<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>{{ $page_title}}</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                <li>{{ $page_title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->
<!-- aboutus_section end -->
<div class="aboutus_page_2_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-xs-12 col-sm-12">
                <div class="aboutus_text_section abt_txt_page_2">
                    <h2>Who We <span>Are</span></h2>
                    <p>Resource Right is an established specialist IT company with more than 40 years of global IT resourcing and services experience.Offering a select range of professional services, our aim is to work alongside our customers as Partners not Suppliers, where we can manage a wide range of IT needs from locating the best talent available in the market place to providing a wide range of highend Enterprise Mobility Management and Cloud computing services.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Currently employ a large IT Recruitment & Outsourcing professionals across UAE, UK and India.</li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Have a dedicated bench of IT professionals that can be utilised on short to medium term projects (IT Project Manager, Network Engineers, Systems Administrators) to help solve urgent client needs.</li>
                              
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;55 outsourced/contract staff working across UAE, Saudi Arabia and Qatar with the ability to reach out to all of the GCC.</li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp;&nbsp;Successfully placed more than 50 permanent staff across the GCC in the past year into Government and Private organisations consisting of more than 25 different nationalities.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

           
            <!--end of /.col-sm-6-->
        </div>
    </div>
</div>
<!--end of /.col-sm-6-->
<!-- aboutus_section start-->
<div class="aboutus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_text_wrapper">
                    <div class="section_heading section_2_heading">
                        <h2>Who we are</h2>
                    </div>
                    <p>Resource Right is an established specialist IT company with more than 40 years of global IT
                        resourcing and services experience.Offering a select range of professional services, our aim is
                        to work alongside our customers as Partners not Suppliers, where we can manage a wide range of
                        IT needs from locating the best talent available in the market place to providing a wide range
                        of highend Enterprise Mobility Management and Cloud computing services.</p>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#">Currently employ a
                                large IT Recruitment & Outsourcing professionals across UAE, UK and India.</a>
                        </li>
                        <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#">Have a dedicated
                                bench of IT professionals that can be utilised on short to medium term projects (IT
                                Project Manager, Network Engineers, Systems Administrators) to help solve urgent client
                                needs.</a>
                        </li>
                        <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#">55
                                outsourced/contract staff working across UAE, Saudi Arabia and Qatar with the ability to
                                reach out to all of the GCC.</a>
                        </li>
                        <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="#">Successfully placed
                                more than 50 permanent staff across the GCC in the past year into Government and Private
                                organisations consisting of more than 25 different nationalities.</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_image_wrapper">
                    <img class="img-responsive" src="{{asset('assets/site/images/content/register_bg.jpg')}}"
                        alt="about-img">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="about_text_wrapper abt_2_para">
                    <div class="section_heading section_2_heading">
                        <h2>why we<span> do it ?</span></h2>
                    </div>
                    <p>Proin gravida nibh vel velit auctor aliquet. aks Aenean sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum, nec sagittis sem.consequat ipsum,rmentum nunc. Etiam
                        pharetra, erat sed fermentum feugiat, velit sum, nec sagittis sem.consequat ipsum,rmentum
                        nunc. Etiam pharetra, mauris egestas quam, ut aliquam massa nisl quis neque. Suspendissenec
                        sagittis sem.conse nec sagittis sem nibh id elit.Donec vesquat ipsum, nec sa tibulum justo a
                        diam ultricies. pel lentesque. Quisque mattis diam vel.</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever sincer they 1500s, when an
                        unknown printer took and galley onsequat ipsum, orbi accumsan ipsum velit. Nam nec tellus a
                        odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.
                        Class aptent taciti sociosqu ad a diam ultricie of type and scrambled. nisi elit consequat
                        ipsum, nec sagittis sem nibh id elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp best deal Wrapper Start -->
<div class="jp_best_deal_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_best_deal_heading_wrapper">
                    <div class="jp_best_deal_heading">
                        <h4>Offering the best Deals</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="jp_best_deal_main_cont_wrapper">
                    <div class="jp_best_deal_icon_sec">
                        <i class="flaticon-magnifying-glass"></i>
                    </div>
                    <div class="jp_best_deal_cont_sec">
                        <h4><a href="#">Search a Jobs</a></h4>
                        <p>Proin gravida nibh Aenean sollicitudin...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="jp_best_deal_main_cont_wrapper">
                    <div class="jp_best_deal_icon_sec">
                        <i class="flaticon-users"></i>
                    </div>
                    <div class="jp_best_deal_cont_sec">
                        <h4><a href="#">Apply a Job</a></h4>
                        <p>Proin gravida nibh Aenean sollicitudin...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                    <div class="jp_best_deal_icon_sec">
                        <i class="flaticon-shield"></i>
                    </div>
                    <div class="jp_best_deal_cont_sec">
                        <h4><a href="#">Job Security</a></h4>
                        <p>Proin gravida nibh Aenean sollicitudin...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                    <div class="jp_best_deal_icon_sec">
                        <i class="flaticon-notification"></i>
                    </div>
                    <div class="jp_best_deal_cont_sec">
                        <h4><a href="#">Job Notifications</a></h4>
                        <p>Proin gravida nibh Aenean sollicitudin...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                    <div class="jp_best_deal_icon_sec">
                        <i class="flaticon-wallet"></i>
                    </div>
                    <div class="jp_best_deal_cont_sec">
                        <h4><a href="#">Essay Pay Money</a></h4>
                        <p>Proin gravida nibh Aenean sollicitudin...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                    <div class="jp_best_deal_icon_sec">
                        <i class="flaticon-people"></i>
                    </div>
                    <div class="jp_best_deal_cont_sec">
                        <h4><a href="#">Happy Support</a></h4>
                        <p>Proin gravida nibh Aenean sollicitudin...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp best deal Wrapper End -->
<!-- jp career Wrapper Start -->
<div class="jp_career_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_hiring_slider_main_wrapper">
                    <div class="jp_career_slider_heading_wrapper">
                        <h2>Career advice</h2>
                    </div>
                    <div class="jp_career_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item jp_recent_main">
                                <div class="jp_career_main_box_wrapper">
                                    <div class="jp_career_img_wrapper">
                                        <img src="images/content/car_img1.jpg" alt="career_img" />
                                    </div>
                                    <div class="jp_career_cont_wrapper">
                                        <p><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#">20 OCT, 2017</a>
                                        </p>
                                        <h3><a href="#">Hey Seeker, It’s Time</a></h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                                            quis bibendum auctor, nisi elit consequat.</p>
                                    </div>
                                </div>
                                <div class="jp_career_slider_bottom_cont">
                                    <ul>
                                        <li><img src="images/content/blog_small_img.jpg" alt="small_img"
                                                class="img-circle">&nbsp;&nbsp; <a href="#">Jhon Doe</a></li>
                                    </ul>
                                    <p><a href="#"><i class="fa fa-comments"></i></a></p>
                                </div>
                            </div>
                            <div class="item jp_recent_main">
                                <div class="jp_career_main_box_wrapper">
                                    <div class="jp_career_img_wrapper">
                                        <img src="images/content/car_img2.jpg" alt="career_img" />
                                    </div>
                                    <div class="jp_career_cont_wrapper">
                                        <p><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#">20 OCT, 2017</a>
                                        </p>
                                        <h3><a href="#">Hey Seeker, It’s Time</a></h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                                            quis bibendum auctor, nisi elit consequat.</p>
                                    </div>
                                </div>
                                <div class="jp_career_slider_bottom_cont">
                                    <ul>
                                        <li><img src="images/content/blog_small_img.jpg" alt="small_img"
                                                class="img-circle">&nbsp;&nbsp; <a href="#">Jhon Doe</a></li>
                                    </ul>
                                    <p><a href="#"><i class="fa fa-comments"></i></a></p>
                                </div>
                            </div>
                            <div class="item jp_recent_main">
                                <div class="jp_career_main_box_wrapper">
                                    <div class="jp_career_img_wrapper">
                                        <img src="images/content/car_img3.jpg" alt="career_img" />
                                    </div>
                                    <div class="jp_career_cont_wrapper">
                                        <p><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#">20 OCT, 2017</a>
                                        </p>
                                        <h3><a href="#">Hey Seeker, It’s Time</a></h3>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                                            quis bibendum auctor, nisi elit consequat.</p>
                                    </div>
                                </div>
                                <div class="jp_career_slider_bottom_cont">
                                    <ul>
                                        <li><img src="images/content/blog_small_img.jpg" alt="small_img"
                                                class="img-circle">&nbsp;&nbsp; <a href="#">Jhon Doe</a></li>
                                    </ul>
                                    <p><a href="#"><i class="fa fa-comments"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp career Wrapper End -->
<!-- jp counter Wrapper Start -->
<div class="jp_counter_main_wrapper">
    <div class="gc_counter_cont_wrapper">
        <div class="count-description">
            <span class="timer">2540</span><i class="fa fa-plus"></i>
            <h5 class="con1">Jobs Available</h5>
        </div>
    </div>
    <div class="gc_counter_cont_wrapper2">
        <div class="count-description">
            <span class="timer">7325</span><i class="fa fa-plus"></i>
            <h5 class="con2">Members</h5>
        </div>
    </div>
    <div class="gc_counter_cont_wrapper3">
        <div class="count-description">
            <span class="timer">1924</span><i class="fa fa-plus"></i>
            <h5 class="con3">Resumes</h5>
        </div>
    </div>
    <div class="gc_counter_cont_wrapper4">
        <div class="count-description">
            <span class="timer">4275</span><i class="fa fa-plus"></i>
            <h5 class="con4">Company</h5>
        </div>
    </div>
</div>
<!-- jp counter Wrapper End -->



@endsection