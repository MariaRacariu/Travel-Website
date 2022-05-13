const mix = require('laravel-mix');

mix.sass('assets/styles/main.scss', '/dist')
.js('assets/styles/main.js','/dist');