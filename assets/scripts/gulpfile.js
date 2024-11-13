const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function() {
    return gulp.src('./assets/style/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./assets/style/'));
});

gulp.task('watch', function() {
    gulp.watch('.assets/style/**/*.scss', gulp.series('sass'));
})

gulp.task('default', gulp.series('sass', 'watch'));