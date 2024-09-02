<?php
/**
 * The Template for displaying all portfolio projects.
 */
get_header(); ?>

	<?php if ( ! post_password_required() ) { ?>

		<?php if ( have_posts() ) the_post();

		$project_parent = isset( $_GET['id'] ) && $_GET['id'] != '' ? $_GET['id'] : get_option( 'krown_portfolio_page', '' );
		$project_type = get_post_meta( $post->ID, 'krown_project_type', true );

		?>

		<div id="post-<?php echo $post->ID; ?>" <?php post_class( $project_type . ' project clearfix' ); ?>>

			<?php the_content(); ?>

		</div>

		<nav class="post-nav"><?php krown_nav_buttons( 'portfolio_category', $project_parent, __( 'Back to all projects', 'krown' ) . krown_svg( 'close' ) ); ?></nav>

	<?php } else { ?>

		<?php echo get_the_password_form(); ?>

	<?php } ?>

<?php get_footer(); ?>