	// Add Social Media Section
	$wp_customize->add_section( 'social-media' , array(
	    'title' => __( 'Social Media', 'visible' ),
	    'priority' => 30,
	    'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', 'visible' )
	) );

	// Add Twitter Setting
	$wp_customize->add_setting( 'twitter' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
	    'label' => __( 'Twitter', 'visible' ),
	    'section' => 'social-media',
	    'settings' => 'twitter',
	) ) );

	// Add Facebook Setting
	$wp_customize->add_setting( 'facebook' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
	    'label' => __( 'Facebook', 'visible' ),
	    'section' => 'social-media',
	    'settings' => 'facebook',
	) ) );

	// Add Google Plus Setting
	$wp_customize->add_setting( 'google-plus' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google-plus', array(
	    'label' => __( 'Google Plus', 'visible' ),
	    'section' => 'social-media',
	    'settings' => 'google-plus',
	) ) );

	// Add Linkedin Setting
	$wp_customize->add_setting( 'linkedin' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
	    'label' => __( 'Linkedin', 'visible' ),
	    'section' => 'social-media',
	    'settings' => 'linkedin',
	) ) );

	// Add Instagram Setting
	$wp_customize->add_setting( 'instagram' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
	    'label' => __( 'Instagram', 'visible' ),
	    'section' => 'social-media',
	    'settings' => 'instagram',
	) ) );

	// Add Pinterest Setting
	$wp_customize->add_setting( 'pinterest' , array( 'default' => '' ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
	    'label' => __( 'Pinterest', 'visible' ),
	    'section' => 'social-media',
	    'settings' => 'pinterest',
	) ) );
