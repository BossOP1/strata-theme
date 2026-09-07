<footer id="contact" class="bg-black pt-16 pb-10 border-t border-zinc-900 relative">
    <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 mb-16">

      <!-- Left Column: Booking Form -->
      <div class="bg-zinc-900/50 p-10 border border-zinc-800">
        <h3 class="text-3xl font-display font-bold text-white uppercase mb-2">Request A Session</h3>
        <p class="text-zinc-500 mb-8">Ready to transform your vehicle? Fill out the form below and our team will get
          back to you within 24 hours.</p>

        <form class="space-y-6" accept-charset="UTF-8"
          action="https://app.formester.com/forms/LAxTm066S/submissions" method="POST">

          <input type="hidden" name="source" value="Footer - Request A Session">

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="rs-name" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Full Name</label>
              <input id="rs-name" name="name" type="text" required autocomplete="name"
                class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
                placeholder="John Doe">
            </div>
            <div class="space-y-2">
              <label for="rs-phone" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Phone Number</label>
              <input id="rs-phone" name="phone" type="tel" required autocomplete="tel"
                class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
                placeholder="+1 (555) 000-0000">
            </div>
          </div>

          <div class="space-y-2">
            <label for="rs-email" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Email Address</label>
            <input id="rs-email" name="email" type="email" required autocomplete="email"
              class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
              placeholder="john@example.com">
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label for="rs-vehicle" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Vehicle Make &amp; Model</label>
              <input id="rs-vehicle" name="vehicle" type="text"
                class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
                placeholder="e.g. Porsche 911 GT3">
            </div>
            <div class="space-y-2">
              <label for="rs-service" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Service Interested In</label>
              <select id="rs-service" name="service" required
                class="w-full bg-zinc-950 border border-zinc-800 text-zinc-400 px-4 py-3 focus:border-red-600 outline-none transition-colors appearance-none">
                <option value="" disabled selected>Select Service</option>
                <option value="Automotive Repair">Automotive Repair</option>
                <option value="Diagnostics">Diagnostics</option>
                <option value="Wheels &amp; Tires">Wheels &amp; Tires</option>
                <option value="Suspension Work">Suspension Work</option>
                <option value="A/C Service">A/C Service</option>
                <option value="Aftermarket &amp; Performance">Aftermarket &amp; Performance</option>
              </select>
            </div>
          </div>

          <button type="submit"
            class="w-full py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-2deg]">
            Submit Request
          </button>
        </form>
      </div>

      <!-- Right Column: Info & Links -->
      <div class="space-y-12">
        <!-- Brand Info -->
        <div>
          <a href="#" class="block mb-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/stradaworks-logo.png"
              alt="Stradaworks" class="h-12 brightness-0 invert">
          </a>
          <p class="text-zinc-500 max-w-md mb-8 leading-relaxed">
            Your trusted destination for domestic and foreign automotive repair, maintenance, and performance
            installations. Expert service for all makes and models.
          </p>
          <div class="flex gap-4">
            <a href="#"
              class="w-12 h-12 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-white hover:bg-red-600 hover:border-red-600 transition-all">
              <i class="fa-brands fa-instagram text-xl"></i>
            </a>
            <a href="#"
              class="w-12 h-12 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-white hover:bg-red-600 hover:border-red-600 transition-all">
              <i class="fa-brands fa-youtube text-xl"></i>
            </a>
            <a href="#"
              class="w-12 h-12 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-white hover:bg-red-600 hover:border-red-600 transition-all">
              <i class="fa-brands fa-whatsapp text-xl"></i>
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
          <div>
            <h4 class="text-white font-display uppercase tracking-widest mb-6 border-l-2 border-red-500 pl-3">Studio
            </h4>
            <ul class="space-y-4 text-zinc-500">
              <li class="flex items-start gap-4">
                <i class="fa-solid fa-location-dot text-red-500 mt-1"></i>
                <span>2574 W Price Blvd, North Port, <br>FL 34286, United States</span>
              </li>
              <li class="flex items-center gap-4">
                <i class="fa-solid fa-phone text-red-500"></i>
                <a href="tel:+15162167058" class="hover:text-white transition-colors">+1 516-216-7058</a>
              </li>
              <li class="flex items-center gap-4">
                <i class="fa-solid fa-envelope text-red-500"></i>
                <span>stradaworks@gmail.com</span>
              </li>
            </ul>
          </div>

          <div>
            <h4 class="text-white font-display uppercase tracking-widest mb-6 border-l-2 border-red-500 pl-3">Opening
              Hours</h4>
            <ul class="space-y-2 text-zinc-500">
              <li class="flex justify-between border-b border-zinc-900 pb-2"><span>Mon - Fri</span> <span
                  class="text-white">09:00 AM - 05:00 PM</span></li>
              <li class="flex justify-between pt-2"><span>Saturday & Sunday</span> <span
                  class="text-red-500 font-bold">Closed</span></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <div
      class="max-w-[1400px] mx-auto px-6 pt-8 border-t border-zinc-900 flex flex-col md:flex-row justify-between items-center text-zinc-600 text-xs uppercase tracking-wider">
      <p>&copy; 2024 Stradaworks Automotive. All rights reserved.</p>
      <div class="flex gap-8 mt-4 md:mt-0">
        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
        <a href="#" class="hover:text-white transition-colors">Sitemap</a>
      </div>
    </div>
  </footer>

  <!-- Floating Click-to-Call Button -->
  <a href="tel:+15162167058"
    class="fixed bottom-6 right-6 z-50 w-16 h-16 bg-red-600 hover:bg-red-700 text-white rounded-full flex items-center justify-center shadow-lg shadow-red-600/30 transition-all hover:scale-110 group">
    <i class="fa-solid fa-phone text-xl group-hover:animate-pulse"></i>
    <span
      class="absolute right-full mr-3 bg-zinc-900 text-white text-xs font-display uppercase tracking-wider px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap border border-zinc-800">Call
      Now</span>
  </a>

  <?php wp_footer(); ?>
</body>

</html>
