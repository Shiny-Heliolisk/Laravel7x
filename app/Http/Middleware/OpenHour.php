<?php

namespace App\Http\Middleware;

use Closure;

class OpenHour
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
        echo date("d/m/Y H:i:s") . '<br>';
        $hour = date("H");
        if ($hour < 8 || $hour >= 17) {
            return redirect('/dong-cua');
        }

        return $next($request);
    }
}
