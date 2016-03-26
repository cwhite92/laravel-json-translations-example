<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class SetLocale
{
    protected $defaultLocale = 'en';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Session::has('locale')) {
            Session::put('locale', $this->defaultLocale);
        }

        app()->setLocale(Session::get('locale'));

        return $next($request);
    }
}
