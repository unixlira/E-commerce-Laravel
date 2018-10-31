<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Empresa;


class SessionMiddleware
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
        if(session('site')===null) {
            $company = getCompany();
            $site = Empresa::where('slug', $company)->first();
            $site->categorias = $site->categorias()->where('categoria_id', '0')->get();
            session(['site' => $site]);
        }
        return $next($request);
    }
}
