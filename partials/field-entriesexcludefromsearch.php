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
			name="<?php echo esc_attr( BETDPL_NAME . '[entriesexcludefromsearch]' ); ?>"
			<?php checked( true, $options[ 'entriesexcludefromsearch' ], true ); ?>
			value="on"
		/>
		<?php _e( 'Исключить этот тип записей из поиска по сайту', BETDPL_NAME ); ?>
	</label>
</div>