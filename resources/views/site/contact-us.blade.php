@extends('site.layouts.page-layout')

@section('page_title')
   RRG - Contact US
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
<!-- jp Contact heading Wrapper Start -->
<div class="jp_contact_heading_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_contact_heading_wrapper">
                    <h2>Our Helpline 24x7 Available</h2>
                    <p>Call us at <span>+0123 125 1457</span> or Email us at <a href="#">support@site.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jp_contact_map_wrapper">
    <div id="map" style="width:100%; float:left; height:600px;"></div>
    <div class="jp_map_cont_label">
        <h3>You can Find us..</h3>
        <p>110, B Kalani Bag Dewas #455001 MP India</p>
    </div>
</div>
<!-- jp Contact heading Wrapper End -->
<!-- jp Contact form Wrapper Start -->
<div class="jp_contact_form_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_contact_form_heading_wrapper">
                    <h2>Leave A Message</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="jp_contact_form_box">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="jp_contact_inputs_wrapper">
                            <i class="fa fa-user"></i><input type="text" placeholder="Name *">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                            <i class="fa fa-envelope"></i><input type="text" placeholder="Email *">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                            <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                            <i class="fa fa-text-height"></i><textarea rows="6"
                                placeholder="Type Your Message *"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_contact_form_btn_wrapper">
                            <ul>
                                <li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; SEND</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="jp_contact_right_box_wrapper">
                    <div class="jp_contact_form_add_heading_wrapper">
                        <h2>Contact Info</h2>
                    </div>
                    <div class="jp_form_add_wrapper gc_map_add_wrapper1">
                        <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="gc_map_location_icon_cont_wrapper">
                            <h3>121 King Street, Melbourne, Australia Victoria 3000</h3>
                        </div>
                    </div>
                    <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                        <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper2">
                            <h3> +61 3 8376 6284</h3>
                        </div>
                    </div>
                    <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                        <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-fax"></i>
                        </div>
                        <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper3">
                            <h3> +61 3 8376 6284</h3>
                        </div>
                    </div>
                    <div class="jp_form_add_wrapper gc_map_add_wrapper3">
                        <div class="jp_map_location_icon_wrapper">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper4">
                            <h3> <a href="#">jobpro@exaple.com</a></h3>
                        </div>
                    </div>
                    <div class="jp_contact_form_social_icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="hidden-xs"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Contact form Wrapper End -->

@endsection

@section('scripts')

<script>
   
        function initMap() {  
        	var uluru = {lat: -36.742775, lng:  174.731559};
        	var map = new google.maps.Map(document.getElementById('map'), {
        	zoom: 15,
        	scrollwheel: false,
        	center: uluru
        	});
        	var marker = new google.maps.Marker({
        	position: uluru,
        	map: map
        	});
        	}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBctr8WYTfFDi_oGbPEolSDzn4VZaAKVK0&callback=initMap">
    </script>
@endsection