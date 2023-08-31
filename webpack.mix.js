const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix//.js('resources/js/app.js', 'public/js')
    .copy('resources/web/js/bootstrap.min.js', 'public/assets/js')
    .copy('resources/web/js/jquery.min.js', 'public/assets/js')
    .js('resources/web/js/app.js', 'public/assets/js')
    .copy('resources/web/img', 'public/assets/img')
    .copy('resources/web/css/bootstrap.min.css', 'public/assets/css')
    .copy('resources/web/css/fonts/ionicons.min.css', 'public/assets/css/fonts')
    .postCss('resources/web/css/date_picker.css', 'public/assets/css')
    .postCss('resources/web/css/fonts.css', 'public/assets/css')
    .postCss('resources/web/css/styles.css', 'public/assets/css')
    .version();
