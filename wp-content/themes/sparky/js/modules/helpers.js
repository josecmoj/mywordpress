var Helpers = (function( $ ) {
	'use strict';
	
	var helpers = function() {
		defineJQueryExists();
		defineEqualiseHeights();
		defineThrottledResize();
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
	 * @return {void}
	 */
	var defineJQueryExists = function() {
		$.fn.exists = function( callback ) {
			var args = [].slice.call( arguments , 1 );
			
			if ( this.length ) callback.call( this , args );
			
			return this;
		};
	};
	
	/**
	 * Defines a method to allow a parent element equalise the heights of
	 * its child elements.
	 * 
	 * @example
	 * <div data-equalise=".column">
	 *     <div class=".column">...</div>
	 *     <div class=".column">...</div>
	 *     <div class=".column">...</div>
	 * </div>
	 *
	 * @return {void}
	 */
	var defineEqualiseHeights = function() {
		var run = function() {
			$('[data-equalise]').each(function( i , e ) {
				var $parent   = $(e),
					$children = $parent.find( $parent.data('equalise') ),
					highest   = 0;
				
				// Reset the heights so we can re-calculate the highest item.
				$children.height( 'auto' );
				
				// Get the highest element.
				$children.each(function( i , e ) {
					var height = $(e).height();
					
					if ( height > highest ) highest = height;
				});
				
				$children.height( highest );
			});
		};
		
		// Make this responsive and auto-adjust when the browser is resized.
		$.subscribe( 'throttled-resize' , run );
		
		run();
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
			}, 50);
		});
	};
	
	return helpers;
})( jQuery );