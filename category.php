<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Edin
 */

get_header(); ?>

	<div class="hero <?php echo edin_additional_class(); ?>">
		<?php if ( have_posts() ) : ?>

			<div class="hero-wrapper">
				<h1 class="page-title">
					<?php
						single_cat_title();
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</div>

		<?php else : ?>

			<div class="title-wrapper">
				<h1 class="page-title"><?php _e( 'Nothing Found', 'edin' ); ?></h1>
			</div>

		<?php endif; ?>
	</div><!-- .hero -->

	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						// The Query
						the_category_wp_tiles();
					?>
					<?php edin_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
