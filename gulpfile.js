'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');

gulp.task('css', function () {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(csso())
        .pipe(gulp.dest('./wp-content/themes/bwap-theme'));
});

gulp.task('css:watch', function () {
      gulp.watch('./src/sass/**/*.scss', ['css']);
});
