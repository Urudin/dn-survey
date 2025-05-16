@extends('layouts.main')

@section('content')
    <x-header
        headerImage='header.jpg'
        showTextBox={{true}}
        textBoxContent="{!!json_encode($textBoxContent)!!}"></x-header>
{{--        <x-clients/>--}}
    {{--<x-blog />--}}

    {{--CONTACT FORM--}}

    <section class="py-[40px] relative overflow-hidden">
        <div class="container md:mt-16 mx-auto w-full md:w-[80%] lg:w-[70%] xl:w-[60%]">
            <h1 class="text-lg text-lpsRed md:text-xl font-bold lg:text-2xl mb-6">
                Your feedback is important for us!
            </h1>
            <p class="text-lpsDarkBlue text-md md:text-lg lg:text-xl mb-6">
                Below, you’ll find a few details that have already been finalized regarding the server. For the rest, we’d love to hear your feedback — our goal is to create the best possible experience together.
            </p>
            <ul>
                <li class="text-lpsDarkBlue text-md md:text-lg lg:text-xl mb-6">
                    <strong class="text-lpsRed">Chronicle: </strong>Interlude+
                </li>
                <li class="text-lpsDarkBlue text-md md:text-lg lg:text-xl mb-6">
                    <strong class="text-lpsRed">New key feature: </strong> Daily events with unique reward system
                </li>
                <li class="text-lpsDarkBlue text-md md:text-lg lg:text-xl mb-6">
                    <strong class="text-lpsRed">Sub-stack System: </strong>Yes
                </li>
                <li class="text-lpsDarkBlue text-md md:text-lg lg:text-xl mb-6">
                    <strong class="text-lpsRed">GMs: </strong>Lewis & Floki
                </li>
            </ul>
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-lpsDarkBlue mb-6 text-left">Feedback Form:</h1>
            <div class="w-full">
                <x-contact-form class="w-full"></x-contact-form>
            </div>
        </div>
    </section>

@endsection
