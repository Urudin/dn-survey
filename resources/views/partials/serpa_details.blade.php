<section class="container mx-auto md:mt-32 px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
        <!-- Bal oldal -->
        <div class="md:col-span-5">
            <div class="flex flex-col text-left">
                <!-- Ikon - középen desktopon, balra mobilon -->
                <div class="mb-4 flex justify-start justify-center">
                    <img src="{{ asset('/images/low-code.png') }}" alt="Low Code Ikon"
                         class="w-24 h-auto">
                </div>

                <!-- Szöveg -->
                <p class="mb-4 text-gray-700">
                    Vállalati folyamatautomatizáció tervezése, fejlesztése és bevezetése IT ismeretek nélkül! A Creatio
                    no-code / low-code platformja lehetővé teszi a tökéletesen testreszabott munkamenet automatizációt,
                    legyen szó bármilyen iparágról vagy szakterületről.
                </p>
                <p class="mb-4 text-gray-700">
                    Akár saját fejlesztést szeretnél, akár harmadik féltől származó megoldást vezetnél be, a Studio Creatio
                    programozók hada nélkül is lehetővé teszi az alkalmazásod:
                </p>

                <!-- Előnyök listája - mindig balra igazított -->
                <ul class="space-y-2 pl-2 text-left">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white" />
                        </svg>
                        tervezését
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white" />
                        </svg>
                        fejlesztését és
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-red-700" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white" />
                        </svg>
                        bevezetését.
                    </li>
                </ul>

                <p class="mt-4 text-gray-700">
                    A Creatio felvértezi vezető szerepre törő cégedet mindennel, ami az üzletmenet automatizálásához és a
                    folyamatmenedzsment megoldások skálázásához kell.
                </p>
            </div>
        </div>

        <!-- Jobb oldal (nagy kép) -->
        <div class="md:col-span-7 flex justify-center">
            <img src="{{ asset('/images/modern-office.jpg') }}" alt="Modern Office"
                 class="w-full max-w-md md:max-w-full rounded-lg shadow-lg">
        </div>
    </div>
</section>


<section class="container mx-auto px-6 py-10 space-y-16">
    <!-- Első sor -->
    <div class="relative flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsRed/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:left-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Rugalmas építőelemek</h3>
            <p class="">Alkalmazások létrehozása egyszerűen: átfogó könyvtárunkból válogatott alkotóelemek
                összeállításával az alkalmazások gyorsan és hatékonyan fejleszthetőek. Tervezd meg saját
                folyamatautomatizációs megoldásodat, vagy lépj be a Creatio piactérre, és válaszd ki a számodra
                legjobban megfelelő harmadik feles megoldást, gyakorlati minták és példák alapján.
            </p>
            <a href="#contactForm"
               class="mt-4 font-bold bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/studio-ui.png') }}" alt="Studio UI"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Második sor -->
    <div class="relative flex flex-col md:flex-row-reverse items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsDarkBlue/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:right-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Tökéletes kompatibilitás</h3>
            <p class="">Könnyen csatlakoztathatod no-code platformon létrehozott, saját fejlesztésű vállalati
                automatizációs megoldásaidat a harmadik feles applikációkkal és a Creatio CRM dobozos Marketing,
                Értékesítés és Ügyfélszolgálat alkalmazásokkal. Így egyetlen bejelentkezéssel a cég minden folyamata
                zökkenőmentesen átlátható, tökéletes lehet a részlegek közötti információáramlás. </p>
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
    <!-- Harmadik sor -->
    <div class="relative flex flex-col md:flex-row items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsRed/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:left-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Creatio.ai</h3>
            <p class="">Natív Mesterséges Intelligencia minden munkafolyamathoz! Már az alap csomagban hozzáférhető
                Creatio.ai hatékony általános célú készségeket kínál, amelyek bármely munkafolyamat során növelik a
                termelékenységet, egyszerűsítik a rutinfeladatokat és segítik a kommunikációt. Mindezt külső alkalmazás
                bekapcsolása nélkül. Sőt, akár Studio alkalmazások létrehozásában is támaszkodhatsz a Creatio.ai
                képességeire.</p>
            <a href="#contactForm"
               class="mt-4 font-bold bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/ai-command.png') }}" alt="Perfect Compatibility"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Negyedik sor -->
    <div class="relative flex flex-col md:flex-row-reverse items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsDarkBlue/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:right-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Folyamatautomatizáció mindenkinek</h3>
            <p class="">Egyszerűen automatizálhatod az üzleti folyamatokat és konfigurálhatod a szabályokat a műveletek
                gyorsítására és a manuális feladatmegoldásból eredő hibák csökkentésére. Nem csak óriásvállalatok, de
                KKV méretű szervezetek számára is mérhető előnyt jelent a személyre szabott folyamatfejlesztés, és a
                Studio Creatio no-code platform lehetővé teszi a saját alkalmazásod bevezetését - drága IT apparátus
                nélkül is. </p>
            <a href="#contactForm"
               class="mt-4 font-bold bg-white text-lpsDarkBlue hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRed">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/service_workflow_management.png') }}" alt="Workflow Management"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>
</section>
