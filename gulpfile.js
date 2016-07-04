var gulp = require('gulp'); 
var sass = require('gulp-sass');

// 编译Sass
// gulp.task('sass', function() {
//     gulp.src('./scss/*.scss')
//         .pipe(sass())
//         .pipe(gulp.dest('./css'));
// });

gulp.task('sass', function () {
  return gulp.src('./sass/main.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./sass/*.scss', ['sass']);
});