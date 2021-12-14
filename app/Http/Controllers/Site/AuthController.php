<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        $data['page_title'] = 'Login';
        if (Auth::guard('recruiter')->check()) {
            return redirect()->route('site.recruiter.dashboard');
        }

        if (Auth::guard('candidate')->check()) {
            return redirect()->route('site.candidate.dashboard');
        }

        return view('site.auth.sign_in', $data);
    }
    public function authenticating(Request $request)
    {
        $user = User::where([
            'email' => $request->email,
            'status' => 1,
            'is_verified' => 1,
        ])->first();

        if ($user) {
            if ($user->userRole->name == 'Recruiter') {
                $credentials = [
                    'email' => $request->email,
                    'password' => $request->password,
                    'user_type' => $user->user_type,
                    'status' => 1,
                    'is_verified' => 1,
                ];

                if (Auth::guard('recruiter')->attempt($credentials)) {
                    return redirect()->route('site.recruiter.dashboard');
                }else {
                    return redirect()->route('site.auth.sign-in')->with('error', 'Invalid username or password');
                }
            }
            if ($user->userRole->name == 'Candidate') {
                $credentials = [
                    'email' => $request->email,
                    'password' => $request->password,
                    'user_type' => $user->user_type,
                    'status' => 1,
                    'is_verified' => 1,
                ];

                if (Auth::guard('candidate')->attempt($credentials)) {
                    return redirect()->route('site.candidate.dashboard');
                } else {
                    return redirect()->route('site.auth.sign-in')->with('error', 'Invalid username or password');
                }
            }
        }

        return redirect()->route('site.auth.sign-in')->with('error', 'Invalid Username');
    }
    function signOut(Request $request){
        if(isset(Auth::guard('recruiter')->user()->id)){
            Auth::guard('recruiter')->logout();
            return redirect()->route('site.home');
        }else if(isset(Auth::guard('candidate')->user()->id)){
            Auth::guard('candidate')->logout();
            return redirect()->route('site.home');
        }
        return redirect()->back();
    }
}
