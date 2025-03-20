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
            'studio' => [
                'headerImage' => 'misty_mountains.webp',
                'textBoxContent' =>
                    [
                        'redText' => 'Studio Creatio',
                        'blueText' => 'no-code platform',
                        'desc' => 'Vállalati folyamatautomatizáció tervezése, fejlesztése és bevezetése IT ismeretek nélkül! A Creatio no-code / low-code platformja lehetővé teszi a tökéletesen testreszabott munkamenet automatizációt, legyen szó bármilyen iparágról vagy szakterületről.'
                    ],
                'detailsView' => 'serpa_details'
            ],
            'creatio' => [
                'headerImage' => 'green_mountains.png',
                'textBoxContent' =>
                    ['redText' => 'Creatio CRM',
                        'blueText' => '',
                        'desc' => 'CRM gyorsan, rugalmasan, kódolás nélkül! A hagyományos folyamatautomatizációs rendszerek bevezetése
                időigényes és költséges, míg a no-code platformra épülő Creatio CRM alkalmazásokkal mindez
                karnyújtásnyira van csupán.'
                    ],
                'detailsView' => 'crm_details'],
            default => null,
        };
        if(empty($data)){
            abort(404);
        }
        return view('product', $data);
    }
}

