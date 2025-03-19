<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class RoutingController extends Controller
{
    public function home(): View
    {
        return view('home', ['textBoxContent' => ['redText' => 'Creatio', 'blueText' => 'folyamatmenedzsment megoldások', 'desc' => 'Túl bonyolultak üzleti folyamataid? A magyar KKV-k gyakran küzdenek az átláthatatlan, lassú munkafolyamatokkal, amelyek hátráltatják a növekedést. A Creatio intelligens, személyre szabható és skálázható folyamatmenedzsment megoldásai lehetővé teszik az üzletmenet gyors és egyszerű automatizálását, fejlesztői ismeretek nélkül. Így teljes mértékben a vállalkozásod növekedésére koncentrálhatsz!']]);
    }

    public function contact(): View
    {
        return view('contact', ['showTextBox' => false]);
    }

    public function creatioProducts(): View
    {
        return view('creatio_products', ['showTextBox' => false]);
    }

    public function product(string $productName): View
    {
        $data = match($productName) {
            'serpa' => [
                'textBoxContent' =>
                    [
                        'redText' => 'SERPA',
                        'blueText' => '',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam imperdiet dolor et consequat efficitur. Pellentesque porta elit ut sapien eleifend eleifend.'
                    ],
                'detailsView' => 'serpa_details'
            ],
            default => [
                'textBoxContent' =>
                    ['redText' => 'Creatio CRM',
                        'blueText' => '',
                        'desc' => 'CRM gyorsan, rugalmasan, kódolás nélkül! A hagyományos folyamatautomatizációs rendszerek bevezetése
                időigényes és költséges, míg a no-code platformra épülő Creatio CRM alkalmazásokkal mindez
                karnyújtásnyira van csupán.'
                    ],
                'detailsView' => 'crm_details'],
        };
        return view('product', $data);
    }
}

