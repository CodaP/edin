<?php
/**
 * Template Name: Journal Article
 *
 * @package Edin
 */

get_header(); ?>

	<div class="hero">
		<div class="hero-wrapper">
			<h1 class="page-title">
				<?php single_cat_title(); ?>
			</h1>
		</div>
	</div>

	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<ul class="article-links">
				<?php while ( have_posts() ) : the_post(); ?>

					<li>
						<a href="<?php echo get_permalink() ?>"><h3><?php the_title() ?></h3></a>
						<em>
						<?php
							$author = get_post_meta(get_the_ID(), 'author', true);
							echo $author;
						?>
						</em>
					</li>

				<?php endwhile; // end of the loop. ?>
				</ul>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .content-wrapper -->

<?php get_footer(); ?>
