// generated on 2016-05-04 using generator-webapp 2.0.0
import gulp from 'gulp';
import gulpLoadPlugins from 'gulp-load-plugins';
import browserSync from 'browser-sync';
import concat from 'gulp-concat';

const $ = gulpLoadPlugins();
const reload = browserSync.reload;




gulp.task('styles', () => {
  return gulp.src('assets/scss/*.scss')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe($.sass.sync({
      outputStyle: 'expanded',
      precision: 10,
      includePaths: ['.']
    }).on('error', $.sass.logError))
    .pipe($.autoprefixer({browsers: ['last 1 version']}))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('public/css'))
    .pipe(reload({stream: true}));
});
gulp.task('js', () => {
  return gulp.src( ['assets/js/jquery.min.js','assets/js/materialize.min.js','assets/js/navigo.min.js', 'assets/js/modal-post.js' ,'assets/js/main.js'])
  .pipe(concat('vendor.js'))
  .pipe(gulp.dest('public/js'));
});
gulp.task('serve',['styles', 'js'], () => {
  browserSync({
    notify: true,
    port: 9000,
    proxy: "cube.blog"
  });

  gulp.watch([
    '*.php',
    'inc/*.php'
  ]).on('change', reload);

  gulp.watch('assets/scss/**/*.scss', ['styles']);
  gulp.watch('assets/js/*.js', ['js']);
});
