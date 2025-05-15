<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class RoutingController extends Controller
{
    public function home(): View
    {
        return view('home', ['textBoxContent' => ['redText' => 'Help Shape the Future of Our Next', 'blueText' => 'Dragon-Network Substack Lineage 2 Server!', 'desc' => 'We\'re building something special — and your opinion matters. Take a moment to fill out our short survey and tell us what kind of Lineage 2 substack server you\'d love to play on.
                Your feedback will directly influence our next project\'s direction!']]);
    }

    public function contact(): View
    {
        return view('contact', ['showTextBox' => false]);
    }
}

