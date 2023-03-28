<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'Cognixia' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'Cognixia' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'Cognixia' ) . '</p>'
    ),
		
	//Option Section
	
    'sections' => array( 
    
				 array(
						'id'  => 'header',
						'title' => __( 'Header', 'Cognixia' ),

					),	
				 array(
						'id'  => 'footer',
						'title' => __( 'Footer', 'Cognixia' ),

					),
					
					
			),
	
	//Option Blog Detail section
	
    'settings'=> array( 
    
				 
				 //Option Header section
					array(
						'id' => 'header_logo_tab',
						'label' => 'Header Logo',
						'type' => 'tab',
						'section' => 'header'
				),
    	array(
						'id'          => 'header_logo',
						'label'       =>__( 'Upload Header Logo', 'Cognixia' ),
						//'desc'        => 'Upload Your Favicon',
						'type'        => 'upload',
						'section'     => 'header',
				),
				array(
					'id' => 'get_in_touch_text',
					'label' => 'Get in touch text',
					'type' => 'text',
					'section' => 'header'
				),
				array(
					'id' => 'get_in_touch_link',
					'label' => 'Get in touch link',
					'type' => 'text',
					'section' => 'header'
				),

// opotion header section

// option footer section
						array(
									'id' => 'footer_logo_tab',
									'label' => 'Footer Logo',
									'type' => 'tab',
									'section' => 'footer'
								),
								array(
									'id'          => 'footer_logo',
									'label'       => __( 'Upload Footer Logo', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'upload',
									'section'     => 'footer',
								),
								array(
									'id'          => 'footer_description',
									'label'       => __( 'Enter Description', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'text',
									'section'     => 'footer',
								),
								 
								array(
									'id'          => 'term_condition_text',
									'label'       => __( 'Term $ condition text ', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'text',
									'section'     => 'footer',
								),
								array(
									'id'          => 'term_condition_link',
									'label'       => __( 'Term $ condition text ', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'text',
									'section'     => 'footer',
								),  
								array(
									'id'          => 'privacy_policy_text',
									'label'       => __( 'Privacy Policy text  ', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'text',
									'section'     => 'footer',
								), 
								array(
									'id'          => 'privacy_policy_link',
									'label'       => __( 'Privacy Policy  link ', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'text',
									'section'     => 'footer',
								), 
								array(
									'id'          => 'Sitemap_text',
									'label'       => __( 'Sitemap text ', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'text',
									'section'     => 'footer',
								), 
								array(
									'id'          => 'Sitemap_link',
									'label'       => __( 'Sitemap link ', 'Cognixia' ),
									//'desc'        => 'Upload Your Favicon',
									'type'        => 'text',
									'section'     => 'footer',
								), 
							
       ),
	 
      
  );
  
  

  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}