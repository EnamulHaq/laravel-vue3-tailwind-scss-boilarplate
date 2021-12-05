const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss'); /* Add this line at the top */
// mix.browserSync('localhost:8000');
mix.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/scss/app.scss', 'public/css/app.css')
    .vue()
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .version();

mix.browserSync({
    proxy: 'http://localhost:8000'
})
