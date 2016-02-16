/**
 * Laravel Elixir
 */
/*var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss')
        .copy('node_modules/font-awesome/fonts', 'public/fonts');
});*/

/*
 * Gulp
 */

// including plugins
var gulp = require('gulp');
var minifyCss = require("gulp-minify-css");
var concat = require('gulp-concat');

var babel = require('gulp-babel');
var uglify = require('gulp-uglify');

// task
gulp.task('default', function () {
    /*gulp.src('vendor/alfredoem/ragnarok/resources/assets/css/*.css') // path to your file
        .pipe(minifyCss())
        .pipe(concat('ragnarok.min.css'))
        .pipe(gulp.dest('vendor/alfredoem/ragnarok/public/css'));*/

    gulp.src('vendor/alfredoem/ragnarok/resources/assets/css/authenticate-material.css') // path to your file
        .pipe(minifyCss())
        .pipe(concat('authenticate-material.min.css'))
        .pipe(gulp.dest('vendor/alfredoem/ragnarok/public/css'));

    gulp.src('vendor/alfredoem/ragnarok/resources/assets/js/app.js')
        .pipe(babel())
        .pipe(uglify())
        .pipe(concat('ragnarok.min.js'))
        .pipe(gulp.dest('vendor/alfredoem/ragnarok/public/js'))
});


