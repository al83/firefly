<?php
/**
 * Template (part) displaying content on index / blog.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0.0
 * @version 1.0.4
 */

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $theme_options = get_theme_mod( 'developry_theme_options' ); ?>

<article id="post-<?php the_ID(); ?>" class="content <?php print esc_html( implode( ' ', get_post_class() ) ); ?>">
	<header class="content-header">
		<h2 class="content-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<?php if ( has_post_thumbnail() ) : ?>
			<p>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php print esc_url( get_the_post_thumbnail_url() ); ?>" class="img-fluid mx-auto d-block" />
				</a>
			</p>
		<?php endif;?>
	</header><!-- /content-header -->

	<main class="content-main">
		<p class="lead">
			<?php if ( '' !== get_the_excerpt() ) : ?>
				<?php print esc_html( get_the_excerpt() ); ?>
				<br />
			<?php endif; ?>
			<a href="<?php the_permalink(); ?>" class="mt-3 d-block">
				<?php printf( esc_html( 'Continue reading', 'developry-lite' ) ); ?>
			</a>
		</p>
		<?php // the_content(); // Uncomment this line and remove the class='lead' above if you need full content showing in /blog. ?>
	</main><!-- /content-main -->
</article><!-- /post -->
<?php endwhile; ?>
<?php endif; ?>
