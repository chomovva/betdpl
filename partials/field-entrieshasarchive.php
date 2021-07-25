<?php


namespace betdpl;


if ( ! defined( 'WPINC' ) ) {
	die;
}


$options = get_plugin_options();


?>


<div>
	<label>
		<input
			type="checkbox"
			name="<?php echo BETDPL_NAME . '[entrieshasarchive]'; ?>"
			<?php checked( true, $options[ 'entrieshasarchive' ], true ); ?>
			value="on"
		/>
		<?php _e( 'Включить поддержку страниц архивов для этого типа записей', BETDPL_NAME ); ?>
	</label>
</div>