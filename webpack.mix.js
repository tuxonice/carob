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

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);

mix.copyDirectory('resources/plugins/fontawesome-free', 'public/plugins/fontawesome-free');
mix.copyDirectory('resources/plugins/icheck-bootstrap', 'public/plugins/icheck-bootstrap');
mix.copy('resources/css/adminlte.min.css', 'public/css/adminlte.min.css');

mix.copyDirectory('resources/plugins/jquery/jquery.min.js', 'public/plugins/jquery/jquery.min.js');
mix.copy('resources/plugins/bootstrap/js/bootstrap.bundle.min.js', 'public/plugins/bootstrap/js/bootstrap.bundle.min.js');
mix.copy('resources/js/adminlte.min.js', 'public/js/adminlte.min.js');


