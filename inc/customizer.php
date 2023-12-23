<?php

/**
 * Think Ecommerce Theme Customizer
 * @package Think Ecommerce
 */

 function Think_Ecommerce_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> __( 'Copyright Settings','think-ecommerce' ),
			'description'	=> __( 'Copyright Section','think-ecommerce' )
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> __( 'Copyright', 'think-ecommerce' ),
					'description'	=> __( 'Please, add your copyright information here', 'think-ecommerce' ),
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);
	/*----------------------------------------------------------------------------------------------*/
	// Slider Section

	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> __( 'Slider Settings', 'think-ecommerce' ),
			'description'	=> __( 'Slider Section', 'think-ecommerce' )
		)
	);     

	        // Field 1 - Slider Page Number 1

			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label'			=> __( 'Set slider page 1','think-ecommerce' ),
					'description'	=> __( 'Set slider page 1','think-ecommerce' ),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			//   Field 2 - Slider Button Text 1

			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label'			=> __( 'Button Text for Page 1','think-ecommerce'),
					'description'	=> __( 'Button Text for Page 1','think-ecommerce'),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 3 - Slider Button URL Number 1 

			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label'			=> __( 'URL for Page 1','think-ecommerce' ),
					'description'	=> __( 'URL for Page 1','think-ecommerce' ),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

// -----------------------------------------------------------------------------------------------

			// Field 1 - Slider Page Number 2

			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label'			=> __('Set slider page 2', 'think-ecommerce' ),
					'description'	=> __('Set slider page 2', 'think-ecommerce' ),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			//   Field 2 - Slider Button Text 2

			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label'			=> __('Button Text for Page 2','think-ecommerce'),
					'description'	=> __('Button Text for Page 2','think-ecommerce'),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 3 - Slider Button URL Number 2 

			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label'			=> __( 'URL for Page 2', 'think-ecommerce' ),
					'description'	=> __( 'URL for Page 2', 'think-ecommerce' ),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);


	// ------------------------------------------------------------------------------------------------------------

	// Field 1 - Slider Page Number 3

	$wp_customize->add_setting(
		'set_slider_page3', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_page3', array(
			'label'			=> __('Set slider page 3' , 'think-ecommerce' ),
			'description'	=> __('Set slider page 3' , 'think-ecommerce' ),
			'section'		=> 'sec_slider',
			'type'			=> 'dropdown-pages'
		)
	);

	//   Field 2 - Slider Button Text 3

	$wp_customize->add_setting(
		'set_slider_button_text3', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_slider_button_text3', array(
			'label'			=> __( 'Button Text for Page 3', 'think-ecommerce' ),
			'description'	=> __( 'Button Text for Page 3', 'think-ecommerce' ),
			'section'		=> 'sec_slider',
			'type'			=> 'text'
		)
	);

	// Field 3 - Slider Button URL Number 3 

	$wp_customize->add_setting(
		'set_slider_button_url3', array(
			'type'					=> 'theme_mod',
			'default'				=> '',
			'sanitize_callback'		=> 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'set_slider_button_url3', array(
			'label'			=> __( 'URL for Page 3', 'think-ecommerce' ),
			'description'	=> __( 'URL for Page 3', 'think-ecommerce' ),
			'section'		=> 'sec_slider',
			'type'			=> 'url'
		)
	);

	/*----------------------------------------------------------------------------------------------*/
	// Home Page Settings

	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> __( 'Home Page Products and Blog Settings', 'thik-ecommerce' ) ,
			'description'	=> __( 'Home Page Section', 'thik-ecommerce' )
		)
	);     


			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label'			=> __( 'Popular Products Max Number', 'think-ecommerce' ),
					'description'	=> __( 'Popular Products Max Number', 'think-ecommerce' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'			=> __( 'Popular Products Max Columns', 'think-ecommerce' ),
					'description'	=> __( 'Popular Products Max Columns', 'think-ecommerce' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			=> __( 'New Arrivals Max Number', 'think-ecommerce' ),
					'description'	=> __( 'New Arrivals Max Number', 'think-ecommerce' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			=> __( 'New Arrivals Max Columns', 'think-ecommerce' ),
					'description'	=> __( 'New Arrivals Max Columns', 'think-ecommerce' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Deal of the Week Checkbox

			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'Think_ecommerce_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> __( 'Show Deal of the Week?', 'think-ecommerce' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			// Deal of the Week Product ID

			$wp_customize->add_setting(
				'set_deal', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'			=> __( 'Deal of th Week Product ID', 'think-ecommerce' ),
					'description'	=> __( 'Product ID to Display', 'think-ecommerce' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);
}
add_action( 'customize_register', 'Think_ecommerce_customizer' );

function Think_ecommerce_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}
?>