const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/absolute-menu-switching.js', 'public/js')
    .js('resources/js/jquery-3.6.0.min.js', 'public/js')
    .js('resources/js/lightbox-plus-jquery.min.js', 'public/js')
    .js('resources/js/move-top.js', 'public/js')
    .js('resources/js/responsiveslides.min.js', 'public/js')
    .js('resources/js/tabs.js', 'public/js')
    .js('resources/js/unslider-min.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [])
    .postCss('resources/css/authorization.css', 'public/css', [])
    .postCss('resources/css/bootstrap.min.css', 'public/css', [])
    .postCss('resources/css/fontawesome-all.min.css', 'public/css', [])
    .postCss('resources/css/lightbox.css', 'public/css', [])
    .postCss('resources/css/style.css', 'public/css', [])
    .postCss('resources/css/template.css', 'public/css', [])
    .postCss('resources/css/unslider.css', 'public/css', []);
