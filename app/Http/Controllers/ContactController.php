<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Log;
use ReCaptcha\ReCaptcha;

class ContactController extends Controller
{
    public function receiveMessage(ContactRequest $request)
    {
        try {

            $recaptcha = new ReCaptcha(env('GOOGLE_SECRET_KEY'));
            $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

            if (!$response->isSuccess()) {
                return back()->withErrors(['captcha' => 'A reCAPTCHA ellenőrzés sikertelen, próbáld újra!']);
            }

            // Ha a reCAPTCHA sikeres, folytathatod az adatok mentését vagy email küldést
            return back()->with('success', 'Üzeneted sikeresen elküldve!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->withErrors(['serverError' => 'server Error']);
        }
    }
}
