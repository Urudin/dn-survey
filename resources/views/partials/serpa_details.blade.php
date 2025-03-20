<section class="container mx-auto mt-32 px-4 py-8">
    <div class="grid grid-cols-12 gap-8r">
        <!-- Bal oldali rész (45%) -->
        <div class="col-span-5">
            <img src="{{ asset('/images/low-code.png') }}" alt="Serpa Logo" class="mx-auto w-44 h-auto">
            <p class="mt-4 p-4 text-gray-700">
                Vállalati folyamatautomatizáció tervezése, fejlesztése és bevezetése IT ismeretek nélkül! A Creatio
                no-code / low-code platformja lehetővé teszi a tökéletesen testreszabott munkamenet automatizációt,
                legyen szó bármilyen iparágról vagy szakterületről.
            </p>
            <p class="mt-4 p-4 text-gray-700">Akár saját fejlesztést szeretnél, akár harmadik féltől származó megoldást
                vezetnél be, a Studio Creatio programozók hada nélkül is lehetővé teszi az alkalmazásod </p>
            <ul class="space-y-2 p-4">
                <li class="flex items-center relative">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                        <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                    </svg>
                    tervezését
                </li>
                <li class="flex items-center relative">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                        <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                    </svg>
                    fejlesztését és
                </li>
                <li class="flex items-center relative">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                        <circle cx="12" cy="12" r="10" class="text-red-700 fill-current"></circle>
                        <path d="M10 14l-2-2-1.5 1.5L10 17l7-7-1.5-1.5L10 14z" fill="white"></path>
                    </svg>
                    bevezetését.
                </li>
            </ul>
            <p class="mt-4 p-4 text-gray-700">
                A Creatio felvértezi vezető szerepre törő cégedet mindennel, ami az üzletmenet automatizálásához és a
                folyamatmenedzsment megoldások skálázásához kell. Ötlettől a megvalósításig még sosem volt ilyen rövid
                az idő.
            </p>
        </div>

        <!-- Jobb oldali rész (55%) -->
        <div class="col-span-7 flex flex-col items-center gap-4">
            <img src="{{ asset('/images/modern-office.jpg') }}" alt="Modern Office" class="w-full rounded-lg shadow-lg">
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
            <p class="lg:text-lg text-md">Automatizált és adatvezérelt kampánykezelés no-code platformon . Az érdeklődők
                és potenciális ügyfelek szegmentálása, kezelése, e-mail és többcsatornás marketing kampányok
                áttekinthető menedzsmentje révén lehetővé teszi a célzott, adat alapú kommunikációt.
            </p>
            <a href="#contactForm"
               class="mt-4 bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
                Bemutatót kérek
            </a>
        </div>
        <!-- Kép -->
        <div
            class="w-[100%] md:w-[40%] md:h-[20rem] h-[22rem] rounded-xl overflow-hidden flex items-center justify-center">
            <img src="{{ asset('/images/studio-ui.png') }}" alt="Serpa PS2"
                 class="popup-image w-full h-full object-cover xl:object-contain rounded-lg shadow-lg">
        </div>
    </div>

    <!-- Második sor -->
    <div class="relative flex flex-col md:flex-row-reverse items-center justify-center gap-6">
        <!-- Szövegdoboz -->
        <div class="bg-lpsDarkBlue/90 text-white rounded-xl p-6 w-[100%] md:w-[70%] lg:w-[60%] xl:w-[50%] lg:h-[18rem] md:h-[20rem] h-auto flex flex-col items-center justify-center text-center space-y-2
                md:relative md:right-[3rem] md:top-0 z-10 shadow-lg">
            <h3 class="xl:text-3xl lg:text-xl text-lg font-bold">Tökéletes kompatibilitás</h3>
            <p class="lg:text-lg text-md">Értékesítési folyamatok hatékony kezelése automatizálva, a kezdeti
                kapcsolatfelvételtől az ajánlatok kezelésén át a szerződéskötésig. Ajánlások, lehetőségkezelés,
                utánkövetés és teljes körű ügyfélnyilvántartás révén támogatja a gyorsabb üzletkötéseket és a jobb
                konverziós arányokat.</p>
            <a href="#contactForm"
               class="mt-4 bg-white text-lpsDarkBlue hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRed">
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
            <p class="lg:text-lg text-md">Kiemelkedő ügyfélélmény: automatizált ügyfélszolgálat. A Creatio CRM megoldása
                no-code alapon teszi lehetővé a többcsatornás kommunikációt, beleértve telefont, emailt és csetet. Így
                gyorsan és hatékonyan kezelhetők a megkeresések, panaszok és támogatási igények.</p>
            <a href="#contactForm"
               class="mt-4 bg-white text-lpsRed hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsDarkBlue">
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
            <p class="lg:text-lg text-md">Egyszerűen automatizálhatod az üzleti folyamatokat és konfigurálhatod a
                szabályokat a műveletek gyorsítására és a manuális feladatmegoldásból eredő hibák csökkentésére. Nem
                csak óriásvállalatok, de KKV méretű szervezetek számára is mérhető előnyt jelent a személyre szabott
                folyamatfejlesztés.</p>
            <a href="#contactForm"
               class="mt-4 bg-white text-lpsDarkBlue hover:text-white px-4 py-2 rounded-full shadow-md hover:bg-lpsRed">
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
