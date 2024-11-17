const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const clean = require('gulp-clean');
const notify = require('gulp-notify');

gulp.task('sass', function() {
    return gulp.src('root/scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('assets/css'))
    .pipe(notify({ message: 'Sass file Compiled!', onLast: true }));
});

gulp.task('watch', function() {
    gulp.watch('root/scss/**/*.scss', gulp.series('sass'))
})

gulp.task('clear-cache', function() {
    return gulp.src('assets/css/*.scss', { read: false })
    .pipe(clean());
});

gulp.task('default', gulp.series('sass', 'watch'));