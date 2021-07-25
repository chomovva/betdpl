<?php


namespace betdpl;


if ( ! defined( 'WPINC' ) ) {
	die;
}


global $post;


$entries = get_entries();


?>


<tr class="form-field">
	<th scope="row" valign="top">
		<label for="select-gutenberg-taxonomy-description"><?php _e( 'Описание на Gutenberg', BETDPL_NAME ); ?></label>
	</th>
	<td>
		<?php if ( is_array( $entries ) && ! empty( $entries ) ) : $selected = get_description_id( array_key_exists( 'tag_ID', $_GET ) ? $_GET[ 'tag_ID' ] : '' ); ?>
			<select class="postform" name="<?php echo BETDPL_NAME; ?>">
				<option value="">-</option>
				<?php foreach ( $entries as $entry ) : setup_postdata( $post = $entry ); ?>
					<option value="<?php echo get_the_ID(); ?>" <?php selected( $selected, get_the_ID(), true ); ?> >
						<?php echo get_the_title( $post ); ?>
					</option>
				<?php endforeach; wp_reset_postdata(); ?>
			</select>
			<p class="description">
				<?php
					printf(
						'Добавьте <a href="%s" target="_blank">новое описание</a> или выберите существующее из списка ниже',
						admin_url( add_query_arg( [ 'post_type' => BETDPL_POST_TYPE_NAME ], 'post-new.php' ) )
					);
				?>
			</p>
		<?php endif; ?>
	</td>
</tr>