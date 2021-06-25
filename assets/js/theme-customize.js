// theme customizer js
(function($){

	wp.customize( 'wpbt_show_header_search', function( value ){
		console.log(value);
		value.bind( function( new_val ){
			console.log(new_val);
			if( new_val ){
				$('#top-search').show();
			} else {
				$('#top-search').hide();
			}
		});
	});

	wp.customize( 'wpbt_show_header_cart', function( value ){
		console.log(value);
		value.bind( function( new_val ){
			console.log(new_val);
			if( new_val ){
				$('#top-cart').show();
			} else {
				$('#top-cart').hide();
			}
		});
	});

})(jQuery);