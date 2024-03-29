<?php

if ( ! comments_open() && '0' == get_comments_number() ) {
	return;
}
if ( post_password_required() ) {
	return;
}

?>
<div class="fl-comments">

	<?php do_action( 'fl_comments_open' ); ?>

	<?php if ( have_comments() ) : ?>
	<div class="fl-comments-list">

		<h3 class="fl-comments-list-title">
			<?php

			$num_comments = get_comments_number();

			if ( $num_comments ) {

				printf(
					/* translators: 1: Coments list title */
					esc_html( _nx( '%1$s Comment', '%1$s Comments', get_comments_number(), 'Comments list title.', '1io' ) ),
					number_format_i18n( $num_comments )
				);

			} else {

				_e( 'No Comments', '1io' );

			}

			?>
		</h3>

		<ol id="comments">
		<?php
		wp_list_comments( array(
			'callback' => 'FLTheme::display_comment',
		) );
		?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 ) : ?>
		<nav class="fl-comments-list-nav clearfix">
			<div class="fl-comments-list-prev"><?php previous_comments_link(); ?></div>
			<div class="fl-comments-list-next"><?php next_comments_link(); ?></div>
		</nav>
		<?php endif; ?>

	</div>
	<?php endif; ?>
	<?php

	comment_form( array(
		'id_form'              => 'fl-comment-form',
		'class_form'           => 'fl-comment-form',
		'id_submit'            => 'fl-comment-form-submit',
		'class_submit'         => 'btn btn-primary',
		'name_submit'          => 'submit',
		'label_submit'         => __( 'Submit Comment', '1io' ),
		'title_reply'          => _x( 'Leave a Comment', 'Respond form title.', '1io' ),
		'title_reply_to'       => __( 'Leave a Reply', '1io' ),
		'cancel_reply_link'    => __( 'Cancel Reply', '1io' ),
		'format'               => 'xhtml',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',

		'comment_field'        => '<label for="comment">' . _x( 'Comment', 'Comment form label: comment content.', '1io' ) . '</label><textarea name="comment" class="form-control" cols="60" rows="8" tabindex="4"></textarea><br />',
		/* translators: %s: Please, keep the HTML tags */
		'must_log_in'          => '<p>' . sprintf( _x( 'You must be <a%s>logged in</a> to post a comment.', 'Please, keep the HTML tags.', '1io' ), ' href="' . esc_url( home_url( '/wp-login.php' ) ) . '?redirect_to=' . urlencode( get_permalink() ) . '"' ) . '</p>',
		/* translators: %s: user name */
		'logged_in_as'         => '<p>' . sprintf( __( 'Logged in as %s.', '1io' ), '<a href="' . esc_url( home_url( '/wp-admin/profile.php' ) ) . '">' . $user_identity . '</a>' ) . ' <a href="' . wp_logout_url( get_permalink() ) . '" title="' . __( 'Log out of this account', '1io' ) . '">' . __( 'Log out &raquo;', '1io' ) . '</a></p>',


	) );

	?>
	<?php do_action( 'fl_comments_close' ); ?>
</div>
