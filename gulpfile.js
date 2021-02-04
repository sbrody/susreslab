'use strict'

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var wait = require('gulp-wait');
var pump = require('pump');

// Compile SASS into CSS, merge into one file, minify, create source map and notify browser
gulp.task('sass', function () {
    return gulp.src(['style.css', 'src/scss/*.scss'], { base: '/' })
        .pipe(wait(1000))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat('main.css'))
        .pipe(cssmin())
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest("css"))
        .pipe(browserSync.stream());
});


// Move the javascript files into js folder and merge
gulp.task('js', function () {
    return gulp.src('src/js/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('theme.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('js'))
        .pipe(browserSync.stream());
});

// Move masonry.js & imageloaded into js folder
gulp.task('extJS', function () {
    return gulp.src(['node_modules/isotope-layout/dist/isotope.pkgd.min.js', 'node_modules/isotope-packery/packery-mode.pkgd.min.js', 'node_modules/infinite-scroll/dist/infinite-scroll.pkgd.min.js', 'node_modules/owl.carousel/dist/owl.carousel.min.js'])
        .pipe(gulp.dest('js'));
});

// Move Owl Carousel css files 
gulp.task('extCSS', function () {
    return gulp.src('node_modules/owl.carousel/dist/assets/owl.carousel.min.css')
        .pipe(gulp.dest('css'));
});

// Compress the merged JS file
gulp.task('compress', function (cb) {
    pump([
        gulp.src('js/theme.js'),
        uglify(),
        gulp.dest('js')
    ],
        cb
    );

});

// Static Server + watching scss/php/js files
gulp.task('serve', gulp.series('sass', 'js', function () {

    browserSync.init({
        proxy: "srl.local"
    });
}));

gulp.task('watch', function () {
    var watcher = gulp.watch(['style.css', 'src/scss/**/*.scss']).on('change', gulp.series('sass', browserSync.reload));
    var watcher2 = gulp.watch(['*.php', '*/*.php']).on('change', browserSync.reload);
    var watcher3 = gulp.watch('src/js/*.js').on('change', gulp.series('js', browserSync.reload));
    watcher.on('change', function (path) {
        console.log('File ' + path + ' was changed');
    });
    watcher2.on('change', function (path) {
        console.log('File ' + path + ' was changed');
    });
    watcher3.on('change', function (path) {
        console.log('File ' + path + ' was changed');
        browserSync.reload;
    });

});



gulp.task('default', gulp.parallel('js', 'serve', 'watch', 'extJS', 'extCSS'));
