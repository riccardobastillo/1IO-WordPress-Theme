<?php

/* General Panel */
FLCustomizer::add_panel('fl-general', array(
	'title'    => _x( 'General', 'Customizer panel title.', '1io' ),
	'sections' => array(

		/* Layout Section */
		'fl-layout'       => array(
			'title'   => _x( 'Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Layout Width */
				'fl-layout-width'        => array(
					'setting' => array(
						'default' => 'full-width',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Width', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'boxed'      => __( 'Boxed', '1io' ),
							'full-width' => __( 'Full Width', '1io' ),
						),
					),
				),

				/* Content Width */
				'fl-content-width'       => array(
					'setting' => array(
						'default' => '1020',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Content Width', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 960,
							'max'  => 1920,
							'step' => 1,
						),
					),
				),

				/* Spacing */
				'fl-layout-spacing'      => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Spacing', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 150,
							'step' => 1,
						),
					),
				),

				/* Drop Shadow Size */
				'fl-layout-shadow-size'  => array(
					'setting' => array(
						'default' => '0',
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

				/* Drop Shadow Color */
				'fl-layout-shadow-color' => array(
					'setting' => array(
						'default' => '#d9d9d9',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Drop Shadow Color', '1io' ),
					),
				),

				/* Scroll To Top Button */
				'fl-scroll-to-top'       => array(
					'setting' => array(
						'default' => 'disable',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Scroll To Top Button', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'enable'  => __( 'Enabled', '1io' ),
							'disable' => __( 'Disabled', '1io' ),
						),
					),
				),
				/* Framework */
				'fl-framework'           => array(
					'setting' => array(
						'default' => 'base',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'CSS Framework', '1io' ),
						'type'        => 'select',
						'description' =>
						__( 'Select a CSS framework for the theme. Default is a bare minimal Bootstrap 3.', '1io' ),
						'choices'     => array(
							'base'        => __( 'Minimal Bootstrap 3', '1io' ),
							'base-4'      => __( 'Minimal Bootstrap 4', '1io' ),
							'bootstrap'   => __( 'Full Bootstrap 3', '1io' ),
							'bootstrap-4' => __( 'Full Bootstrap 4', '1io' ),
						),
					),
				),

				/* Font Awesome */
				'fl-awesome'             => array(
					'setting' => array(
						'default' => 'none',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Font Awesome Icons', '1io' ),
						'type'        => 'select',
						'description' =>
						__( 'Select which icon library to load on all pages. If unsure choose None.', '1io' ),
						'choices'     => array(
							'none' => __( 'None', '1io' ),
							'fa4'  => __( 'Font Awesome 4 Shim', '1io' ),
							'fa5'  => __( 'Font Awesome 5', '1io' ),
						),
					),
				),
				/* Medium Breakpoint */
				'fl-medium-breakpoint'      => array(
					'setting' => array(
						'default' => 992,
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Theme Medium Breakpoint', '1io' ),
						'description' => __( 'Medium device behavior starts below this setting.', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 500,
							'max'  => 1200,
							'step' => 1,
						),
					),
				),

				/* Mobile Breakpoint */
				'fl-mobile-breakpoint'      => array(
					'setting' => array(
						'default' => 768,
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Theme Mobile Breakpoint', '1io' ),
						'description' => __( 'Mobile device behavior starts below this setting.', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 500,
							'max'  => 1200,
							'step' => 1,
						),
					),
				),
			),
		),

		/* Body Background Section */
		'fl-body-bg'      => array(
			'title'   => _x( 'Background', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Background Color */
				'fl-body-bg-color'      => array(
					'setting' => array(
						'default' => '#f2f2f2',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Background Image */
				'fl-body-bg-image'      => array(
					'setting' => array(
						'default'   => '',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Background Image', '1io' ),
					),
				),

				/* Background Repeat */
				'fl-body-bg-repeat'     => array(
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

				/* Background Position */
				'fl-body-bg-position'   => array(
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

				/* Background Attachment */
				'fl-body-bg-attachment' => array(
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

				/* Background Size */
				'fl-body-bg-size'       => array(
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
			),
		),

		/* Accent Color Section */
		'fl-accent-color' => array(
			'title'   => _x( 'Accent Color', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Accent Color */
				'fl-accent'       => array(
					'setting' => array(
						'default' => '#428bca',
					),
					'control' => array(
						'class'       => 'WP_Customize_Color_Control',
						'label'       => __( 'Color', '1io' ),
						'description' => __( 'The accent color will be used to color elements such as links and buttons as well as various elements in your theme.', '1io' ),
					),
				),

				/* Accent Hover Color */
				'fl-accent-hover' => array(
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

		/* Heading Font Section */
		'fl-heading-font' => array(
			'title'   => _x( 'Headings', 'Customizer section title.', '1io' ),
			'options' => array(

				'fl-heading-style'       => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class'    => 'WP_Customize_Control',
						'type'     => 'select',
						'label'    => __( 'Style Headings', '1io' ),
						'priority' => 0,
						'choices'  => array(
							''      => __( 'All Headings', '1io' ),
							'title' => __( 'Custom H1 Style', '1io' ),
						),
					),
				),

				'fl-title-text-color'    => array(
					'setting' => array(
						'default' => '#333333',
					),
					'control' => array(
						'class'    => 'WP_Customize_Color_Control',
						'label'    => __( 'H1 Color', '1io' ),
						'priority' => 1.0,
					),
				),
				'fl-title-font-family'   => array(
					'setting' => array(
						'default' => 'Helvetica',
					),
					'control' => array(
						'class'    => 'FLCustomizerControl',
						'label'    => __( 'H1 Font Family', '1io' ),
						'priority' => 1.1,
						'type'     => 'font',
						'connect'  => 'fl-title-font-weight',
					),
				),
				/* Heading Font Weight */
				'fl-title-font-weight'   => array(
					'setting' => array(
						'default' => '400',
					),
					'control' => array(
						'class'    => 'FLCustomizerControl',
						'label'    => __( 'H1 Font Weight', '1io' ),
						'type'     => 'font-weight',
						'priority' => 1.2,
						'connect'  => 'fl-title-font-family',
					),
				),
				/* Heading Font Format */
				'fl-title-font-format'   => array(
					'setting' => array(
						'default' => 'none',
					),
					'control' => array(
						'class'    => 'WP_Customize_Control',
						'label'    => __( 'H1 Font Format', '1io' ),
						'priority' => 1.3,
						'type'     => 'select',
						'choices'  => array(
							'none'       => __( 'Regular', '1io' ),
							'capitalize' => __( 'Capitalize', '1io' ),
							'uppercase'  => __( 'Uppercase', '1io' ),
							'lowercase'  => __( 'Lowercase', '1io' ),
						),
					),
				),

				/* Below Title Styles */
				'fl-title-heading-line'  => array(
					'control' => array(
						'class'    => 'FLCustomizerControl',
						'type'     => 'line',
						'priority' => 2.0,
					),
				),

				/* Heading Text Color */
				'fl-heading-text-color'  => array(
					'setting' => array(
						'default' => '#333333',
					),
					'control' => array(
						'class'    => 'WP_Customize_Color_Control',
						'label'    => __( 'Color', '1io' ),
						'priority' => 3.0,
					),
				),

				/* Heading Font Family */
				'fl-heading-font-family' => array(
					'setting' => array(
						'default'   => 'Helvetica',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'    => 'FLCustomizerControl',
						'label'    => __( 'Font Family', '1io' ),
						'type'     => 'font',
						'connect'  => 'fl-heading-font-weight',
						'priority' => 3.1,
					),
				),

				/* Heading Font Weight */
				'fl-heading-font-weight' => array(
					'setting' => array(
						'default' => '400',
					),
					'control' => array(
						'class'    => 'FLCustomizerControl',
						'label'    => __( 'Font Weight', '1io' ),
						'type'     => 'font-weight',
						'connect'  => 'fl-heading-font-family',
						'priority' => 3.2,
					),
				),

				/* Heading Font Format */
				'fl-heading-font-format' => array(
					'setting' => array(
						'default'   => 'none',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'    => 'WP_Customize_Control',
						'label'    => __( 'Font Format', '1io' ),
						'type'     => 'select',
						'priority' => 3.3,
						'choices'  => array(
							'none'       => __( 'Regular', '1io' ),
							'capitalize' => __( 'Capitalize', '1io' ),
							'uppercase'  => __( 'Uppercase', '1io' ),
							'lowercase'  => __( 'Lowercase', '1io' ),
						),
					),
				),

				/* Line */
				'fl-heading-font-line1'  => array(
					'control' => array(
						'class'    => 'FLCustomizerControl',
						'type'     => 'line',
						'priority' => 4.0,
					),
				),

				/* H1 Font Size */
				'fl-h1-font-size'        => array(
					'setting' => array(
						'default'   => '36',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', '1io' ), 'H1' ),
						'type'       => 'slider',
						'priority'   => 5.0,
						'choices'    => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* H1 Line Height */
				'fl-h1-line-height'      => array(
					'setting' => array(
						'default'   => '1.4',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', '1io' ), 'H1' ),
						'priority'   => 5.1,
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
						'responsive' => true,
					),
				),

				/* H1 Letter Spacing */
				'fl-h1-letter-spacing'   => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', '1io' ), 'H1' ),
						'priority'   => 5.2,
						'type'       => 'slider',
						'choices'    => array(
							'min'  => -3,
							'max'  => 10,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* Line */
				'fl-h1-line'             => array(
					'control' => array(
						'class'    => 'FLCustomizerControl',
						'type'     => 'line',
						'priority' => 5.3,
					),
				),

				/* H2 Font Size */
				'fl-h2-font-size'        => array(
					'setting' => array(
						'default'   => '30',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', '1io' ), 'H2' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* H2 Line Height */
				'fl-h2-line-height'      => array(
					'setting' => array(
						'default'   => '1.4',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', '1io' ), 'H2' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
						'responsive' => true,
					),
				),

				/* H2 Letter Spacing */
				'fl-h2-letter-spacing'   => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', '1io' ), 'H2' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => -3,
							'max'  => 10,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* Line */
				'fl-h2-line'             => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* H3 Font Size */
				'fl-h3-font-size'        => array(
					'setting' => array(
						'default'   => '24',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', '1io' ), 'H3' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* H3 Line Height */
				'fl-h3-line-height'      => array(
					'setting' => array(
						'default'   => '1.4',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', '1io' ), 'H3' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
						'responsive' => true,
					),
				),

				/* H3 Letter Spacing */
				'fl-h3-letter-spacing'   => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', '1io' ), 'H3' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => -3,
							'max'  => 10,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* Line */
				'fl-h3-line'             => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* H4 Font Size */
				'fl-h4-font-size'        => array(
					'setting' => array(
						'default'   => '18',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', '1io' ), 'H4' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* H4 Line Height */
				'fl-h4-line-height'      => array(
					'setting' => array(
						'default'   => '1.4',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', '1io' ), 'H4' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
						'responsive' => true,
					),
				),

				/* H4 Letter Spacing */
				'fl-h4-letter-spacing'   => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', '1io' ), 'H4' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => -3,
							'max'  => 10,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* Line */
				'fl-h4-line'             => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* H5 Font Size */
				'fl-h5-font-size'        => array(
					'setting' => array(
						'default'   => '14',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', '1io' ), 'H5' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* H5 Line Height */
				'fl-h5-line-height'      => array(
					'setting' => array(
						'default'   => '1.4',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', '1io' ), 'H5' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
						'responsive' => true,
					),
				),

				/* H5 Letter Spacing */
				'fl-h5-letter-spacing'   => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', '1io' ), 'H5' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => -3,
							'max'  => 10,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* Line */
				'fl-h5-line'             => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* H6 Font Size */
				'fl-h6-font-size'        => array(
					'setting' => array(
						'default'   => '12',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Font Size', '%s stands for HTML heading tag.', '1io' ), 'H6' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* H6 Line Height */
				'fl-h6-line-height'      => array(
					'setting' => array(
						'default'   => '1.4',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Line Height', '%s stands for HTML heading tag.', '1io' ), 'H6' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
						'responsive' => true,
					),
				),

				/* H6 Letter Spacing */
				'fl-h6-letter-spacing'   => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						/* translators: %s: HTML heading tag */
						'label'      => sprintf( _x( '%s Letter Spacing', '%s stands for HTML heading tag.', '1io' ), 'H6' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => -3,
							'max'  => 10,
							'step' => 1,
						),
						'responsive' => true,
					),
				),
			),
		),

		/* Body Font Section */
		'fl-body-font'    => array(
			'title'   => _x( 'Text', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Body Text Color */
				'fl-body-text-color'  => array(
					'setting' => array(
						'default' => '#808080',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Color', '1io' ),
					),
				),

				/* Body Font Family */
				'fl-body-font-family' => array(
					'setting' => array(
						'default' => 'Helvetica',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Family', '1io' ),
						'type'    => 'font',
						'connect' => 'fl-body-font-weight',
					),
				),

				/* Body Font Weight */
				'fl-body-font-weight' => array(
					'setting' => array(
						'default' => '400',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Weight', '1io' ),
						'type'    => 'font-weight',
						'connect' => 'fl-body-font-family',
					),
				),

				/* Body Font Size */
				'fl-body-font-size'   => array(
					'setting' => array(
						'default'   => '14',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						'label'      => __( 'Font Size', '1io' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
						'responsive' => true,
					),
				),

				/* Body Line Height */
				'fl-body-line-height' => array(
					'setting' => array(
						'default'   => '1.45',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'      => 'FLCustomizerControl',
						'label'      => __( 'Line Height', '1io' ),
						'type'       => 'slider',
						'choices'    => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
						'responsive' => true,
					),
				),
			),
		),
		/* Buttons Section */
		'fl-buttons'      => array(
			'title'   => _x( 'Buttons', 'Customizer section title.', '1io' ),
			'options' => array(
				'fl-button-style'                  => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Button Style', '1io' ),
						'type'    => 'select',
						'choices' => array(
							''       => __( 'None (default)', '1io' ),
							'custom' => __( 'Custom', '1io' ),
						),
					),
				),

				/* Line */
				'fl-button-color-line'             => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),


				'fl-button-color'                  => array(
					'setting' => array(
						'default'   => '#808080',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Color', '1io' ),
					),
				),
				'fl-button-hover-color'            => array(
					'setting' => array(
						'default'   => '#555',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Hover Color', '1io' ),
					),
				),
				'fl-button-background-color'       => array(
					'setting' => array(
						'default'   => '#fff',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),
				'fl-button-background-hover-color' => array(
					'setting' => array(
						'default'   => '#eee',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Hover Color', '1io' ),
					),
				),

				/* Line */
				'fl-button-font-line'              => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Body Font Family */
				'fl-button-font-family'            => array(
					'setting' => array(
						'default' => 'Helvetica',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Family', '1io' ),
						'type'    => 'font',
						'connect' => 'fl-button-font-weight',
					),
				),
				/* Body Font Weight */
				'fl-button-font-weight'            => array(
					'setting' => array(
						'default' => '400',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Font Weight', '1io' ),
						'type'    => 'font-weight',
						'connect' => 'fl-button-font-family',
					),
				),

				'fl-button-font-size'              => array(
					'setting' => array(
						'default' => '16',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => _x( 'Font Size', 'Font size for buttons.', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 10,
							'max'  => 72,
							'step' => 1,
						),
					),
				),
				'fl-button-line-height'            => array(
					'setting' => array(
						'default' => '1.2',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Line Height', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 1,
							'max'  => 2.5,
							'step' => 0.05,
						),
					),
				),
				'fl-button-text-transform'         => array(
					'setting' => array(
						'default'   => 'none',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => _x( 'Text Transform', 'Text transform for buttons.', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'none'       => __( 'Regular', '1io' ),
							'capitalize' => __( 'Capitalize', '1io' ),
							'uppercase'  => __( 'Uppercase', '1io' ),
							'lowercase'  => __( 'Lowercase', '1io' ),
						),
					),
				),

				/* Line */
				'fl-button-border-line'            => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),
				'fl-button-border-style'           => array(
					'setting' => array(
						'default'   => 'none',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => _x( 'Border Style', 'Border style for buttons.', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'none'    => __( 'None', '1io' ),
							'solid'   => __( 'Solid', '1io' ),
							'dotted'  => __( 'Dotted', '1io' ),
							'dashed'  => __( 'Dashed', '1io' ),
							'double'  => __( 'Double', '1io' ),
							'groove'  => __( 'Groove', '1io' ),
							'ridge'   => __( 'Ridge', '1io' ),
							'inset'   => __( 'Inset', '1io' ),
							'outset'  => __( 'Outset', '1io' ),
							'initial' => __( 'Initial', '1io' ),
							'inherit' => __( 'Inherit', '1io' ),
						),
					),
				),
				'fl-button-border-width'           => array(
					'setting' => array(
						'default'   => '0',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => _x( 'Border Width', 'Border width for buttons.', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 10,
							'step' => 1,
						),
					),
				),
				'fl-button-border-color'           => array(
					'setting' => array(
						'default'   => '',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Border Color', '1io' ),
					),
				),
				'fl-button-border-radius'          => array(
					'setting' => array(
						'default'   => 0,
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => _x( 'Border Radius', 'Font size for buttons.', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 25,
							'step' => 1,
						),
					),
				),
			),
		),
		/* Social Links Section */
		'fl-social-links' => array(
			'title'   => _x( 'Social Links', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Social Icons Color */
				'fl-social-icons-color'       => array(
					'setting' => array(
						'default' => 'mono',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Social Icons Color', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'branded' => __( 'Branded', '1io' ),
							'mono'    => __( 'Monochrome', '1io' ),
							'custom'  => __( 'Custom', '1io' ),
						),
					),
				),

				/* Social Icons bg Shape */
				'fl-social-icons-bg-shape'    => array(
					'setting' => array(
						'default' => 'circle',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Background Shape', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'circle' => __( 'Round', '1io' ),
							'square' => __( 'Square', '1io' ),
						),
					),
				),

				/* Social Icons bg Color */
				'fl-social-icons-bg-color'    => array(
					'setting' => array(
						'default' => '#000',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Social Icons fg Color */
				'fl-social-icons-fg-color'    => array(
					'setting' => array(
						'default' => '#FFF',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Icon Color', '1io' ),
					),
				),

				/* Social Icons hover Color */
				'fl-social-icons-hover-color' => array(
					'setting' => array(
						'default' => '#666',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Hover Color', '1io' ),
					),
				),

				/* Drop Shadow Size */
				'fl-social-icons-size'        => array(
					'setting' => array(
						'default' => '2',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Icon Size', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 1,
							'max'  => 8,
							'step' => 1,
						),
					),
				),



				/* Social Links (no need to translate brand names) */
				'fl-social-facebook'          => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Facebook',
					),
				),
				'fl-social-twitter'           => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Twitter',
					),
				),
				'fl-social-google'            => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Google',
					),
				),
				'fl-social-snapchat'          => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Snapchat',
					),
				),
				'fl-social-linkedin'          => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'LinkedIn',
					),
				),
				'fl-social-yelp'              => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Yelp',
					),
				),
				'fl-social-xing'              => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Xing',
					),
				),
				'fl-social-pinterest'         => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Pinterest',
					),
				),
				'fl-social-tumblr'            => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Tumblr',
					),
				),
				'fl-social-vimeo'             => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Vimeo',
					),
				),
				'fl-social-youtube'           => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'YouTube',
					),
				),
				'fl-social-flickr'            => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Flickr',
					),
				),
				'fl-social-instagram'         => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Instagram',
					),
				),
				'fl-social-skype'             => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Skype',
					),
				),
				'fl-social-dribbble'          => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Dribbble',
					),
				),
				'fl-social-500px'             => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => '500px',
					),
				),
				'fl-social-blogger'           => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'Blogger',
					),
				),
				'fl-social-github'            => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => 'GitHub',
					),
				),
				'fl-social-rss'               => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => __( 'RSS', '1io' ),
					),
				),
				'fl-social-email'             => array(
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => __( 'Email', '1io' ),
					),
				),
			),
		),
	),
));
