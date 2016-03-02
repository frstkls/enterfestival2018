//'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass'),
    sassinput = './assets/sass/**/*.scss';
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify'),
    scriptsinput = './assets/js/**/*.js';
var connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

var output = './assets/dist';
var changes = [
        './assets/sass/**/*.scss',
        './assets/js/**/*.js',
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
    .pipe(gulp.dest(output))
});

gulp.task('compress', function() {
    return gulp.src(scriptsinput)
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(output));
});

gulp.task('serve', function() {
    connect.server({}, function() {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
    gulp.watch(changes, ['sass', 'compress']).on('change', function () {
        browserSync.reload();
    });
});

gulp.task('default', ['serve']);
