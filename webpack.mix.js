const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;

mix.js('./app/assets/js/app.js', '/js')
   .sass('./app/assets/scss/styles.scss', '/css')
   .options({
      postCss: [ tailwindcss('./tailwind.config.js') ],
   })
   .webpackConfig({
      plugins: [
          new ImageminPlugin( {
               pngquant: {
                  quality: '95-100',
               },
               test: /\.(jpe?g|png|gif|svg)$/i,
          } ),
      ],
   })
   .copy('./pages/*/img/*', 'public/img')
   .setPublicPath('./public')
   .sourceMaps()
   .version();