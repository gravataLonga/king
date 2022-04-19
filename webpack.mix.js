const mix = require('laravel-mix');

mix.js('resource/js/app.js', 'public/js')
    .postCss('resource/css/app.css', 'public/css', [
        //
    ]);