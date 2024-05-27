<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div <?php qi_addons_for_elementor_framework_class_attribute( $holder_classes ); ?>>
	<?php
	if ( ! empty( $contact_form_id ) ) {
		echo do_shortcode( '[contact-form-7 id="' . esc_attr( $contact_form_id ) . '"]' );
	}
	?>
</div>
