<?php

/* Content Panel */
FLCustomizer::add_panel('fl-content', array(
	'title'    => _x( 'Content', 'Customizer panel title.', '1io' ),
	'sections' => array(

		/* Content Background Section */
		'fl-content-bg'       => array(
			'title'   => _x( 'Content Background', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Content Background Color */
				'fl-content-bg-color'      => array(
					'setting' => array(
						'default' => '#ffffff',
					),
					'control' => array(
						'class' => 'WP_Customize_Color_Control',
						'label' => __( 'Background Color', '1io' ),
					),
				),

				/* Content Background Opacity */
				'fl-content-bg-opacity'    => array(
					'setting' => array(
						'default' => '100',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Background Opacity (%)', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 0,
							'max'  => 100,
							'step' => 1,
						),
					),
				),

				/* Content Background Image */
				'fl-content-bg-image'      => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class' => 'WP_Customize_Image_Control',
						'label' => __( 'Background Image', '1io' ),
					),
				),

				/* Content Background Repeat */
				'fl-content-bg-repeat'     => array(
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

				/* Content Background Position */
				'fl-content-bg-position'   => array(
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

				/* Content Background Attachment */
				'fl-content-bg-attachment' => array(
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

				/* Content Background Size */
				'fl-content-bg-size'       => array(
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

		/* Blog Section */
		'fl-content-blog'     => array(
			'title'   => _x( 'Blog Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Blog Layout */
				'fl-blog-layout'                      => array(
					'setting' => array(
						'default' => 'sidebar-right',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Sidebar Position', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'sidebar-right' => __( 'Sidebar Right', '1io' ),
							'sidebar-left'  => __( 'Sidebar Left', '1io' ),
							'no-sidebar'    => __( 'No Sidebar', '1io' ),
						),
					),
				),

				/* Blog Sidebar Size */
				'fl-blog-sidebar-size'                => array(
					'setting' => array(
						'default' => '4',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Sidebar Size', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'4'      => _x( 'Large', 'Sidebar size.', '1io' ),
							'3'      => _x( 'Medium', 'Sidebar size.', '1io' ),
							'2'      => _x( 'Small', 'Sidebar size.', '1io' ),
							'custom' => _x( 'Custom', 'Sidebar size.', '1io' ),
						),
					),
				),

				/* Custom Blog Sidebar Size */
				'fl-blog-custom-sidebar-size'         => array(
					'setting' => array(
						'default'           => '25',
						'sanitize_callback' => 'FLCustomizer::sanitize_number',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Custom Sidebar Width', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 10,
							'max'  => 50,
							'step' => 1,
						),
					),
				),

				/* Blog Sidebar Display */
				'fl-blog-sidebar-display'             => array(
					'setting' => array(
						'default' => 'desktop',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Sidebar Display', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'desktop' => __( 'Desktop Only', '1io' ),
							'always'  => __( 'Always', '1io' ),
						),
					),
				),

				/* Blog Sidebar Location */
				'fl-blog-sidebar-location'            => array(
					'setting' => array(
						'default'           => 'single,blog,search,archive',
						'sanitize_callback' => 'FLCustomizer::sanitize_checkbox_multiple',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Sidebar Location', '1io' ),
						'type'    => 'checkbox-multiple',
						'choices' => array(
							'blog'    => __( 'Blog', '1io' ),
							'single'  => __( 'Single Post', '1io' ),
							'search'  => __( 'Search page', '1io' ),
							'archive' => __( 'Archives', '1io' ),
						),
					),
				),

				/* Enable / Disable Sidebar for Post Types */
				'fl-blog-sidebar-location-post-types' => array(
					'setting' => array(
						'default'           => 'all',
						'sanitize_callback' => 'FLCustomizer::sanitize_checkbox_multiple',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Apply Sidebar To Post Types', '1io' ),
						'type'    => 'checkbox-multiple',
						'choices' => array(
							'custom' => 'post_types',
						),
					),
				),

				/* Line */
				'fl-blog-line1'                       => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Post Author */
				'fl-blog-post-author'                 => array(
					'setting' => array(
						'default' => 'visible',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Post Author', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),

				/* Post Date */
				'fl-blog-post-date'                   => array(
					'setting' => array(
						'default' => 'visible',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Post Date', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),

				/* Comment Count */
				'fl-blog-comment-count'               => array(
					'setting' => array(
						'default' => 'visible',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Comment Count', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),
			),
		),

		/* Archive Pages Section */
		'fl-content-archives' => array(
			'title'   => _x( 'Archive Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Show Full Text */
				'fl-archive-show-full'     => array(
					'setting' => array(
						'default' => '0',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Show Full Text', '1io' ),
						'description' => __( 'Whether or not to show the full post. If no, the excerpt will be shown.', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'1' => __( 'Yes', '1io' ),
							'0' => __( 'No', '1io' ),
						),
					),
				),

				/* Read More Text */
				'fl-archive-readmore-text' => array(
					'setting' => array(
						'default' => __( 'Read More', '1io' ),
					),
					'control' => array(
						'class' => 'WP_Customize_Control',
						'label' => __( '"Read More" Text', '1io' ),
						'type'  => 'text',
					),
				),

				/* Featured Image */
				'fl-archive-show-thumbs'   => array(
					'setting' => array(
						'default' => 'beside',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Featured Image', '1io' ),
						'type'    => 'select',
						'choices' => array(
							''            => __( 'Hidden', '1io' ),
							'above-title' => __( 'Above Titles', '1io' ),
							'above'       => __( 'Above Posts', '1io' ),
							'beside'      => __( 'Beside Posts', '1io' ),
						),
					),
				),

				/* Featured Image Size */
				'fl-archive-thumb-size'    => array(
					'setting' => array(
						'default' => 'large',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Image Size', '1io' ),
						'type'    => 'select',
						'choices' => archive_post_image_sizes(),
					),
				),

			),
		),

		/* Post Pages Section */
		'fl-content-posts'    => array(
			'title'   => _x( 'Post Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Featured Image */
				'fl-posts-show-thumbs' => array(
					'setting' => array(
						'default' => '',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Featured Image', '1io' ),
						'type'    => 'select',
						'choices' => array(
							''            => __( 'Hidden', '1io' ),
							'above-title' => __( 'Above Title', '1io' ),
							'above'       => __( 'Above Post', '1io' ),
							'beside'      => __( 'Beside Post', '1io' ),
						),
					),
				),

				/* Featured Image Size */
				'fl-posts-thumb-size'  => array(
					'setting' => array(
						'default' => 'thumbnail',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Image Size', '1io' ),
						'type'    => 'select',
						'choices' => single_post_image_sizes(),
					),
				),

				/* Post Categories */
				'fl-posts-show-cats'   => array(
					'setting' => array(
						'default' => 'visible',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Post Categories', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),

				/* Post Tags */
				'fl-posts-show-tags'   => array(
					'setting' => array(
						'default' => 'visible',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Post Tags', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),

				/* Prev/Next Post Links */
				'fl-posts-show-nav'    => array(
					'setting' => array(
						'default' => 'hidden',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Prev/Next Post Links', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),

				/* Author Box */
				'fl-post-author-box'   => array(
					'setting' => array(
						'default' => 'hidden',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Author Box', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),

			),
		),

		/* WooCommerce Section */
		'fl-content-woo'      => array(
			'title'   => _x( 'WooCommerce Layout', 'Customizer section title.', '1io' ),
			'options' => array(

				/* WooCommerce Layout */
				'fl-woo-layout'              => array(
					'setting' => array(
						'default' => 'no-sidebar',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Sidebar Position', '1io' ),
						'description' => __( 'The location of the WooCommerce sidebar.', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'sidebar-right' => __( 'Sidebar Right', '1io' ),
							'sidebar-left'  => __( 'Sidebar Left', '1io' ),
							'no-sidebar'    => __( 'No Sidebar', '1io' ),
						),
					),
				),

				/* WooCommerce Sidebar Size */
				'fl-woo-sidebar-size'        => array(
					'setting' => array(
						'default' => '4',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Sidebar Size', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'4'      => _x( 'Large', 'Sidebar size.', '1io' ),
							'3'      => _x( 'Medium', 'Sidebar size.', '1io' ),
							'2'      => _x( 'Small', 'Sidebar size.', '1io' ),
							'custom' => _x( 'Custom', 'Sidebar size.', '1io' ),
						),
					),
				),

				/* Custom WooCommerce Sidebar Size */
				'fl-woo-custom-sidebar-size' => array(
					'setting' => array(
						'default'           => '25',
						'sanitize_callback' => 'FLCustomizer::sanitize_number',
					),
					'control' => array(
						'class'   => 'FLCustomizerControl',
						'label'   => __( 'Custom Sidebar Width', '1io' ),
						'type'    => 'slider',
						'choices' => array(
							'min'  => 10,
							'max'  => 50,
							'step' => 1,
						),
					),
				),

				/* WooCommerce Sidebar Display */
				'fl-woo-sidebar-display'     => array(
					'setting' => array(
						'default' => 'desktop',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Sidebar Display', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'desktop' => __( 'Desktop Only', '1io' ),
							'always'  => __( 'Always', '1io' ),
						),
					),
				),

				/* WooCommerce Sidebar Location */
				'fl-woo-sidebar-location'    => array(
					'setting' => array(
						'default'           => 'single,shop',
						'sanitize_callback' => 'FLCustomizer::sanitize_checkbox_multiple',
					),
					'control' => array(
						'class'       => 'FLCustomizerControl',
						'label'       => __( 'Sidebar Location', '1io' ),
						'description' => __( 'WooCommerce pages that you want sidebar to appear.', '1io' ),
						'type'        => 'checkbox-multiple',
						'choices'     => array(
							'single'  => __( 'Single Product', '1io' ),
							'shop'    => __( 'Shop Page', '1io' ),
							'archive' => __( 'Categories', '1io' ),
						),
					),
				),

				/* Line */
				'fl-woo-line1'               => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Number of Columns */
				'fl-woo-columns'             => array(
					'setting' => array(
						'default' => '4',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Number of Columns', '1io' ),
						'description' => __( 'Select how many columns on product category pages?', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'1' => __( '1 Column', '1io' ),
							'2' => __( '2 Columns', '1io' ),
							'3' => __( '3 Columns', '1io' ),
							'4' => __( '4 Columns', '1io' ),
							'5' => __( '5 Columns', '1io' ),
							'6' => __( '6 Columns', '1io' ),
						),
					),
				),

				/* Line */
				'fl-woo-line2'               => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Number of Columns */
				'fl-woo-gallery'             => array(
					'setting' => array(
						'default'   => 'enabled',
						'transport' => 'postMessage',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'Product Gallery', '1io' ),
						'description' => __( 'Select how product galleries are handled.', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'enabled' => __( 'Use WooCommerce 3.x Gallery (default)', '1io' ),
							'none'    => __( 'Disabled', '1io' ),
						),
					),
				),

				/* Line */
				'fl-woo-line3'               => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* Add to Cart Button */
				'fl-woo-cart-button'         => array(
					'setting' => array(
						'default' => 'hidden',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( '"Add to Cart" Button', '1io' ),
						'description' => __( 'Show the "Add to Cart" button on product category pages?', '1io' ),
						'type'        => 'select',
						'choices'     => array(
							'visible' => __( 'Visible', '1io' ),
							'hidden'  => __( 'Hidden', '1io' ),
						),
					),
				),

				/* Line */
				'fl-woo-line4'               => array(
					'control' => array(
						'class' => 'FLCustomizerControl',
						'type'  => 'line',
					),
				),

				/* WooCommerce CSS */
				'fl-woo-css'                 => array(
					'setting' => array(
						'default' => 'enabled',
					),
					'control' => array(
						'class'       => 'WP_Customize_Control',
						'label'       => __( 'WooCommerce Styling', '1io' ),
						'description' => __( "Enable or disable the theme's custom WooCommerce styles.", "1io" ),
						'type'        => 'select',
						'choices'     => array(
							'enabled'  => __( 'Enabled', '1io' ),
							'disabled' => __( 'Disabled', '1io' ),
						),
					),
				),
			),
		),

		/* Lightbox Section */
		'fl-lightbox-layout'  => array(
			'title'   => _x( 'Lightbox', 'Customizer section title.', '1io' ),
			'options' => array(

				/* Lightbox */
				'fl-lightbox' => array(
					'setting' => array(
						'default' => 'enabled',
					),
					'control' => array(
						'class'   => 'WP_Customize_Control',
						'label'   => __( 'Lightbox', '1io' ),
						'type'    => 'select',
						'choices' => array(
							'enabled'  => __( 'Enabled', '1io' ),
							'disabled' => __( 'Disabled', '1io' ),
						),
					),
				),
			),
		),
	),
));
