@extends('layouts.main')

@section('content')
    <x-header
        headerImage='serpa/serpa_highlighted.jpg'
        showTextBox={{true}}
        buttons=@json([])
        textBoxContent="{!!json_encode($textBoxContent)!!}"></x-header>
    @include('partials.' . $detailsView)
@endsection
