<?php


namespace betdpl;


if ( ! defined( 'WPINC' ) ) {
	die;
}


global $post;


$entries = get_entries();


?>


<div class="form-field">

	<label for="select-gutenberg-taxonomy-description">
		<?php _e( 'Описание на Gutenberg', BETDPL_NAME ); ?>
	</label>

	<?php if ( is_array( $entries ) && ! empty( $entries ) ) : ?>
		<select class="postform" name="<?php echo esc_attr( BETDPL_NAME ); ?>">
			<option value="">-</option>
			<?php foreach ( $entries as $entry ) : setup_postdata( $post = $entry ); ?>
				<option value="<?php echo get_the_ID(); ?>" >
					<?php echo esc_attr( get_the_title( $post ) ); ?>
				</option>
			<?php endforeach; wp_reset_postdata(); ?>
		</select>
		<p class="description">
			<?php
				printf(
					__( 'Добавьте <a href="%s" target="_blank">новое описание</a> или выберите существующее из списка ниже', BETDPL_NAME ),
					esc_url( admin_url( add_query_arg( [ 'post_type' => BETDPL_POST_TYPE_NAME ], 'post-new.php' ) ) )
				);
			?>
		</p>
	<?php endif; ?>

</div>