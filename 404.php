<?php
http_response_code(404);
$page_title       = 'Page Not Found | Stradaworks Automotive';
$page_description = 'The page you were looking for does not exist.';
require __DIR__ . '/includes/header.php';
?>

<main class="max-w-[1400px] mx-auto px-6 pt-40 pb-32 text-center">
  <p class="text-red-500 font-display uppercase tracking-[0.3em] text-sm mb-6">Error 404</p>
  <h1 class="text-6xl md:text-8xl font-display font-bold uppercase text-white mb-6">Wrong Turn</h1>
  <p class="text-zinc-500 max-w-xl mx-auto mb-12 leading-relaxed">
    That page doesn't exist. It may have been moved or removed. Let's get you back on the road.
  </p>
  <div class="flex flex-col sm:flex-row gap-4 justify-center">
    <a href="<?= url('/') ?>"
      class="px-10 py-4 bg-red-600 hover:bg-red-700 text-white font-display uppercase tracking-widest font-bold transition-all hover:skew-x-[-2deg]">
      Back To Home
    </a>
    <a href="<?= url('/contact') ?>"
      class="px-10 py-4 border border-zinc-700 hover:border-red-600 text-white font-display uppercase tracking-widest font-bold transition-colors">
      Contact Us
    </a>
  </div>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
