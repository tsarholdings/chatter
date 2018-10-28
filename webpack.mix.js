let mix = require('laravel-mix')
require('laravel-mix-purgecss')

mix
    .options({
        postCss: [
            require('postcss-import')(),
            require('tailwindcss')('./tailwind.js'),
            require('postcss-nesting')(),
        ]
    })
    .setPublicPath('public')
    .js('resources/js/chatter.js', 'public/js')
    .postCss('resources/css/chatter.css', 'public/css')
    .purgeCss()
    .version()
