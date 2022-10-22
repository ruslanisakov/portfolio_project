<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use MongoDB\Driver\Session;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
//    public function handle(Request $request, Closure $next)
//    {
//        App::setLocale($request->language);
//        return $next($request);
//    }
    public function handle(Request $request, Closure $next)
    {
        if(Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('languages'))){
            App::setLocale(Session()->get('applocale'));
        }
        else{
            App::setLocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
