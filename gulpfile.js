'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');

gulp.task('css', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(csso())
        .pipe(gulp.dest('./css/'));
});

gulp.task('css:watch', function () {
      gulp.watch('./sass/**/*.scss', ['css']);
});
