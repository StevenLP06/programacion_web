<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
#
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        $roles = explode('|',$roles);
        #Que usuario esta iniciando sesion
        $user = Auth::user();
        #Comparar si el usuario que esta inicando sesion tiene el rol de los roles que hay en la bd
        if(!$user || !$user->role || !in_array($user->role->label, $roles))
        {
            return abort(403, "No tiene el rol necesario. ");
            #Falta la ruta em Routes y la Ruta en Kernel
        }
        return $next($request);
    }
}
