var gulp   = require( 'gulp' ),
	concat = require( 'gulp-concat' ),
	sass   = require( 'gulp-ruby-sass' ),
	uglify = require( 'gulp-uglify' ),
	notify = require( 'gulp-notify' ),
	watchr = require( 'watchr' ),
	path   = require( 'path' );

var theme  = 'wp-content/themes/sparky/',
	assets = theme + 'assets/';

gulp.task( 'styles' , function() {
	gulp.src( assets + 'css/*.scss' )
		.pipe( sass({ style: 'expanded' }) )
		.pipe( concat( 'main.src.css' ) )
		.pipe( gulp.dest( theme + 'css/' ) );
	
	gulp.src( assets + 'css/*.scss' )
		.pipe( sass({ style: 'compressed' }) )
		.pipe( concat( 'main.min.css' ) )
		.pipe( gulp.dest( theme + 'css/' ) )
		.pipe( notify({ title: 'Stylesheets Compiled' , message: 'Stylesheets have been compiled successfully.' }) );
});

gulp.task( 'scripts' , function() {
	gulp.src( assets + 'js/**/*.js' )
		.pipe( concat( 'main.src.js' ) )
		.pipe( gulp.dest( theme + 'js/' ) );
	
	gulp.src( assets + 'js/**/*.js' )
		.pipe( uglify() )
		.pipe( concat( 'main.min.js' ) )
		.pipe( gulp.dest( theme + 'js/' ) )
		.pipe( notify({ title: 'JavaScript Compiled' , message: 'JavaScript files have been compiled successfully.' }) );
});

/**
 * Use Watchr instead of the default gulp.watch because gulp.watch seems to
 * think that files are constantly changing.
 */
gulp.task( 'watch' , function() {
	watchr.watch({
		path: assets,
		catchupDelay: 250,
		listeners: {
			change: function( type , file , currentStat , previousStat ) {
				var extension = path.extname( file ),
					task      = null;
				
				if ( '.js'   == extension ) task = 'scripts';
				if ( '.scss' == extension ) task = 'styles';
				
				if ( task ) gulp.start( task );
			}
		}
	})
	
	// gulp.watch( assets + 'css/**/*.scss' , [ 'styles' ] );
	// gulp.watch( assets + 'js/**/*.js'    , [ 'scripts' ] );
});

gulp.task( 'default' , [ 'styles' , 'scripts' , 'watch' ] );