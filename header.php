<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>

  <!-- SEO -->
  <meta name="description"
    content="Stradaworks - Expert automotive repair, maintenance, diagnostics, and performance installations for domestic and foreign vehicles.">


  <?php wp_head(); ?>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            red: {
              500: '#ff0000',
              600: '#cc0000',
              900: '#8a0000',
            },
            black: '#050505',
            zinc: {
              900: '#111',
              800: '#1a1a1a'
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            display: ['Rajdhani', 'sans-serif'],
          }
        }
      }
    }
  </script>
</head>

<body <?php body_class('bg-black text-white antialiased selection:bg-red-500 selection:text-white'); ?>>

  <!-- Custom Cursor -->
  <div id="cursor" class="cursor-follower hidden md:block"></div>

  <!-- Navbar -->
  <nav class="fixed top-0 w-full z-50 glass-panel border-b-0 border-white/5">
    <div class="max-w-[1400px] mx-auto px-6 h-20 flex justify-between items-center">
      <a href="<?php echo home_url('/'); ?>" class="text-3xl font-display font-bold italic tracking-tighter">
        <img src="<?php echo get_template_directory_uri(); ?>/images/stradaworks-logo.png" alt=""
          class="h-8 brightness-0 invert">
      </a>

      <div class="hidden md:flex items-center gap-8">
        <a href="<?php echo home_url('/about'); ?>"
          class="font-display uppercase tracking-widest hover:text-red-500 transition-colors text-sm">About</a>
        <div class="nav-item-services h-full flex items-center">
          <a href="<?php echo home_url('/#services'); ?>"
            class="font-display uppercase tracking-widest hover:text-red-500 transition-colors text-sm py-4">Services</a>

          <div class="mega-menu">
            <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-2 md:grid-cols-6 gap-4">
              <a href="<?php echo home_url('/service-repair'); ?>"
                class="mega-menu-item group block h-40 relative overflow-hidden border border-zinc-800">
                <img src="<?php echo get_template_directory_uri(); ?>/images/automotive_repair.png" alt="Auto Repair"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                  class="absolute inset-0 bg-black/60 group-hover:bg-black/40 transition-colors flex items-center justify-center">
                  <span
                    class="font-display font-bold text-white uppercase tracking-wider text-center text-sm relative z-10">Auto
                    Repair</span>
                </div>
              </a>
              <a href="<?php echo home_url('/service-diagnostics'); ?>"
                class="mega-menu-item group block h-40 relative overflow-hidden border border-zinc-800">
                <img src="<?php echo get_template_directory_uri(); ?>/images/car_diagnostics.png" alt="Diagnostics"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                  class="absolute inset-0 bg-black/60 group-hover:bg-black/40 transition-colors flex items-center justify-center">
                  <span
                    class="font-display font-bold text-white uppercase tracking-wider text-center text-sm relative z-10">Diagnostics</span>
                </div>
              </a>
              <a href="<?php echo home_url('/service-wheels'); ?>"
                class="mega-menu-item group block h-40 relative overflow-hidden border border-zinc-800">
                <img src="<?php echo get_template_directory_uri(); ?>/images/wheels_tires.png" alt="Wheels & Tires"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                  class="absolute inset-0 bg-black/60 group-hover:bg-black/40 transition-colors flex items-center justify-center">
                  <span
                    class="font-display font-bold text-white uppercase tracking-wider text-center text-sm relative z-10">Wheels
                    & Tires</span>
                </div>
              </a>
              <a href="<?php echo home_url('/service-suspension'); ?>"
                class="mega-menu-item group block h-40 relative overflow-hidden border border-zinc-800">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery_bmw_suspension.png" alt="Suspension"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                  class="absolute inset-0 bg-black/60 group-hover:bg-black/40 transition-colors flex items-center justify-center">
                  <span
                    class="font-display font-bold text-white uppercase tracking-wider text-center text-sm relative z-10">Suspension</span>
                </div>
              </a>
              <a href="<?php echo home_url('/service-ac'); ?>"
                class="mega-menu-item group block h-40 relative overflow-hidden border border-zinc-800">
                <img src="<?php echo get_template_directory_uri(); ?>/images/air_conditioning.png" alt="A/C Service"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                  class="absolute inset-0 bg-black/60 group-hover:bg-black/40 transition-colors flex items-center justify-center">
                  <span
                    class="font-display font-bold text-white uppercase tracking-wider text-center text-sm relative z-10">A/C
                    Service</span>
                </div>
              </a>
              <a href="<?php echo home_url('/service-performance'); ?>"
                class="mega-menu-item group block h-40 relative overflow-hidden border border-zinc-800">
                <img src="<?php echo get_template_directory_uri(); ?>/images/performance_installs.png" alt="Performance"
                  class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div
                  class="absolute inset-0 bg-black/60 group-hover:bg-black/40 transition-colors flex items-center justify-center">
                  <span
                    class="font-display font-bold text-white uppercase tracking-wider text-center text-sm relative z-10">Performance</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        <a href="<?php echo home_url('/#work'); ?>"
          class="font-display uppercase tracking-widest hover:text-red-500 transition-colors text-sm">Work</a>
        <a href="<?php echo home_url('/#gallery'); ?>"
          class="font-display uppercase tracking-widest hover:text-red-500 transition-colors text-sm">Gallery</a>
        <a href="https://instagram.com/stradaworks" target="_blank" rel="noopener"
          class="font-display uppercase tracking-widest hover:text-red-500 transition-colors text-sm">Instagram</a>
        <a href="<?php echo home_url('/contact'); ?>"
          class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest text-sm transition-all hover:skew-x-[-10deg]">Book
          Now</a>
      </div>

      <button id="mobileMenuBtn" aria-label="Toggle Navigation" class="md:hidden text-2xl text-white p-2 focus:outline-none z-50">
        <i id="mobileMenuIcon" class="fa-solid fa-bars transition-transform duration-300"></i>
      </button>
    </div>
  </nav>

  <!-- Mobile Menu Overlay Drawer -->
  <div id="mobileMenu"
    class="fixed inset-0 top-20 bg-black/95 backdrop-blur-xl border-t border-white/10 flex flex-col justify-between p-6 transition-all duration-300 ease-in-out opacity-0 pointer-events-none translate-x-full md:hidden z-40 overflow-y-auto max-h-[calc(100vh-5rem)]">
    <div class="flex flex-col space-y-6 pt-4">
      <a href="<?php echo home_url('/about'); ?>"
        class="mobile-menu-link font-display uppercase tracking-widest text-lg font-bold hover:text-red-500 transition-colors border-b border-zinc-800 pb-3">About</a>
      
      <!-- Accordion for Services -->
      <div class="border-b border-zinc-800 pb-3">
        <button id="mobileServicesToggle"
          class="w-full flex items-center justify-between font-display uppercase tracking-widest text-lg font-bold hover:text-red-500 transition-colors text-left">
          <span>Services</span>
          <i id="mobileServicesChevron" class="fa-solid fa-chevron-down text-sm transition-transform duration-300 text-zinc-400"></i>
        </button>
        
        <div id="mobileServicesMenu" class="hidden flex-col space-y-3 pt-4 pl-4 border-l border-zinc-800 mt-2">
          <a href="<?php echo home_url('/service-repair'); ?>"
            class="mobile-menu-link text-zinc-400 hover:text-white transition-colors text-sm font-display uppercase tracking-wider flex items-center gap-2">
            <i class="fa-solid fa-angle-right text-xs text-red-500"></i> Auto Repair
          </a>
          <a href="<?php echo home_url('/service-diagnostics'); ?>"
            class="mobile-menu-link text-zinc-400 hover:text-white transition-colors text-sm font-display uppercase tracking-wider flex items-center gap-2">
            <i class="fa-solid fa-angle-right text-xs text-red-500"></i> Diagnostics
          </a>
          <a href="<?php echo home_url('/service-wheels'); ?>"
            class="mobile-menu-link text-zinc-400 hover:text-white transition-colors text-sm font-display uppercase tracking-wider flex items-center gap-2">
            <i class="fa-solid fa-angle-right text-xs text-red-500"></i> Wheels & Tires
          </a>
          <a href="<?php echo home_url('/service-suspension'); ?>"
            class="mobile-menu-link text-zinc-400 hover:text-white transition-colors text-sm font-display uppercase tracking-wider flex items-center gap-2">
            <i class="fa-solid fa-angle-right text-xs text-red-500"></i> Suspension
          </a>
          <a href="<?php echo home_url('/service-ac'); ?>"
            class="mobile-menu-link text-zinc-400 hover:text-white transition-colors text-sm font-display uppercase tracking-wider flex items-center gap-2">
            <i class="fa-solid fa-angle-right text-xs text-red-500"></i> A/C Service
          </a>
          <a href="<?php echo home_url('/service-performance'); ?>"
            class="mobile-menu-link text-zinc-400 hover:text-white transition-colors text-sm font-display uppercase tracking-wider flex items-center gap-2">
            <i class="fa-solid fa-angle-right text-xs text-red-500"></i> Performance
          </a>
        </div>
      </div>

      <a href="<?php echo home_url('/#work'); ?>"
        class="mobile-menu-link font-display uppercase tracking-widest text-lg font-bold hover:text-red-500 transition-colors border-b border-zinc-800 pb-3">Work</a>
      <a href="<?php echo home_url('/#gallery'); ?>"
        class="mobile-menu-link font-display uppercase tracking-widest text-lg font-bold hover:text-red-500 transition-colors border-b border-zinc-800 pb-3">Gallery</a>
      <a href="https://instagram.com/stradaworks" target="_blank" rel="noopener"
        class="mobile-menu-link font-display uppercase tracking-widest text-lg font-bold hover:text-red-500 transition-colors border-b border-zinc-800 pb-3">Instagram</a>
    </div>

    <div class="pt-6 pb-4">
      <a href="<?php echo home_url('/contact'); ?>"
        class="mobile-menu-link block w-full py-3 text-center bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold text-sm transition-all">
        Book Now
      </a>
    </div>
  </div>
