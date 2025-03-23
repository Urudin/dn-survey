<header class="relative bg-white">
    <!-- Navigációs sáv - FIXED -->
    <div id="header-bar" class="fixed top-0 left-0 w-full bg-lpsRed z-50 transition-all duration-300">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="{{ route('home') }}">
                <img id="logo" src="{{ asset('/images/creatio-logo-lp.svg') }}" alt="Creatio"
                     class="h-12 md:h-16 lg:h-20 w-auto transition-all duration-300">
            </a>

            <!-- Mobil menü ikon -->
            <button id="menu-toggle" class="text-white md:hidden focus:outline-none">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>

            <!-- Navigációs menü -->
            <nav id="menu"
                 class="fixed md:relative top-[64px] md:top-auto left-0 w-full md:w-auto bg-lpsRed md:bg-transparent text-white text-center md:text-left md:flex md:items-center md:space-x-4 overflow-hidden md:overflow-visible transition-all duration-300 ease-in-out hidden md:flex-row md:static px-6 md:px-0 z-50 flex-col md:flex">

                <a href="{{ route('home') }}" class="hover:text-red-300 py-2 px-4 md:p-0">Főoldal</a>

                <!-- Mobil menüpontok itt -->
                <div class="md:hidden flex flex-col">
                    <a href="{{ route('creatio-products') }}" class="hover:text-red-300 py-1 px-4">Termékeink</a>
                    <a href="{{ route('product', ['name' => 'studio']) }}" class="block px-4 py-1 pl-6 hover:bg-gray-200">Studio Creatio</a>
                    <a href="{{ route('product', ['name' => 'creatio']) }}" class="block px-4 py-1 pl-6 hover:bg-gray-200">Creatio CRM</a>
                    <a href="{{ route('contact') }}" class="hover:text-red-300 py-2 px-4">Kapcsolat</a>
                </div>

                <!-- Asztali nézethez dropdown menü -->
                <div class="relative hidden md:block" onmouseover="showSubmenu()" onmouseleave="hideSubmenu()">
                    <a href="{{ route('creatio-products') }}" class="hover:text-red-300 py-2 px-4 md:p-0 flex items-center">
                        Termékeink
                        <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div id="submenu"
                         class="hidden absolute left-0 mt-1 bg-white text-lpsDarkBlue shadow-lg rounded-lg w-48 md:w-52 z-[100] overflow-hidden transition-all duration-300 ease-in-out">
                        <a href="{{ route('product', ['name' => 'studio']) }}" class="block px-4 py-2 hover:bg-gray-200">Studio Creatio</a>
                        <a href="{{ route('product', ['name' => 'creatio']) }}" class="block px-4 py-2 hover:bg-gray-200">Creatio CRM</a>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="hidden md:inline hover:text-red-300 py-2 px-4 md:p-0">Kapcsolat</a>
            </nav>
        </div>
    </div>

    <!-- Spacer -->
    <div id="spacer" class="hidden h-[80px] md:h-[96px] lg:h-[120px]"></div>

    <!-- Asztali nézetben lenyíló menü -->
    <div class="relative hidden md:block" onmouseover="showSubmenu()" onmouseleave="hideSubmenu()">
        <a href="{{ route('creatio-products') }}" class="hover:text-red-300 py-2 px-4 md:p-0 flex items-center">
            Termékeink
            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </a>
        <div id="submenu"
             class="hidden absolute left-0 mt-1 bg-white text-lpsDarkBlue shadow-lg rounded-lg w-48 md:w-52 z-[100] overflow-hidden transition-all duration-300 ease-in-out">
            <a href="{{ route('product', ['name' => 'studio']) }}" class="block px-4 py-2 hover:bg-gray-200">Studio
                Creatio</a>
            <a href="{{ route('product', ['name' => 'creatio']) }}" class="block px-4 py-2 hover:bg-gray-200">Creatio
                CRM</a>
        </div>
    </div>

    <!-- Mobil nézet menüpontok -->
    <div class="md:hidden flex flex-col">
        <a href="{{ route('creatio-products') }}" class="hover:text-red-300 py-1 px-4">Termékeink</a>
        <a href="{{ route('product', ['name' => 'studio']) }}" class="block px-4 py-1 pl-6 hover:bg-gray-200">Studio
            Creatio</a>
        <a href="{{ route('product', ['name' => 'creatio']) }}" class="block px-4 py-1 pl-6 hover:bg-gray-200">Creatio
            CRM</a>
    </div>

    <a href="{{ route('contact') }}" class="hover:text-red-300 py-2 px-4 md:p-0">Kapcsolat</a>


    <!-- Háttérkép, ívelt sarkok -->
    <div class="relative h-144 overflow-hidden rounded-bl-[75px] rounded-tr-[75px] z-20 md:mt-[64px]">
        <div class="absolute inset-0 bg-cover bg-center z-0"
             style="background-image: url({{ asset('images/' . $headerImage) }});"></div>
    </div>

    <div class="absolute bottom-0 left-0 h-1/2 w-full bg-white rounded-bl-[50px] z-10"></div>
    <div class="absolute top-0 right-0 h-1/2 w-full bg-red-700 rounded-tr-[50px] z-10"></div>

    @if($showTextBox)
        <div
            class="absolute hidden md:block md:bottom-[-80px] left-1/2 transform -translate-x-1/2 bg-white p-6 rounded-lg shadow-lg text-left w-full md:w-[80%] lg:w-[70%] xl:w-[60%] z-30">
            <h1 class="text-2xl font-bold text-lpsRed mb-4">
                {{ $textBoxContent['redText'] }}
                <span class="text-lpsDarkBlue">{{ $textBoxContent['blueText'] }}</span>
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

<!-- JavaScript -->
<script>
    const logo = document.getElementById("logo");
    const spacer = document.getElementById("spacer");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            logo.classList.remove("h-12", "md:h-16", "lg:h-20");
            logo.classList.add("h-8", "md:h-10", "lg:h-12");

            spacer.classList.remove("hidden");
        } else {
            logo.classList.remove("h-8", "md:h-10", "lg:h-12");
            logo.classList.add("h-12", "md:h-16", "lg:h-20");

            spacer.classList.add("hidden");
        }
    });
</script>
<script>
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    menuToggle.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    let submenuTimeout;

    function showSubmenu() {
        clearTimeout(submenuTimeout);
        document.getElementById("submenu").style.display = "block";
    }

    function hideSubmenu() {
        submenuTimeout = setTimeout(function () {
            document.getElementById("submenu").style.display = "none";
        }, 300);
    }

    // Scrollra logó méret csökkentés
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            logo.classList.remove("h-12", "md:h-16", "lg:h-20");
            logo.classList.add("h-8", "md:h-10", "lg:h-12");
        } else {
            logo.classList.remove("h-8", "md:h-10", "lg:h-12");
            logo.classList.add("h-12", "md:h-16", "lg:h-20");
        }
    });
</script>
