<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use ReCaptcha\ReCaptcha;

class ContactController extends Controller
{
    public function receiveMessage(ContactRequest $request): RedirectResponse
    {
        try {

            $recaptcha = new ReCaptcha(env('GOOGLE_SECRET_KEY'));
            $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());
            $validated = $request->validated();
            if (!$response->isSuccess()) {
                return back()->withErrors(['captcha' => 'A reCAPTCHA ellenőrzés sikertelen, próbáld újra!']);
            }

            Contact::query()->create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => $validated['message'],
                'phone' => $validated['phone'],
                'gdpr_accepted' => $validated['privacy'] == 'on' ? 1 : 0,
            ]);

            // Küldjük el az e-mailt
            Mail::to(env('SALES_EMAIL'))->send(new ContactFormMail($validated));

            return back()->with('success', 'Üzeneted sikeresen elküldve!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->withErrors(['serverError' => 'server Error']);
        }
    }
}
