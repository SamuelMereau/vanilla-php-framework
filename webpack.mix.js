const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('./app/assets/js/app.js', '/js')
   .sass('./app/assets/scss/styles.scss', '/css')
   .options({
      postCss: [ tailwindcss('./tailwind.config.js') ],
   })
   .setPublicPath('./public')
   .version();