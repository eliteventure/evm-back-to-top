<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   EVM_Back_To_Top
 * @author    Jon Huther <jon@evm.io>
 * @license   GPL-2.0+
 * @link      http://evm.io
 * @copyright 2014 Jon Huther, Elite Venture Media
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<!-- @TODO: Provide markup for your options page here. -->

	<p>Use the form below to customize your Back To Top link.</p>
	<form method="post" action="options.php">

		<?php settings_fields( 'super-settings-group' ); ?>
		<?php do_settings_sections( 'super-settings-group' ); ?>

		<!-- Property: Link text -->
		<p><label for="EVM_Back_To_Top_link_text">Link Text</label><br>
		<input type="text" id="EVM_Back_To_Top_link_text" name="EVM_Back_To_Top_link_text" placeholder="Example: Back to Top" value="<?php echo get_option('EVM_Back_To_Top_link_text'); ?>"></p>
		
		<!-- Property: Alignment -->
		<p><label for="EVM_Back_To_Top_alignment">Alignment</label><br>
		<input type="text" id="EVM_Back_To_Top_alignment" name="EVM_Back_To_Top_alignment" list="alignment_list" placeholder="Example: Center">
		<datalist id="alignment_list">
			<option value="Left">
			<option value="Center">
			<option value="Right">
		</datalist>
		</p>
		<!-- Property: Text Color -->
		<p><label for="EVM_Back_To_Top_text_color">Text Color</label><br>
		<input type="color" id="EVM_Back_To_Top_text_color" name="EVM_Back_To_Top_text_color" value="<?php echo get_option('EVM_Back_To_Top_text_color'); ?>"></p>

		<!-- Property: Link Color -->
		<p><label for="EVM_Back_To_Top_background_color">Background Color</label><br>
		<input type="color" id="EVM_Back_To_Top_background_color" name="EVM_Back_To_Top_background_color" value="<?php echo get_option('EVM_Back_To_Top_background_color'); ?>"></p>
		
		<p><button>Submit</button></p>
	</form>

</div>
