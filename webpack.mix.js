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


   mix.scripts([
     'node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.js',
     'node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.js',
     'node_modules/startbootstrap-sb-admin-2/vendor/chart.js/Chart.js',
     'node_modules/startbootstrap-sb-admin-2/vendor/datatables/juery.dataTables.js',
     'node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.js',
     'node_modules/startbootstrap-sb-admin-2/vendor/fontawsome-free/all.js',
     'node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery-easing.js',
     'node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.js',
     'node_modules/select2/src/js/jquery.select2.js',
   ], 'public/js/admin.js')
    .sass('resources/sass/admin.scss', 'public/css');
