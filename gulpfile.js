var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .copy('node_modules/font-awesome/fonts', 'public/fonts');
});