<?php

/* Settings Panel */
FLCustomizer::add_panel('fl-settings', array(
	'title'    => _x( 'Settings', 'Customizer panel title.', '1io' ),
	'sections' => array(

		/* Favicons Section */
		'fl-favicons' => array(
			'disable' => function_exists( 'has_site_icon' ),
			'title'   => _x( 'Favicons', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Favicon */
				'fl-favicon'          => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Favicon', '1io' ),
					),
				),

				/* Apple Touch Icon */
				'fl-apple-touch-icon' => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Apple Touch Icon', '1io' ),
					),
				),
			),
		),
	),
));
