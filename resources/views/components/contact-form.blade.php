 <!-- Űrlap -->
        <form action="{{route('contact')}}" id="contactForm" method="POST" class="mx-auto bg-white p-6 rounded-lg shadow-lg">
            <!-- Név -->
            @csrf
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
                    Az <a href="https://lpsolutions.hu/adatkezeles.html" target="_blank" class=" font-semibold underline">adatkezelési tájékoztatót</a> megismertem
                </label>
            </div>
            <div class="mb-4 flex items-center">
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_SITE_KEY') }}"></div>
                @error('captcha')
                <span class="text-lpsRed">{{ $message }}</span>
                @enderror
            </div>

            <!-- Küldés gomb -->
            <button type="submit"
                    class="w-full bg-lpsRed hover:bg-lpsRedLight text-white font-semibold py-2 px-4 rounded-md transition duration-300">
                Küldés
            </button>
        </form>

 <script>
     document.addEventListener("DOMContentLoaded", function() {
         @if(session('success'))
         Swal.fire({
             title: 'Sikeres beküldés!',
             text: '{{ session("success") }}',
             icon: 'success',
             confirmButtonText: 'OK'
         });
         @endif

         @if($errors->has('captcha'))
         Swal.fire({
             title: 'Hiba!',
             text: '{{ $errors->first("captcha") }}',
             icon: 'error',
             confirmButtonText: 'OK'
         });
         @endif

         @if($errors->has('serverError'))
         Swal.fire({
             title: 'Valami hiba történt!',
             html: 'Írjon nekünk e-mailt a <a class="text-lpsRed" href="mailto:sales@lpsolutions.hu">sales@lpsolutions.hu</a> címre',
             icon: 'error',
             confirmButtonText: 'OK'
         });
         @endif
     });
 </script>
