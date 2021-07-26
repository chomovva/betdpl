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
			type="text"
			id="entriesrewriteslug"
			name="<?php echo esc_attr( BETDPL_NAME . '[entriesrewriteslug]' ); ?>"
			value="<?php echo esc_attr( $options[ 'entriesrewriteslug' ] ); ?>"
		/>
		<?php _e( 'Префикс в ЧПУ', BETDPL_NAME ); ?>
	</label>
</div>