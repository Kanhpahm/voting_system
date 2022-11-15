<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        // $role = Auth::user()->role;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);

            /* switch ($role) {
                case 'admin':
                return redirect('/admin_dashboard');
                break;
            case 'voter':
                return redirect('/voter_dashboard');
                break;
            default:
                return redirect('/candidate_dashboard');
                break;
          } */
            }
        }

        return $next($request);
    }
}
