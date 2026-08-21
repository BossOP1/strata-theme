<?php /* Template Name: Service - Diagnostics */ require_once __DIR__ . "/wp-fallback.php"; get_header(); ?>

    <!-- Hero Section -->
    <header class="relative w-full h-[70vh] min-h-[500px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/car_diagnostics.png" class="w-full h-full object-cover" alt="Diagnostics">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        <div class="relative z-10 h-full max-w-[1400px] mx-auto px-6 flex flex-col justify-center">
            <div
                class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm w-fit">
                Electrical Experts
            </div>
            <h1 class="text-6xl md:text-8xl font-display font-bold uppercase leading-none mb-6">
                Digital <br> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Insight</span>
            </h1>
            <p class="text-zinc-400 text-lg md:text-xl max-w-2xl font-light">
                Stop guessing. We use dealer-level diagnostic tools to pinpoint electrical issues, sensors, and computer
                faults with surgical precision.
            </p>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="py-20 bg-zinc-950 border-b border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-display font-bold text-white uppercase mb-6">Code <span
                        class="text-red-600">Breakers</span></h2>
                <p class="text-zinc-400 leading-relaxed mb-6">
                    Modern cars are rolling computers. When a warning light comes on, it takes more than a basic scanner
                    to understand why. We speak your car's language.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">ECU Coding</h4>
                            <span class="text-zinc-500 text-xs">Module programming & feature unlocking</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Electrical Systems</h4>
                            <span class="text-zinc-500 text-xs">Wiring repair & parasitic draw testing</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-car-battery"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Battery Experts</h4>
                            <span class="text-zinc-500 text-xs">Registration, Health Check & AGM Upgrades</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Safety Systems</h4>
                            <span class="text-zinc-500 text-xs">ABS, SRS Airbag & Traction Control</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-red-600/10 rotate-3 border border-red-600/20"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/car_diagnostics.png"
                    class="relative z-10 w-full h-full object-cover border border-zinc-800" alt="Scanning">
            </div>
        </div>
    </section>

    <!-- Services Breakdown -->
    <section class="py-20 bg-black">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Technology</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Diagnostic Services
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Check Engine</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Accurate diagnosis of engine lights, ABS
                        warnings, and airbag modules. We don't just clear codes; we fix the root cause.</p>
                </div>
                <!-- Service 2 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-microchip"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Programming</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Key fob programming, ECU flashing, and module
                        replacement coding for BMW, Mercedes, and more.</p>
                </div>
                <!-- Service 3 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-plug"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Wiring Repair</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Tracking down shorts, open circuits, and bad
                        grounds. Rodent damage repair experts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Works Section -->
    <section class="py-20 bg-zinc-950 border-t border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Portfolio</span>
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Solved <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Cases</span>
                    </h2>
                </div>
                <a href="<?php echo home_url('/#work'); ?>"
                    class="hidden md:inline-flex items-center gap-2 text-zinc-400 font-display uppercase tracking-widest text-xs hover:text-white transition-colors group">
                    <span>View All</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-wiring-harness.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Wiring harness repair">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">BMW M3</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Wiring Harness Repair</h3>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-ecu-laptop.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="ECU programming with a laptop">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Audi S4</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">ECU Replacement</h3>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-scan-tablet.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Scan tool calibration">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Porsche
                            Macan</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">ADAS Calibration</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-black border-t border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4">
                <h2 class="text-4xl font-display font-bold text-white uppercase mt-2 mb-6">Tech Support</h2>
                <a href="<?php echo home_url('/contact'); ?>"
                    class="inline-flex items-center gap-2 text-white font-display uppercase tracking-widest text-sm hover:text-red-500 transition-colors group">
                    <span>Get Scanned</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="lg:col-span-8 space-y-4">
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Why is my battery
                                dying overnight?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            This is likely a parasitic draw. A module or component isn't going to sleep. We can isolate
                            the circuit and fix it.
                        </div>
                    </details>
                </div>
                <!-- FAQ 2 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Do you charge for
                                diagnostics?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Yes, diagnostic time is billed to accurately pinpoint the issue using advanced tools. If you
                            proceed with the recommended repair, we often credit a portion of this fee back.
                        </div>
                    </details>
                </div>
                <!-- FAQ 3 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Can you code used
                                modules?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            In many cases, yes. We have tools to unlock and recode used modules for your specific VIN,
                            offering a cost-effective alternative to new dealer parts.
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
            <h2 class="text-4xl md:text-6xl font-display font-bold text-white uppercase mb-8">Solve The <span
                    class="text-red-600">Mystery</span></h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>"
                    class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-10deg]">Book
                    Diagnostics</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
