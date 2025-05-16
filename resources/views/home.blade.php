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
        <div class="container md:mt-32 mx-auto w-full md:w-[80%] lg:w-[70%] xl:w-[60%]">
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-lpsDarkBlue mb-6 text-left">Introduction</h1>
            <p class="text-lg md:text-xl lg:text-2xl font-bold text-lpsRed mb-6 text-left">Following our recent servers that received mixed feedback, we’ve spent months working on how to reinvent Dragon-Network in a way that brings true satisfaction — both for you, the players, and for us, the developers.</p>
            <p class="text-lpsDarkBlue text-md md:text-lg lg:text-xl mb-6">
                During this time, we’ve acquired high-quality files and exciting events, all based on the Interlude chronicle, enhanced with additional content to ensure the gameplay remains fresh and engaging.
            </p>
            <p class="text-lpsDarkBlue text-md md:text-lg lg:text-xl mb-6">
                Below, you’ll find a few details that have already been finalized regarding the server. For the rest, we’d love to hear your feedback — our goal is to create the best possible experience together.            </p>
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
