<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticatedRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('session_token')){
            return redirect()->route('dashboard.services.create');
        }
        
        return $next($request);    
        
        
    }
}
