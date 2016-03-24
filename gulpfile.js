var elixir = require('laravel-elixir');
var del = require('del');
var Elixir = require('laravel-elixir');

var Task = Elixir.Task;

Elixir.extend('clean', function(src) {
    new Task('clean', function() {
        return del(src);
    });
});

elixir(function(mix) {
    mix
        .clean([
            'public/assets',
            'public/build',
        ])
        .sass([
            'app.scss'
        ], 'public/assets/css')
        .babel([
            '../../../node_modules/jquery/dist/jquery.js',
            '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
            '../../../node_modules/bootstrap-filestyle/src/bootstrap-filestyle.js',
            'app.js'
        ], 'public/assets/js/app.js')
        .copy(
            'node_modules/bootstrap-sass/assets/fonts/bootstrap',
            'public/build/assets/fonts/bootstrap'
        )
        .copy(
            'node_modules/bootstrap-sass/assets/fonts/bootstrap',
            'public/assets/fonts/bootstrap'
        )
        .version([
            'public/assets/js/app.js',
            'public/assets/css/app.css',
        ]);
});
