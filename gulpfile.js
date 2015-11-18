
// ------------------------------
// Require / Setup
// ------------------------------

var gulp   			= require('gulp');
var	browserSync = require('browser-sync');
var	reload 			= browserSync.reload;
var plugins 		= require('gulp-load-plugins')();

// ------------------------------
// Helpers
// ------------------------------

var errorHandler = function ( error ) {
	console.log( error );
};

// ------------------------------
// Browser Sync Task
// ------------------------------

gulp.task('bs', function() {
	browserSync.init({
		proxy: 'http://localhost:8888/ad_portfolio/'
	});
});

// ------------------------------
// Styles Task
// ------------------------------

gulp.task('styles', function() {
	return gulp.src('./sass/style.scss')
		// .pipe(plugins.sourcemaps.init())
		.pipe(plugins.sass()).on('error', errorHandler)
		.pipe(plugins.minifyCss()).on('error', errorHandler)
		// .pipe(plugins.sourcemaps.write())
		.pipe(plugins.concat('style.css'))
		.pipe(plugins.autoprefixer('last 5 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
		.pipe(gulp.dest('./'))
		.pipe(reload({ stream: true }));
});

// ------------------------------
// Scripts Task
// ------------------------------

gulp.task('scripts', function() {
	return gulp.src('./js/scripts.js')
		.pipe(plugins.rename('main.min.js'))
		.pipe(plugins.uglify()).on('error', errorHandler)
		.pipe(gulp.dest('./js'))
		.pipe(reload({ stream:true }));
});

// ------------------------------
// Images Task
// ------------------------------

gulp.task('images', function() {
	return gulp.src('./images/**/*')
		.pipe(plugins.imagemin({ progressive: true })).on('error', errorHandler)
		.pipe(gulp.dest('./images'));
});

// ------------------------------
// Watch Task
// ------------------------------

gulp.task('watch', function() {
	gulp.watch('./sass/**/*.scss', ['styles']);
	gulp.watch('./js/**/*.js', ['scripts']);
	gulp.watch('./**/*.php', reload);
});

// ------------------------------
// Default Task
// ------------------------------

gulp.task('default', ['styles', 'scripts', 'images', 'bs', 'watch']);
