<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

// app/Http/Middleware/RedirectIfAuthenticated.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return $this->redirectTo($guard);
        }

        return $next($request);
    }

    protected function redirectTo($guard)
    {
        dd($guard);
        switch ($guard) {
            case 'admin':
                return route('admin.dashboard'); // Adjust the route name for the admin dashboard
                break;
            default:
                return route('user.dashboard'); // Adjust the route name for the user dashboard
                break;
        }
    }
}
