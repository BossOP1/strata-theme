<?php
/**
 * Site configuration and template helpers.
 *
 * Plain PHP — no WordPress, no database, no framework. Every page includes
 * this first (via includes/header.php), then renders markup.
 */

declare(strict_types=1);

/*
 * Set this if the site lives in a subdirectory rather than at the domain
 * root — e.g. '/stradaworks' for example.com/stradaworks. Leave it empty
 * for a normal domain-root install. No trailing slash.
 */
const BASE_PATH = '';

const SITE_NAME    = 'Stradaworks Automotive';
const SITE_DESC    = 'Stradaworks - Expert automotive repair, maintenance, diagnostics, and performance installations for domestic and foreign vehicles.';
const CONTACT_PHONE     = '+15162167058';
const CONTACT_PHONE_TEXT = '(516) 216-7058';

/** Where both enquiry forms post to. */
const FORM_ACTION = 'https://app.formester.com/forms/LAxTm066S/submissions';

/** Bumped to bust browser caches when style.css or script.js change. */
const ASSET_VERSION = '1.0.0';

/**
 * URL for a static file in the project, e.g. asset('images/logo.png').
 */
function asset(string $path): string
{
    return BASE_PATH . '/' . ltrim($path, '/');
}

/**
 * URL for a page, e.g. url('/about'), url('/#work'), url('/').
 * Clean extensionless paths; .htaccess maps them onto the .php files.
 */
function url(string $path = '/'): string
{
    $fragment = '';
    $hash     = strpos($path, '#');
    if ($hash !== false) {
        $fragment = substr($path, $hash);
        $path     = substr($path, 0, $hash);
    }

    $slug = trim($path, '/');

    return BASE_PATH . '/' . $slug . $fragment;
}

/** Escape for HTML output. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** True when $path is the page currently being viewed — used to mark active nav links. */
function is_current(string $path): bool
{
    $current = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/', '/');
    if (BASE_PATH !== '') {
        $current = ltrim(substr($current, strlen(trim(BASE_PATH, '/'))), '/');
    }

    return $current === trim($path, '/');
}
