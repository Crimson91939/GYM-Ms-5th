<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            
            case 'admin':      
                if(auth::guard($guard)->check())
                {
                    return redirect()->route('admin.dashboard');
                }

                break;
            
                case 'gym':
                
                    if(auth::guard($guard)->check())
                    {
                        return redirect()->route('gym.dashboard');
                    }
    
                    break;
                  
                    case 'member':
                
                        if(auth::guard($guard)->check())
                        {
                            return redirect()->route('member.dashboard');
                        }
        
                        break;    
            
        }

        return $next($request);
    }
}
