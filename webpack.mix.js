const mix = require('laravel-mix');

mix.react('resources/js/app.js', 'public/js')
    .sass('resources/sass/style.scss', 'public/css')
    .sass('resources/sass/chooza.scss', 'public/css')
    .version()
    .copyDirectory('resources/images', 'public/images');


