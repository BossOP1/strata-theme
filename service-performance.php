<?php
$page_title       = 'Aftermarket & Performance | Stradaworks Automotive';
$page_description = 'Turbo systems, ECU tuning, exhaust and forced induction installs done properly and tuned on the dyno.';
require __DIR__ . '/includes/header.php';
?>

    <!-- Hero Section -->
    <header class="relative w-full h-[70vh] min-h-[500px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?= asset('images/performance_installs.png') ?>" class="w-full h-full object-cover" alt="Performance Parts">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        <div class="relative z-10 h-full max-w-[1400px] mx-auto px-6 flex flex-col justify-center">
            <div
                class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm w-fit">
                Next Level
            </div>
            <h1 class="text-6xl md:text-8xl font-display font-bold uppercase leading-none mb-6">
                Unleashed <br> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Power</span>
            </h1>
            <p class="text-zinc-400 text-lg md:text-xl max-w-2xl font-light">
                Unlock the true potential of your vehicle. From bolt-on upgrades to complete stage packages, we build
                cars that dominate the street and track.
            </p>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="py-20 bg-zinc-950 border-b border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-display font-bold text-white uppercase mb-6">Built To <span
                        class="text-red-600">Perform</span></h2>
                <p class="text-zinc-400 leading-relaxed mb-6">
                    We are enthusiasts first. We understand that modifying a car is an expression of self. We use only
                    premium parts and proven tuning methods to ensure reliability matches horsepower.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">ECU Tuning</h4>
                            <span class="text-zinc-500 text-xs">Custom maps for power & efficiency</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-brands fa-searchengin"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Forced Induction</h4>
                            <span class="text-zinc-500 text-xs">Turbo & Supercharger kits</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-laptop-medical"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Dyno Tuning</h4>
                            <span class="text-zinc-500 text-xs">Precision calibration on 4WD Dyno</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-flag-checkered"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Track Prep</h4>
                            <span class="text-zinc-500 text-xs">Fluid upgrades, scaling & safety checks</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-red-600/10 rotate-3 border border-red-600/20"></div>
                <img src="<?= asset('images/performance_installs.png') ?>"
                    class="relative z-10 w-full h-full object-cover border border-zinc-800" alt="Engine Bay">
            </div>
        </div>
    </section>

    <!-- Services Breakdown -->
    <section class="py-20 bg-black">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Upgrades</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Performance Services
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-wind"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Intake & Exhaust</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Let your engine breathe. High-flow intakes and
                        custom exhaust systems for sound and power.</p>
                </div>
                <!-- Service 2 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-fire-burner"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Bolt-Ons</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Intercoolers, downpipes, cooling systems, and
                        fueling upgrades installed right.</p>
                </div>
                <!-- Service 3 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-paintbrush"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Aesthetics</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Lip kits, diffusers, spoilers, and widebody
                        installation to match the performance.</p>
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
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Track <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Ready</span>
                    </h2>
                </div>
                <a href="<?= url('/#work') ?>"
                    class="hidden md:inline-flex items-center gap-2 text-zinc-400 font-display uppercase tracking-widest text-xs hover:text-white transition-colors group">
                    <span>View All</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?= asset('images/gallery_engine_bay.png') ?>"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Forced induction engine bay">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Ford Mustang
                            GT</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Supercharger Kit</h3>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?= asset('images/service-hp-tuners.jpg') ?>"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="ECU tuning hardware on a built engine">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Volkswagen
                            Golf R</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Stage 2 Tune</h3>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?= asset('images/gallery_exhaust_system.png') ?>"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Titanium exhaust tips">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Nissan
                            GTR</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Titanium Exhaust</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-black border-t border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4">
                <h2 class="text-4xl font-display font-bold text-white uppercase mt-2 mb-6">Tuning FAQs</h2>
                <a href="<?= url('/contact') ?>"
                    class="inline-flex items-center gap-2 text-white font-display uppercase tracking-widest text-sm hover:text-red-500 transition-colors group">
                    <span>Start Building</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="lg:col-span-8 space-y-4">
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Will a tune void my
                                warranty?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Technically yes, ECU modifications can flag a warranty claim on the powertrain. We advise
                            discussing this with us before proceeding on newer vehicles.
                        </div>
                    </details>
                </div>
                <!-- FAQ 2 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">What is the
                                difference between Stage 1 and Stage 2?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Stage 1 is typically just software optimization with no hardware changes required. Stage 2
                            usually requires upgraded intake and exhaust components to handle increased airflow and
                            power.
                        </div>
                    </details>
                </div>
                <!-- FAQ 3 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Do you do custom
                                fabrication?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Yes, from custom intercooler piping to bespoke exhaust systems, our fabricators can build
                            solutions that aren't available off the shelf.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section
        class="py-20 bg-[url('<?= asset('images/carbon-fibre.png') ?>')] bg-zinc-950 relative border-t border-zinc-900">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-black/90"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <h2 class="text-4xl md:text-6xl font-display font-bold text-white uppercase mb-8">Ready To <span
                    class="text-red-600">Race?</span></h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?= url('/contact') ?>"
                    class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-10deg]">Book
                    Consultation</a>
            </div>
        </div>
    </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
