<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorizeRecruiter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $recruiter=Auth::guard('recruiter')->user();
        if(isset($recruiter) && Auth::guard('recruiter')->check()){
            $user=User::find(Auth::guard('recruiter')->user()->id);
            if($user->userRole->name=='Recruiter' && Auth::guard('recruiter')->check()){
                return $next($request);
            }
        }
        return redirect()->route('site.auth.sign-in');
    }
}
