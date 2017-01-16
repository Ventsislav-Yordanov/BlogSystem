const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

// elixir((mix) => {
//     mix.sass('app.scss', 'resources/css')
//        .webpack('app.js');
//
//     mix.styles([
//       'app.css',
//       'libs/select2.min.css'
//     ])
// });

elixir(function (mix) {
    mix.sass('app.scss', 'resources/css')
        .webpack('app.js');

    // TODO: Maybe mix all styles and js files here, later
});
