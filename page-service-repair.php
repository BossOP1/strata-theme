<?php /* Template Name: Service - Repair */ get_header(); ?>

    <!-- Hero Section -->
    <header class="relative w-full h-[70vh] min-h-[500px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/automotive_repair.png" class="w-full h-full object-cover" alt="Engine Repair">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        <div class="relative z-10 h-full max-w-[1400px] mx-auto px-6 flex flex-col justify-center">
            <div
                class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm w-fit">
                Master Technicians
            </div>
            <h1 class="text-6xl md:text-8xl font-display font-bold uppercase leading-none mb-6">
                Mechanical <br> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Mastery</span>
            </h1>
            <p class="text-zinc-400 text-lg md:text-xl max-w-2xl font-light">
                From routine maintenance to complex engine rebuilds. We treat every vehicle with the care it deserves,
                ensuring reliability and peak performance.
            </p>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="py-20 bg-zinc-950 border-b border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-display font-bold text-white uppercase mb-6">Dependable <span
                        class="text-red-600">Engineering</span></h2>
                <p class="text-zinc-400 leading-relaxed mb-6">
                    Modern vehicles are complex machines. Our certified technicians combine old-school mechanical
                    know-how with modern diagnostic tools to solve issues accurately.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Drivetrain Repair</h4>
                            <span class="text-zinc-500 text-xs">Transmissions, Clutch, Differential</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-oil-can"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Fluid Services</h4>
                            <span class="text-zinc-500 text-xs">Oil, Coolant, Brake Fluid Exchange</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Check Engine Light</h4>
                            <span class="text-zinc-500 text-xs">code reading & sensor diagnosis</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-car-burst"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Suspension Check</h4>
                            <span class="text-zinc-500 text-xs">Struts, shocks & control arm inspection</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-red-600/10 rotate-3 border border-red-600/20"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/automotive_repair.png"
                    class="relative z-10 w-full h-full object-cover border border-zinc-800" alt="Repair Work">
            </div>
        </div>
    </section>

    <!-- Services Breakdown -->
    <section class="py-20 bg-black">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Core Services</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Repair Solutions</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-engine"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Engine Repair</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Head gaskets,timing belts, turbos. We handle
                        major engine work with precision.</p>
                    <ul class="text-zinc-400 text-sm space-y-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Diagnostics</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i> Seal
                            replacement</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Timing services</li>
                    </ul>
                </div>
                <!-- Service 2 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-circle-stop"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Brake Systems</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Squeaky brakes? Spongy pedal? We service pads,
                        rotors, calipers and lines.</p>
                    <ul class="text-zinc-400 text-sm space-y-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i> Pad &
                            Rotor Swap</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i> Fluid
                            Flush</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Caliper Rebuild</li>
                    </ul>
                </div>
                <!-- Service 3 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-car-battery"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">General Maint.</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Scheduled maintenance to keep your warranty
                        intact and your car running smooth.</p>
                    <ul class="text-zinc-400 text-sm space-y-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i> Oil
                            Changes</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Filter Replacement</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-red-600 text-xs"></i>
                            Inspections</li>
                    </ul>
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
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Recent <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Repairs</span>
                    </h2>
                </div>
                <a href="<?php echo home_url('/#work'); ?>"
                    class="hidden md:inline-flex items-center gap-2 text-zinc-400 font-display uppercase tracking-widest text-xs hover:text-white transition-colors group">
                    <span>View All</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-engine-wrench.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Engine Work">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Audi R8</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">V10 Major Service</h3>
                    </div>
                </div>
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-brake-rotor.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Brake rotor and caliper service">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Porsche
                            911</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Brake Overhaul</h3>
                    </div>
                </div>
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/shop-clutch.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Clutch and pressure plate replacement">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Subaru
                            WRX</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Clutch Replacement</h3>
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
                <h2 class="text-4xl font-display font-bold text-white uppercase mt-2 mb-6">Maintenance <br>FAQs</h2>
                <p class="text-zinc-500 leading-relaxed mb-8">Common questions about keeping your car on the road.</p>
                <a href="<?php echo home_url('/contact'); ?>"
                    class="inline-flex items-center gap-2 text-white font-display uppercase tracking-widest text-sm hover:text-red-500 transition-colors group">
                    <span>Ask a Mechanic</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="lg:col-span-8 space-y-4">
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">How often should I
                                change my oil?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            We recommend every 5,000 miles for synthetic blends and up to 7,500 for full synthetic,
                            depending on driving habits.
                        </div>
                    </details>
                </div>
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">My brakes are
                                squeaking, do they need replacement?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Squeaking usually indicates the wear indicator is touching the rotor. It's time to get them
                            inspected before damage occurs to the rotors.
                        </div>
                    </details>
                </div>
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Do you offer a
                                warranty on repairs?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Yes, all our labor and parts (when sourced by us) are backed by a 12-month/12,000-mile
                            warranty for your peace of mind.
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
            <h2 class="text-4xl md:text-6xl font-display font-bold text-white uppercase mb-8">Need A <span
                    class="text-red-600">Fix?</span></h2>
            <p class="text-zinc-400 text-lg mb-10">Don't let small issues become big problems. Schedule your service
                today.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>"
                    class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-10deg]">Book
                    Service</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
