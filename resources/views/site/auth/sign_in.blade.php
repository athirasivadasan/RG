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

<!-- jp login wrapper start -->
<div class="login_section">
    <!-- login_form_wrapper -->
    <div class="login_form_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- login_wrapper -->
                    <h1>LOGIN TO YOUR ACCOUNT</h1>
                    @include('site.layouts.flash')
                    <div class="login_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary"> <span>Login with Facebook</span> <i
                                        class="fa fa-facebook"></i> </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary google-plus"> Login with Google <i
                                        class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                        <h2>or</h2>

                        <form action="{{ route('site.auth.authenticating') }}" method="post">
                            @csrf
                            <div class="formsix-pos">
                                <div class="form-group i-email">
                                    <input name="email" type="email" class="form-control" required="" id="email2"
                                        placeholder="Username*">
                                </div>
                            </div>
                            <div class="formsix-e">
                                <div class="form-group i-password">
                                    <input name="password" type="password" class="form-control" required="" id="password2"
                                        placeholder="Password *">
                                </div>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">Remember me
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                                <a href="#" class="forget_password">
                                    Forgot Password
                                </a>
                            </div>
                           
                            <div class="login_btn_wrapper">
                                <!-- <a href="#" class="btn btn-primary login_btn"> Login </a> -->
                                <input type="submit" class="btn btn-primary login_btn" value="Login">
                            </div>
                            
                        </form>
                        <div class="login_message">
                            <p>Don’t have an account ? <a href="#"> Register Now </a> </p>
                        </div>
                    </div>
                    <p>In case you are using a public/shared computer we recommend that
                        you logout to prevent any un-authorized access to your account</p>
                    <!-- /.login_wrapper-->
                </div>
            </div>
        </div>
    </div>
    <!-- /.login_form_wrapper-->
</div>
<!-- jp login wrapper end -->
<!-- jp Tittle Wrapper End -->




@endsection