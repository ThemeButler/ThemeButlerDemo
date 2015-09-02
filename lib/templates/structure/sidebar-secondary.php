<?php
/**
 * Echo the secondary sidebar structural markup. It also calls the secondary sidebar action hooks.
 *
 * @package Beans\Structure\Secondary_Sidebar
 */

echo beans_open_markup( 'beans_sidebar_secondary', 'aside', array(
	'class' => 'tm-tertiary ' . beans_get_layout_class( 'sidebar_secondary' ),
	'role' => 'complementary'
) );

	/**
	 * Fires in the secondary sidebar.
	 *
	 * @since 1.0.0
	 */
	do_action( 'beans_sidebar_secondary' );

echo beans_close_markup( 'beans_sidebar_secondary', 'aside' );