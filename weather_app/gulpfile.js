const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass')); // Set the compiler

gulp.task('sass', function () {
  return gulp
    .src('src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist/css'));
});

gulp.task('default', gulp.series('sass'));

// Watch task
gulp.task('watch', function () {
    gulp.watch('src/scss/**/*.scss', gulp.series('sass'));
  });
  
  // Default task
  gulp.task('default', gulp.series('sass', 'watch'));