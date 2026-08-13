<?php
/*
Template Name: About Us
*/
get_header();
?>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about-hero-strata.webp" class="w-full h-full object-cover opacity-60 scale-110" id="hero-bg"
                alt="Red Lancer Hero">
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-transparent to-black"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1
                class="text-7xl md:text-9xl font-display font-bold uppercase leading-none tracking-tighter mb-6 overflow-hidden">
                <div class="hero-word translate-y-full">More Than</div>
                <div class="hero-word translate-y-full text-red-600">A Machine</div>
            </h1>
            <p class="text-zinc-400 text-lg md:text-xl max-w-2xl mx-auto font-light hero-fade opacity-0 translate-y-10">
                For some, it's just transportation. For Tony, it was the beginning of everything.
            </p>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 text-center hero-fade opacity-0">
            <p class="text-xs font-display uppercase tracking-[0.3em] text-red-500 mb-2">The Journey Begins</p>
            <i class="fa-solid fa-chevron-down text-zinc-500 animate-bounce"></i>
        </div>
    </section>

    <!-- The Journey Container -->
    <main class="relative bg-black">

        <!-- Chapter 1: The Spark (2010) -->
        <div
            class="journey-section flex flex-col md:flex-row items-center justify-between py-24 md:py-0 min-h-screen px-6 md:px-24 gap-12 relative border-b border-zinc-900/50">
            <div class="w-full md:w-1/2 relative z-10 order-2 md:order-1">
                <div
                    class="inline-block px-3 py-1 mb-6 border border-zinc-800 text-zinc-500 text-xs font-display uppercase tracking-[0.2em]">
                    2010 • The Beginning
                </div>
                <h2 class="text-5xl md:text-7xl font-display font-bold uppercase mb-8 leading-[0.9]">
                    The First <span class="text-red-500">Key Turn</span>
                </h2>
                <div class="space-y-6 text-zinc-400 text-lg leading-relaxed">
                    <p>
                        I still remember the day I brought her home. She was stock. Bone stock. A faded red paint job
                        and an engine that purred but didn't roar. To anyone else, it was just another sedan on the
                        block.
                    </p>
                    <p>
                        But I saw potential. I didn't have a garage back then, just a driveway and a cheap set of tools
                        I picked up from a hardware store sale. My neighbors hated me—the noise, the late nights, the
                        constant revving as I tried to figure out why the idle was rough.
                    </p>
                    <p class="text-white border-l-2 border-red-600 pl-4 font-medium italic">
                        "It wasn't perfect, but it was mine. And that was all that mattered."
                    </p>
                </div>
            </div>

            <div class="w-full md:w-5/12 h-[50vh] md:h-[70vh] relative order-1 md:order-2 group">
                <div
                    class="absolute -inset-4 border border-zinc-800 rotate-3 transition-transform duration-700 group-hover:rotate-0">
                </div>
                <div
                    class="w-full h-full overflow-hidden relative  group-hover:grayscale-0 transition-all duration-1000">
                    <!-- Placeholder for tony_stock_lancer.png if generation failed, but we have it -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/old-lancer-2-new.png"
                        class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-1000"
                        alt="Tony with Stock Lancer">
                    <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div> -->
                    <div class="absolute bottom-6 left-6 font-display font-bold text-4xl text-white/10 select-none">
                        ORIGINS</div>
                </div>
            </div>
        </div>

        <!-- Connector Line -->
        <div
            class="absolute left-6 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-red-600/0 via-red-600/20 to-red-600/0 hidden md:block">
        </div>

        <!-- Chapter 2: The Obsession (Building it) -->
        <div
            class="journey-section flex flex-col md:flex-row items-center justify-between py-24 md:py-0 min-h-screen px-6 md:px-24 gap-12 relative border-b border-zinc-900/50">

            <div class="w-full md:w-5/12 h-[50vh] md:h-[70vh] relative group">
                <div
                    class="absolute -inset-4 border border-zinc-800 -rotate-3 transition-transform duration-700 group-hover:rotate-0">
                </div>
                <div class="w-full h-full overflow-hidden relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tony-strata-working.jpg"
                        class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-1000"
                        alt="Working in the garage">
                    <!-- <div class="absolute inset-0 bg-black/60"></div> -->
                    <!-- <div class="absolute inset-0 bg-red-900/10 mix-blend-overlay"></div> -->
                    <div
                        class="absolute bottom-6 right-6 font-display font-bold text-4xl text-white/10 select-none text-right">
                        GRIND</div>
                </div>
            </div>

            <div class="w-full md:w-1/2 relative z-10 text-right">
                <div class="inline-flex justify-end w-full">
                    <div
                        class="inline-block px-3 py-1 mb-6 border border-zinc-800 text-zinc-500 text-xs font-display uppercase tracking-[0.2em]">
                        The Obsession
                    </div>
                </div>
                <h2 class="text-5xl md:text-7xl font-display font-bold uppercase mb-8 leading-[0.9]">
                    Blood, Sweat <br>& <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Gears</span>
                </h2>
                <div class="space-y-6 text-zinc-400 text-lg leading-relaxed ml-auto">
                    <p>
                        Youtube tutorials became my bible. I broke more bolts than I care to admit. There were nights I
                        wanted to set the whole car on fire and walk away.
                    </p>
                    <p>
                        But then, you get that one breakthrough. You swap the turbo, you tune the ECU, and suddenly...
                        the car wakes up. That feeling of pressing the pedal and feeling the machine respond to
                        <em>your</em> work? It's addictive. It's a drug.
                    </p>
                    <p>
                        My hands have been permanently stained with grease since 2012. I wouldn't have it any other way.
                    </p>
                </div>
            </div>
        </div>

        <!-- Chapter 3: The Masterpiece (Full Width Video/Image) -->
        <div class="journey-section min-h-screen flex items-center justify-center relative overflow-hidden">
            <div class="absolute inset-0 z-0">
                <!-- Using hero image again as placeholder for action shot, with different styling -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/lancer-rear.jpg" class="w-full h-full object-cover opacity-40 parallax-bg"
                    alt="Lancer on Track">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <div class="relative z-10 max-w-4xl text-center px-6">
                <i class="fa-solid fa-quote-left text-4xl text-red-600 mb-6 opacity-50"></i>
                <h2 class="text-4xl md:text-6xl font-display font-bold uppercase leading-tight mb-8">
                    "By 2018, She wasn't just a Lancer anymore. She was a weapon. <br> <span class="text-red-500">And
                        she was my motivation.</span>"
                </h2>
                <div class="grid grid-cols-3 gap-8 max-w-2xl mx-auto mt-12 border-t border-white/10 pt-8">
                    <div>
                        <div class="text-3xl font-display font-bold text-white">450+</div>
                        <div class="text-zinc-500 text-xs uppercase tracking-widest mt-1">Horsepower</div>
                    </div>
                    <div>
                        <div class="text-3xl font-display font-bold text-white">2.1s</div>
                        <div class="text-zinc-500 text-xs uppercase tracking-widest mt-1">0-60 Time</div>
                    </div>
                    <div>
                        <div class="text-3xl font-display font-bold text-white">Infinite</div>
                        <div class="text-zinc-500 text-xs uppercase tracking-widest mt-1">Memories</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chapter 4: Stradaworks (Current Day) -->
        <div
            class="journey-section flex flex-col md:flex-row items-center justify-between py-24 min-h-screen px-6 md:px-24 gap-12 relative">
            <div class="w-full md:w-1/2 relative z-10">
                <div
                    class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em]">
                    Today
                </div>
                <h2 class="text-5xl md:text-7xl font-display font-bold uppercase mb-8 leading-[0.9]">
                    Building <span class="text-white">The Dream</span>
                </h2>
                <div class="space-y-6 text-zinc-400 text-lg leading-relaxed">
                    <p>
                        People started asking, "Who tuned your car?" "Who rolled your fenders?" "Can you look at my
                        suspension?"
                    </p>
                    <p>
                        That's when I realized this wasn't just a hobby. It was a calling. Stradaworks was born from
                        that same obsession that built the Red Lancer. We treat every customer's car like it's my own.
                    </p>
                    <p>
                        I still drive the Lancer every Sunday. It reminds me where I started, and keeps me hungry for
                        what's next.
                    </p>
                    <div class="pt-8">
                        <a href="<?php echo home_url('/#contact'); ?>"
                            class="inline-flex items-center gap-4 text-white font-display uppercase tracking-widest hover:text-red-500 transition-colors group">
                            <span class="border-b border-transparent group-hover:border-red-500 pb-1">Start Your
                                Build</span>
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-5/12 h-[50vh] md:h-[60vh] relative">
                <!-- Using about_hero_lancer.png as placeholder for tony_final_portrait -->
                <div class="absolute inset-0 bg-zinc-900 border border-zinc-800 transform rotate-2"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/tony-today.JPG"
                    class="w-full h-full object-cover relative z-10 border border-zinc-800 transition-all duration-700"
                    alt="Tony Today">
            </div>
        </div>

        <!-- Chapter 5: The Philosophy (Nuts & Bolts) -->
        <div
            class="journey-section flex flex-col md:flex-row items-center justify-between py-24 min-h-screen px-6 md:px-24 gap-12 relative border-b border-zinc-900/50">
            <div class="w-full md:w-5/12 h-[60vh] md:h-[80vh] relative order-2 md:order-1 group">
                <div
                    class="absolute -inset-4 border border-zinc-800 rotate-3 transition-transform duration-700 group-hover:rotate-0">
                </div>
                <!-- Main Image -->
                <div class="w-full h-[70%] overflow-hidden relative mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tony-strata-0.PNG"
                        class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-1000"
                        alt="Tony working in the garage">
                    <div class="absolute inset-0 bg-black/40"></div>
                </div>
                <!-- Secondary Image (Floating) -->
                <div
                    class="absolute -bottom-10 -right-10 w-2/3 h-1/2 overflow-hidden border-4 border-black shadow-2xl z-20 hidden md:block group">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tony-strata-with-tony.webp"
                        class="w-full h-full object-cover scale-125 group-hover:scale-110 transition-transform duration-700"
                        alt="Tony with Lancer">
                    <div class="absolute inset-0 bg-red-900/20 mix-blend-overlay"></div>
                </div>
            </div>

            <div class="w-full md:w-1/2 relative z-10 order-1 md:order-2">
                <div
                    class="inline-block px-3 py-1 mb-6 border border-zinc-800 text-zinc-500 text-xs font-display uppercase tracking-[0.2em]">
                    The Philosophy
                </div>
                <h2 class="text-5xl md:text-7xl font-display font-bold uppercase mb-8 leading-[0.9]">
                    Nuts & <span class="text-red-500">Bolts</span>
                </h2>
                <div class="space-y-6 text-zinc-400 text-lg leading-relaxed">
                    <p>
                        Most shops in Florida steer clear of exotic, aftermarket upgrades, or anything that seems
                        "difficult" to work on. I've built Stradaworks on the opposite principle: I do it all. Whether
                        it's a high-precision racecar, a rare import from Japan, or the "cool stuff" other shops won't
                        touch.
                    </p>
                    <p>
                        From regular foreign and domestic maintenance to heavy repairs, no job is too big or too small.
                        I treat every machine with the same respect, from motorcycles and trikes to scooters and
                        diesels. Because even for the most exotic builds...
                    </p>
                    <p class="text-white border-l-2 border-red-600 pl-4 font-medium italic text-2xl">
                        "It's all just nuts and bolts."
                    </p>

                    <div class="pt-8 grid grid-cols-2 gap-x-8 gap-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-red-600 rounded-full"></span>
                                <span class="text-sm uppercase tracking-widest text-white/80">Tire Mounting &
                                    Balancing</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-red-600 rounded-full"></span>
                                <span class="text-sm uppercase tracking-widest text-white/80">4-Wheel Alignments</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-red-600 rounded-full"></span>
                                <span class="text-sm uppercase tracking-widest text-white/80">Custom Welding</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-red-600 rounded-full"></span>
                                <span class="text-sm uppercase tracking-widest text-white/80">EFI Tuning</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-red-600 rounded-full"></span>
                                <span class="text-sm uppercase tracking-widest text-white/80">Diesel Repairs</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-2 h-2 bg-red-600 rounded-full"></span>
                                <span class="text-sm uppercase tracking-widest text-white/80">Trikes & Scooters</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php get_footer(); ?>
