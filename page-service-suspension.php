<?php /* Template Name: Service - Suspension */ get_header(); ?>

    <!-- Hero Section -->
    <header class="relative w-full h-[70vh] min-h-[500px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shop-civic-lift.jpg"
                class="w-full h-full object-cover" alt="Suspension Work">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>

        <div class="relative z-10 h-full max-w-[1400px] mx-auto px-6 flex flex-col justify-center">
            <div
                class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm w-fit">
                Specialized Tuning
            </div>
            <h1 class="text-6xl md:text-8xl font-display font-bold uppercase leading-none mb-6">
                Precision <br> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Handling</span>
            </h1>
            <p class="text-zinc-400 text-lg md:text-xl max-w-2xl font-light">
                Complete suspension tuning, coilover installations, and air ride setups designed for the perfect stance
                and track-ready performance.
            </p>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="py-20 bg-zinc-950 border-b border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-display font-bold text-white uppercase mb-6">Dialed In To <span
                        class="text-red-600">Perfection</span></h2>
                <p class="text-zinc-400 leading-relaxed mb-6">
                    Suspension isn't just about going low. It's about geometry, handling dynamics, and ride quality.
                    Whether you're chasing lap times or fitting aggressive wheels, our team understands the science
                    behind the stance.
                </p>
                <p class="text-zinc-400 leading-relaxed mb-8">
                    We use state-of-the-art alignment technology and premium components to ensure your vehicle handles
                    exactly how you want it to. From static drops to complex air management systems, we do it all.
                </p>

                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-ruler-combined"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Perfect Fitment</h4>
                            <span class="text-zinc-500 text-xs">Fender rolling & pulling without paint damage</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Performance Tuning</h4>
                            <span class="text-zinc-500 text-xs">Corner balancing & dampening adjustment</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-circle-notch"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Bushing Upgrades</h4>
                            <span class="text-zinc-500 text-xs">Polyurethane & solid bushing installation</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Geometry Correction</h4>
                            <span class="text-zinc-500 text-xs">Ball joints, tie rods & control arms</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-red-600/10 rotate-3 border border-red-600/20"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_bmw_suspension.png"
                    class="relative z-10 w-full h-full object-cover border border-zinc-800" alt="Detailed Suspension">
            </div>
        </div>
    </section>

    <!-- Services Breakdown -->
    <section class="py-20 bg-black">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Our
                    Capabilities</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Suspension Services
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl">
                        <i class="fa-solid fa-spring"></i> <!-- Replaced coil icon with spring equivalent -->
                    </div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Coilover Install</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">
                        Professional installation of top-tier coilover systems (KW, BC Racing, Ohlins). Includes height
                        adjustment and dampening setup to match your driving style.
                    </p>
                    <ul class="text-zinc-400 text-sm space-y-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Pre-load adjustment</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Height dialing</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Dampening setup</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl">
                        <i class="fa-solid fa-wind"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Air Ride Systems</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">
                        Custom trunk setups and complete air suspension management installation. Hard-lines, tank
                        placement, and sensor calibration for reliable operation.
                    </p>
                    <ul class="text-zinc-400 text-sm space-y-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Custom Hardlines</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Manifold wiring</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i> Leak
                            testing</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl">
                        <i class="fa-solid fa-car-side"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Fitment & Logic</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">
                        Making wide wheels fit. Whether it's camber arms, toe links, or fender modification, we make
                        sure your setup clears without rubbing.
                    </p>
                    <ul class="text-zinc-400 text-sm space-y-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Fender Rolling</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Control Arms</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Geometry Correction</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    </section>

    <!-- Recent Works Section -->
    <section class="py-20 bg-zinc-950 border-t border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Portfolio</span>
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Recent <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Builds</span>
                    </h2>
                </div>
                <a href="<?php echo home_url('/#work'); ?>"
                    class="hidden md:inline-flex items-center gap-2 text-zinc-400 font-display uppercase tracking-widest text-xs hover:text-white transition-colors group">
                    <span>View All</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Work 1 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_coilover_install.png"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Coilover Install">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Subaru WRX
                            STI</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Air Lift Performance</h3>
                    </div>
                </div>

                <!-- Work 2 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/suspension_specialist.png"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Suspension Work">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">BMW M4</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">KW V3 Install</h3>
                    </div>
                </div>

                <!-- Work 3 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_bmw_suspension.png"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Stance Setup">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Nissan
                            370Z</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Stance Setup</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-black">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4">
                <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Knowledge
                    Base</span>
                <h2 class="text-4xl font-display font-bold text-white uppercase mt-2 mb-6">Common <br>Questions</h2>
                <p class="text-zinc-500 leading-relaxed mb-8">
                    Understanding suspension geometry can be complex. Here are some answers to frequent questions about
                    our tuning and installation process.
                </p>
                <a href="<?php echo home_url('/contact'); ?>"
                    class="inline-flex items-center gap-2 text-white font-display uppercase tracking-widest text-sm hover:text-red-500 transition-colors group">
                    <span>Ask something else</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="lg:col-span-8 space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">What brands do you
                                recommend for daily driving vs track?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            For daily driving with occasional spirited runs, we recommend BC Racing or ST Suspensions
                            for a balance of comfort and performance. For dedicated track use, we lean towards KW V3s,
                            Ohlins Road & Track, or Bilstein PSS10s for superior dampening control and thermal
                            stability.
                        </div>
                    </details>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Do I need an
                                alignment after installing coilovers?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Absolutely. Changing ride height directly alters camber, toe, and caster settings. Driving
                            without an alignment will destroy your tires rapidly and negatively affect handling. We
                            include a precision alignment with all our suspension installation packages.
                        </div>
                    </details>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">How long does an air
                                ride installation take?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            A standard kit installation typically takes 3-4 days. Custom hard-line trunk setups can take
                            5-7 days depending on the complexity of the design and materials used. We prioritize clean
                            wiring and leak-free reliability over rushing the job.
                        </div>
                    </details>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Will rolling my
                                fenders crack the paint?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Tony is an expert at fender rolling. We use heat guns and a gradual rolling technique to
                            minimize stress on the paint. While there is always a minor risk depending on the age and
                            condition of your paint, our success rate is extremely high for crack-free results.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section
        class="py-20 bg-[url('<?php echo get_template_directory_uri(); ?>/images/carbon-fibre.png')] bg-zinc-950 relative border-t border-zinc-900">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-black/90"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <h2 class="text-4xl md:text-6xl font-display font-bold text-white uppercase mb-8">Ready to <span
                    class="text-red-600">Drop It?</span></h2>
            <p class="text-zinc-400 text-lg mb-10">
                Get the perfect stance and handling for your build. Schedule a consultation to discuss your suspension
                goals.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>"
                    class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-10deg]">
                    Book Consultation
                </a>
                <a href="<?php echo home_url('/#work'); ?>"
                    class="px-8 py-4 border border-zinc-700 hover:bg-white hover:text-black text-white font-display uppercase tracking-widest font-bold transition-all">
                    View Gallery
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
