var Helpers = (function( $ ) {
	'use strict';
	
	var helpers = function() {
		defineJQueryExists();
		
		// Run the throttled resize event only if needed.
		// defineThrottledResize();
	};
	
	
	/**
	 * Since the resize event on the Window object throws too many events,
	 * it could lead to browser lag. What we'll do is set up a custom event
	 * that is called a few milliseconds after the user stops resizing the
	 * window. This helps throttle the resize event and reduce lag.
	 * 
	 * @requires tiny.pubsub.min.js
	 * @event throttled-resize
	 * 
	 * @return {void}
	 */
	var defineThrottledResize = function() {
		var timeout;
		
		$( window ).on( 'resize' , function( event ) {
			clearTimeout( timeout );
			
			timeout = setTimeout(function() {
				$.publish( 'throttled-resize' );
			}, 30);
		});
	};
	
	/**
	 * Defines a jQuery function that allows us to check if an element exists
	 * and run a callback function if it exists.
	 * 
	 * @example
	 * $( '#my-element' ).exists(function() {
	 *     // Element exists, run my code.
	 * });
	 *
	 * @return object
	 */
	var defineJQueryExists = function() {
		$.fn.exists = function( callback ) {
			var args = [].slice.call( arguments , 1 );
			
			if ( this.length ) callback.call( this , args );
			
			return this;
		};
	};
	
	return helpers;
})( jQuery );