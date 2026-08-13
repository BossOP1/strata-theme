<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>

  <!-- SEO -->
  <meta name="description"
    content="Stradaworks - Expert automotive repair, maintenance, diagnostics, and performance installations for domestic and foreign vehicles.">

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

  <?php wp_head(); ?>
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

      <button class="md:hidden text-2xl text-white">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </nav>
