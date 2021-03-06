<!DOCTYPE html>
<html lang="en">

@include('site.layouts.header')

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="{{asset('assets/site/images/header/loadinganimation.gif')}}" id="preloader_image"
                alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
<!-- Header Wrapper Start -->
<div class="jp_top_header_img_wrapper">
    <div class="jp_slide_img_overlay"></div>
    @include('site.layouts.top-menus')
 
    <div class="jp_banner_heading_cont_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_job_heading_wrapper">
                        <div class="jp_job_heading">
                            <h1>
                                <!-- <span>3,000+</span>  -->
                                Find your next career opportunity with <span>Resource Right Group</span>
                            </h1>
                            <p>Find Jobs, Employment & Career Opportunities</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_header_form_wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <input type="text" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="jp_form_location_wrapper">
                                <i class="fa fa-dot-circle-o first_icon"></i><select>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                    <option>Select Location</option>
                                </select><i class="fa fa-angle-down second_icon"></i>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="jp_form_exper_wrapper">
                                <i class="fa fa-dot-circle-o first_icon"></i><select>
                                    <option>Experience</option>
                                    <option>Experience</option>
                                    <option>Experience</option>
                                    <option>Experience</option>
                                    <option>Experience</option>
                                </select><i class="fa fa-angle-down second_icon"></i>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="jp_form_btn_wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-search"></i> Search</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_banner_main_jobs_wrapper">
                        <div class="jp_banner_main_jobs">
                            <ul>
                                <li><i class="fa fa-tags"></i> Trending Keywords :</li>
                                <li><a href="#">ui designer,</a></li>
                                <li><a href="#">developer,</a></li>
                                <li><a href="#">senior</a></li>
                                <li><a href="#">it company,</a></li>
                                <li><a href="#">design,</a></li>
                                <li><a href="#">call center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jp_banner_jobs_categories_wrapper">
        <div class="container">
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-code"></i>
                    <h3><a href="#">Developer</a></h3>
                    <p>(240 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-laptop"></i>
                    <h3><a href="#">Technology</a></h3>
                    <p>(504 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-bar-chart"></i>
                    <h3><a href="#">Accounting</a></h3>
                    <p>(2250 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-medkit"></i>
                    <h3><a href="#">Medical</a></h3>
                    <p>(202 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-university"></i>
                    <h3><a href="#">Government</a></h3>
                    <p>(1457 jobs)</p>
                </div>
            </div>
            <div class="jp_top_jobs_category_wrapper">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-th-large"></i>
                    <h3><a href="#">All Jobs</a></h3>
                    <p>(2000+ jobs)</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Wrapper End -->

    @yield('content')
    
    @include('site.layouts.footer')
    @yield('scripts')

</body>

</html>