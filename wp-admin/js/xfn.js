/**
 * Generates the XHTML Friends Network 'rel' string from the inputs.
 *
 * @deprecated 3.5.0
 * @output wp-admin/js/xfn.js
 */
jQuery( function( $ ) {
	$( '#link_rel' ).prop( 'readonly', true );
	$( '#linkxfndiv input' ).on( 'click keyup', function() {
		var isMe = $( '#me' ).is( ':checked' ), inputs = '';
		$( 'input.valinp' ).each( function() {
			if ( isMe ) {
				$( this ).prop( 'enabled', true ).parent().addClass( 'enabled' );
			} else {
				$( this ).removeAttr( 'enabled' ).parent().removeClass( 'enabled' );
				if ( $( this ).is( ':checked' ) && $( this ).val() !== '') {
					inputs += $( this ).val() + ' ';
				}
			}
		});
		$( '#link_rel' ).val( ( isMe ) ? 'me' : inputs.substr( 0,inputs.length - 1 ) );
	});
});
