@extends('site.layouts.page-layout')
@section('page_title')
RRG - Post A Job
@endsection

@section('stylesheets')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
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
                                <li><a href="#">Jobs</a> <i class="fa fa-angle-right"></i></li>
                                <li>{{ $page_title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->
<!-- jp ad post Wrapper Start -->
<div class="jp_adp_main_section_wrapper">
    <div class="container">
        <div class="row">
            <form action="{{ route('site.recruiter.vacancies.store') }}" method="post" enctype="multipart/form-data"
                id="saveJob">
                @csrf
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_adp_form_heading_wrapper">
                        <h2>Job Details</h2>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <label for="job_title">Job Title</label>
                        <input type="text" placeholder="Job Title" name="job_title">
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <label for="job_type">Job Type</label>
                        <select name="job_type">
                            <option value="" disabled selected>Select Job Type</option>
                            @foreach($vacancies_types as $key => $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="jp_adp_form_wrapper">
                        <label for="industry_id">Industry</label>
                        <select name="industry_id">
                            <option value="" disabled selected>Select Industry</option>
                            @foreach($industries as $key => $industry)
                            <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                            <div class="jp_adp_form_wrapper">
                                <label for="min_salary">Salary Min</label>
                                <input type="text" placeholder="Salary Min" name="min_salary">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                            <div class="jp_adp_form_wrapper">
                                <label for="max_salary">Salary Max</label>
                                <input type="text" placeholder="Salary Max" name="max_salary">
                            </div>
                        </div>
                    </div>

                    <div class="jp_adp_form_wrapper">
                        <label for="gender_id">Gender</label>
                        <select name="gender_id">
                            <option value="" disabled selected>Select Gender</option>
                            @foreach($genders as $key => $gender)
                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <label for="address">Address</label>
                        <input type="text" placeholder="Address" name="address">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
                    <div class="jp_adp_form_heading_wrapper">
                        <p>Fields with * are mandetory</p>
                    </div>
                    <div class="jp_adp_form_wrapper select-arrow-has">
                        <label for="skills">Skills</label>
                        <select class="select2" name="skills[]" multiple>
                            <option value="" disabled selected>Select Skills</option>
                            @foreach($skills as $key => $skill)
                            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <label for="skills">Education</label>
                        <select>
                            <option value="" disabled selected>Select Education</option>
                            @foreach($degrees as $key => $degrees)
                            <option value="{{ $degrees->id }}">{{ $degrees->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="jp_adp_form_wrapper">
                        <label for="skills">Career Levels</label>
                        <select>
                            <option value="" disabled selected>Select Career Level</option>
                            @foreach($career_levels as $key => $career_levels)
                            <option value="{{ $career_levels->id }}">{{ $career_levels->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                            <div class="jp_adp_form_wrapper">
                                <label for="min_salary">Min Experience</label>
                                <select>
                                    <option value="" disabled selected>Select Experience</option>
                                    @foreach($experiences as $key => $experience)
                                    <option value="{{ $experience->id }}">{{ $experience->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                            <div class="jp_adp_form_wrapper">
                                <label for="max_salary">Max Experience</label>
                                <select>
                                    <option value="" disabled selected>Select Experience</option>
                                    @foreach($experiences as $key => $experience)
                                    <option value="{{ $experience->id }}">{{ $experience->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="jp_adp_form_wrapper">
                    <label for="location">Location</label>
                        <input type="text" name="location" placeholder="Location">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                            <div class="jp_adp_form_wrapper">
                                <label for="starting_date_for_apply">Job Creation Date</label>
                                <input type="text" placeholder="Job Creation Date" name="starting_date_for_apply">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                            <div class="jp_adp_form_wrapper">
                                <label for="last_date_for_apply">Job Closing Date</label>
                                <input type="text" placeholder="Job Closing Date" name="last_date_for_apply">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_textarea_main_wrapper">
                    <label for="last_date_for_apply">Job Description</label>
                        <textarea rows="7" placeholder="Job Description" name="description"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume">
                        <p>Company Post</p>
                        <div class="custom-input">
                            <span><i class="fa fa-upload"></i> &nbsp;Upload Job Post</span>
                            <input type="file" name="resume" id="resume" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_adp_choose_resume_bottom_btn_post">
                        <ul>
                            <li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; Post a job</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- jp ad post Wrapper End -->

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
$('.select2').select2();
</script>
@endsection