<header class="relative bg-white">
    <div class="bg-lpsRed z-30 relative">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="{{route('home')}}"><img src="{{asset('/images/creatio-logo-lp.svg')}}" alt="Creatio" class="h-12 md:h-16 lg:h-20 w-auto"></a>
                        <nav class="flex items-center space-x-4">
                            <a href="{{route('home')}}" class="hover:text-red-300 text-white">Főoldal</a>
                            <a href="{{route('creatio-products')}}" class="hover:text-red-300 text-white">Termékeink</a>
{{--                            <a href="#" class="hover:text-red-300 text-white">Menu3</a>--}}
{{--                            <a href="#" class="hover:text-red-300 text-white">Menu4</a>--}}
{{--                            @include('components.language_switch')--}}
                        </nav>
        </div>
    </div>

    <div class="relative h-144 overflow-hidden rounded-bl-[75px] rounded-tr-[75px] z-20">
        <div
            class="absolute inset-0 bg-cover bg-center z-0"
            style="background-image: url({{asset('images/' . $headerImage)}});">
        </div>
    </div>

    <div class="absolute bottom-0 left-0 h-1/2 w-full bg-white rounded-bl-[50px] z-10"></div>

    <div class="absolute top-0 right-0 h-1/2 w-full bg-red-700 rounded-tr-[50px] z-10"></div>
    @if($showTextBox)
        <div
            class="absolute bottom-[-80px] left-1/2 transform -translate-x-1/2 bg-white p-6 rounded-lg shadow-lg text-left w-full md:w-[80%] lg:w-[70%] xl:w-[60%] z-30">
            <h1 class="text-2xl font-bold text-lpsRed mb-4">{{$textBoxContent['redText']}} <span
                    class="text-lpsDarkBlue">{{$textBoxContent['blueText']}}</span></h1>
            <p class="mb-6 text-xl">{{$textBoxContent['desc']}}</p>
{{--            <div class="flex flex-col sm:flex-row justify-start gap-4 w-full">--}}
{{--                @if(!empty($buttons['button1']))--}}
{{--                    <button--}}
{{--                        class="bg-lpsRed text-white px-6 py-2 rounded-lg shadow-md hover:bg-lpsRedLight w-full sm:flex-1">--}}
{{--                        {{$buttons['button1']}}--}}
{{--                    </button>--}}
{{--                @endif--}}
{{--                @if(!empty($buttons['button2']))--}}
{{--                    <button--}}
{{--                        class="bg-lpsDarkBlue text-white px-6 py-2 rounded-lg shadow-md hover:bg-lpsBlue w-full sm:flex-1">--}}
{{--                        {{$buttons['button2']}}--}}
{{--                    </button>--}}
{{--                @endif--}}
{{--            </div>--}}
        </div>
    @endif


</header>
