 <!-- Űrlap -->
        <form action="#" id="contactForm" method="POST" class="mx-auto bg-white p-6 rounded-lg shadow-lg">
            <!-- Név -->
            <div class="mb-4">
                <label for="name" class="block  font-semibold mb-1">Név*</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-lpsDarkBlue focus:border-lpsDarkBlue outline-none">
            </div>

            <!-- E-mail cím -->
            <div class="mb-4">
                <label for="email" class="block  font-semibold mb-1">E-mail cím*</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-lpsDarkBlue focus:border-lpsDarkBlue outline-none">
            </div>

            <!-- Telefonszám -->
            <div class="mb-4">
                <label for="phone" class="block  font-semibold mb-1">Telefonszám*</label>
                <input type="text" id="phone" name="phone" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-lpsDarkBlue focus:border-lpsDarkBlue outline-none">
            </div>

            <!-- Miben segíthetünk -->
            <div class="mb-4">
                <label for="message" class="block  font-semibold mb-1">Miben segíthetünk?*</label>
                <textarea id="message" name="message" rows="4" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-lpsDarkBlue focus:border-lpsDarkBlue outline-none"></textarea>
            </div>

            <!-- Adatkezelési checkbox -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="privacy" name="privacy" required class="mr-2 w-5 h-5">
                <label for="privacy" class=" text-sm">
                    Az <a href="#" class=" font-semibold underline">adatkezelési tájékoztatót</a> megismertem
                </label>
            </div>

            <!-- Küldés gomb -->
            <button type="submit"
                    class="w-full bg-lpsRed hover:bg-lpsRedLight text-white font-semibold py-2 px-4 rounded-md transition duration-300">
                Küldés
            </button>
        </form>
