 <!-- Űrlap -->
 <form action="{{ route('contact') }}" id="contactForm" method="POST" class="mx-auto bg-white p-6 rounded-lg shadow-lg">
     @csrf

     <!-- Nickname -->
     <div class="mb-4">
         <label for="name" class="block font-semibold mb-1">Nickname<span class="text-lpsRed">*</span></label>
         <input type="text" id="name" name="name" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-lpsDarkBlue focus:border-lpsDarkBlue outline-none">
     </div>

     <!-- E-mail -->
     <div class="mb-4">
         <label for="email" class="block font-semibold mb-1">E-mail<span class="text-lpsRed">*</span></label>
         <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-lpsDarkBlue focus:border-lpsDarkBlue outline-none">
     </div>

     <!-- Preferred Server Rate -->
     <div class="mb-6">
         <label class="block font-semibold mb-2">Preferred Server Rate<span class="text-lpsRed">*</span></label>
         <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
             @foreach (['<10x','10-20x','21-50x', '51-100x', '100<x'] as $rate)
                 <label class="cursor-pointer">
                     <input type="radio" name="rate" value="{{ $rate }}" class="sr-only peer" required>
                     <div class="w-full p-4 text-center border rounded-lg peer-checked:bg-lpsRed peer-checked:text-white peer-checked:border-lpsRed transition duration-200">
                         <strong>{{ $rate }}</strong>
                     </div>
                 </label>
             @endforeach
         </div>
     </div>

     <!-- Combo Dance/Songs -->
     <div class="mb-6">
         <label class="block font-semibold mb-2">Combo Dance/Songs?<span class="text-lpsRed">*</span></label>
         <div class="grid grid-cols-2 gap-4">
             @foreach (['yes' => 'Yes', 'no' => 'No'] as $val => $label)
                 <label class="cursor-pointer">
                     <input type="radio" name="combo_dance" value="{{ $val }}" class="sr-only peer" required>
                     <div class="w-full p-4 text-center border rounded-lg peer-checked:bg-lpsRed peer-checked:text-white peer-checked:border-lpsRed transition duration-200">
                         <strong>{{ $label }}</strong>
                     </div>
                 </label>
             @endforeach
         </div>
     </div>

     <!-- Tattoo System -->
     <div class="mb-6">
         <label class="block font-semibold mb-2">Tattoo System?<span class="text-lpsRed">*</span></label>
         <div class="grid grid-cols-2 gap-4">
             @foreach (['yes' => 'Yes', 'no' => 'No'] as $val => $label)
                 <label class="cursor-pointer">
                     <input type="radio" name="tattoo_system" value="{{ $val }}" class="sr-only peer" required>
                     <div class="w-full p-4 text-center border rounded-lg peer-checked:bg-lpsRed peer-checked:text-white peer-checked:border-lpsRed transition duration-200">
                         <strong>{{ $label }}</strong>
                     </div>
                 </label>
             @endforeach
         </div>
     </div>

     <!-- Buff System -->
     <div class="mb-6">
         <label class="block font-semibold mb-2">Buff System<span class="text-lpsRed">*</span></label>
         <div class="grid grid-cols-1 gap-4">
             <label class="cursor-pointer">
                 <input type="radio" name="buff_system" value="npc_full_no_resists" class="sr-only peer" required>
                 <div class="w-full p-4 text-center border rounded-lg peer-checked:bg-lpsRed peer-checked:text-white peer-checked:border-lpsRed transition duration-200">
                     <strong>Full buff at NPC without resists</strong>
                 </div>
             </label>
             <label class="cursor-pointer">
                 <input type="radio" name="buff_system" value="up_to_74" class="sr-only peer">
                 <div class="w-full p-4 text-center border rounded-lg peer-checked:bg-lpsRed peer-checked:text-white peer-checked:border-lpsRed transition duration-200">
                     <strong>Buffs up to level 74</strong>
                 </div>
             </label>
         </div>
     </div>
     <!-- Additional Message -->
     <div class="mb-6">
         <label for="message" class="block font-semibold mb-2">Any other ideas or suggestions?</label>
         <textarea id="message" name="message" rows="4"
                   class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-lpsDarkBlue focus:border-lpsDarkBlue outline-none"
                   placeholder="Share your thoughts with us..."></textarea>
     </div>
     <!-- Newsletter Subscription -->
     <div class="mb-6">
         <label class="inline-flex items-start space-x-3 cursor-pointer">
             <input type="checkbox" name="subscribe" value="1" class="mt-1 accent-lpsRed">
             <span class="text-sm">I would like to receive updates and news about the upcoming server via email.</span>
         </label>
     </div>
     <!-- reCAPTCHA -->
     <div class="mb-4 flex items-center">
         <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_SITE_KEY') }}"></div>
         @error('captcha')
         <span class="text-lpsRed">{{ $message }}</span>
         @enderror
     </div>

     <!-- Submit -->
     <button type="submit"
             id="submitBtn"
             disabled
             class="w-full bg-lpsRed hover:bg-lpsRedLight text-white font-semibold py-2 px-4 rounded-md transition duration-300 opacity-50 cursor-not-allowed">
         Send
     </button>
 </form>
 <script>
     function enableSubmitIfRecaptchaFilled() {
         const response = grecaptcha.getResponse();
         const submitBtn = document.getElementById("submitBtn");

         if (response.length !== 0) {
             submitBtn.disabled = false;
             submitBtn.classList.remove("opacity-50", "cursor-not-allowed");
         } else {
             submitBtn.disabled = true;
             submitBtn.classList.add("opacity-50", "cursor-not-allowed");
         }
     }

     // reCAPTCHA callback
     function onRecaptchaSuccess() {
         enableSubmitIfRecaptchaFilled();
     }

     document.addEventListener("DOMContentLoaded", function () {
         // Triggered on form interaction (e.g. if user unchecks captcha)
         const form = document.getElementById("contactForm");
         form.addEventListener("submit", function (e) {
             const response = grecaptcha.getResponse();
             if (!response) {
                 e.preventDefault();
                 Swal.fire({
                     title: 'reCAPTCHA required',
                     text: 'Please complete the reCAPTCHA before submitting.',
                     icon: 'warning',
                     confirmButtonText: 'OK'
                 });
             }
         });

         // Periodically check in case CAPTCHA is loaded slowly
         setInterval(enableSubmitIfRecaptchaFilled, 500);
     });
 </script>
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         @if(session('success'))
         Swal.fire({
             title: 'Thank you for your submission!',
             text: 'Your form has been successfully received. We appreciate your input in shaping our next Lineage 2 server!',
             icon: 'success',
             confirmButtonText: 'OK'
         });
         @endif

         @if($errors->has('captcha'))
         Swal.fire({
             title: 'Captcha Error!',
             text: '{{ $errors->first("captcha") }}',
             icon: 'error',
             confirmButtonText: 'OK'
         });
         @endif

         @if($errors->has('serverError'))
         Swal.fire({
             title: 'Something went wrong!',
             text: 'Contact us via Discord DM',
             icon: 'error',
             confirmButtonText: 'OK'
         });
         @endif

         @if($errors->has('duplicate'))
         Swal.fire({
             title: 'Already submitted!',
             text: '{{ $errors->first("duplicate") }}',
             icon: 'warning',
             confirmButtonText: 'OK'
         });
         @endif
     });
 </script>
