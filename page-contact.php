<?php
/*
Template Name: Contact
*/
require_once __DIR__ . "/wp-fallback.php"; get_header();
?>

    <!-- Header Section -->
    <header class="pt-32 pb-16 px-6 relative overflow-hidden">
        <!-- Background elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-red-600/5 rounded-full blur-3xl translate-x-1/3 -translate-y-1/2">
        </div>

        <div class="max-w-[1400px] mx-auto relative z-10 text-center">
            <div
                class="inline-block px-3 py-1 mb-6 border border-red-500/30 bg-red-500/10 text-red-500 text-xs font-display uppercase tracking-[0.2em]">
                Get In Touch
            </div>
            <h1 class="text-5xl md:text-7xl font-display font-bold uppercase mb-6">
                Let's Build <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-800">Your
                    Dream</span>
            </h1>
            <p class="text-zinc-400 text-lg max-w-2xl mx-auto">
                Ready to start your project? Have a question about our services? Reach out to us directly or visit our
                studio in Austin.
            </p>
        </div>
    </header>

    <!-- Main Content Grid -->
    <main class="max-w-[1400px] mx-auto px-6 pb-20 grid grid-cols-1 lg:grid-cols-2 gap-12">

        <!-- Left Column: Contact Form -->
        <div class="bg-zinc-900/50 p-8 md:p-12 border border-zinc-800 relative group">
            <div
                class="absolute inset-0 bg-gradient-to-br from-red-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
            </div>

            <h2 class="text-2xl font-display font-bold text-white uppercase mb-8 flex items-center gap-3">
                <i class="fa-solid fa-wrench text-red-500"></i>
                Project Inquiry
            </h2>

            <form class="space-y-6 relative z-10" accept-charset="UTF-8"
                action="https://app.formester.com/forms/LAxTm066S/submissions" method="POST">

                <input type="hidden" name="source" value="Contact Page - Project Inquiry">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="ci-name" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Full Name</label>
                        <input id="ci-name" name="name" type="text" required autocomplete="name"
                            class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
                            placeholder="John Doe">
                    </div>
                    <div class="space-y-2">
                        <label for="ci-phone" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Phone Number</label>
                        <input id="ci-phone" name="phone" type="tel" required autocomplete="tel"
                            class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
                            placeholder="+1 (555) 000-0000">
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="ci-email" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Email Address</label>
                    <input id="ci-email" name="email" type="email" required autocomplete="email"
                        class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
                        placeholder="john@example.com">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="ci-vehicle" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Vehicle Make &amp;
                            Model</label>
                        <input id="ci-vehicle" name="vehicle" type="text"
                            class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors"
                            placeholder="e.g. Porsche 911 GT3">
                    </div>
                    <div class="space-y-2">
                        <label for="ci-service" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Service Interested
                            In</label>
                        <select id="ci-service" name="service" required
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

                <div class="space-y-2">
                    <label for="ci-message" class="text-xs text-zinc-500 uppercase tracking-wider font-bold">Project Details /
                        Message</label>
                    <textarea id="ci-message" name="message" required
                        class="w-full bg-zinc-950 border border-zinc-800 text-white px-4 py-3 focus:border-red-600 outline-none transition-colors h-32 resize-none"
                        placeholder="Tell us more about what you're looking to achieve..."></textarea>
                </div>

                <button type="submit"
                    class="w-full py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-2deg] flex items-center justify-center gap-2 group/btn">
                    <span>Send Request</span>
                    <i class="fa-solid fa-paper-plane group-hover/btn:translate-x-1 transition-transform"></i>
                </button>
            </form>
        </div>

        <!-- Right Column: Info & Map -->
        <div class="space-y-12">
            <!-- Info Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Location Card -->
                <div class="bg-zinc-900 border border-zinc-800 p-8 hover:border-red-600 transition-colors group">
                    <div
                        class="w-12 h-12 bg-zinc-800 rounded-full flex items-center justify-center text-red-500 mb-6 group-hover:bg-red-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-location-dot text-xl"></i>
                    </div>
                    <h3 class="text-lg font-display font-bold text-white uppercase mb-2">Visit Studio</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed">
                        2574 W Price Blvd, North Port, <br>FL 34286, United States
                    </p>
                </div>

                <!-- Contact Card -->
                <div class="bg-zinc-900 border border-zinc-800 p-8 hover:border-red-600 transition-colors group">
                    <div
                        class="w-12 h-12 bg-zinc-800 rounded-full flex items-center justify-center text-red-500 mb-6 group-hover:bg-red-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-phone text-xl"></i>
                    </div>
                    <h3 class="text-lg font-display font-bold text-white uppercase mb-2">Contact Us</h3>
                    <p class="text-zinc-500 text-sm leading-relaxed">
                        <a href="tel:+15162167058" class="block hover:text-white transition-colors">+1 516-216-7058</a>
                        <a href="mailto:stradaworks@gmail.com"
                            class="block hover:text-white transition-colors mt-1">stradaworks@gmail.com</a>
                    </p>
                </div>

                <!-- Hours Card -->
                <div
                    class="bg-zinc-900 border border-zinc-800 p-8 hover:border-red-600 transition-colors group sm:col-span-2">
                    <div class="flex items-start justify-between">
                        <div>
                            <div
                                class="w-12 h-12 bg-zinc-800 rounded-full flex items-center justify-center text-red-500 mb-6 group-hover:bg-red-600 group-hover:text-white transition-all">
                                <i class="fa-regular fa-clock text-xl"></i>
                            </div>
                            <h3 class="text-lg font-display font-bold text-white uppercase mb-2">Opening Hours</h3>
                        </div>
                        <ul class="text-zinc-500 text-sm space-y-2 text-right">
                            <li class="flex gap-8 justify-between border-b border-zinc-800 pb-1"><span>Mon - Fri</span>
                                <span class="text-white">09:00 AM - 05:00 PM</span>
                            </li>
                            <li class="flex gap-8 justify-between"><span class="text-red-500">Saturday & Sunday</span>
                                <span class="text-red-500 font-bold">Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="w-full h-80 bg-zinc-900 border border-zinc-800 overflow-hidden relative group">
                <div class="absolute inset-0 z-10 pointer-events-none border-4 border-zinc-900/50"></div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.772651973154!2d-82.1773312!3d27.068923299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dcad951675fda1%3A0xb5246c3b755879a0!2sStradaworks%20LLC!5e0!3m2!1sen!2sin!4v1768996988840!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0; filter: grayscale(100%) invert(100%) contrast(1.2);"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </main>

    <!-- Instagram Section -->
    <section id="instagram" class="py-20 bg-zinc-950 border-t border-zinc-900 relative">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 text-pink-500 mb-2">
                        <i class="fa-brands fa-instagram text-xl"></i>
                        <span class="font-display font-bold tracking-widest uppercase text-xs">@STRADAWORKS</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white uppercase mb-0">Follow The <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Builds</span>
                    </h2>
                </div>
                <a href="https://instagram.com/stradaworks" target="_blank"
                    class="hidden md:inline-flex items-center gap-2 px-6 py-3 border border-zinc-800 text-white font-display uppercase tracking-widest text-sm hover:bg-white hover:text-black transition-all">
                    <span>Follow on Instagram</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- IG Item 1 -->
                <a href="#" class="group relative aspect-square overflow-hidden bg-zinc-900 border border-zinc-800">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-garage-1.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                        alt="IG Post">
                    <div
                        class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-brands fa-instagram text-3xl text-white"></i>
                    </div>
                </a>
                <!-- IG Item 2 -->
                <a href="#" class="group relative aspect-square overflow-hidden bg-zinc-900 border border-zinc-800">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tony_working_garage.png"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                        alt="IG Post">
                    <div
                        class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-brands fa-instagram text-3xl text-white"></i>
                    </div>
                </a>
                <!-- IG Item 3 -->
                <a href="#" class="group relative aspect-square overflow-hidden bg-zinc-900 border border-zinc-800">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about_hero_lancer.png"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                        alt="IG Post">
                    <div
                        class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-brands fa-instagram text-3xl text-white"></i>
                    </div>
                </a>
                <!-- IG Item 4 -->
                <a href="#" class="group relative aspect-square overflow-hidden bg-zinc-900 border border-zinc-800">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-garage-2.jpg"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                        alt="IG Post">
                    <div
                        class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fa-brands fa-instagram text-3xl text-white"></i>
                    </div>
                </a>
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="https://instagram.com/stradaworks" target="_blank"
                    class="inline-flex items-center gap-2 px-6 py-3 border border-zinc-800 text-white font-display uppercase tracking-widest text-sm hover:bg-white hover:text-black transition-all">
                    <span>Follow on Instagram</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>



    <?php wp_footer(); ?>
</body>
</html>
