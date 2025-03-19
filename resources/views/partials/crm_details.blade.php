<section class="container mx-auto mt-32 px-4 py-8">
    <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-8">
        <!-- Image Section (Stacks Above on Mobile) -->
        <div class="md:col-span-7 flex flex-col items-center gap-4">
            <img src="{{ asset('/images/serpa/serpa-ps1.jpeg') }}" alt="Serpa PS1"
                 class="w-full rounded-lg shadow-lg">
        </div>

        <!-- Text Section -->
        <div class="md:col-span-5">
            <img src="{{ asset('/images/CRM.png') }}" alt="Serpa Logo" class="mx-auto w-44 h-auto">

            <ul class="space-y-2 p-4">
                <li class="flex items-center relative">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                        <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                    </svg>
                    Azonnal használható funkciók
                </li>
                <li class="flex items-center relative">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                        <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                    </svg>
                    Könnyű testreszabhatóság
                </li>
                <li class="flex items-center relative">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                        <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                    </svg>
                    Egyszerű integráció
                </li>
            </ul>
            <p class="mt-4 p-4 text-gray-700">
                Csapatod a Creatio CRM alkalmazásokkal gyorsabb és hatékonyabb ügyfélkezelésre lesz képes, könnyen
                áttekinthető dashboard segíti a feladatok kezelését és a közös munkát. Válaszd a könnyen bevezethető,
                skálázható és költséghatékony CRM-megoldást, amely céged növekedéséhez igazodik!
            </p>
            <a href="{{route('contact')}}"
               class="mt-4 bg-lpsRed text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRedLight">
                Díjmentes Bemutatót kérek
            </a>
        </div>
    </div>
</section>
{{--@include('partials.product_clients')--}}
<section class="container mx-auto px-6 py-10 space-y-16">
    <!-- Első sor -->
    <div class="relative flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsRed/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:left-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Marketing</h3>
            <p class="lg:text-lg text-md">Automatizált és adatvezérelt kampánykezelés no-code platformon . Az érdeklődők
                és potenciális ügyfelek szegmentálása, kezelése, e-mail és többcsatornás marketing kampányok
                áttekinthető menedzsmentje révén lehetővé teszi a célzott, adat alapú kommunikációt.
            </p>
            <a href="{{route('contact')}}" class="mt-4 bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/contact_bundle_aim.png') }}" alt="Serpa PS2"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Második sor -->
    <div class="relative flex flex-col md:flex-row-reverse items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsDarkBlue/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:right-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Értékesítés</h3>
            <p class="lg:text-lg text-md">Értékesítési folyamatok hatékony kezelése automatizálva, a kezdeti
                kapcsolatfelvételtől az ajánlatok kezelésén át a szerződéskötésig. Ajánlások, lehetőségkezelés,
                utánkövetés és teljes körű ügyfélnyilvántartás révén támogatja a gyorsabb üzletkötéseket és a jobb
                konverziós arányokat.</p>
            <a href="{{route('contact')}}" class="mt-4 bg-white text-lpsDarkBlue hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRed">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/agent_desktop.png') }}" alt="Serpa PS2"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <div class="relative flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsRed/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:left-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Ügyfélszolgálat</h3>
            <p class="lg:text-lg text-md">Kiemelkedő ügyfélélmény: automatizált ügyfélszolgálat. A Creatio CRM megoldása
                no-code alapon teszi lehetővé a többcsatornás kommunikációt, beleértve telefont, emailt és csetet. Így
                gyorsan és hatékonyan kezelhetők a megkeresések, panaszok és támogatási igények.</p>
            <a href="{{route('contact')}}" class="mt-4 bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/glassmorphism.png') }}" alt="Serpa PS2"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>
</section>

<section class="container mx-auto px-6 py-10">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold text-lpsRed mb-6 text-center">KINEK AJÁNLJUK?</h2>

        <div class="flex flex-col" x-data="{ active: null, height: 0 }">
            <!-- Item 1 -->
            <div class="py-4 border-b border-[rgba(141, 141, 141, 0.26)]">
                <button @click="active = (active === 1 ? null : 1); $nextTick(() => height = active ? $refs.panel1.scrollHeight : 0)" class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/icons/7-crm-campaigns.svg') }}" alt="Icon 1" class="w-[4rem] h-[4rem]">
                        <h3 class="text-lg font-bold text-gray-900">MAXIMIZE CROSS-TEAM COLLABORATION</h3>
                    </div>
                    <span class="w-6 h-6 transition-transform duration-300 transform"
                          :class="{ 'rotate-180': active === 1 }">
                        <img src="{{ asset('/images/down_arrow.png') }}" class="transition-transform duration-300">
                    </span>
                </button>
                <div x-ref="panel1" x-bind:style="`height: ${active === 1 ? height + 'px' : '0px'}`" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="text-gray-700 mt-2 pl-[4.5rem]">
                        Align your sales, marketing, and service teams with a seamless lead-to-repeat customer process based on the unified Creatio CRM workflows and single-source database.
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="py-4 border-b border-[rgba(141, 141, 141, 0.26)]">
                <button @click="active = (active === 2 ? null : 2); $nextTick(() => height = active ? $refs.panel2.scrollHeight : 0)" class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/icons/7-crm-collaboration.svg') }}" alt="Icon 2" class="w-[4rem] h-[4rem]">
                        <h3 class="text-lg font-bold text-gray-900">INCREASE EFFICIENCY OF CAMPAIGNS</h3>
                    </div>
                    <span class="w-6 h-6 transition-transform duration-300 transform"
                          :class="{ 'rotate-180': active === 2 }">
                        <img src="{{ asset('/images/down_arrow.png') }}" class="transition-transform duration-300">
                    </span>
                </button>
                <div x-ref="panel2" x-bind:style="`height: ${active === 2 ? height + 'px' : '0px'}`" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="text-gray-700 mt-2 pl-[4.5rem]">
                        Improve marketing campaign performance with advanced automation and AI-driven insights, enabling better segmentation and personalization.
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="py-4 border-b border-[rgba(141, 141, 141, 0.26)]">
                <button @click="active = (active === 3 ? null : 3); $nextTick(() => height = active ? $refs.panel3.scrollHeight : 0)" class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/icons/7-crm-customer-experience.svg') }}" alt="Icon 3" class="w-[4rem] h-[4rem]">
                        <h3 class="text-lg font-bold text-gray-900">INCREASE WIN RATES</h3>
                    </div>
                    <span class="w-6 h-6 transition-transform duration-300 transform"
                          :class="{ 'rotate-180': active === 3 }">
                        <img src="{{ asset('/images/down_arrow.png') }}" class="transition-transform duration-300">
                    </span>
                </button>
                <div x-ref="panel3" x-bind:style="`height: ${active === 3 ? height + 'px' : '0px'}`" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="text-gray-700 mt-2 pl-[4.5rem]">
                        Streamline lead nurturing and optimize sales processes to drive higher win rates and customer conversions.
                    </p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="py-4 border-b border-[rgba(141, 141, 141, 0.26)]">
                <button @click="active = (active === 4 ? null : 4); $nextTick(() => height = active ? $refs.panel1.scrollHeight : 0)" class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/icons/7-crm-organization.svg') }}" alt="Icon 1" class="w-[4rem] h-[4rem]">
                        <h3 class="text-lg font-bold text-gray-900">MAXIMIZE CROSS-TEAM COLLABORATION</h3>
                    </div>
                    <span class="w-6 h-6 transition-transform duration-300 transform"
                          :class="{ 'rotate-180': active === 4 }">
                        <img src="{{ asset('/images/down_arrow.png') }}" class="transition-transform duration-300">
                    </span>
                </button>
                <div x-ref="panel1" x-bind:style="`height: ${active === 4 ? height + 'px' : '0px'}`" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="text-gray-700 mt-2 pl-[4.5rem]">
                        Align your sales, marketing, and service teams with a seamless lead-to-repeat customer process based on the unified Creatio CRM workflows and single-source database.
                    </p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="py-4 border-b border-[rgba(141, 141, 141, 0.26)]">
                <button @click="active = (active === 5 ? null : 5); $nextTick(() => height = active ? $refs.panel2.scrollHeight : 0)" class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/icons/7-crm-collaboration.svg') }}" alt="Icon 2" class="w-[4rem] h-[4rem]">
                        <h3 class="text-lg font-bold text-gray-900">INCREASE EFFICIENCY OF CAMPAIGNS</h3>
                    </div>
                    <span class="w-6 h-6 transition-transform duration-300 transform"
                          :class="{ 'rotate-180': active === 5 }">
                        <img src="{{ asset('/images/down_arrow.png') }}" class="transition-transform duration-300">
                    </span>
                </button>
                <div x-ref="panel2" x-bind:style="`height: ${active === 5 ? height + 'px' : '0px'}`" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="text-gray-700 mt-2 pl-[4.5rem]">
                        Improve marketing campaign performance with advanced automation and AI-driven insights, enabling better segmentation and personalization.
                    </p>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="py-4 border-b border-[rgba(141, 141, 141, 0.26)]">
                <button @click="active = (active === 6 ? null : 6); $nextTick(() => height = active ? $refs.panel3.scrollHeight : 0)" class="flex items-center justify-between w-full">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/icons/7-crm-sales-rates.svg') }}" alt="Icon 3" class="w-[4rem] h-[4rem]">
                        <h3 class="text-lg font-bold text-gray-900">INCREASE WIN RATES</h3>
                    </div>
                    <span class="w-6 h-6 transition-transform duration-300 transform"
                          :class="{ 'rotate-180': active === 6 }">
                        <img src="{{ asset('/images/down_arrow.png') }}" class="transition-transform duration-300">
                    </span>
                </button>
                <div x-ref="panel3" x-bind:style="`height: ${active === 6 ? height + 'px' : '0px'}`" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="text-gray-700 mt-2 pl-[4.5rem]">
                        Streamline lead nurturing and optimize sales processes to drive higher win rates and customer conversions.
                    </p>
                </div>
            </div>

            <!-- Add More Items as Needed -->
        </div>
    </div>
</section>


