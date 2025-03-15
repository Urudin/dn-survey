@php
    $features = [
        'Studio' => 'A Creatio no-code platform, melyre tökéletesen személyre szabott folyamatautomatizálási megoldásaid építheted.',
        'Marketing' => 'Automatizáld a kampánykezelést és az ügyfélkapcsolati munkafolyamatokat, lehetővé téve a célzott, eredményorientált kommunikációt.',
        'Értékesítés' => 'Menedzseld hatékonyan az értékesítési folyamatokat a kezdeti kapcsolatfelvételtől a szerződéskötésen át az utánkövetésig.',
        'Ügyfélszolgálat' => 'Átlátható folyamatokra építve gyors és hatékony megoldásokat nyújthatsz ügyfeleid számára, növelve az elégedettséget és a lojalitást.',
        ];
@endphp
<section class="bg-red-50 py-12">
    <div class="container mx-auto px-2 md:px-4 lg:px-8 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
        @foreach($features as $label => $description)
            <div class="p-6 bg-white shadow rounded-lg border border-red-700 flex flex-col">
                <h3 class="text-xl font-bold text-lpsRed mb-4">{{$label}}</h3>
                <p class="text-lg text-lpsDarkBlue flex-grow mb-4">
                    {{$description}}
                </p>
{{--                <button class="mt-auto bg-lpsRed text-white px-4 py-2 rounded-full shadow-md hover:bg-red-800">Érdekel</button>--}}
            </div>
        @endforeach
    </div>
</section>

{{--                <ul class="space-y-2">--}}
{{--                    <li class="flex items-center relative">--}}
{{--                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">--}}
{{--                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>--}}
{{--                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>--}}
{{--                        </svg>--}}
{{--                        Sed magna enim--}}
{{--                    </li>--}}
{{--                    <li class="flex items-center relative">--}}
{{--                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">--}}
{{--                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>--}}
{{--                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>--}}
{{--                        </svg>--}}
{{--                        Consequat fermentum--}}
{{--                    </li>--}}
{{--                    <li class="flex items-center relative">--}}
{{--                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">--}}
{{--                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>--}}
{{--                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>--}}
{{--                        </svg>--}}
{{--                        Maximus faucibus--}}
{{--                    </li>--}}
{{--                    <li class="flex items-center relative">--}}
{{--                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">--}}
{{--                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>--}}
{{--                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>--}}
{{--                        </svg>--}}
{{--                        Vestibulum vel nunc--}}
{{--                    </li>--}}
{{--                </ul>--}}
