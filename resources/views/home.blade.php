@extends('layouts.main')

@section('content')
    <x-header
        headerImage='main_bg.webp'
        showTextBox={{true}}
        textBoxContent="{!!json_encode($textBoxContent)!!}"></x-header>
{{--        <x-clients/>--}}
    <x-dashboard/>
    <x-features/>
    <x-about/>
    <x-products/>
    <x-milestones/>
    <x-testimonials/>
    {{--<x-blog />--}}

    {{--CONTACT FORM--}}

    <section class="py-12 relative"
             style="background-image: url('{{ asset('/images/misty_mountains.webp') }}'); background-size: cover; background-position: center;">
        <div class="container px-2 md:px-4 lg:px-8 mx-auto max-w-3xl">
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-white mb-6 text-left">Ismerj meg minket!</h1>
            <p class="text-white mb-6">
                Csapatunk számos szakterületen szerzett tapasztalatokat üzleti alkalmazások, folyamatmenedzsment és
                -automatizáció területén, így széles rálátással támogatjuk vállalkozásod a Creatio platform
                lehetőségeinek kiaknázásában.
            </p>
        </div>
        <div class="container px-2 md:px-4 lg:px-8 mx-auto max-w-3xl">
            <div class="w-full">
                <x-contact-form class="w-full"></x-contact-form>
            </div>
        </div>
    </section>

@endsection
