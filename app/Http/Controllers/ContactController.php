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
            // reCAPTCHA ellenőrzés
            $recaptcha = new ReCaptcha(env('GOOGLE_SECRET_KEY'));
            $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

            if (!$response->isSuccess()) {
                return back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
            }

            $validated = $request->validated();
            $ip = $request->ip();

            // Ellenőrzés: adott IP már küldött-e be
            if (Contact::where('ip_address', $ip)->exists()) {
                return back()->withErrors(['duplicate' => 'You have already submitted the form. Thank you!']);
            }

            // Adat mentés
            Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'rate' => $validated['rate'],
                'combo_dance' => $validated['combo_dance'],
                'tattoo_system' => $validated['tattoo_system'],
                'buff_system' => $validated['buff_system'],
                'message' => $validated['message'] ?? null,
                'subscribe' => isset($validated['subscribe']) ? 1 : 0,
                'ip_address' => $ip,
            ]);

            return back()->with('success', 'Form successfully submitted.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->withErrors(['serverError' => 'Server error. Please try again later.']);
        }
    }
}
