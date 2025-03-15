{{--<section class="py-12 bg-gray-100">--}}
{{--    <div class="container px-2 md:px-4 lg:px-8 mx-auto">--}}
{{--        <!-- Grid layout -->--}}
{{--        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">--}}
{{--            <!-- Első blokk -->--}}
{{--            <div class="relative">--}}
{{--                <img--}}
{{--                    src="{{ asset('/images/service_workflow_management.png') }}"--}}
{{--                    alt="img"--}}
{{--                    class="rounded-xl w-full"--}}
{{--                />--}}
{{--                <div--}}
{{--                    class="absolute left-[20px] mx-auto top-[5vh] sm:top-[10vh] md:top-[10vh] lg:top-[10vh] max-w-[90%] sm:max-w-[40%] md:max-w-[35%] lg:max-w-[65%] xl-max-w-[50%] 2xl-max-w-[40%] bg-lpsRed opacity-90 p-4 text-center rounded-xl">--}}
{{--                    <h2 class="md:text-xl font-bold text-white py-1 md:py-6 px-4">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                    </h2>--}}
{{--                    <button class="mt-4 bg-white hover:bg-lpsRedLight text-lpsRed font-bold py-2 px-4 rounded-xl">--}}
{{--                        <span class="md:text-2xl"> Tovább </span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Második blokk -->--}}
{{--            <div class="relative">--}}
{{--                <img--}}
{{--                    src="{{ asset('/images/contact_bundle_aim.png') }}"--}}
{{--                    alt="img"--}}
{{--                    class="rounded-xl w-full"--}}
{{--                />--}}
{{--                <div--}}
{{--                    class="absolute left-[20px] mx-auto top-[5vh] sm:top-[10vh] md:top-[10vh] lg:top-[10vh] max-w-[90%] sm:max-w-[40%] md:max-w-[35%] lg:max-w-[65%] xl-max-w-[50%] 2xl-max-w-[40%] bg-lpsDarkBlue opacity-90 p-4 text-center rounded-xl">--}}
{{--                    <h2 class="md:text-xl font-bold text-white py-1 md:py-6 px-4">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit2.--}}
{{--                    </h2>--}}
{{--                    <button class="mt-4 bg-white hover:bg-lpsBlue text-lpsDarkBlue font-bold py-2 px-4 rounded-xl">--}}
{{--                        <span class="md:text-2xl"> Tovább </span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="py-12 bg-gray-100">
    <div class="container px-2 md:px-4 lg:px-8 mx-auto">
        <h1 class="text-3xl text-lpsRed font-bold mb-4">A vállalati folyamatfejlesztés alkalmazásai</h1>
        <p class="mb-6">
            Ne várj a holnapra: a Creatio platformon már ma elkezdheted a céges folyamatok fejlesztését.
            Rugalmas alkalmazásaink tökéletesen személyre szabhatók és remekül skálázhatók, így kézben tarthatod a
            fejlesztésre szánt erőforrásokat.
            Akár egyedi folyamatautomatizációs megoldásban látod a fejlődés útját, akár személyre szabott CRM
            alkalmazásban,
            a Creatio segítségével könnyen megvalósíthatod terveidet.
        </p>

        <!-- Első blokk: Mobilon kép felül, nagyobb nézetben jobb oldalon -->
        <div class="grid grid-cols-1 md:grid-cols-11 gap-6 items-stretch mb-8">
            <div
                class="md:col-span-6 order-2 md:order-1 flex flex-col justify-between bg-lpsRed text-white p-6 rounded-xl shadow-md">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Studio Creatio</h2>
                    <p class="mb-4">
                        No-code / low-code fejlesztési platform, amely lehetővé teszi alkalmazások és vállalati
                        automatizációk gyors létrehozását és testreszabását, fejlesztői ismeretek nélkül.
                    </p>
                </div>
                <button
                    class="bg-white text-lpsRed px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 self-start w-auto">
                    Érdekelnek a részletek
                </button>
            </div>
            <div class="md:col-span-5 order-1 md:order-2 flex">
                <img src="{{ asset('/images/service_workflow_management.png') }}" alt="Creatio CRM"
                     class="w-full h-full rounded-xl shadow-md object-cover">
            </div>
        </div>

        <!-- Második blokk: Mobilon kép felül, nagyobb nézetben bal oldalon -->
        <div class="grid grid-cols-1 md:grid-cols-11 gap-6 items-stretch">
            <div class="md:col-span-5 order-1 flex">
                <img src="{{ asset('/images/contact_bundle_aim.png') }}" alt="Studio Creatio"
                     class="w-full h-full rounded-xl shadow-md object-cover">
            </div>
            <div
                class="md:col-span-6 order-2 flex flex-col justify-between bg-lpsDarkBlue text-white p-6 rounded-xl shadow-md">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Creatio CRM</h2>
                    <p class="mb-4">
                        Rugalmasan testreszabható dobozos CRM megoldások, melyek egyszerűsítik az ügyfélkapcsolatok
                        kezelését, illeszkedve vállalatod üzleti igényeihez.
                    </p>
                </div>
                <button
                    class="bg-white text-lpsDarkBlue px-4 py-2 rounded-lg font-semibold hover:bg-gray-200 self-start w-auto">
                    Többet szeretnék tudni
                </button>
            </div>
        </div>
    </div>
</section>
