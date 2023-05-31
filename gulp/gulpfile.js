const gulp = require('gulp');
const cssmin = require('gulp-cssmin');
const uglify = require('gulp-uglify');

gulp.task('minify-css-stylesheet', function () {
  return gulp.src('../website/stylesheet_new.css')
    .pipe(cssmin())
    .pipe(gulp.dest('../website/minified/css/', {overwrite:true}));
});

gulp.task('minify-css-w3', function () {
  return gulp.src('../website/w3.css')
    .pipe(cssmin())
    .pipe(gulp.dest('../website/minified/css/', {overwrite:true}));
});

gulp.task('minify-css-mw-992px', function () {
  return gulp.src('../website/mw-992px.css')
    .pipe(cssmin())
    .pipe(gulp.dest('../website/minified/css/', {overwrite:true}));
});

gulp.task('minify-css-Mw-991px-mw-737px.css', function () {
  return gulp.src('../website/Mw-991px-mw-737px.css')
    .pipe(cssmin())
    .pipe(gulp.dest('../website/minified/css/', {overwrite:true}));
});

gulp.task('minify-css-Mw-736px.css', function () {
  return gulp.src('../website/Mw-736px.css')
    .pipe(cssmin())
    .pipe(gulp.dest('../website/minified/css/', {overwrite:true}));
});

gulp.task('minify-css-Mw-451px.css', function () {
  return gulp.src('../website/Mw-451px.css')
    .pipe(cssmin())
    .pipe(gulp.dest('../website/minified/css/', {overwrite:true}));
});

gulp.task('minify-js-hideAndShowHiddenBoxes', function () {
  return gulp.src('../website/scripts/hideAndShowHiddenBoxes.js')
    .pipe(uglify())
    .pipe(gulp.dest('../website/minified/js/', {overwrite:true}));
});

gulp.task('minify-js-script', function () {
  return gulp.src('../website/script.js')
    .pipe(uglify())
    .pipe(gulp.dest('../website/minified/js/', {overwrite:true}));
});

gulp.task('default', gulp.series('minify-css-stylesheet', 'minify-css-w3', 'minify-css-mw-992px', 'minify-css-Mw-991px-mw-737px.css', 'minify-css-Mw-736px.css', 'minify-css-Mw-451px.css', 'minify-js-script', 'minify-js-hideAndShowHiddenBoxes'));