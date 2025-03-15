@extends('layouts.main')

@section('content')
    <x-header showTextBox={{false}} headerImage='blackCliff.png'></x-header>
    <section>
        <div class="max-w-6xl mx-auto p-6">
            <h1 class="text-3xl text-lpsRed font-bold mb-4">A vállalati folyamatfejlesztés alkalmazásai</h1>
            <p class="mb-6">
                Ne várj a holnapra: a Creatio platformon már ma elkezdheted a céges folyamatok fejlesztését.
                Rugalmas alkalmazásaink tökéletesen személyre szabhatók és remekül skálázhatók, így kézben tarthatod a fejlesztésre szánt erőforrásokat.
                Akár egyedi folyamatautomatizációs megoldásban látod a fejlődés útját, akár személyre szabott CRM alkalmazásban,
                a Creatio segítségével könnyen megvalósíthatod terveidet.
            </p>

            <!-- Első blokk: Mobilon kép felül, nagyobb nézetben jobb oldalon -->
            <div class="grid grid-cols-1 md:grid-cols-11 gap-6 items-stretch mb-8">
                <div class="md:col-span-6 order-2 md:order-1 flex flex-col justify-start bg-lpsRed text-white p-6 rounded-xl shadow-md">
                    <h2 class="text-2xl font-bold mb-2">Creatio CRM</h2>
                    <p class="mb-4">
                        A Creatio no-code platformra épülő, rugalmasan testreszabható CRM alkalmazások,
                        melyek fejlett automatizációval segítik a marketing, az értékesítés és az ügyfélszolgálat sikerét,
                        illeszkedve céged üzleti igényeihez.
                    </p>
                    <a href="{{route('product', ['name' => 'creatio'])}}" class="bg-white text-lpsRed px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 self-start w-auto">
                        Többet szeretnék tudni
                    </a>
                </div>
                <div class="md:col-span-5 order-1 md:order-2 flex">
                    <img src="{{ asset('/images/creatioThumbnail.png') }}" alt="Creatio CRM" class="popup-image w-full h-full rounded-xl shadow-md object-cover">
                </div>
            </div>

            <!-- Második blokk: Mobilon kép felül, nagyobb nézetben bal oldalon -->
            <div class="grid grid-cols-1 md:grid-cols-11 gap-6 items-stretch">
                <div class="md:col-span-5 order-1 flex">
                    <img src="{{ asset('/images/studioThumbnail.png') }}" alt="Studio Creatio" class="popup-image w-full h-full rounded-xl shadow-md object-cover">
                </div>
                <div class="md:col-span-6 order-2 flex flex-col justify-start bg-lpsDarkBlue text-white p-6 rounded-xl shadow-md">
                    <h2 class="text-2xl font-bold mb-2">Studio Creatio</h2>
                    <p class="mb-4">
                        No-code / low-code fejlesztési platform, amely saját fejlesztésű, vagy harmadik feles alkalmazások gyors bevezetésével lehetővé
                        teszi a tökéletesen testre szabott vállalati automatizációt, fejlesztői ismeretek nélkül.
                    </p>
                    <a href="{{route('product', ['name' => 'serpa'])}}" class="bg-white text-lpsDarkBlue px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 self-start w-auto">
                        Többet szeretnék tudni
                    </a>
                </div>
            </div>
        </div>
    </section>






    <section class="py-12">
        <div class="max-w-6xl mx-auto p-6">
            <!-- Cím -->
            <h2 class="text-3xl font-bold mb-4 text-lpsRed">Érdeklődőink részére</h2>
            <p class="mx-auto mb-8 ">
                Az LP Solutions számos szakterületen szerzett tapasztalatokat üzleti alkalmazások, folyamatmenedzsment
                és -automatizáció területén, így széles rálátással támogatjuk vállalkozásod a Creatio platform
                lehetőségeinek kiaknázásában.
                Akár a Studio Creatio platformra építhető egyedi megoldások érdekelnek, akár valamelyik Creatio CRM
                megoldással kapcsolatban van további kérdésed,
                munkatársaink örömmel keresnek meg egy neked megfelelő időpontban, személyesen vagy on-line.
            </p>
            <x-contact-form></x-contact-form>
        </div>
    </section>

@endsection
