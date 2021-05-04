// webpack.mix.js
let mix = require('laravel-mix');


mix.js('src/main.js', 'assets/')
.sass('src/master.scss', 'assets/').options({
        processCssUrls: false
    });
