<?php

namespace App\Http\Middleware;

use Closure;

class mechanic
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
       if (auth()->user()->validation == 1){
           return $next($request);
       }
       return redirect('home')->with('error','you dont have access');
    }
}
