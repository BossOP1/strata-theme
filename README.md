# Stradaworks

Static marketing site for Stradaworks Automotive. Plain PHP — no WordPress,
no database, no build step, no dependencies. PHP 7.4+ is enough.

## Run locally

```bash
php -S localhost:8000
```

Then open <http://localhost:8000>. The built-in server resolves `/about` to
`about.php` on its own, so clean URLs work in development without `.htaccess`.

## Deploy

Upload the whole directory to the web root (`public_html`). Nothing to build
and nothing to install. Apache needs `mod_rewrite` for the clean URLs in
`.htaccess`; on nginx, translate the rewrite rule instead.

## Layout

```
index.php              Home
about.php              About
contact.php            Contact (has its own closing markup, no site footer)
service-*.php          One page per service
404.php                Not found
includes/config.php    Site constants and the asset() / url() / e() helpers
includes/header.php    <head>, nav — every page includes this first
includes/footer.php    Site footer, then includes scripts.php
includes/scripts.php   JS tags and closing </body></html>
images/                Photography, logos, brand marks
style.css              Custom CSS on top of Tailwind
script.js              GSAP and Swiper behaviour
```

## Editing

**Add a page:** copy an existing one, set `$page_title` and
`$page_description` at the top, include the header, write the markup, include
the footer. `/your-page` maps to `your-page.php` automatically.

**Links and assets:** use the helpers so paths stay correct if the site ever
moves into a subdirectory.

```php
<a href="<?= url('/contact') ?>">Contact</a>
<img src="<?= asset('images/logo.png') ?>" alt="">
```

**Settings** live in `includes/config.php` — site name, phone number, the form
endpoint, and `BASE_PATH` (set it if the site is not at the domain root).

**Cache busting:** bump `ASSET_VERSION` in `includes/config.php` after editing
`style.css` or `script.js`.

## Forms

Both enquiry forms post to Formester. The endpoint is `FORM_ACTION` in
`includes/config.php`. A hidden `source` field distinguishes the contact-page
form from the footer form in the shared inbox.
