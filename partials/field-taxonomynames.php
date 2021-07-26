<?php


namespace betdpl;


if ( ! defined( 'WPINC' ) ) {
	die;
}


$taxonomies = get_taxonomies( [
	'show_in_nav_menus'  => true,
	'public'             => true,
	'publicly_queryable' => true,
	'show_in_menu'       => true,
], 'objects', 'and' );
if ( empty( $taxonomies ) ) {
	echo wpautop( __( 'зарегистрированных таксономий отвечающим условиям работы плагина не найдено', BETDPL_NAME ), true );
} else {
	$taxonomy_names = get_plugin_taxonomy_names();
	foreach( $taxonomies as $taxonomy ) {
		?>
			<div>
				<label>
					<input
						type="checkbox"
						name="<?php echo esc_attr( $name . '[]' ); ?>"
						<?php checked( true, in_array( $taxonomy->name, $taxonomy_names ), true ); ?>
						value="<?php echo esc_attr( $taxonomy->name ); ?>"
					/>
					<?php echo esc_html( $taxonomy->label ); ?>
				</label>
			</div>
		<?php
	}
}