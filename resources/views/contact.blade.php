@extends('layouts.main')

@section('content')
    <x-header headerImage='magic_stone.webp' showTextBox={{$showTextBox}} ></x-header>
    <section class="py-12">
        <div class=" mx-auto p-6">
            <!-- Cím -->
            <h2 class="text-3xl font-bold mb-4 text-lpsRed">Munkatársaink várják megkeresésed</h2>
            <p class=" mx-auto mb-8 ">
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
