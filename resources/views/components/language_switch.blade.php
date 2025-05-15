<!-- Language Picker with Flags -->
@php
    $locale = app()->getLocale();
    $languages = [
        'en' => ['name' => __('messages.english'), 'flag' => '/images/gb.svg'],
        'hu' => ['name' => __('messages.hungarian'), 'flag' => '/images/hu.svg'],
        'de' => ['name' => __('messages.german'), 'flag' => '/images/de.svg'],
    ];
    $currentLang = $languages[$locale] ?? $languages['en']; // Fallback to English
@endphp

<div class="relative">
    <button id="langToggle" class="text-lpsRed flex items-center px-3 py-1 bg-gray-100 border rounded-lg shadow-md hover:bg-gray-200 focus:outline-none">
        <img id="currentFlag" src="{{ asset($currentLang['flag']) }}" alt="flag" class="w-5 h-5 mr-2">
        <span id="currentLang">{{ $currentLang['name'] }}</span>
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div id="langDropdown" class="md:absolute text-lpsRed hidden mt-2 w-44 bg-white border rounded-lg shadow-lg z-50">
        @foreach ($languages as $key => $lang)
            <button onclick="changeLang('{{ $key }}', '{{ asset($lang['flag']) }}', '{{ $lang['name'] }}')"
                    class="flex items-center w-full px-4 py-2 hover:bg-gray-100">
                <img src="{{ asset($lang['flag']) }}" alt="{{ $lang['name'] }}" class="w-5 h-5 mr-2">
                {{ $lang['name'] }}
            </button>
        @endforeach
    </div>
</div>


<script>
    document.getElementById('langToggle').addEventListener('click', function () {
        document.getElementById('langDropdown').classList.toggle('hidden');
    });

    function changeLang(lang, flagSrc, langText) {
        document.getElementById('currentFlag').src = flagSrc;
        document.getElementById('currentLang').innerText = langText;
        window.location.href = '/lang/' + lang;
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!document.getElementById('langToggle').contains(event.target)) {
            document.getElementById('langDropdown').classList.add('hidden');
        }
    });
</script>
