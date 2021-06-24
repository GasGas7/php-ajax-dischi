let mix = require('laravel-mix');

mix
    .js('src/app.js', 'js/main.js')
    .sass('src/app.scss', 'css/style.css').options({ processCssUrls: false })
    .setPublicPath('dist');