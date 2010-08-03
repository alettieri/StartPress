<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage alettieri
 * @since alettieri 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . 'Pages:', 'after' => '' ) ); ?>
				<?php edit_post_link( 'Edit', '', '' ); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>