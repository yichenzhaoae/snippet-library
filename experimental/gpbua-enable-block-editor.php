<?php
/**
 * Gravity Perks // Better User Activation // Enable Block Editor for Activation Page
 * https://gravitywiz.com/documentation/gravity-forms-better-user-activation/
 */
add_action( 'init', function() {
	remove_filter( 'use_block_editor_for_post', array( gp_better_user_activation(), 'disable_block_editor_for_activation_page' ), 101 );
}, 16 );
