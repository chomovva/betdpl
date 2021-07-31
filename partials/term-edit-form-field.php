<?php


namespace betdpl;


if ( ! defined( 'WPINC' ) ) {
	die;
}


global $post;


$entries = get_entries();


$selected = get_description_id( array_key_exists( 'tag_ID', $_GET ) ? absint( $_GET[ 'tag_ID' ] ) : '' );


?>


<tr class="form-field">
	<th scope="row" valign="top">
		<label for="select-gutenberg-taxonomy-description"><?php _e( 'Description on Gutenberg', BETDPL_NAME ); ?></label>
	</th>
	<td>
		<?php if ( is_array( $entries ) && ! empty( $entries ) ) : ?>
			<select class="postform" name="<?php echo esc_attr( BETDPL_NAME ); ?>">
				<option value="">-</option>
				<?php foreach ( $entries as $entry ) : setup_postdata( $post = $entry ); ?>
					<option value="<?php echo get_the_ID(); ?>" <?php selected( $selected, get_the_ID(), true ); ?> >
						<?php echo esc_attr( get_the_title( $post ) ); ?>
					</option>
				<?php endforeach; wp_reset_postdata(); ?>
			</select>
			<p class="description">
				<?php
					printf(
						__( 'Add <a href="%s" target="_blank"> new description </a> or select an existing one from the list below', BETDPL_NAME ),
						esc_url( admin_url( add_query_arg( [ 'post_type' => BETDPL_POST_TYPE_NAME ], 'post-new.php' ) ) )
					);
				?>
			</p>
		<?php endif; ?>
	</td>
</tr>