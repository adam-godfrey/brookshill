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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/brookshill.scss', 'public/css');

mix.js('resources/js/admin.js', 'public/js')
   	.sass('resources/sass/admin/admin.scss', 'public/css');

// mix.scripts([
//     'resources/js/hoverable-collapse.js',
//     'resources/js/off-canvas.js',
//     'resources/js/template.js'
// ], 'public/js/combined.js');