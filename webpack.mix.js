const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .css('resources/css/app.css', 'public/css')
   .copy('node_modules/flowbite/dist/flowbite.min.js', 'public/js')
   .copy('node_modules/flatpickr/dist/flatpickr.min.css', 'public/css')
   .copy('node_modules/flatpickr/dist/flatpickr.min.js', 'public/js')
   .version(); 