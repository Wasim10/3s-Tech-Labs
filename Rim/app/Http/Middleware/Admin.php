<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use Session;

class Admin
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
        // check if the user is admin or nor...
        if(!Auth::user()->admin){
            Session::flash('info','You Dont Have Permissions Todo That Action.');

            return redirect()->back();
        }

        return $next($request);
    }
}
