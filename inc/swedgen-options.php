<?php
add_action( 'admin_menu', 'swedgen_add_admin_menu' );
add_action( 'admin_init', 'swedgen_settings_init' );


function swedgen_add_admin_menu(  ) { 

	add_menu_page( 'Swedgen', 'Swedgen Options', 'manage_options', 'swedgen', 'swedgen_options_page' );

}


function swedgen_settings_init(  ) { 

	register_setting( 'pluginPage', 'swedgen_settings' );

	add_settings_section(
		'swedgen_pluginPage_section', 
		__( 'Your section description', 'swedgen' ), 
		'swedgen_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'swedgen_text_field_0', 
		__( 'Settings field description', 'swedgen' ), 
		'swedgen_text_field_0_render', 
		'pluginPage', 
		'swedgen_pluginPage_section' 
	);

	add_settings_field( 
		'swedgen_text_field_1', 
		__( 'Settings field description', 'swedgen' ), 
		'swedgen_text_field_1_render', 
		'pluginPage', 
		'swedgen_pluginPage_section' 
	);

	add_settings_field( 
		'swedgen_radio_field_2', 
		__( 'Settings field description', 'swedgen' ), 
		'swedgen_radio_field_2_render', 
		'pluginPage', 
		'swedgen_pluginPage_section' 
	);

	add_settings_field( 
		'swedgen_checkbox_field_3', 
		__( 'Settings field description', 'swedgen' ), 
		'swedgen_checkbox_field_3_render', 
		'pluginPage', 
		'swedgen_pluginPage_section' 
	);

	add_settings_field( 
		'swedgen_select_field_4', 
		__( 'Settings field description', 'swedgen' ), 
		'swedgen_select_field_4_render', 
		'pluginPage', 
		'swedgen_pluginPage_section' 
	);


}


function swedgen_text_field_0_render(  ) { 

	$options = get_option( 'swedgen_settings' );
	?>
	<input type='text' name='swedgen_settings[swedgen_text_field_0]' value='<?php echo $options['swedgen_text_field_0']; ?>'>
	<?php

}


function swedgen_text_field_1_render(  ) { 

	$options = get_option( 'swedgen_settings' );
	?>
	<input type='text' name='swedgen_settings[swedgen_text_field_1]' value='<?php echo $options['swedgen_text_field_1']; ?>'>
	<?php

}


function swedgen_radio_field_2_render(  ) { 

	$options = get_option( 'swedgen_settings' );
	?>
	<input type='radio' name='swedgen_settings[swedgen_radio_field_2]' <?php checked( $options['swedgen_radio_field_2'], 1 ); ?> value='1'>
	<?php

}


function swedgen_checkbox_field_3_render(  ) { 

	$options = get_option( 'swedgen_settings' );
	?>
	<input type='checkbox' name='swedgen_settings[swedgen_checkbox_field_3]' <?php checked( $options['swedgen_checkbox_field_3'], 1 ); ?> value='1'>
	<?php

}


function swedgen_select_field_4_render(  ) { 

	$options = get_option( 'swedgen_settings' );
	?>
	<select name='swedgen_settings[swedgen_select_field_4]'>
		<option value='1' <?php selected( $options['swedgen_select_field_4'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['swedgen_select_field_4'], 2 ); ?>>Option 2</option>
	</select>

<?php

}


function swedgen_settings_section_callback(  ) { 

	echo __( 'This section description', 'swedgen' );

}


function swedgen_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>Swedgen</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>