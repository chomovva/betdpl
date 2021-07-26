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
			name="<?php echo esc_attr( BETDPL_NAME . '[entriesshowinnavmenus]' ); ?>"
			<?php checked( true, $options[ 'entriesshowinnavmenus' ], true ); ?>
			value="on"
		/>
		<?php _e( 'Включить возможность выбирать этот тип записи в меню навигации', BETDPL_NAME ); ?>
	</label>
</div>