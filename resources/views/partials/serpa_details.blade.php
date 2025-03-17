<section class="container mx-auto mt-32 px-4 py-8">
    <div class="grid grid-cols-12 gap-8r">
        <!-- Bal oldali rész (45%) -->
        <div class="col-span-5">
            <img src="{{ asset('/images/serpa/serpa-logo.webp') }}" alt="Serpa Logo" class="mx-auto w-44 h-auto">
            <p class="mt-4 p-4 text-gray-700">
                Itt jön a szöveg a bal oldalon, amit meg szeretnél jeleníteni. Lehet hosszabb is, de a dizájn rugalmas
                marad.
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
            <button class="mt-4 bg-lpsRed text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRedLight">Díjmentes
                bemutatót kérek
            </button>
        </div>

        <!-- Jobb oldali rész (55%) -->
        <div class="col-span-7 flex flex-col items-center gap-4">
            <img src="{{ asset('/images/serpa/serpa-ps1.jpeg') }}" alt="Serpa PS1" class="w-full rounded-lg shadow-lg">
            <img src="{{ asset('/images/serpa/serpa-ps2.png') }}" alt="Serpa PS2" class="w-full rounded-lg shadow-lg">
        </div>

    </div>
</section>
@include('partials.product_clients')
<section class="container mx-auto px-6 py-10 space-y-16">
    <!-- Első sor -->
    <div class="relative flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsRed/90 text-white rounded-xl p-6 w-[80%] md:w-[60%] lg:w-[40%] md:h-[15rem] h-[18rem] flex flex-col items-center justify-center text-center space-y-2
                md:relative md:left-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="lg:text-3xl md:text-xl textl-lg font-bold">Ez egy cím sor.</h3>
            <p class="md:text-lg text-md">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <!-- Kép -->
        <div class="w-[80%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/graph-review.jpeg') }}" alt="Serpa PS2"
                 class="w-full h-full object-cover rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Második sor -->
    <div class="relative flex flex-col md:flex-row-reverse items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsDarkBlue/90 text-white rounded-xl p-6 w-[80%] md:w-[60%] lg:w-[40%] md:h-[15rem] h-[18rem] flex flex-col items-center justify-center text-center space-y-2
                md:relative md:right-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="lg:text-3xl md:text-xl textl-lg font-bold">Ez egy cím sor.</h3>
            <p class="md:text-lg text-md">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <!-- Kép -->
        <div class="w-[80%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/graph-review.jpeg') }}" alt="Serpa PS2"
                 class="w-full h-full object-cover rounded-lg shadow-lg">
        </div>
    </div>

    <div class="relative flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsRed/90 text-white rounded-xl p-6 w-[80%] md:w-[60%] lg:w-[40%] md:h-[15rem] h-[18rem] flex flex-col items-center justify-center text-center space-y-2
                md:relative md:left-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="lg:text-3xl md:text-xl textl-lg font-bold">Ez egy cím sor.</h3>
            <p class="md:text-lg text-md">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <!-- Kép -->
        <div class="w-[80%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/graph-review.jpeg') }}" alt="Serpa PS2"
                 class="w-full h-full object-cover rounded-lg shadow-lg">
        </div>
    </div>
</section>
<section class="container mx-auto px-6 py-10">
    <div class="flex items-center justify-center">

        <div class="grid grid-cols-2 gap-16 items-center">
            <div class="flex items-center gap-4 col-span-2">
                <h2 class="text-3xl font-bold text-lpsRed mb-6">KINEK AJÁNLJUK?</h2>
            </div>
            <!-- 1. ikon -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/icons/7-crm-campaigns.svg') }}" alt="Icon 1" class="w-[6rem] h-[6rem]">
                <p class="text-gray-800 text-lg">Suspendisse eu pulvinar felis</p>
            </div>

            <!-- 2. ikon -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/icons/7-crm-collaboration.svg') }}" alt="Icon 2" class="w-[6rem] h-[6rem]">
                <p class="text-gray-800 text-lg">Suspendisse eu pulvinar felis</p>
            </div>

            <!-- 3. ikon -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/icons/7-crm-customer-experience.svg') }}" alt="Icon 3"
                     class="w-[6rem] h-[6rem]">
                <p class="text-gray-800 text-lg">Suspendisse eu pulvinar felis</p>
            </div>

            <!-- 4. ikon -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/icons/7-crm-organization.svg') }}" alt="Icon 4" class="w-[6rem] h-[6rem]">
                <p class="text-gray-800 text-lg">Suspendisse eu pulvinar felis</p>
            </div>

            <!-- 5. ikon -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/icons/7-crm-sales-rates.svg') }}" alt="Icon 5" class="w-[6rem] h-[6rem]">
                <p class="text-gray-800 text-lg">Suspendisse eu pulvinar felis</p>
            </div>

            <!-- 6. ikon -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/icons/7-crm-sales-rates.svg') }}" alt="Icon 6" class="w-[6rem] h-[6rem]">
                <p class="text-gray-800 text-lg">Suspendisse eu pulvinar felis</p>
            </div>
        </div>
    </div>
</section>
