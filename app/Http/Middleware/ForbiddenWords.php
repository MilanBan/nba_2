<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenWords
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
        $words = ['hate', 'idiot', 'stupid'];
        foreach($words as $word){
            if(strstr($request->content , $word)){
                return response(view('teams.forbidden-comment'));
            }
        }

        return $next($request);
    }
}
