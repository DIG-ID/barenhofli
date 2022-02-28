<?php

// Adds customizer section for the social icons.
$wp_customize->add_section(
	'social_section',
	array(
		'priority'       => 80,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Socials', 'barenhofli' ),
		'description'    => __( 'Edit here the links for Kreuz Bern socials', 'barenhofli' ),
		'panel'          => 'barenhofli_theme_panel',
	)
);

// Facebook
$wp_customize->add_setting(
	'facebook_url',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'facebook_url',
		array(
			'label'   => __( 'Facebook', 'barenhofli' ),
			'type'    => 'url',
			'section' => 'social_section',
		)
	)
);

// Twitter
$wp_customize->add_setting(
	'twitter_url',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'twitter_url',
		array(
			'label'   => __( 'Twitter', 'barenhofli' ),
			'type'    => 'url',
			'section' => 'social_section',
		)
	)
);

// LinkedIn
$wp_customize->add_setting(
	'linkedin_url',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'linkedin_url',
		array(
			'label'   => __( 'LinkedIn', 'barenhofli' ),
			'type'    => 'url',
			'section' => 'social_section',
		)
	)
);

// Instagram
$wp_customize->add_setting(
	'instagram_url',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram_url',
		array(
			'label'   => __( 'Instagram', 'barenhofli' ),
			'type'    => 'url',
			'section' => 'social_section',
		)
	)
);

// Youtube
$wp_customize->add_setting(
	'youtube_url',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'youtube_url',
		array(
			'label'   => __( 'Youtube', 'barenhofli' ),
			'type'    => 'url',
			'section' => 'social_section',
		)
	)
);
