<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Alert;
use Illuminate\Support\Facades\Redirect;

class Staff
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

        if (Auth::check() &&  (Auth()->user()->idrol == 1 || Auth()->user()->idrol == 2 )) //acceso solo a admins y staff
        {
            return $next($request);
        }else{
            Alert::error('ACCESO RESTRINGIDO :(')->persistent("Cerrar");
            return Redirect::back();

        }

    }
}
