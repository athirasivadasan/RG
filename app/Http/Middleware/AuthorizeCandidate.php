<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorizeCandidate
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
        $candidate=Auth::guard('candidate')->user();
        if(isset($candidate) && Auth::guard('candidate')->check()){
            $user=User::find(Auth::guard('candidate')->user()->id);
            if($user->userRole->name=='Candidate' && Auth::guard('candidate')->check()){
                return $next($request);
            }
        }
        return redirect()->route('site.auth.sign-in');
    }
}
