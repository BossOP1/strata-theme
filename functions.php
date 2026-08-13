<?php
function stradaworks_enqueue_scripts() {
    // Styles
    wp_enqueue_style( 'stradaworks-style', get_stylesheet_uri() );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );
    
    // Scripts
    // Tailwind CSS (CDN) - usually loaded in head
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false );
    
    // GSAP & Swiper
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), '3.12.2', true );
    
    // Main Script
    wp_enqueue_script( 'stradaworks-script', get_template_directory_uri() . '/script.js', array('gsap', 'swiper-js'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'stradaworks_enqueue_scripts' );

function stradaworks_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'stradaworks_theme_support' );
?>
