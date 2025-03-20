@extends('layouts.main')

@section('content')
    <x-header
        headerImage='{{$headerImage}}'
        showTextBox={{true}}
        buttons=@json([])
        textBoxContent="{!!json_encode($textBoxContent)!!}"></x-header>
    @include('partials.' . $detailsView)
    <section class="py-12">
        <div class="max-w-6xl mx-auto p-6">
            <!-- Cím -->
            <h2 class="text-3xl font-bold mb-4 text-lpsRed">Kérd ingyenes bemutatónkat </h2>
            <p class="mx-auto mb-8 ">
                Töltsd ki az alábbi űrlapot, és rövid időn belül felkeresünk, időpontot egyeztetni egy személyes vagy online bemutatóhoz:
            </p>
            <x-contact-form></x-contact-form>
        </div>
    </section>
@endsection
