<?php

/* Header Panel */
FLCustomizer::add_panel('fl-header', array(
	'title'    => _x( 'Header', 'Customizer panel title.', '1io' ),
	'sections' => array(

		/* Top Bar Layout Section */
		'fl-topbar-layout' => array(
			'title'   => _x( 'Top Bar Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Top Bar Layout */
				'fl-topbar-layout'      => array(
					'setting' => array(
						'default' => 'none',
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
				'fl-topbar-line1'       => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Top Bar Column 1 Layout */
				'fl-topbar-col1-layout' => array(
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
							'text-social' => __( 'Text &amp; Social Icons', '1io' ),
							'menu'        => __( 'Menu', '1io' ),
							'menu-social' => __( 'Menu &amp; Social Icons', '1io' ),
							'social'      => __( 'Social Icons', '1io' ),
						),
					),
				),

				/* Top Bar Column 1 Text */
				'fl-topbar-col1-text'   => array(
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
				'fl-topbar-line2'       => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Top Bar Column 2 Layout */
				'fl-topbar-col2-layout' => array(
					'setting' => array(
						'default' => 'menu',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						/* translators: %d: Column order number */
						'label'   => sprintf( _x( 'Column %d Layout', '%d stands for column order number.', '1io' ), 2 ),
						'type'    => 'select',
						'choices' => array(
							'text'        => __( 'Text', '1io' ),
							'text-social' => __( 'Text &amp; Social Icons', '1io' ),
							'menu'        => __( 'Menu', '1io' ),
							'menu-social' => __( 'Menu &amp; Social Icons', '1io' ),
							'social'      => __( 'Social Icons', '1io' ),
						),
					),
				),

				/* Top Bar Column 2 Text */
				'fl-topbar-col2-text'   => array(
					'setting' => array(
						'default'   => '',
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

		/* Top Bar Style Section */
		'fl-topbar-style'  => array(
			'title'   => _x( 'Top Bar Style', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Top Bar Background Color */
				'fl-topbar-bg-color'      => array(
					'setting' => array(
						'default' => '#ffffff',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Top Bar Background Opacity */
				'fl-topbar-bg-opacity'    => array(
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

				/* Top Bar Background Gradient */
				'fl-topbar-bg-gradient'   => array(
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

				/* Top Bar Background Image */
				'fl-topbar-bg-image'      => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Background Image', '1io' ),
					),
				),

				/* Top Bar Background Repeat */
				'fl-topbar-bg-repeat'     => array(
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

				/* Top Bar Background Position */
				'fl-topbar-bg-position'   => array(
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

				/* Top Bar Background Attachment */
				'fl-topbar-bg-attachment' => array(
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

				/* Top Bar Background Size */
				'fl-topbar-bg-size'       => array(
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

				/* Top Bar Text Color */
				'fl-topbar-text-color'    => array(
					'setting' => array(
						'default' => '#808080',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Text Color', '1io' ),
					),
				),

				/* Top Bar Link Color */
				'fl-topbar-link-color'    => array(
					'setting' => array(
						'default' => '#428bca',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Link Color', '1io' ),
					),
				),

				/* Top Bar Hover Color */
				'fl-topbar-hover-color'   => array(
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

		/* Header Layout Section */
		'fl-header-layout' => array(
			'title'   => _x( 'Header Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Header Layout */
				'fl-header-layout'            => array(
					'setting' => array(
						'default' => 'right',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Layout', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'none'                 => __( 'None', '1io' ),
							'bottom'               => __( 'Nav Bottom', '1io' ),
							'right'                => __( 'Nav Right', '1io' ),
							'left'                 => __( 'Nav Left', '1io' ),
							'centered'             => __( 'Nav Centered', '1io' ),
							'centered-inline-logo' => __( 'Nav Centered + Inline Logo', '1io' ),
							'vertical-left'        => __( 'Nav Vertical Left', '1io' ),
							'vertical-right'       => __( 'Nav Vertical Right', '1io' ),
						),
					),
				),

				/* Inline Logo Side */
				'fl-inline-logo-side'         => array(
					'setting' => array(
						'default' => 'right',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Inline Logo Position', '1io' ),
						'description' => __( 'The inline logo will appear on the left or right side of odd menu items.', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'left'  => __( 'Left', '1io' ),
							'right' => __( 'Right', '1io' ),
						),
					),
				),

				/* Vertical Header Width */
				'fl-vertical-header-width'    => array(
					'setting' => array(
						'default'   => '230',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Vertical Nav Width', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 200,
							'max'  => 400,
							'step' => 1,
						),
					),
				),

				/* Header Padding */
				'fl-header-padding'           => array(
					'setting' => array(
						'default'   => '30',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Padding', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 100,
							'step' => 1,
						),
					),
				),

				/* Fixed Header */
				'fl-fixed-header'             => array(
					'setting' => array(
						'default' => 'fadein',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Fixed Header', '1io' ),
						'description' => __( 'Show a fixed header as the page is scrolled.', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'hidden' => _x( 'Disabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
							'fadein' => _x( 'Fade In', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
							'shrink' => _x( 'Shrink', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
							'fixed'  => _x( 'Fixed', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
						),
					),
				),

				/* Hide Header Until Scroll */
				'fl-hide-until-scroll-header' => array(
					'setting' => array(
						'default' => 'disable',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Hide Header Until Scroll', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'disable' => __( 'Disabled', '1io' ),
							'enable'  => __( 'Enabled', '1io' ),
						),
					),
				),

				/* Scroll Distance for Hide Header Until Scroll */
				'fl-scroll-distance'          => array(
					'setting' => array(
						'default' => '200',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Scroll Distance', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 50,
							'max'  => 1000,
							'step' => 1,
						),
					),
				),

				/* Line */
				'fl-header-line1'             => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Header Content Layout */
				'fl-header-content-layout'    => array(
					'setting' => array(
						'default' => 'social-text',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Content Layout', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'none'        => __( 'None', '1io' ),
							'text'        => __( 'Text', '1io' ),
							'social'      => __( 'Social Icons', '1io' ),
							'social-text' => __( 'Text &amp; Social Icons', '1io' ),
						),
					),
				),

				/* Header Content Text */
				'fl-header-content-text'      => array(
					'setting' => array(
						'default' => 'Call Us! 1-800-555-5555',
					),
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => __( 'Content Text', '1io' ),
						'type'  => 'textarea',
					),
				),
			),
		),

		/* Header Style Section */
		'fl-header-style'  => array(
			'title'   => _x( 'Header Style', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Header Background Color */
				'fl-header-bg-color'      => array(
					'setting' => array(
						'default' => '#ffffff',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Header Background Opacity */
				'fl-header-bg-opacity'    => array(
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

				/* Nav Drop Shadow Size */
				'fl-nav-shadow-size'      => array(
					'setting' => array(
						'default' => '4',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Drop Shadow Size', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 75,
							'step' => 1,
						),
					),
				),

				/* Nav Shadow Color */
				'fl-nav-shadow-color'     => array(
					'setting' => array(
						'default' => '#cecece',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Drop Shadow Color', '1io' ),
					),
				),

				/* Header Background Gradient */
				'fl-header-bg-gradient'   => array(
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

				/* Header Background Image */
				'fl-header-bg-image'      => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Background Image', '1io' ),
					),
				),

				/* Header Background Repeat */
				'fl-header-bg-repeat'     => array(
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

				/* Header Background Position */
				'fl-header-bg-position'   => array(
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

				/* Header Background Attachment */
				'fl-header-bg-attachment' => array(
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

				/* Header Background Size */
				'fl-header-bg-size'       => array(
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

				/* Header Text Color */
				'fl-header-text-color'    => array(
					'setting' => array(
						'default' => '#808080',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Text Color', '1io' ),
					),
				),

				/* Header Link Color */
				'fl-header-link-color'    => array(
					'setting' => array(
						'default' => '#808080',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Link Color', '1io' ),
					),
				),

				/* Header Hover Color */
				'fl-header-hover-color'   => array(
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

		/* Header Logo Section */
		'fl-header-logo'   => array(
			'title'   => _x( 'Header Logo', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Logo Type */
				'fl-logo-type'                 => array(
					'setting' => array(
						'default' => 'text',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Logo Type', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'text'  => __( 'Text', '1io' ),
							'image' => __( 'Image', '1io' ),
						),
					),
				),

				/* Logo Image (Regular) */
				'fl-logo-image'                => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Logo Image (Regular)', '1io' ),
					),
				),

				/* Logo Image (Retina) */
				'fl-logo-image-retina'         => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Logo Image (Retina)', '1io' ),
					),
				),

				/* Sticky Header Logo */
				'fl-sticky-header-logo'        => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class'       => 'WP_Customize_Image_Control',
						'label'       => __( 'Fade In Header Logo', '1io' ),
						'description' => __( 'Use a different logo when you have a Fade In header', '1io' ),
					),
				),

				/* Sticky Header Logo (Retina) */
				'fl-sticky-header-logo-retina' => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Fade In Header Logo (Retina)', '1io' ),
					),
				),

				/* Mobile Header Logo */
				'fl-mobile-header-logo'        => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class'       => 'WP_Customize_Image_Control',
						'label'       => __( 'Mobile Header Logo', '1io' ),
						'description' => __( 'Use a different logo for mobile devices.', '1io' ),
					),
				),

				/* Logo Text */
				'fl-logo-text'                 => array(
					'setting' => array(
						'default'   => get_bloginfo( 'name' ),
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => __( 'Logo Text', '1io' ),
						'type'  => 'text',
					),
				),

				/* Logo Text */
				'fl-theme-tagline'             => array(
					'setting' => array(
						'default'   => false,
						'transport' => 'refresh',
					),
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => __( 'Show Tagline', '1io' ),
						'type'  => 'checkbox',
					),
				),

				/* Logo Font Family */
				'fl-logo-font-family'          => array(
					'setting' => array(
						'default'   => 'Helvetica',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Family', '1io' ),
						'type'    => 'font',
						'connect' => 'fl-logo-font-weight',
					),
				),

				/* Logo Font Weight */
				'fl-logo-font-weight'          => array(
					'setting' => array(
						'default' => '400',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Weight', '1io' ),
						'type'    => 'font-weight',
						'connect' => 'fl-logo-font-family',
					),
				),

				/* Logo Font Size */
				'fl-logo-font-size'            => array(
					'setting' => array(
						'default'   => '30',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Size', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 14,
							'max'  => 72,
							'step' => 1,
						),
					),
				),

				/* Logo Top Spacing */
				'fl-header-logo-top-spacing'   => array(
					'setting' => array(
						'default'   => '50',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Logo Top Spacing', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 1,
							'max'  => 200,
							'step' => 1,
						),
					),
				),
			),
		),

		/* Nav Layout Section */
		'fl-nav-layout'    => array(
			'title'   => _x( 'Nav Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Nav Item Spacing */
				'fl-nav-item-spacing'           => array(
					'setting' => array(
						'default'   => '15',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Nav Item Spacing', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 5,
							'max'  => 30,
							'step' => 1,
						),
					),
				),

				/* Nav Menu Top Spacing */
				'fl-nav-menu-top-spacing'       => array(
					'setting' => array(
						'default'   => '30',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Nav Menu Top Spacing', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 1,
							'max'  => 200,
							'step' => 1,
						),
					),
				),

				/* Nav Item Align */
				'fl-nav-item-align'             => array(
					'setting' => array(
						'default' => 'left',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Nav Item Align', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'left'   => __( 'Left', '1io' ),
							'center' => __( 'Center', '1io' ),
							'right'  => __( 'Right', '1io' ),
						),
					),
				),

				/* Nav Search */
				'fl-header-nav-search'          => array(
					'setting' => array(
						'default' => 'visible',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Nav Search Icon', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => _x( 'Enabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
							'hidden'  => _x( 'Disabled', 'Used for multiple Customizer options values. Use generalized form of the word when translating.', '1io' ),
						),
					),
				),

				/* Mobile Nav Toggle */
				'fl-mobile-nav-toggle'          => array(
					'setting' => array(
						'default' => 'button',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Responsive Nav Toggle', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'button' => __( 'Menu Button', '1io' ),
							'icon'   => __( 'Hamburger Icon', '1io' ),
						),
					),
				),

				/* Mobile Nav Text */
				'fl-mobile-nav-text'            => array(
					'setting' => array(
						'default' => _x( 'Menu', 'Mobile navigation toggle button text.', '1io' ),
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Menu Button Text', '1io' ),
						'type'        => 'text',
						'input_attrs' => array(
							'placeholder' => _x( 'Menu', 'Mobile navigation toggle button text.', '1io' ),
						),
					),
				),

				/* Responsive Nav Breakpoint */
				'fl-nav-breakpoint'             => array(
					'setting' => array(
						'default' => 'mobile',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Responsive Nav Breakpoint', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'always'        => __( 'Always', '1io' ),
							'medium-mobile' => __( 'Medium &amp; Small Devices Only', '1io' ),
							'mobile'        => __( 'Small Devices Only', '1io' ),
						),
					),
				),

				/* Responsive Nav Layout */
				'fl-nav-mobile-layout'          => array(
					'setting' => array(
						'default' => 'dropdown',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Responsive Nav Layout', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'dropdown'     => __( 'Dropdown', '1io' ),
							'overlay'      => __( 'Flyout Overlay', '1io' ),
							'push'         => __( 'Flyout Push', '1io' ),
							'push-opacity' => __( 'Flyout Push with Opacity', '1io' ),
						),
					),
				),

				'fl-nav-mobile-layout-position' => array(
					'setting' => array(
						'default' => 'left',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Responsive Nav Layout Position', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'left'  => __( 'Left', '1io' ),
							'right' => __( 'Right', '1io' ),
						),
					),
				),

				/* Submenu Toggle */
				'fl-nav-submenu-toggle'         => array(
					'setting' => array(
						'default' => 'disable',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Responsive Submenu Toggle', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'disable' => __( 'Disabled', '1io' ),
							'enable'  => __( 'Enabled', '1io' ),
						),
					),
				),

				/* Responsive Collapse */
				'fl-nav-collapse-menu'          => array(
					'setting' => array(
						'default' => '0',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Responsive Collapse', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'1' => __( 'Yes', '1io' ),
							'0' => __( 'No', '1io' ),
						),
						'description' => __( 'Only allow one menu item at a time to be expanded?', '1io' ),
					),
				),
			),
		),

		/* Nav Style Section */
		'fl-nav-style'     => array(
			'title'   => _x( 'Nav Style', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Submenu Indicator */
				'fl-nav-submenu-indicator' => array(
					'setting' => array(
						'default' => 'disable',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Submenu Indicator', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'disable' => __( 'Disabled', '1io' ),
							'enable'  => __( 'Enabled', '1io' ),
						),
					),
				),

				/* Nav Background Color */
				'fl-nav-bg-color'          => array(
					'setting' => array(
						'default' => '#ffffff',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Nav Background Opacity */
				'fl-nav-bg-opacity'        => array(
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

				/* Nav Background Gradient */
				'fl-nav-bg-gradient'       => array(
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

				/* Nav Background Image */
				'fl-nav-bg-image'          => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Background Image', '1io' ),
					),
				),

				/* Nav Background Repeat */
				'fl-nav-bg-repeat'         => array(
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

				/* Nav Background Position */
				'fl-nav-bg-position'       => array(
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

				/* Nav Background Attachment */
				'fl-nav-bg-attachment'     => array(
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

				/* Nav Background Size */
				'fl-nav-bg-size'           => array(
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

				/* Nav Link Color */
				'fl-nav-link-color'        => array(
					'setting' => array(
						'default' => '#808080',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Link Color', '1io' ),
					),
				),

				/* Nav Hover Color */
				'fl-nav-hover-color'       => array(
					'setting' => array(
						'default' => '#428bca',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Hover Color', '1io' ),
					),
				),

				/* Nav Font Family */
				'fl-nav-font-family'       => array(
					'setting' => array(
						'default'   => 'Helvetica',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Family', '1io' ),
						'type'    => 'font',
						'connect' => 'fl-nav-font-weight',
					),
				),

				/* Nav Font Weight */
				'fl-nav-font-weight'       => array(
					'setting' => array(
						'default' => '400',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Weight', '1io' ),
						'type'    => 'font-weight',
						'connect' => 'fl-nav-font-family',
					),
				),

				/* Nav Font Format */
				'fl-nav-font-format'       => array(
					'setting' => array(
						'default'   => 'none',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Font Format', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'none'       => __( 'Regular', '1io' ),
							'capitalize' => __( 'Capitalize', '1io' ),
							'uppercase'  => __( 'Uppercase', '1io' ),
							'lowercase'  => __( 'Lowercase', '1io' ),
						),
					),
				),

				/* Nav Font Size */
				'fl-nav-font-size'         => array(
					'setting' => array(
						'default'   => '16',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Size', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 10,
							'max'  => 25,
							'step' => 1,
						),
					),
				),
			),
		),
	),
));
