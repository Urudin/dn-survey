<header class="relative bg-white">
    <!-- Háttérkép, ívelt sarkok -->
    <div class="relative h-144 overflow-hidden rounded-tr-[75px] z-20">
        <div class="absolute inset-0 bg-cover bg-top bg-center z-0"
             style="background-image: url({{ asset('images/' . $headerImage) }});"></div>
    </div>
    <div class="absolute bottom-0 left-0 h-1/2 w-full bg-white rounded-bl-[50px] z-10"></div>
    <div class="absolute top-0 right-0 h-1/2 w-full rounded-tr-[50px] z-10"></div>

    @if($showTextBox)
        <div
            class="absolute hidden md:block md:bottom-[-80px] left-1/2 transform -translate-x-1/2 bg-white p-6 rounded-lg shadow-lg text-left w-full md:w-[80%] lg:w-[70%] xl:w-[60%] z-30">
            <h1 class="text-2xl font-bold text-lpsRed mb-4">
                {{ $textBoxContent['redText'] }}
                <span class="text-lpsDarkBlue">{!! $textBoxContent['blueText'] !!}</span>
            </h1>
            <p class="mb-6 text-xl">{{ $textBoxContent['desc'] }}</p>
        </div>
    @endif
</header>

@if($showTextBox)
    <div
        class="md:hidden block transform bg-white p-6 rounded-lg text-left w-full md:w-[80%] lg:w-[70%] xl:w-[60%] z-30">
        <h1 class="italic text-2xl font-bold text-lpsRed mb-4">
            {{ $textBoxContent['redText'] }}
            <span class="text-lpsDarkBlue">{{ $textBoxContent['blueText'] }}</span>
        </h1>
        <p class="italic">{{ $textBoxContent['desc'] }}</p>
    </div>
@endif
