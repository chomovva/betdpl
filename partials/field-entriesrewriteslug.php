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
			name="<?php echo BETDPL_NAME . '[entriesrewriteslug]'; ?>"
			value="<?php echo $options[ 'entriesrewriteslug' ]; ?>"
		/>
		<?php _e( 'Префикс в ЧПУ', BETDPL_NAME ); ?>
	</label>
</div>