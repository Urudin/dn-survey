<div
    x-data="{ show: localStorage.getItem('cookie_consent') !== 'accepted' }"
    x-show="show"
    x-transition
    class="fixed bottom-0 inset-x-0 bg-gray-900 text-white text-sm p-4 shadow-md z-50"
>
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <span>
            Ez a weboldal sütiket használ a legjobb élmény érdekében.
            <a href="https://lpsolutions.hu/adatkezeles.html" class="underline">Adatkezelési tájékoztató</a>
        </span>
        <button
            @click="localStorage.setItem('cookie_consent', 'accepted'); show = false"
            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition"
        >
            Elfogadom
        </button>
    </div>
</div>
