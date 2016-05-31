// generated on 2016-05-04 using generator-webapp 2.0.0
import gulp from 'gulp';
import gulpLoadPlugins from 'gulp-load-plugins';
import browserSync from 'browser-sync';


const $ = gulpLoadPlugins();
const reload = browserSync.reload;






gulp.task('serve', () => {
  browserSync({
    notify: false,
    port: 9000,
    proxy: "orb.blog"
  });

  gulp.watch([
    '*.php',
    'inc/*.php'
  ]).on('change', reload);

});

