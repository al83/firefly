<?php
/**
 * Template (part) displaying content on singles.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0.0
 * @version 1.0.4
 */

?>

<?php $theme_options = get_theme_mod( 'developry_theme_options' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<header class="content-header">
		<h1 class="content-title">
			<?php the_title(); ?>
			<small class="text-muted">
				<?php //the_time( 'F j, Y' ); ?> <!-- by -->
				<?php //print esc_html( get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) ) ); ?>
			</small>
		</h1>
	</header><!-- /content-header -->

	<?php if ( 'show' !== $theme_options['featured_image'] && has_post_thumbnail() ) : ?>
		<p>
			<img src="<?php print esc_url( get_the_post_thumbnail_url() ); ?>" class="img-fluid mx-auto d-block" />
		</p>
	<?php endif; ?>

	<main class="content-main">
		<?php

			the_content();

			wp_link_pages(
				array(
					'before' => '<nav class="lead my-3 p-3 bg-light text-center">Pages &mdash; ',
					'after'  => '</nav>',
				)
			);
		?>
	</main><!-- /content-main -->

	<section id="comments" class="content-comments">
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template(); ?>
		<?php else : ?>
			<p class="lead">
				<!-- Comments are disabled. -->
			</p>
		<?php endif; ?>
	</section><!-- /content-comments -->

	<footer class="content-navigtion">
		<?php //get_template_part( 'template-parts/pagination', 'post' ); ?>
	</footer><!-- /content-navigation -->
</article>
<?php endwhile; ?>
<?php endif; ?>
