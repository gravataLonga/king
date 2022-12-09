const mix = require('laravel-mix');

mix.js('resource/js/app.js', 'js')
    .postCss('resource/css/app.css', 'css', [
        //
    ]).setPublicPath('public');