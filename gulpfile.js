'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var babel = require('gulp-babel');
const autoprefixer = require('gulp-autoprefixer');

var css = {
    SASSsrc : '/Users/besco/Local Sites/katcole/app/public/wp-content/themes/ingaPortfolio/src/index.scss',
    ALLcss : '/Users/besco/Local Sites/katcole/app/public/wp-content/themes/ingaPortfolio/src/*.scss',
    JSsrc : '/Users/besco/Local Sites/katcole/app/public/wp-content/themes/ingaPortfolio/src/*.js',
    watch : '/Users/besco/Local Sites/katcole/app/public/wp-content/themes/ingaPortfolio/src/**/*',
    SASSbuild : '/Users/besco/Local Sites/katcole/app/public/wp-content/themes/ingaPortfolio',
    JSbuild : '/Users/besco/Local Sites/katcole/app/public/wp-content/themes/ingaPortfolio/js'
}

gulp.task('css', function(cb) {
    return gulp.src(css.SASSsrc)
        .pipe(sass())
        .pipe(autoprefixer({
			cascade: false
		}))
        .pipe(rename('style.css'))
        .pipe(gulp.dest(css.SASSbuild))
        cb()
})


gulp.task('js', function(done) {
    return gulp.src(css.JSsrc)
    .pipe(babel({
        presets: ['@babel/preset-env']
    }))
    .pipe(concat('bundle.js'))
    .pipe(gulp.dest(css.JSbuild))
})

gulp.task('watch', function() {
    gulp.watch(css.ALLcss, gulp.series(['css']));
    gulp.watch(css.JSsrc, gulp.series(['js']));
})