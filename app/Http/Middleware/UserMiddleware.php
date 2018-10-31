<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
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
        if(!in_array($request->route()->getAction()['canUse'], session('user')['permissions'] ) ) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return view('restrict');
            }
        }

        return $next($request);
    }
}
