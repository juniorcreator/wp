var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var bs = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var imageResize = require('gulp-image-resize');


var paths = { 
	styles: { src: './assets/scss/**/*.scss', dest: './assets/css' },
	scripts: { src: './assets/js/.js', dest: './assets/js/' }, 
	images: { src: './assets/img/**/*',
	dest: './assets/img/min'},
	html: {src: './*.php'}
};


gulp.task('resizeImg', function () {
  gulp.src(paths.images.dest)
	.pipe(imageResize({
	  width : 100,
	  height : 100,
	  crop : true,
	  upscale : false
	}))
	.pipe(gulp.dest(paths.images.dest));
});


gulp.task('browser-sync', ['sass'], function() {
	bs.init({
		server: {
			baseDir: "./"
		},
		notify: false,
	});
});


// gulp.task('sass', function() {
//      return gulp.src(paths.styles.src)
//         .pipe(sourcemaps.init())
//         .pipe(concat("build.css"))
//         .pipe(sass().on('error', sass.logError))
//         .pipe(autoprefixer('last 9 versions','true'))
//         .pipe(sourcemaps.write())
//         .pipe(gulp.dest(paths.styles.dest))
//         .pipe(bs.reload({
//             stream: true
//         }));
// });

gulp.task('sass', function() {
	 return gulp.src('./assets/scss/style.scss')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer('last 9 versions','true'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.styles.dest))
		.pipe(bs.reload({
			stream: true
		}));
});



gulp.task('watch', ['browser-sync', 'sass'], function () {
	gulp.watch(paths.styles.src, ['sass'], bs.reload);
	gulp.watch(paths.html.src, bs.reload);
});