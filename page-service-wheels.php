<?php /* Template Name: Service - Wheels */ require_once __DIR__ . "/wp-fallback.php"; get_header(); ?>

    <!-- Hero Section -->
    <header class="relative w-full h-[70vh] min-h-[500px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/wheels_tires.png" class="w-full h-full object-cover" alt="Wheels and Tires">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        <div class="relative z-10 h-full max-w-[1400px] mx-auto px-6 flex flex-col justify-center">
            <div
                class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em] backdrop-blur-sm w-fit">
                Traction Control
            </div>
            <h1 class="text-6xl md:text-8xl font-display font-bold uppercase leading-none mb-6">
                Rolling <br> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Stock</span>
            </h1>
            <p class="text-zinc-400 text-lg md:text-xl max-w-2xl font-light">
                Your connection to the road. Precision mounting, road-force balancing, and laser alignment for safety
                and performance.
            </p>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="py-20 bg-zinc-950 border-b border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-display font-bold text-white uppercase mb-6">Grip & <span
                        class="text-red-600">Fitment</span></h2>
                <p class="text-zinc-400 leading-relaxed mb-6">
                    We specialize in handling high-end wheels and low-profile tires. No scratches, no vibrations. Just a
                    smooth ride and perfect fitment.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-arrows-to-circle"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Touchless Mounting</h4>
                            <span class="text-zinc-500 text-xs">Safe for custom powdered & painted wheels</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-road"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Road Force Balance</h4>
                            <span class="text-zinc-500 text-xs">Eliminate vibrations other balancers miss</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Caliper Painting</h4>
                            <span class="text-zinc-500 text-xs">High-temp custom colors & decals</span>
                        </div>
                    </li>
                    <li class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 bg-zinc-900 border border-zinc-800 flex items-center justify-center text-red-500">
                            <i class="fa-solid fa-warehouse"></i>
                        </div>
                        <div>
                            <h4 class="font-display font-bold text-white uppercase text-sm">Tire Storage</h4>
                            <span class="text-zinc-500 text-xs">Seasonal storage for your winter/summer sets</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-red-600/10 rotate-3 border border-red-600/20"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/wheels_tires.png"
                    class="relative z-10 w-full h-full object-cover border border-zinc-800" alt="Wheel Service">
            </div>
        </div>
    </section>

    <!-- Services Breakdown -->
    <section class="py-20 bg-black">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-red-600 font-display font-bold tracking-widest uppercase text-xs">Capabilities</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Tire Services</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-dharmachakra"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Mounting</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Expert installation of tires from 15" to 24".
                        Run-flats, stretched tires, and track compounds.</p>
                </div>
                <!-- Service 2 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-scale-balanced"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Balancing</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">Using Hunter Road Force technology to ensure a
                        perfectly smooth ride at any speed.</p>
                </div>
                <!-- Service 3 -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 group hover:border-red-600 transition-colors duration-300">
                    <div class="mb-6 text-red-500 text-4xl"><i class="fa-solid fa-crosshairs"></i></div>
                    <h3 class="text-2xl font-display font-bold text-white uppercase mb-4">Alignment</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed mb-6">4-wheel laser alignment to prevent uneven wear
                        and improve handling precision.</p>
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
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mt-2">Custom <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Setups</span>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_wheel_closeup.png"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Forged performance wheel">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Audi R8</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">HRE Performance Wheels</h3>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-wheel-alignment.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Alignment head mounted for a track alignment">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Porsche
                            GT3</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Track Alignment</h3>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="group relative overflow-hidden border border-zinc-800 bg-zinc-900 aspect-[4/3]">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-green-calipers.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Acid green brake calipers">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div class="absolute bottom-6 left-6 z-10">
                        <span class="text-red-500 text-xs font-bold uppercase tracking-widest mb-1 block">Tesla Model
                            S</span>
                        <h3 class="text-white font-display text-xl font-bold uppercase">Acid Green Calipers</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-black border-t border-zinc-900">
        <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4">
                <h2 class="text-4xl font-display font-bold text-white uppercase mt-2 mb-6">Tire FAQs</h2>
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
                            <span class="text-white font-display font-bold uppercase tracking-wide">Do you install tires
                                bought online?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            Yes, we are happy to install tires you bring in, or we can source them for you at
                            competitive prices.
                        </div>
                    </details>
                </div>
                <!-- FAQ 2 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">What is Road Force
                                Balancing?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            It's an advanced method of balancing that simulates the weight of the vehicle on the tire.
                            This detects stiff spots or sidewall imperfections that standard balancing can't fix,
                            ensuring a glass-smooth ride.
                        </div>
                    </details>
                </div>
                <!-- FAQ 3 -->
                <div class="border border-zinc-800 bg-zinc-900/50 hover:border-zinc-700 transition-colors">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none p-6">
                            <span class="text-white font-display font-bold uppercase tracking-wide">Do you repair
                                cracked rims?</span>
                            <span class="text-red-500 transition-transform group-open:rotate-180"><i
                                    class="fa-solid fa-chevron-down"></i></span>
                        </summary>
                        <div class="px-6 pb-6 text-zinc-400 text-sm leading-relaxed border-t border-zinc-800/50 pt-4">
                            We offer professional rim straightening and crack repair. However, we will assess the damage
                            first—safety is our priority, and severely compromised wheels should be replaced.
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
            <h2 class="text-4xl md:text-6xl font-display font-bold text-white uppercase mb-8">Get A <span
                    class="text-red-600">Grip</span></h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>"
                    class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-10deg]">Book
                    Tire Service</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
