// webpack.mix.js
let mix = require('laravel-mix');


mix.sass('src/master.scss', 'assets/').options({
        processCssUrls: false
    });
