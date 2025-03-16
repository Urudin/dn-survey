<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatio</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

{{--    @if(in_array(url()->current(), [url('/home'), url('/en/home'), url('/hu/home'), url('/de/home')]))--}}
{{--        @php--}}
{{--            $locales = ['en', 'hu', 'de'];--}}
{{--        @endphp--}}

{{--        @foreach($locales as $locale)--}}
{{--            <link rel="alternate" hreflang="{{ $locale }}" href="{{ url($locale . '/' . 'home') }}">--}}
{{--        @endforeach--}}

{{--        <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">--}}
{{--    @endif--}}
</head>
<body class="font-montserrat">
@yield('content')
<x-footer />
</body>
</html>
