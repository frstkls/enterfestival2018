//'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass'),
    sassinput = './assets/sass/**/*.scss',
    sassoutput = './assets/css';
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');
var changedfiles = [
        './assets/sass/**/*.scss',
        './site/**/*.php'
    ];

gulp.task('sass', function () {
    return gulp.src(sassinput)
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    // Autoprefixer needs to be put after .pipe(sass())
    .pipe(autoprefixer())
    // Write source map into a seperate file
    // on the same level as the outputted css file
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(sassoutput))
});

gulp.task('serve', function() {
    browserSync({
        proxy: '127.0.0.1:8000'
    });
    gulp.watch(changedfiles, ['sass']).on('change', function () {
        browserSync.reload();
    });
});

gulp.task('default', ['serve']);
