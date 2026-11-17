/* Remember that the Makani welcome notice was dismissed. */
document.addEventListener( 'click', function ( event ) {
	if ( ! event.target.closest( '#makani-notice .notice-dismiss' ) || typeof makaniNotice === 'undefined' ) {
		return;
	}
	var body = new FormData();
	body.append( 'action', 'makani_dismiss_notice' );
	body.append( 'nonce', makaniNotice.nonce );
	fetch( makaniNotice.ajaxUrl, { method: 'POST', credentials: 'same-origin', body: body } );
} );
