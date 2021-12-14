<?php

namespace App\Http\Controllers\Site\Recruiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Industries;
use App\Models\Countries;
use App\Models\Genders;
use App\Models\EducationalDegrees;
use App\Models\Skills;
use App\Models\VacanciesTypes;
use App\Models\CareerLevels;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']= 'Post A Job';
        $data['experiences'] = Experience::where('status', 1)->orderBy('name', 'asc')->get();
        $data['industries'] = Industries::where('status', 1)->orderBy('name', 'asc')->get();
        $data['countries'] = Countries::where('status', 1)->orderBy('name', 'asc')->get();
        $data['genders'] = Genders::where('status', 1)->orderBy('name', 'asc')->get();
        $data['degrees'] = EducationalDegrees::where('status', 1)->orderBy('name', 'asc')->get();
        $data['skills'] = Skills::where('status', 1)->orderBy('name', 'asc')->get();
        $data['vacancies_types'] = VacanciesTypes::where('status', 1)->orderBy('name', 'asc')->get();
        $data['career_levels'] = CareerLevels::where('status', 1)->orderBy('name', 'asc')->get();


        return view('site.recruiter.vacancies.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
