<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function setLocale($locale)
    {
        $supportedLocales = ['en', 'de', 'hu'];

        if (in_array($locale, $supportedLocales)) {
            // A nyelv beállítása és sütibe mentése
            App::setLocale($locale);
            Cookie::queue('locale', $locale, 60 * 24 * 30); // 30 napig érvényes cookie
        }

        // Visszairányítás az előző oldalra vagy az alapértelmezett útvonalra
        return redirect()->to('/home')->with('message', 'Language changed to ' . strtoupper($locale));
    }
}
