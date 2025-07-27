<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wealth_Elite_Advisors
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area container mx-auto pt-8 mt-8">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<span class="mt-8 block bg-primary w-[10%] h-[0.3rem]"></span>
		<h4 class="comments-title">
			<?php
			$wealthelite_advisors_comment_count = get_comments_number();
			if ( '1' === $wealthelite_advisors_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'wealthelite-advisors' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $wealthelite_advisors_comment_count, 'comments title', 'wealthelite-advisors' ) ),
					number_format_i18n( $wealthelite_advisors_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h4><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wealthelite-advisors' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
