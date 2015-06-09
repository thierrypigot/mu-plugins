<?php
/**
*	Custom shortcode inside contact form 7 Form
*	[email]contact@thierry-pigot.fr[/email]
**/
add_filter( 'wpcf7_form_elements', 'tp_wpcf7_form_elements' );
function tp_wpcf7_form_elements( $form )
{
	$form = do_shortcode( $form );
	return $form;
}