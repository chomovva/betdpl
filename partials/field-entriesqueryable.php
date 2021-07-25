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
			name="<?php echo BETDPL_NAME . '[entriesqueryable]'; ?>"
			<?php checked( true, $options[ 'entriesqueryable' ], true ); ?>
			value="on"
		/>
		<?php _e( 'Включит публичный просмотр записей этого типа - это значит что во фронт-энде будут работать URL запросы для этого типа записей', BETDPL_NAME ); ?>
	</label>
</div>