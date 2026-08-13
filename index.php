<?php get_header(); ?>

  <!-- Hero Section -->
  <header class="relative w-full h-[85vh] min-h-[600px] overflow-hidden pt-20">
    <div class="relative w-full h-full">
      <!-- Background -->
      <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black/40 z-10"></div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero-lancer-evo.jpg"
          class="w-full h-full object-cover" alt="Hero Background">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent z-10"></div>
      </div>

      <!-- Content -->
      <div
        class="relative z-20 w-full h-full max-w-[1400px] mx-auto px-6 flex flex-col justify-center items-start text-left">
        <div class="hero-text max-w-3xl">
          <div
            class="inline-flex items-center gap-2 px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm">
            <i class="fa-solid fa-circle text-[8px] animate-pulse"></i>
            <span>Expert Automotive Services</span>
          </div>

          <h1 class="text-6xl md:text-8xl font-display font-bold leading-[0.9] uppercase mb-6">
            Complete <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Auto Care</span>
          </h1>

          <div class="space-y-4 mb-10">
            <p class="text-white text-xl md:text-2xl font-light">
              Domestic & Foreign Automotive Repair Specialists.
            </p>
            <p class="text-zinc-400 text-lg leading-relaxed max-w-xl border-l-2 border-red-600 pl-4">
              Expert diagnostics, maintenance, wheels & tires, suspension work, and performance installations for all
              makes and models.
            </p>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#contact"
              class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-red-600 text-white font-display font-bold uppercase tracking-widest hover:bg-red-700 transition-all hover:skew-x-[-10deg]">
              <span>Book Consultation</span>
              <i class="fa-solid fa-calendar-check text-sm"></i>
            </a>
            <a href="tel:+15125550199"
              class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-transparent border border-white text-white font-display font-bold uppercase tracking-widest hover:bg-white hover:text-black transition-all hover:skew-x-[-10deg]">
              <i class="fa-solid fa-phone text-sm"></i>
              <span>Call Now</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Scroll Indicator -->
      <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 animate-bounce text-zinc-500">
        <i class="fa-solid fa-chevron-down text-xl"></i>
      </div>
    </div>
  </header>

  <!-- Interactive Work Section (Horizontal Scroll) -->
  <section id="work" class="py-16 bg-zinc-950 border-b border-zinc-900 overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-6 mb-8 text-center">
      <span class="text-zinc-500 text-xs font-display uppercase tracking-[0.2em]">Trusted By Owners Of</span>
    </div>

    <!-- Marquee Container -->
    <div class="relative flex overflow-x-hidden group">
      <div class="animate-marquee whitespace-nowrap flex gap-24 items-center pr-24">
        <!-- Set 1 -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/porsche.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Porsche">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/bmw.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="BMW">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/amg.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="AMG">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/audi.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Audi">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/ferrari.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Ferrari">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/lamborghini.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Lamborghini">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/nissan.svg"
          class="h-8 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Nissan">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/toyota.svg"
          class="h-8 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Toyota">

        <!-- Set 2 (Duplicate for smooth loop) -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/porsche.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Porsche">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/bmw.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="BMW">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/amg.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="AMG">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/audi.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Audi">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/ferrari.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Ferrari">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/lamborghini.svg"
          class="h-10 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Lamborghini">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/nissan.svg"
          class="h-8 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Nissan">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brands/toyota.svg"
          class="h-8 w-auto opacity-50 hover:opacity-100 transition-opacity duration-300" alt="Toyota">
      </div>

      <!-- Vignette -->
      <div class="absolute top-0 left-0 h-full w-24 bg-gradient-to-r from-black to-transparent pointer-events-none">
      </div>
      <div class="absolute top-0 right-0 h-full w-24 bg-gradient-to-l from-black to-transparent pointer-events-none">
      </div>
    </div>
  </section>

  <!-- Restoration & Detailing Feature Section -->
  <section class="py-16 bg-zinc-950 border-b border-zinc-900 relative overflow-hidden">
    <div class="absolute right-0 top-0 w-1/2 h-full bg-red-900/5 -skew-x-12 transform translate-x-1/4"></div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      <!-- Image Content -->
      <div class="relative group">
        <div
          class="absolute -inset-4 bg-red-600/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700">
        </div>
        <div class="relative h-[500px] overflow-hidden border border-zinc-800">
          <img src="<?php echo get_template_directory_uri(); ?>/images/shop-civic-lift.jpg"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
            alt="Restoration Art">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

          <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
            <div class="bg-black/80 backdrop-blur px-4 py-2 border-l-2 border-red-500">
              <span class="text-white font-display uppercase tracking-widest text-sm">Showroom Finish</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Text Content -->
      <div>
        <div
          class="inline-block px-3 py-1 mb-6 border border-zinc-700 bg-zinc-900 text-zinc-400 text-xs font-display uppercase tracking-[0.2em]">
          Specialized Service
        </div>
        <h2 class="text-5xl md:text-6xl font-display font-bold text-white uppercase mb-6 leading-[0.9]">
          Suspension <br>
          <span class="text-red-500">Specialists</span>
        </h2>
        <p class="text-zinc-400 text-lg leading-relaxed mb-8">
          From custom wheel setups to complete suspension overhauls, we bring precision engineering to every job. Expert
          fender rolling, coilover installs, and alignment services for the perfect stance and handling.
        </p>

        <ul class="space-y-4 mb-10">
          <li class="flex items-center gap-4 text-zinc-300">
            <span
              class="w-8 h-8 rounded-full bg-zinc-900 flex items-center justify-center border border-zinc-800 text-red-500">
              <i class="fa-solid fa-check"></i>
            </span>
            <span>Wheel Mounting & Balancing</span>
          </li>
          <li class="flex items-center gap-4 text-zinc-300">
            <span
              class="w-8 h-8 rounded-full bg-zinc-900 flex items-center justify-center border border-zinc-800 text-red-500">
              <i class="fa-solid fa-check"></i>
            </span>
            <span>Professional Fender Rolling</span>
          </li>
          <li class="flex items-center gap-4 text-zinc-300">
            <span
              class="w-8 h-8 rounded-full bg-zinc-900 flex items-center justify-center border border-zinc-800 text-red-500">
              <i class="fa-solid fa-check"></i>
            </span>
            <span>Coilover & Air Suspension Installs</span>
          </li>
        </ul>

        <a href="#contact"
          class="inline-flex items-center text-red-500 font-display font-bold uppercase tracking-widest hover:text-white transition-colors gap-2 group">
          <span>Schedule Service</span>
          <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-16 bg-black border-b border-zinc-900">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <h2 class="section-title text-white mb-0">Core Expertise</h2>
        <p class="text-zinc-500 max-w-sm text-right hidden md:block">
          Comprehensive automotive solutions for every stage of your vehicle's lifecycle.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-0 border border-zinc-800">
        <!-- Service 1: Automotive Repair -->
        <div
          class="group relative p-10 border-b lg:border-b-0 lg:border-r border-zinc-800 bg-zinc-900/20 hover:bg-zinc-900 transition-colors duration-500">
          <div class="mb-6 text-4xl text-red-600 group-hover:text-white transition-colors">
            <i class="fa-solid fa-car-burst"></i>
          </div>
          <h3 class="text-xl font-display font-bold uppercase mb-4 text-white">Auto Repair</h3>
          <p class="text-zinc-500 text-sm leading-relaxed group-hover:text-zinc-400 transition-colors">
            Comprehensive domestic and foreign automotive repair services for all makes and models.
          </p>
        </div>

        <!-- Service 2: Diagnostics -->
        <div
          class="group relative p-10 border-b lg:border-b-0 lg:border-r border-zinc-800 bg-zinc-900/20 hover:bg-zinc-900 transition-colors duration-500">
          <div class="mb-6 text-4xl text-red-600 group-hover:text-white transition-colors">
            <i class="fa-solid fa-laptop-code"></i>
          </div>
          <h3 class="text-xl font-display font-bold uppercase mb-4 text-white">Diagnostics</h3>
          <p class="text-zinc-500 text-sm leading-relaxed group-hover:text-zinc-400 transition-colors">
            Advanced computer diagnostics and troubleshooting for complex automotive issues.
          </p>
        </div>

        <!-- Service 3: Wheels & Suspension -->
        <div
          class="group relative p-10 border-b md:border-b-0 md:border-r border-zinc-800 bg-zinc-900/20 hover:bg-zinc-900 transition-colors duration-500">
          <div class="mb-6 text-4xl text-red-600 group-hover:text-white transition-colors">
            <i class="fa-solid fa-circle-notch"></i>
          </div>
          <h3 class="text-xl font-display font-bold uppercase mb-4 text-white">Wheels & Suspension</h3>
          <p class="text-zinc-500 text-sm leading-relaxed group-hover:text-zinc-400 transition-colors">
            Tire mounting & balancing, suspension specialist, and professional fender rolling.
          </p>
        </div>

        <!-- Service 4: Performance & Aftermarket -->
        <div
          class="group relative p-10 border-zinc-800 bg-zinc-900/20 hover:bg-zinc-900 transition-colors duration-500">
          <div class="mb-6 text-4xl text-red-600 group-hover:text-white transition-colors">
            <i class="fa-solid fa-gauge-high"></i>
          </div>
          <h3 class="text-xl font-display font-bold uppercase mb-4 text-white">Performance Installs</h3>
          <p class="text-zinc-500 text-sm leading-relaxed group-hover:text-zinc-400 transition-colors">
            Aftermarket and performance part installations to enhance your vehicle's potential.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Works -->
  <section id="work" class="py-10 bg-zinc-950 overflow-hidden border-b border-zinc-900">
    <div class="max-w-[1400px] mx-auto px-6 mb-12 flex justify-between items-end">
      <div>
        <div
          class="inline-block px-3 py-1 mb-4 border border-zinc-800 text-zinc-500 text-xs font-display uppercase tracking-[0.2em]">
          Portfolio
        </div>
        <h2 class="section-title border-white text-white mb-0">Recent Projects</h2>
      </div>
      <div class="flex gap-4">
        <button id="prevWork"
          class="w-12 h-12 border border-zinc-800 flex items-center justify-center hover:bg-white hover:text-black transition-all text-white"><i
            class="fa-solid fa-arrow-left"></i></button>
        <button id="nextWork"
          class="w-12 h-12 border border-zinc-800 flex items-center justify-center hover:bg-white hover:text-black transition-all text-white"><i
            class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>

    <!-- Scroller Container -->
    <div class="flex gap-6 px-6 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-10" id="workScroller">
      <!-- Item 1 -->
      <div
        class="snap-center shrink-0 w-[400px] md:w-[600px] h-[450px] relative group overflow-hidden bg-zinc-900 border border-zinc-800">
        <div class="h-[320px] overflow-hidden relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/shop-m4-front.jpg"
            class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
            alt="BMW M4 Engine Repair">
          <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60"></div>
          <div
            class="absolute top-4 right-4 bg-red-600 text-white text-xs font-bold px-3 py-1 uppercase tracking-widest">
            Engine Repair
          </div>
        </div>
        <div class="p-6 relative bg-zinc-900">
          <h3 class="text-2xl font-display font-bold text-white uppercase mb-2">BMW M4 Engine Repair</h3>
          <p class="text-zinc-500 text-sm">Full engine diagnostics and repair, including component replacement and
            post-repair testing to factory spec.</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div
        class="snap-center shrink-0 w-[400px] md:w-[600px] h-[450px] relative group overflow-hidden bg-zinc-900 border border-zinc-800">
        <div class="h-[320px] overflow-hidden relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/work-gtr-r34.jpg"
            class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
            alt="Work 2">
          <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60"></div>
          <div class="absolute top-4 right-4 bg-white text-black text-xs font-bold px-3 py-1 uppercase tracking-widest">
            Wheels & Tires
          </div>
        </div>
        <div class="p-6 relative bg-zinc-900">
          <h3 class="text-2xl font-display font-bold text-white uppercase mb-2">Nissan GT-R R34</h3>
          <p class="text-zinc-500 text-sm">Custom wheel package with Volk TE37s, tire mounting & balancing, and
            suspension tuning.
          </p>
        </div>
      </div>

      <!-- Item 3 -->
      <div
        class="snap-center shrink-0 w-[400px] md:w-[600px] h-[450px] relative group overflow-hidden bg-zinc-900 border border-zinc-800">
        <div class="h-[320px] overflow-hidden relative">
          <img src="<?php echo get_template_directory_uri(); ?>/images/work-supra-mk4.jpg"
            class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105"
            alt="Work 3">
          <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60"></div>
          <div
            class="absolute top-4 right-4 bg-red-600 text-white text-xs font-bold px-3 py-1 uppercase tracking-widest">
            Performance
          </div>
        </div>
        <div class="p-6 relative bg-zinc-900">
          <h3 class="text-2xl font-display font-bold text-white uppercase mb-2">Toyota Supra MK4</h3>
          <p class="text-zinc-500 text-sm">Aftermarket exhaust install, intake system upgrade, and ECU tune for enhanced
            performance.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact CTA Section -->
  <section
    class="py-20 bg-gradient-to-br from-zinc-950 via-zinc-900 to-zinc-950 relative overflow-hidden border-b border-zinc-900">
    <!-- Background decorative elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-red-600/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
    </div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-600/5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3">
    </div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10">
      <div class="text-center mb-12">
        <div
          class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm">
          Get In Touch
        </div>
        <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mb-4">
          Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Get
            Started?</span>
        </h2>
        <p class="text-zinc-400 text-lg max-w-2xl mx-auto">
          Contact us today for expert automotive repair, maintenance, and performance services. We're here to help!
        </p>
      </div>

      <!-- Contact Cards Grid -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
        <!-- Call Us -->
        <a href="tel:+15162167058"
          class="group relative bg-zinc-900 border border-zinc-800 hover:border-red-600 p-8 text-center transition-all duration-500 hover:bg-zinc-900/80">
          <div
            class="absolute inset-0 bg-gradient-to-br from-red-600/0 to-red-600/0 group-hover:from-red-600/5 group-hover:to-transparent transition-all duration-500">
          </div>
          <div class="relative z-10">
            <div
              class="w-16 h-16 mx-auto mb-6 bg-red-600/10 border border-red-600/30 rounded-full flex items-center justify-center group-hover:bg-red-600 group-hover:border-red-600 transition-all duration-500">
              <i class="fa-solid fa-phone text-red-500 text-2xl group-hover:text-white transition-colors"></i>
            </div>
            <h3
              class="text-lg font-display font-bold text-white uppercase mb-2 group-hover:text-red-500 transition-colors">
              Call Us</h3>
            <p class="text-zinc-500 text-sm">+1 (516) 216-7058</p>
          </div>
        </a>

        <!-- Email Us -->
        <a href="mailto:stradaworks@gmail.com"
          class="group relative bg-zinc-900 border border-zinc-800 hover:border-red-600 p-8 text-center transition-all duration-500 hover:bg-zinc-900/80">
          <div
            class="absolute inset-0 bg-gradient-to-br from-red-600/0 to-red-600/0 group-hover:from-red-600/5 group-hover:to-transparent transition-all duration-500">
          </div>
          <div class="relative z-10">
            <div
              class="w-16 h-16 mx-auto mb-6 bg-red-600/10 border border-red-600/30 rounded-full flex items-center justify-center group-hover:bg-red-600 group-hover:border-red-600 transition-all duration-500">
              <i class="fa-solid fa-envelope text-red-500 text-2xl group-hover:text-white transition-colors"></i>
            </div>
            <h3
              class="text-lg font-display font-bold text-white uppercase mb-2 group-hover:text-red-500 transition-colors">
              Email Us</h3>
            <p class="text-zinc-500 text-sm">stradaworks@gmail.com</p>
          </div>
        </a>

        <!-- Instagram -->
        <a href="https://instagram.com/stradaworks" target="_blank"
          class="group relative bg-zinc-900 border border-zinc-800 hover:border-pink-600 p-8 text-center transition-all duration-500 hover:bg-zinc-900/80">
          <div
            class="absolute inset-0 bg-gradient-to-br from-pink-600/0 to-pink-600/0 group-hover:from-pink-600/5 group-hover:to-transparent transition-all duration-500">
          </div>
          <div class="relative z-10">
            <div
              class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-pink-600/10 to-purple-600/10 border border-pink-600/30 rounded-full flex items-center justify-center group-hover:from-pink-600 group-hover:to-purple-600 group-hover:border-pink-600 transition-all duration-500">
              <i class="fa-brands fa-instagram text-pink-500 text-2xl group-hover:text-white transition-colors"></i>
            </div>
            <h3
              class="text-lg font-display font-bold text-white uppercase mb-2 group-hover:text-pink-500 transition-colors">
              Instagram</h3>
            <p class="text-zinc-500 text-sm">@Stradaworks</p>
          </div>
        </a>

        <!-- Facebook -->
        <a href="https://facebook.com/stradaworks" target="_blank"
          class="group relative bg-zinc-900 border border-zinc-800 hover:border-blue-600 p-8 text-center transition-all duration-500 hover:bg-zinc-900/80">
          <div
            class="absolute inset-0 bg-gradient-to-br from-blue-600/0 to-blue-600/0 group-hover:from-blue-600/5 group-hover:to-transparent transition-all duration-500">
          </div>
          <div class="relative z-10">
            <div
              class="w-16 h-16 mx-auto mb-6 bg-blue-600/10 border border-blue-600/30 rounded-full flex items-center justify-center group-hover:bg-blue-600 group-hover:border-blue-600 transition-all duration-500">
              <i class="fa-brands fa-facebook-f text-blue-500 text-2xl group-hover:text-white transition-colors"></i>
            </div>
            <h3
              class="text-lg font-display font-bold text-white uppercase mb-2 group-hover:text-blue-500 transition-colors">
              Facebook</h3>
            <p class="text-zinc-500 text-sm">Stradaworks</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Premium Services Showcase Section (Lighter/Textured Background) -->
  <section
    class="py-20 bg-[#0c0c0c] relative border-b border-zinc-900 bg-[url('<?php echo get_template_directory_uri(); ?>/images/carbon-fibre.png')]">
    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-transparent to-black/80">
    </div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10">
      <div class="text-center mb-20">
        <div
          class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm">
          Full Service Garage
        </div>
        <h2 class="text-5xl md:text-7xl font-display font-bold text-white uppercase mb-6">
          Complete <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Auto
            Services</span>
        </h2>
        <p class="text-zinc-400 text-lg max-w-2xl mx-auto">
          From routine maintenance to performance upgrades, we offer comprehensive automotive services for domestic and
          foreign vehicles
        </p>
      </div>

      <!-- Service Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Service 1: Automotive Repair -->
        <div
          class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-red-600 transition-all duration-500">
          <div class="relative h-64 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-engine-out.jpg"
              class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700"
              alt="Automotive Repair">
            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div> -->
            <div class="absolute top-4 right-4">
              <div class="w-12 h-12 bg-red-600 flex items-center justify-center">
                <i class="fa-solid fa-car-burst text-white text-xl"></i>
              </div>
            </div>
          </div>
          <div class="p-8">
            <h3
              class="text-2xl font-display font-bold text-white uppercase mb-4 group-hover:text-red-500 transition-colors">
              Automotive Repair
            </h3>
            <p class="text-zinc-400 leading-relaxed mb-6">
              Complete domestic and foreign automotive repair services. From engine work to electrical systems, we
              handle all makes and models with expert care.
            </p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Engine repairs</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Brake systems</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Electrical systems</span>
              </li>
            </ul>
            <a href="#contact"
              class="inline-flex items-center gap-2 text-red-500 font-display uppercase text-sm tracking-widest hover:gap-4 transition-all">
              <span>Get Quote</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 2: Diagnostics -->
        <div
          class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-red-600 transition-all duration-500">
          <div class="relative h-64 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/car_diagnostics.png"
              class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700"
              alt="Diagnostics">
            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div> -->
            <div class="absolute top-4 right-4">
              <div class="w-12 h-12 bg-red-600 flex items-center justify-center">
                <i class="fa-solid fa-laptop-code text-white text-xl"></i>
              </div>
            </div>
          </div>
          <div class="p-8">
            <h3
              class="text-2xl font-display font-bold text-white uppercase mb-4 group-hover:text-red-500 transition-colors">
              Diagnostics
            </h3>
            <p class="text-zinc-400 leading-relaxed mb-6">
              Advanced computer diagnostics and troubleshooting for all vehicle types. We identify issues quickly and
              accurately to get you back on the road.
            </p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Computer scanning</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Error code analysis</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>System inspections</span>
              </li>
            </ul>
            <a href="#contact"
              class="inline-flex items-center gap-2 text-red-500 font-display uppercase text-sm tracking-widest hover:gap-4 transition-all">
              <span>Schedule Scan</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 3: Wheels & Tires -->
        <div
          class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-red-600 transition-all duration-500">
          <div class="relative h-64 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/wheels_tires.png"
              class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700"
              alt="Wheels &amp; Tires">
            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div> -->
            <div class="absolute top-4 right-4">
              <div class="w-12 h-12 bg-red-600 flex items-center justify-center">
                <i class="fa-solid fa-circle-notch text-white text-xl"></i>
              </div>
            </div>
          </div>
          <div class="p-8">
            <h3
              class="text-2xl font-display font-bold text-white uppercase mb-4 group-hover:text-red-500 transition-colors">
              Wheels & Tires
            </h3>
            <p class="text-zinc-400 leading-relaxed mb-6">
              Professional tire mounting and balancing services. We ensure proper fitment and balance for optimal
              performance and safety.
            </p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Tire mounting</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Wheel balancing</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>TPMS service</span>
              </li>
            </ul>
            <a href="#contact"
              class="inline-flex items-center gap-2 text-red-500 font-display uppercase text-sm tracking-widest hover:gap-4 transition-all">
              <span>Book Service</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 4: Suspension Specialist -->
        <div
          class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-red-600 transition-all duration-500">
          <div class="relative h-64 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-alignment-silverado.jpg"
              class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700"
              alt="Suspension &amp; Alignment">
            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div> -->
            <div class="absolute top-4 right-4">
              <div class="w-12 h-12 bg-red-600 flex items-center justify-center">
                <i class="fa-solid fa-car-side text-white text-xl"></i>
              </div>
            </div>
          </div>
          <div class="p-8">
            <h3
              class="text-2xl font-display font-bold text-white uppercase mb-4 group-hover:text-red-500 transition-colors">
              Suspension Specialist
            </h3>
            <p class="text-zinc-400 leading-relaxed mb-6">
              Expert suspension work including coilover installs, lowering springs, and fender rolling for proper wheel
              clearance and stance.
            </p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Coilover installs</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Fender rolling</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Alignment</span>
              </li>
            </ul>
            <a href="#contact"
              class="inline-flex items-center gap-2 text-red-500 font-display uppercase text-sm tracking-widest hover:gap-4 transition-all">
              <span>Get Quote</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 5: Air Conditioning -->
        <div
          class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-red-600 transition-all duration-500">
          <div class="relative h-64 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/air_conditioning.png"
              class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700"
              alt="A/C Service">
            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div> -->
            <div class="absolute top-4 right-4">
              <div class="w-12 h-12 bg-red-600 flex items-center justify-center">
                <i class="fa-solid fa-snowflake text-white text-xl"></i>
              </div>
            </div>
          </div>
          <div class="p-8">
            <h3
              class="text-2xl font-display font-bold text-white uppercase mb-4 group-hover:text-red-500 transition-colors">
              Air Conditioning
            </h3>
            <p class="text-zinc-400 leading-relaxed mb-6">
              Complete A/C service and repair. From recharges to compressor replacements, we keep your cabin cool and
              comfortable year-round.
            </p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>A/C recharge</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Leak detection</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Compressor repair</span>
              </li>
            </ul>
            <a href="#contact"
              class="inline-flex items-center gap-2 text-red-500 font-display uppercase text-sm tracking-widest hover:gap-4 transition-all">
              <span>Schedule A/C Service</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 6: Performance & Aftermarket -->
        <div
          class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-red-600 transition-all duration-500">
          <div class="relative h-64 overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-ecu-tuning.jpg"
              class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700"
              alt="Performance Installs &amp; ECU Tuning">
            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div> -->
            <div class="absolute top-4 right-4">
              <div class="w-12 h-12 bg-red-600 flex items-center justify-center">
                <i class="fa-solid fa-gauge-high text-white text-xl"></i>
              </div>
            </div>
          </div>
          <div class="p-8">
            <h3
              class="text-2xl font-display font-bold text-white uppercase mb-4 group-hover:text-red-500 transition-colors">
              Aftermarket & Performance
            </h3>
            <p class="text-zinc-400 leading-relaxed mb-6">
              Expert installation of aftermarket and performance parts. Exhaust systems, intakes, suspension upgrades,
              and more to unlock your vehicle's potential.
            </p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Exhaust systems</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Intake installs</span>
              </li>
              <li class="flex items-center gap-3 text-sm text-zinc-500">
                <i class="fa-solid fa-check text-red-500"></i>
                <span>Performance upgrades</span>
              </li>
            </ul>
            <a href="#contact"
              class="inline-flex items-center gap-2 text-red-500 font-display uppercase text-sm tracking-widest hover:gap-4 transition-all">
              <span>Discuss Your Build</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Why Choose Stradaworks Section -->
  <section class="py-16 bg-zinc-950 border-t border-zinc-900">
    <div class="max-w-[1400px] mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

        <!-- Left: Content -->
        <div class="space-y-8">
          <div
            class="inline-block px-3 py-1 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm">
            Why Choose Us
          </div>
          <h2 class="text-5xl md:text-6xl font-display font-bold text-white uppercase leading-tight">
            Your Trusted <span
              class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Mechanics</span>
          </h2>
          <p class="text-zinc-400 text-lg leading-relaxed">
            We're not just another shop. We specialize in both domestic and foreign automotive repair, maintenance, and
            performance installations. From routine diagnostics to complex suspension work, our expert technicians
            deliver quality service every time.
          </p>

          <div class="grid grid-cols-2 gap-8 border-t border-zinc-900 pt-8">
            <div class="">
              <div class="text-4xl font-display font-bold text-white mb-1">500+</div>
              <div class="text-xs text-zinc-500 uppercase tracking-widest border-t border-red-600 inline-block pt-2">
                Vehicles Serviced</div>
            </div>
            <div class="">
              <div class="text-4xl font-display font-bold text-white mb-1">4.9/5</div>
              <div class="text-xs text-zinc-500 uppercase tracking-widest border-t border-red-600 inline-block pt-2">
                Customer Rating</div>
            </div>
            <div class="">
              <div class="text-4xl font-display font-bold text-white mb-1">15+</div>
              <div class="text-xs text-zinc-500 uppercase tracking-widest border-t border-red-600 inline-block pt-2">
                Years Experience</div>
            </div>
            <div class="">
              <div class="text-4xl font-display font-bold text-white mb-1">All Makes</div>
              <div class="text-xs text-zinc-500 uppercase tracking-widest border-t border-red-600 inline-block pt-2">
                Domestic & Foreign</div>
            </div>
          </div>

          <div class="flex flex-wrap gap-4 pt-4">
            <a href="#contact"
              class="px-8 py-4 bg-white text-black font-display uppercase tracking-widest text-sm transition-all hover:bg-zinc-200 font-bold">
              Book Consultation
            </a>
            <a href="tel:+15125550199"
              class="group inline-flex items-center gap-3 px-8 py-4 bg-red-600 text-white font-display uppercase tracking-widest text-sm transition-all hover:bg-red-700 font-bold">
              <i class="fa-solid fa-phone text-sm group-hover:animate-pulse"></i>
              <span>Call Now</span>
            </a>
          </div>
        </div>

        <!-- Right: Image Grid -->
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <div class="relative h-64 overflow-hidden group border border-zinc-800">
              <img src="<?php echo get_template_directory_uri(); ?>/images/shop-evo-widebody.jpg"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 object-center"
                alt="Detail 1">
            </div>  
            <div class="relative h-80 overflow-hidden group border border-zinc-800">
              <img src="<?php echo get_template_directory_uri(); ?>/images/shop-wrx.jpg"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 object-center"
                alt="Detail 2">
            </div>
          </div>
          <div class="space-y-4 mt-12">
            <div class="relative h-80 overflow-hidden group border border-zinc-800">
              <img src="<?php echo get_template_directory_uri(); ?>/images/shop-corvette.jpg"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 object-center"
                alt="Detail 3">
            </div>
            <div class="relative h-64 overflow-hidden group border border-zinc-800">
              <img src="<?php echo get_template_directory_uri(); ?>/images/shop-z3m.jpg"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 object-center"
                alt="Detail 4">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Instagram Reels Section -->
  <section id="gallery" class="py-20 bg-black relative overflow-hidden">
    <div
      class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-red-900/5 via-transparent to-transparent">
    </div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div>
          <div class="inline-flex items-center gap-3 mb-4">
            <i class="fa-brands fa-instagram text-2xl text-white"></i>
            <a href="https://instagram.com/stradaworks"
              class="text-white font-display uppercase tracking-widest hover:text-red-500 transition-colors">@Stradaworks</a>
          </div>
          <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase">From The Garage</h2>
        </div>
        <a href="https://instagram.com/stradaworks" target="_blank"
          class="hidden md:inline-flex items-center gap-2 px-6 py-3 border border-zinc-800 hover:bg-white hover:text-black text-zinc-400 font-display uppercase tracking-widest text-sm transition-all">
          <span>See Full Gallery</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>

      <!-- Instagram Grid -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

        <!-- Instagram Embed Card 1 -->
        <div
          class="instagram-embed relative bg-zinc-900 border border-zinc-800 hover:border-zinc-700 overflow-hidden transition-all duration-300"
          data-instagram-url="https://www.instagram.com/p/C0JlZuQPxXX/embed">
          <div class="instagram-thumbnail-container relative aspect-[1/1] overflow-hidden bg-zinc-950 cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-interior-lifts.jpg"
              class="w-full h-full object-cover object-center" alt="Latest Build">
            <!-- <div class="absolute inset-0 bg-black/20 transition-colors"></div> -->
          </div>
        </div>

        <!-- Instagram Embed Card 2 -->
        <div
          class="instagram-embed relative bg-zinc-900 border border-zinc-800 hover:border-zinc-700 overflow-hidden transition-all duration-300"
          data-instagram-url="https://www.instagram.com/p/C0JlZuQPxXX/embed">
          <div class="instagram-thumbnail-container relative aspect-[1/1] overflow-hidden bg-zinc-950 cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-r32-gtr.jpg"
              class="w-full h-full object-cover object-center" alt="Detailing Magic">
            <!-- <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div> -->
          </div>
        </div>

        <!-- Instagram Embed Card 3 -->
        <div
          class="instagram-embed relative bg-zinc-900 border border-zinc-800 hover:border-zinc-700 overflow-hidden transition-all duration-300"
          data-instagram-url="https://www.instagram.com/p/C0JlZuQPxXX/embed">
          <div class="instagram-thumbnail-container relative aspect-[1/1] overflow-hidden bg-zinc-950 cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-m4-front.jpg"
              class="w-full h-full object-cover object-center" alt="Behind The Scenes">
            <!-- <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div> -->
          </div>
        </div>

        <!-- Instagram Embed Card 4 -->
        <div
          class="instagram-embed  relative bg-zinc-900 border border-zinc-800 hover:border-zinc-700 overflow-hidden transition-all duration-300"
          data-instagram-url="https://www.instagram.com/p/C0JlZuQPxXX/embed">
          <div class="instagram-thumbnail-container relative aspect-[1/1] overflow-hidden bg-zinc-950 cursor-pointer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-nos-trunk.jpg"
              class="w-full h-full object-cover object-center" alt="Performance Tune">
            <!-- <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div> -->
          </div>
        </div>

      </div>
      <div class="mt-8 text-center md:hidden">
        <a href="https://instagram.com/stradaworks" target="_blank"
          class="inline-flex items-center gap-2 px-6 py-3 border border-zinc-800 hover:bg-white hover:text-black text-zinc-400 font-display uppercase tracking-widest text-sm transition-all">
          <span>See Full Gallery</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Section 7: Social Proof Carousel (Refined) -->
  <section id="reviews" class="py-16 bg-zinc-950 relative">
    <div class="max-w-[1400px] mx-auto px-6">

      <div class="flex items-center gap-4 mb-12">
        <div class="bg-green-500/10 border border-green-500/20 px-3 py-1 rounded-full flex items-center gap-2">
          <i class="fa-brands fa-google text-green-500 text-sm"></i>
          <span class="text-green-500 text-xs font-bold uppercase tracking-wider">Rated 4.9/5 Excellent</span>
        </div>
        <span class="text-zinc-500 text-sm">Based on 120+ Performance & Supercar Owner Reviews</span>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1 -->
        <div
          class="bg-zinc-900 border border-zinc-800 p-10 hover:border-zinc-700 transition-colors group cursor-default relative">
          <i class="fa-solid fa-quote-left text-4xl text-zinc-800 absolute top-8 right-8"></i>
          <div class="flex gap-1 mb-6 text-red-600 text-xs">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="text-zinc-300 font-medium mb-8 text-lg leading-relaxed group-hover:text-white transition-colors">
            "The transparency is unmatched. Getting a video report of the inspection completely changed my perspective
            on mechanic visits. Honest work."
          </p>
          <div class="flex items-center gap-4">
            <div
              class="w-12 h-12 bg-zinc-800 rounded-full flex items-center justify-center text-white font-bold border border-zinc-700">
              SM</div>
            <div>
              <span class="block text-white font-bold uppercase text-sm tracking-wider">Sarah M.</span>
              <span class="block text-zinc-500 text-xs uppercase tracking-widest">Honda Civic Type R</span>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-zinc-900 border border-zinc-800 p-10 hover:border-zinc-700 transition-colors group cursor-default relative">
          <i class="fa-solid fa-quote-left text-4xl text-zinc-800 absolute top-8 right-8"></i>
          <div class="flex gap-1 mb-6 text-red-600 text-xs">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
              class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="text-zinc-300 font-medium mb-8 text-lg leading-relaxed group-hover:text-white transition-colors">
            "Stradaworks transformed my M4. The attention to detail in the body modifications and the ECU tune is
            world-class. Highly recommended."
          </p>
          <div class="flex items-center gap-4">
            <div
              class="w-12 h-12 bg-zinc-800 rounded-full flex items-center justify-center text-white font-bold border border-zinc-700">
              DJ</div>
            <div>
              <span class="block text-white font-bold uppercase text-sm tracking-wider">David J.</span>
              <span class="block text-zinc-500 text-xs uppercase tracking-widest">BMW M4 Comp</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Local Location & Contact Section -->
  <!-- <section class="py-0">
    <div class="w-full h-[400px] grayscale invert filter">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.772651973154!2d-82.1773312!3d27.068923299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dcad951675fda1%3A0xb5246c3b755879a0!2sStradaworks%20LLC!5e0!3m2!1sen!2sin!4v1768996988840!5m2!1sen!2sin"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section> -->

<?php get_footer(); ?>
