<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage alettieri
 * @since alettieri 1.0
 */

get_header(); ?>



	<h1>Not Found</h1>
	<p>Apologies, but the page you requested could not be found. Perhaps searching will help.</p>
	<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>