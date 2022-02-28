<?php

// Adds customizer section for the social icons.
$wp_customize->add_section(
	'social_section',
	array(
		'priority'       => 80,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Socials', 'kreuz-bern' ),
		'description'    => __( 'Edit here the links for Kreuz Bern socials', 'kreuz-bern' ),
		'panel'          => 'kreuz_theme_panel',
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
			'label'   => __( 'Facebook', 'kreuz-bern' ),
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
			'label'   => __( 'Twitter', 'kreuz-bern' ),
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
			'label'   => __( 'LinkedIn', 'kreuz-bern' ),
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
			'label'   => __( 'Instagram', 'kreuz-bern' ),
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
			'label'   => __( 'Youtube', 'kreuz-bern' ),
			'type'    => 'url',
			'section' => 'social_section',
		)
	)
);
