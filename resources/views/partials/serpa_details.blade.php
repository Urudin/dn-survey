<section class="container mx-auto mt-32 px-4 py-8">
    <div class="grid grid-cols-12 gap-8r">
        <!-- Bal oldali rész (45%) -->
        <div class="col-span-5">
            <img src="{{ asset('/images/serpa/serpa-logo.webp') }}" alt="Serpa Logo" class="mx-auto w-44 h-auto">
            <p class="mt-4 p-4 text-gray-700">
                Itt jön a szöveg a bal oldalon, amit meg szeretnél jeleníteni. Lehet hosszabb is, de a dizájn rugalmas marad.
            </p>

                <ul class="space-y-2 p-4">
                    <li class="flex items-center relative">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                        </svg>
                        Sed magna enim
                    </li>
                    <li class="flex items-center relative">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                        </svg>
                        Consequat fermentum
                    </li>
                    <li class="flex items-center relative">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                        </svg>
                        Maximus faucibus
                    </li>
                    <li class="flex items-center relative">
                        <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                        </svg>
                        Vestibulum vel nunc
                    </li>
                </ul>
                <button class="mt-4 bg-lpsRed text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRedLight">Díjmentes bemutatót kérek</button>
        </div>

        <!-- Jobb oldali rész (55%) -->
        <div class="col-span-7 flex flex-col items-center gap-4">
            <img src="{{ asset('/images/serpa/serpa-ps1.jpeg') }}" alt="Serpa PS1" class="w-full rounded-lg shadow-lg">
            <img src="{{ asset('/images/serpa/serpa-ps2.png') }}" alt="Serpa PS2" class="w-full rounded-lg shadow-lg">
        </div>
    </div>
</section>
