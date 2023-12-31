const mix = require('laravel-mix');
const VitePlugin = require('vite-plugin-vue2');

mix.js('resources/js/app.js', 'public/js')
.vue()
   .vite({
      plugins: [VitePlugin()],
   })
   .version()
   .sass('resources/sass/app.scss', 'public/css')
   .sourceMaps();

// Compile custom JS
mix.js('public/assets/js/app.js', 'public/js/scrip.js');

// Compile custom CSS
mix.sass('public/assets/css/app.scss', 'public/css/output.css');

// Copy SVG files
mix.copy('public/assets/svg', 'public/svg');