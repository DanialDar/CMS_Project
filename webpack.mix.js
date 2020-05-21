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

mix.js('resources/js/app.js', 'public/js','node_modules/admin-lte/plugins/chart.js/Chart.js','node_modules/admin-lte/plugins/jquery/jquery.min.js','node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js','node_modules/admin-lte/dist/js/adminlte.min.js','node_modules/admin-lte/dist/js/demo.js')
    .sass('resources/sass/app.scss', 'public/css');
