const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const clean = require('gulp-clean');
const notify = require('gulp-notify');

gulp.task('sass', function() {
    return gulp.src('.scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./scss/'));
});

gulp.task('watch', function() {
    gulp.watch('.scss/**/*.scss', gulp.series('sass'))
    .pipe(notify('Sass file compiled!'));
})

gulp.task('clear-cache', function() {
    return gulp.src('.scss/**/*.scss')
    .pipe(sass({ cacheClear: true}))
    .pipe(clean())
    .pipe(gulp.dest('.'));
});

gulp.task('default', gulp.series('sass', 'watch'));