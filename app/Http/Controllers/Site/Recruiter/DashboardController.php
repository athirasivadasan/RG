<?php

namespace App\Http\Controllers\Site\Recruiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['page_title']= 'Recruiter Dashboard';
        return view('site.recruiter.dashboard.index',$data);
    }
}
