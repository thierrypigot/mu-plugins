<?php
/**
*	Anti Spam Email
*	[email]contact@thierry-pigot.fr[/email]
**/
function tp_hide_email_shortcode( $atts , $content = null )
{
	if ( ! is_email( $content ) ) {
		return;
	}

	return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
}
add_shortcode( 'email', 'tp_hide_email_shortcode' );