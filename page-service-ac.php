<?php
/*
Template Name: Service - AC
*/
get_header();
?>

    <!-- Hero Section -->
    <header class="relative w-full h-[70vh] min-h-[500px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/air_conditioning.png" class="w-full h-full object-cover" alt="AC Repair">
             <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        <div class="relative z-10 h-full max-w-[1400px] mx-auto px-6 flex flex-col justify-center">
             <div
                class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm w-fit">
                Climate Systems
            </div>
            <h1 class="text-6xl md:text-8xl font-display font-bold uppercase leading-none mb-6">
                Keep It <br> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Cool</span>
            </h1>
            <p class="text-zinc-400 text-lg md:text-xl max-w-2xl font-light">
                 Expert diagnostics and repair for automotive air conditioning and heating systems. Stay comfortable year-round.
            </p>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="py-20 bg-zinc-950 border-b border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                 <h2 class="text-4xl font-display font-bold text-white uppercase mb-6">Peak <span
                        class="text-red-600">Efficiency</span></h2>
                <p class="text-zinc-400 leading-relaxed mb-6">
                    A failing AC system isn't just uncomfortable; it can lead to expensive repairs if ignored. We find
                    the leak, fix the compressor, or recharge the system to factory specs.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-snowflake"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">R134a & R1234yf</h4>
                            <span class="text-zinc-500 text-xs">Certified for all modern refrigerants</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-temperature-arrow-up"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Heating Solutions</h4>
                            <span class="text-zinc-500 text-xs">Heater core & thermostat repair</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-wind"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Air Quality</h4>
                            <span class="text-zinc-500 text-xs">Cabin filter replacement & duct cleaning</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                         <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <div>
                             <h4 class="font-display font-bold text-white uppercase text-sm">System Flush</h4>
                            <span class="text-zinc-500 text-xs">Debris removal to protect new components</span>
                        </div>
                    </li>
                </ul>
            </div>
             <div class="relative">
                <div class="absolute -inset-4 bg-red-600/10 rotate-3 border border-red-600/20"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/air_conditioning.png"
                    class="relative z-10 w-full h-full object-cover border border-zinc-800" alt="AC Service">
            </div>
        </div>
    </section>

    <!-- Services Breakdown -->
    <section class="py-20 bg-black">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="text-center mb-16">
                 <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Services</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Climate Control</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                 <!-- Service 1 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-wind"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Recharge</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Restoring refrigerant levels to ensure icy
                        cold air. Includes leak check.</p>
                </div>
                 <!-- Service 2 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-magnifying-glass"></i></div>
                     <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Leak Detection</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Using UV dye and sniffers to find microscopic
                        leaks in the system.</p>
                </div>
                 <!-- Service 3 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-fan"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Compressor</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Repair or replacement of failed compressors,
                        condensers, and evaporators.</p>
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
                            class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Projects</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-ac-compressor.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="A/C compressor and drive belt">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                     <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Honda
                            CR-V</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Compressor Replacement</h3>
                    </div>
                </div>
                 <!-- Project 2 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-heater-core.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Dash removed for heater core access">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                     <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Jeep
                            Wrangler</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Heater Core Service</h3>
                    </div>
                </div>
                 <!-- Project 3 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-ac-gauges.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Refrigerant manifold gauges for leak testing">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                     <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Range
                            Rover</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">System Leak Repair</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-black border-t border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4">
                <h2 class="text-4xl font-display font-bold text-white uppercase mt-2 mb-6">AC FAQs</h2>
                 <a href="<?php echo home_url('/contact'); ?>"
                    class="inline-flex items-center gap-2 text-white font-display uppercase tracking-widest text-sm hover:text-red-500 transition-colors group">
                    <span>Contact Us</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="lg:col-span-8 space-y-4">
                 <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Why is my AC blowing
                                warm?</span>
                             <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Low refrigerant due to a leak is the most common cause. We find and fix the leak before
                            recharging.
                        </div>
                    </details>
                </div>
                 <!-- FAQ 2 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                             <span class="text-white font-display font-bold uppercase tracking-wide">What is
                                R1234yf?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                         <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            R1234yf is a new, environmentally friendly refrigerant required in most vehicles
                            manufactured after 2014. We have the specific equipment to service these systems.
                        </div>
                    </details>
                </div>
                 <!-- FAQ 3 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Do you fix heater
                                cores?</span>
                             <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Yes, if your windows are fogging up or you smell coolant inside the cabin, it's likely a
                            heater core issue. We perform full dash-out services to replace them.
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
            <h2 class="text-4xl md:text-6xl font-display font-bold text-white uppercase mb-8">Beat The <span
                    class="text-red-600">Heat</span></h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>"
                    class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-10deg]">Book
                    Service</a>
             </div>
        </div>
    </section>

<?php get_footer(); ?>
