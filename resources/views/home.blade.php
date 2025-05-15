@extends('layouts.main')

@section('content')
    <x-header
        headerImage='header.jpg'
        showTextBox={{true}}
        textBoxContent="{!!json_encode($textBoxContent)!!}"></x-header>
{{--        <x-clients/>--}}
    {{--<x-blog />--}}

    {{--CONTACT FORM--}}

    <section class="py-12 relative overflow-hidden"
             style="background-image: url('{{ asset('/images/contahct-bg.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container md:mt-32 mx-auto w-full md:w-[80%] lg:w-[70%] xl:w-[60%]">
            <div class="w-full">
                <x-contact-form class="w-full"></x-contact-form>
            </div>
        </div>
    </section>

@endsection
