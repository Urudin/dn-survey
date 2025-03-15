<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        //If Url has locale
        $urlLocale = $request->segment(1);
        $supportedLocales = ['en', 'hu', 'de'];
        if(in_array($urlLocale, $supportedLocales)) {
            App::setLocale($urlLocale);
            return $next($request);
        }

        //Else
        $locale = $request->cookie('locale') ?? substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
        } else {
            App::setLocale('en'); // Alapértelmezett nyelv
        }

        return $next($request);
    }
}
