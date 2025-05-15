<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dragon-Network Survey</title>
    <meta property="og:title"
          content="The Dragon-Network Survey">
    <meta name="description" content="Make DN great again!">
    <meta property="og:description" content="Make DN great again!">

    <meta name="keywords" content="Lineage L2 Substack Dragon Network">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/header.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-montserrat">
@yield('content')
</body>
</html>
