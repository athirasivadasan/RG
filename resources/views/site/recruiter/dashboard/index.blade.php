@extends('site.layouts.page-layout')
@section('page_title')
   RRG - Dashboard
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




@endsection