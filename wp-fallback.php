<?php
/**
 * Standalone preview fallback for the Stradaworks theme.
 *
 * This theme's templates call WordPress core functions (get_header, wp_head,
 * home_url, ...) that only exist once WordPress has bootstrapped. Opening a
 * template directly — `php -S localhost:8000` in this folder — otherwise dies
 * with "Call to undefined function get_header()".
 *
 * Inside a real WordPress install this file returns immediately and changes
 * nothing: ABSPATH is defined and every definition below is additionally
 * guarded by function_exists().
 */

if ( defined( 'ABSPATH' ) ) {
	return; // Running under WordPress — core provides everything.
}

$GLOBALS['sw_fallback'] = array(
	'actions' => array(),
	'styles'  => array(),
	'scripts' => array( 'head' => array(), 'footer' => array() ),
	'ran'     => array(),
);

/** Theme root as a browser-resolvable URI. Templates are served from this folder. */
function sw_fallback_uri() {
	return '.';
}

/* -------------------------------------------------------------------------
 * Hooks
 * ---------------------------------------------------------------------- */

if ( ! function_exists( 'add_action' ) ) {
	function add_action( $hook, $callback, $priority = 10, $accepted_args = 1 ) {
		$GLOBALS['sw_fallback']['actions'][ $hook ][ $priority ][] = $callback;
		return true;
	}
}

if ( ! function_exists( 'add_filter' ) ) {
	function add_filter( $hook, $callback, $priority = 10, $accepted_args = 1 ) {
		return add_action( $hook, $callback, $priority, $accepted_args );
	}
}

if ( ! function_exists( 'do_action' ) ) {
	function do_action( $hook ) {
		$store = &$GLOBALS['sw_fallback'];
		if ( isset( $store['ran'][ $hook ] ) || empty( $store['actions'][ $hook ] ) ) {
			return;
		}
		$store['ran'][ $hook ] = true;
		ksort( $store['actions'][ $hook ] );
		foreach ( $store['actions'][ $hook ] as $callbacks ) {
			foreach ( $callbacks as $callback ) {
				if ( is_callable( $callback ) ) {
					call_user_func( $callback );
				}
			}
		}
	}
}

if ( ! function_exists( 'add_theme_support' ) ) {
	function add_theme_support( $feature ) {
		return true; // Nothing to configure outside WordPress.
	}
}

/* -------------------------------------------------------------------------
 * Asset queue
 * ---------------------------------------------------------------------- */

if ( ! function_exists( 'wp_enqueue_style' ) ) {
	function wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = null, $media = 'all' ) {
		if ( $src !== '' ) {
			$GLOBALS['sw_fallback']['styles'][ $handle ] = $src;
		}
	}
}

if ( ! function_exists( 'wp_enqueue_script' ) ) {
	function wp_enqueue_script( $handle, $src = '', $deps = array(), $ver = null, $in_footer = false ) {
		if ( $src !== '' ) {
			$where = $in_footer ? 'footer' : 'head';
			$GLOBALS['sw_fallback']['scripts'][ $where ][ $handle ] = $src;
		}
	}
}

if ( ! function_exists( 'get_stylesheet_uri' ) ) {
	function get_stylesheet_uri() {
		return sw_fallback_uri() . '/style.css';
	}
}

if ( ! function_exists( 'get_template_directory_uri' ) ) {
	function get_template_directory_uri() {
		return sw_fallback_uri();
	}
}

if ( ! function_exists( 'get_stylesheet_directory_uri' ) ) {
	function get_stylesheet_directory_uri() {
		return sw_fallback_uri();
	}
}

/* -------------------------------------------------------------------------
 * Output
 * ---------------------------------------------------------------------- */

if ( ! function_exists( 'wp_head' ) ) {
	function wp_head() {
		do_action( 'wp_enqueue_scripts' );
		foreach ( $GLOBALS['sw_fallback']['styles'] as $handle => $src ) {
			printf(
				"\n  <link rel=\"stylesheet\" id=\"%s-css\" href=\"%s\" media=\"all\">",
				htmlspecialchars( $handle, ENT_QUOTES ),
				htmlspecialchars( $src, ENT_QUOTES )
			);
		}
		foreach ( $GLOBALS['sw_fallback']['scripts']['head'] as $handle => $src ) {
			printf(
				"\n  <script id=\"%s-js\" src=\"%s\"></script>",
				htmlspecialchars( $handle, ENT_QUOTES ),
				htmlspecialchars( $src, ENT_QUOTES )
			);
		}
		echo "\n";
	}
}

if ( ! function_exists( 'wp_footer' ) ) {
	function wp_footer() {
		foreach ( $GLOBALS['sw_fallback']['scripts']['footer'] as $handle => $src ) {
			printf(
				"\n  <script id=\"%s-js\" src=\"%s\"></script>",
				htmlspecialchars( $handle, ENT_QUOTES ),
				htmlspecialchars( $src, ENT_QUOTES )
			);
		}
		echo "\n";
	}
}

if ( ! function_exists( 'wp_title' ) ) {
	function wp_title( $sep = '»', $display = true, $seplocation = 'left' ) {
		$title = 'Stradaworks Automotive';
		if ( ! $display ) {
			return $title;
		}
		echo htmlspecialchars( $title, ENT_QUOTES );
	}
}

if ( ! function_exists( 'body_class' ) ) {
	function body_class( $class = '' ) {
		$classes = trim( 'home page ' . ( is_array( $class ) ? implode( ' ', $class ) : $class ) );
		echo 'class="' . htmlspecialchars( $classes, ENT_QUOTES ) . '"';
	}
}

if ( ! function_exists( 'language_attributes' ) ) {
	function language_attributes( $doctype = 'html' ) {
		echo 'lang="en"';
	}
}

if ( ! function_exists( 'bloginfo' ) ) {
	function bloginfo( $show = '' ) {
		if ( $show === 'charset' ) {
			echo 'UTF-8';
		} elseif ( $show === 'name' ) {
			echo 'Stradaworks Automotive';
		}
	}
}

if ( ! function_exists( 'esc_url' ) ) {
	function esc_url( $url ) {
		return htmlspecialchars( $url, ENT_QUOTES );
	}
}

if ( ! function_exists( 'esc_attr' ) ) {
	function esc_attr( $text ) {
		return htmlspecialchars( $text, ENT_QUOTES );
	}
}

if ( ! function_exists( 'esc_html' ) ) {
	function esc_html( $text ) {
		return htmlspecialchars( $text, ENT_QUOTES );
	}
}

/* -------------------------------------------------------------------------
 * Routing
 *
 * WordPress resolves /about to the page whose slug is "about", which loads
 * page-about.php. Standalone there is no database, so map the same slugs
 * straight onto the matching template file.
 * ---------------------------------------------------------------------- */

if ( ! function_exists( 'home_url' ) ) {
	function home_url( $path = '/' ) {
		$path     = (string) $path;
		$fragment = '';

		$hash = strpos( $path, '#' );
		if ( $hash !== false ) {
			$fragment = substr( $path, $hash );
			$path     = substr( $path, 0, $hash );
		}

		$slug = trim( $path, '/' );
		if ( $slug === '' ) {
			return './index.php' . $fragment;
		}

		$template = 'page-' . $slug . '.php';
		if ( ! file_exists( __DIR__ . '/' . $template ) ) {
			return './index.php' . $fragment; // Unknown slug — send it home.
		}

		return './' . $template . $fragment;
	}
}

if ( ! function_exists( 'site_url' ) ) {
	function site_url( $path = '/' ) {
		return home_url( $path );
	}
}

/* -------------------------------------------------------------------------
 * Template parts
 * ---------------------------------------------------------------------- */

if ( ! function_exists( 'get_header' ) ) {
	function get_header( $name = null ) {
		require __DIR__ . '/header.php';
	}
}

if ( ! function_exists( 'get_footer' ) ) {
	function get_footer( $name = null ) {
		require __DIR__ . '/footer.php';
	}
}

if ( ! function_exists( 'get_template_part' ) ) {
	function get_template_part( $slug, $name = null ) {
		$file = __DIR__ . '/' . $slug . ( $name ? '-' . $name : '' ) . '.php';
		if ( file_exists( $file ) ) {
			require $file;
		}
	}
}

// functions.php is autoloaded by WordPress; standalone we must load it
// ourselves so its wp_enqueue_scripts hook is registered before wp_head().
require_once __DIR__ . '/functions.php';
