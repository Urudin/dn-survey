<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class RoutingController extends Controller
{
    public function home(): View
    {
        return view('home', ['textBoxContent' => ['redText' => 'Help Shape the Future of Our Next', 'blueText' => 'Dragon-Network Substack Lineage 2 Server!', 'desc' => 'Following our recent servers that received mixed feedback, we’ve spent months working on how to reinvent Dragon-Network in a way that brings true satisfaction — both for you, the players, and for us, the developers.']]);
    }

    public function contact(): View
    {
        return view('contact', ['showTextBox' => false]);
    }
}

