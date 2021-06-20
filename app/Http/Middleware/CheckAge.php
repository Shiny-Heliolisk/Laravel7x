<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        $checkAge = intval($request->input('age'));
        if ($checkAge <18){
            return redirect('/khong-duoc-phep');
        }
        return $next($request);
    }
}
