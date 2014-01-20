var gulp   = require( 'gulp' ),
	gutil  = require( 'gulp-util' ),
	concat = require( 'gulp-concat' ),
	sass  = require( 'gulp-ruby-sass' ),
	uglify = require( 'gulp-uglify' );

var theme  = 'wp-content/themes/sparky/';
var assets = theme + 'assets/';

gulp.task( 'styles' , function() {
	gulp.src( assets + 'css/*.scss' )
		.pipe( sass({ style: 'expanded' }) )
		.pipe( concat( 'main.src.css' ) )
		.pipe( gulp.dest( theme + 'css/' ) );
	
	gulp.src( assets + 'css/*.scss' )
		.pipe( sass({ style: 'compressed' }) )
		.pipe( concat( 'main.min.css' ) )
		.pipe( gulp.dest( theme + 'css/' ) );
});

gulp.task( 'scripts' , function() {
	gulp.src( assets + 'js/**' )
		.pipe( concat( 'main.src.js' ) )
		.pipe( gulp.dest( theme + 'js/' ) );
	
	gulp.src( assets + 'js/**' )
		.pipe( uglify() )
		.pipe( concat( 'main.min.js' ) )
		.pipe( gulp.dest( theme + 'js/' ) );
});

gulp.task( 'default' , function () {
	gulp.run( 'styles' , 'scripts' );
	
	gulp.watch( assets + 'css/**' , function() {
		gulp.run( 'styles' );
	});
	
	gulp.watch( assets + 'js/**' , function() {
		gulp.run( 'scripts' );
	});
});