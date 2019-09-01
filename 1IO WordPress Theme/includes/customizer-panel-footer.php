<?php

/* Footer Panel */
FLCustomizer::add_panel('fl-footer', array(
	'title'    => _x( 'Footer', 'Customizer panel title.', '1io' ),
	'sections' => array(

		/* Footer Widgets Layout Section */
		'fl-footer-widgets-layout' => array(
			'title'   => _x( 'Footer Widgets Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Footer Widgets Display */
				'fl-footer-widgets-display' => array(
					'setting' => array(
						'default' => 'all',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Footer Widgets Display', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'disabled' => __( 'Disabled', '1io' ),
							'all'      => __( 'All Pages', '1io' ),
							'home'     => __( 'Homepage Only', '1io' ),
						),
					),
				),
			),
		),

		/* Footer Widgets Style Section */
		'fl-footer-widgets-style'  => array(
			'title'   => _x( 'Footer Widgets Style', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Footer Widgets Background Color */
				'fl-footer-widgets-bg-color'      => array(
					'setting' => array(
						'default' => '#ffffff',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Footer Widgets Background Opacity */
				'fl-footer-widgets-bg-opacity'    => array(
					'setting' => array(
						'default' => '100',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Background Opacity', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 100,
							'step' => 1,
						),
					),
				),

				/* Footer Widgets Background Gradient */
				'fl-footer-widgets-bg-gradient'   => array(
					'setting' => array(
						'default' => '0',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Gradient', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'0' => _x( 'Disabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
							'1' => _x( 'Enabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
						),
					),
				),

				/* Footer Widgets Background Image */
				'fl-footer-widgets-bg-image'      => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Background Image', '1io' ),
					),
				),

				/* Footer Widgets Background Repeat */
				'fl-footer-widgets-bg-repeat'     => array(
					'setting' => array(
						'default'   => 'no-repeat',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Repeat', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'no-repeat' => __( 'None', '1io' ),
							'repeat'    => __( 'Tile', '1io' ),
							'repeat-x'  => __( 'Horizontal', '1io' ),
							'repeat-y'  => __( 'Vertical', '1io' ),
						),
					),
				),

				/* Footer Widgets Background Position */
				'fl-footer-widgets-bg-position'   => array(
					'setting' => array(
						'default'   => 'center top',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Position', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'left top'      => __( 'Left Top', '1io' ),
							'left center'   => __( 'Left Center', '1io' ),
							'left bottom'   => __( 'Left Bottom', '1io' ),
							'right top'     => __( 'Right Top', '1io' ),
							'right center'  => __( 'Right Center', '1io' ),
							'right bottom'  => __( 'Right Bottom', '1io' ),
							'center top'    => __( 'Center Top', '1io' ),
							'center center' => __( 'Center', '1io' ),
							'center bottom' => __( 'Center Bottom', '1io' ),
						),
					),
				),

				/* Footer Widgets Background Attachment */
				'fl-footer-widgets-bg-attachment' => array(
					'setting' => array(
						'default'   => 'scroll',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Attachment', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'scroll' => __( 'Scroll', '1io' ),
							'fixed'  => __( 'Fixed', '1io' ),
						),
					),
				),

				/* Footer Widgets Background Size */
				'fl-footer-widgets-bg-size'       => array(
					'setting' => array(
						'default'   => 'auto',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Scale', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'auto'    => __( 'None', '1io' ),
							'contain' => __( 'Fit', '1io' ),
							'cover'   => __( 'Fill', '1io' ),
						),
					),
				),

				/* Footer Widgets Text Color */
				'fl-footer-widgets-text-color'    => array(
					'setting' => array(
						'default' => '#808080',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Text Color', '1io' ),
					),
				),

				/* Footer Widgets Link Color */
				'fl-footer-widgets-link-color'    => array(
					'setting' => array(
						'default' => '#428bca',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Link Color', '1io' ),
					),
				),

				/* Footer Widgets Hover Color */
				'fl-footer-widgets-hover-color'   => array(
					'setting' => array(
						'default' => '#428bca',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Hover Color', '1io' ),
					),
				),
			),
		),

		/* Footer Layout Section */
		'fl-footer-layout'         => array(
			'title'   => _x( 'Footer Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Footer Layout */
				'fl-footer-layout'      => array(
					'setting' => array(
						'default' => '1-col',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Layout', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'none'   => __( 'None', '1io' ),
							'1-col'  => __( '1 Column', '1io' ),
							'2-cols' => __( '2 Columns', '1io' ),
						),
					),
				),

				/* Line */
				'fl-footer-line1'       => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Footer Column 1 Layout */
				'fl-footer-col1-layout' => array(
					'setting' => array(
						'default' => 'text',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						/* translators: %d: Column order number */
						'label'   => sprintf( _x( 'Column %d Layout', '%d stands for column order number.', '1io' ), 1 ),
						'type'    => 'select',
						'choices' => array(
							'text'        => __( 'Text', '1io' ),
							'social'      => __( 'Social Icons', '1io' ),
							'social-text' => __( 'Text &amp; Social Icons', '1io' ),
							'menu'        => __( 'Menu', '1io' ),
						),
					),
				),

				/* Footer Column 1 Text */
				'fl-footer-col1-text'   => array(
					'setting' => array(
						'default'   => '',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Control',
						/* translators: %d: Column order number */
						'label' => sprintf( _x( 'Column %d Text', '%d stands for column order number.', '1io' ), 1 ),
						'type'  => 'textarea',
					),
				),

				/* Line */
				'fl-footer-line2'       => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Footer Column 2 Layout */
				'fl-footer-col2-layout' => array(
					'setting' => array(
						'default' => 'text',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						/* translators: %d: Column order number */
						'label'   => sprintf( _x( 'Column %d Layout', '%d stands for column order number.', '1io' ), 2 ),
						'type'    => 'select',
						'choices' => array(
							'text'        => __( 'Text', '1io' ),
							'social'      => __( 'Social Icons', '1io' ),
							'social-text' => __( 'Text &amp; Social Icons', '1io' ),
							'menu'        => __( 'Menu', '1io' ),
						),
					),
				),

				/* Footer Column 2 Text */
				'fl-footer-col2-text'   => array(
					'setting' => array(
						'default'   => '1-800-555-5555 &bull; <a href="mailto:info@mydomain.com">info@mydomain.com</a>',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Control',
						/* translators: %d: Column order number */
						'label' => sprintf( _x( 'Column %d Text', '%d stands for column order number.', '1io' ), 2 ),
						'type'  => 'textarea',
					),
				),
			),
		),

		/* Footer Style Section */
		'fl-footer-style'          => array(
			'title'   => _x( 'Footer Style', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Footer Background Color */
				'fl-footer-bg-color'      => array(
					'setting' => array(
						'default' => '#ffffff',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Footer Background Opacity */
				'fl-footer-bg-opacity'    => array(
					'setting' => array(
						'default' => '100',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Background Opacity', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 100,
							'step' => 1,
						),
					),
				),

				/* Footer Background Gradient */
				'fl-footer-bg-gradient'   => array(
					'setting' => array(
						'default' => '0',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Gradient', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'0' => _x( 'Disabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
							'1' => _x( 'Enabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
						),
					),
				),

				/* Footer Background Image */
				'fl-footer-bg-image'      => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Background Image', '1io' ),
					),
				),

				/* Footer Background Repeat */
				'fl-footer-bg-repeat'     => array(
					'setting' => array(
						'default'   => 'no-repeat',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Repeat', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'no-repeat' => __( 'None', '1io' ),
							'repeat'    => __( 'Tile', '1io' ),
							'repeat-x'  => __( 'Horizontal', '1io' ),
							'repeat-y'  => __( 'Vertical', '1io' ),
						),
					),
				),

				/* Footer Background Position */
				'fl-footer-bg-position'   => array(
					'setting' => array(
						'default'   => 'center top',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Position', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'left top'      => __( 'Left Top', '1io' ),
							'left center'   => __( 'Left Center', '1io' ),
							'left bottom'   => __( 'Left Bottom', '1io' ),
							'right top'     => __( 'Right Top', '1io' ),
							'right center'  => __( 'Right Center', '1io' ),
							'right bottom'  => __( 'Right Bottom', '1io' ),
							'center top'    => __( 'Center Top', '1io' ),
							'center center' => __( 'Center', '1io' ),
							'center bottom' => __( 'Center Bottom', '1io' ),
						),
					),
				),

				/* Footer Background Attachment */
				'fl-footer-bg-attachment' => array(
					'setting' => array(
						'default'   => 'scroll',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Attachment', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'scroll' => __( 'Scroll', '1io' ),
							'fixed'  => __( 'Fixed', '1io' ),
						),
					),
				),

				/* Footer Background Size */
				'fl-footer-bg-size'       => array(
					'setting' => array(
						'default'   => 'auto',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Scale', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'auto'    => __( 'None', '1io' ),
							'contain' => __( 'Fit', '1io' ),
							'cover'   => __( 'Fill', '1io' ),
						),
					),
				),

				/* Footer Text Color */
				'fl-footer-text-color'    => array(
					'setting' => array(
						'default' => '#808080',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Text Color', '1io' ),
					),
				),

				/* Footer Link Color */
				'fl-footer-link-color'    => array(
					'setting' => array(
						'default' => '#428bca',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Link Color', '1io' ),
					),
				),

				/* Footer Hover Color */
				'fl-footer-hover-color'   => array(
					'setting' => array(
						'default' => '#428bca',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Hover Color', '1io' ),
					),
				),
			),
		),
		/* Footer Parallax */
		'fl-footer-effect'         => array(
			'title'   => _x( 'Footer Parallax', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Footer Effect  */
				'fl-footer-parallax-effect' => array(
					'setting' => array(
						'default' => 'disable',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Footer Parallax Effect', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'disable' => __( 'Disabled', '1io' ),
							'enable'  => __( 'Enabled', '1io' ),
						),
					),
				),
			),
		),

	),
));
