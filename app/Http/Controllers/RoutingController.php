<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class RoutingController extends Controller
{
    public function home(): View
    {
        return view('home', ['textBoxContent' => ['redText' => 'Creatio', 'blueText' => 'folyamatmenedzsment megoldások', 'desc' => 'Túl bonyolultak üzleti folyamataid? Sok vállalkozás küzd lassú munkafolyamatokkal, amelyek hátráltatják a növekedést. A Creatio személyre szabható folyamatmenedzsment megoldásai lehetővé teszik az üzletmenet egyszerű automatizálását, fejlesztői ismeretek nélkül. És indulhat a növekedés!']]);
    }

    public function contact(): View
    {
        return view('contact', ['showTextBox' => false]);
    }

    public function creatioProducts(): View
    {
        return view('creatio_products', ['textBoxContent' => ['redText' => 'A vállalati folyamatfejlesztés ', 'blueText' => 'alkalmazásai', 'desc' => 'Ne várj a holnapra: a Creatio platformon már ma elkezdheted a céges folyamatok fejlesztését. Rugalmas alkalmazásaink tökéletesen személyre szabhatók és skálázhatók, tehát saját ritmusban haladhatsz. Így könnyű kézben tartani a fejlesztési költségeket!']]);
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

