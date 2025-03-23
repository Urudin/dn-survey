<section class="container mx-auto mt-32 px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
        <!-- Bal oldal -->
        <div class="md:col-span-5">
            <div class="flex flex-col text-left">
                <!-- Ikon -->
                <div class="mb-4 flex justify-center">
                    <img src="{{ asset('/images/low-code.png') }}" alt="Creatio Logo" class="w-24 h-auto">
                </div>

                <!-- Szöveg -->
                <p class="mb-4 text-gray-700">
                    360 fokos ügyfélkép és tökéletes dokumentumkezelés? A Creatio lehetővé teszi, fejlesztői ismeretek
                    nélkül.
                </p>

                <!-- Lista -->
                <ul class="space-y-2 pl-2 text-left">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"/>
                        </svg>
                        Azonnal használható funkciók
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"/>
                        </svg>
                        Könnyű testreszabhatóság
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"/>
                        </svg>
                        Egyszerű integráció
                    </li>
                </ul>

                <!-- Alsó szöveg -->
                <p class="mt-4 text-gray-700">
                    Csapatod a Creatio CRM alkalmazásokkal gyorsabb és hatékonyabb ügyfélkezelésre lesz képes, könnyen
                    áttekinthető dashboard segíti a feladatok kezelését és a közös munkát. Válaszd a könnyen
                    bevezethető,
                    skálázható és költséghatékony CRM-megoldást, amely céged növekedéséhez igazodik!
                </p>
            </div>
        </div>

        <!-- Jobb oldal (nagy kép) -->
        <div class="md:col-span-7 flex justify-center">
            <img src="{{ asset('/images/graph-review.jpeg') }}" alt="Graph Review"
                 class="w-full max-w-md md:max-w-full rounded-lg shadow-lg">
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
            <p class="">Automatizált kampánykezelés no-code platformon. A potenciális ügyfelek szegmentálása, kezelése,
                e-mail és többcsatornás marketing kampányok áttekinthető menedzsmentje révén lehetővé teszi a célzott,
                adat alapú kommunikációt. Integrálható és testreszabható CRM alkalmazás, mely segíti növelni az ügyfelek
                elköteleződését és az értékesítési eredményeket.
            </p>
            <a href="#contactForm"
               class="mt-4 font-bold bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/contact_bundle_aim.png') }}" alt="Contact Bundle"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Második sor -->
    <div class="relative flex flex-col md:flex-row-reverse items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsDarkBlue/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:right-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Értékesítés</h3>
            <p class="">Értékesítési folyamatok hatékony kezelése automatizálva, a kezdeti kapcsolatfelvételtől az
                ajánlatadáson át a szerződéskötésig. Előrejelzések, lehetőségkezelés, utánkövetés és teljes körű
                ügyfélnyilvántartás révén gyorsítja az üzletkötést és javítja a konverziót. Testreszabható, skálázható
                és integrálható, így rugalmasan igazodik vállalkozásod növekedési céljaihoz.</p>
            <a href="#contactForm"
               class="mt-4 font-bold bg-white text-lpsDarkBlue hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRed">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/agent_desktop.png') }}" alt="Agent Desktop"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <div class="relative flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsRed/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:left-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Ügyfélszolgálat</h3>
            <p class="">Kiemelkedő ügyfélélmény automatizálva. A Creatio CRM lehetővé teszi a többcsatornás
                ügyfélszolgálati kommunikációt, beleértve telefont, emailt és csetet. Gyorsan és hatékonyan kezelhetők a
                megkeresések, panaszok és támogatási igények. Automatizált szolgáltatási szint (SLA) és hibajegy kezelés
                mellett gyors reakcióidőt biztosít, így emeli az ügyfél-elégedettséget.</p>
            <a href="#contactForm"
               class="mt-4 font-bold bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/glassmorphism.png') }}" alt="Glassmorphism"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>
</section>

<section class="container mx-auto px-6 py-10">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold text-lpsRed mb-6">MIÉRT AJÁNLJUK?</h2>


        <div class="flex flex-col" x-data="{ active: null, height: 0 }">
            @foreach(\App\Services\DataService::crmIconTable() as $key => $data)
                <div class="py-4 border-b border-[rgba(141, 141, 141, 0.26)]">
                    <button
                        @click="active = (active === {{$key + 1}} ? null : {{$key + 1}}); $nextTick(() => height = active ? $refs.panel{{$key + 1}}.scrollHeight : 0)"
                        class="flex items-center justify-between w-full">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/icons/' . $data['icon']) }}" alt="Icon {{$key + 1}}"
                                 class="w-[4rem] h-[4rem]">
                            <h3 class="text-lg font-bold text-gray-900">{{$data['title']}}</h3>
                        </div>
                        <span class="w-6 h-6 transition-transform duration-300 transform"
                              :class="{ 'rotate-180': active === {{$key + 1}} }">
                        <img src="{{ asset('/images/down_arrow.png') }}" class="transition-transform duration-300">
                    </span>
                    </button>
                    <div x-ref="panel{{$key + 1}}"
                         x-bind:style="`height: ${active === {{$key + 1}} ? height + 'px' : '0px'}`"
                         class="overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="text-gray-700 mt-2 pl-[4.5rem]">
                            {{$data['desc']}}
                        </p>
                    </div>
                </div>

            @endforeach
            <!-- Add More Items as Needed -->
        </div>
    </div>
</section>


