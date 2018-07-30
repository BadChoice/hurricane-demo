let mix = require('laravel-mix');

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

//mix.js('resources/assets/js/app.js', 'public/js')
mix.less('vendor/badchoice/hurricane/assets/less/app.less',    'public/css/app.css')
    .js([
            'resources/assets/js/app.js',
            // 'vendor/badchoice/hurricane/assets/js/formVisibility.js',
            // 'vendor/badchoice/hurricane/assets/js/scrollsaver.min.js',
            // 'vendor/badchoice/hurricane/assets/js/searcher.js',
            // 'vendor/badchoice/hurricane/assets/js/select2.min.js',
        ], 'public/js');

