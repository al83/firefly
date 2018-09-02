<?php
/**
 * Template displaying archive posts/pages for author, category, tag & date.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0.0
 * @version 1.0.4
 */

get_header();
?>

<div id="body" class="body bg-white mt-5">
	<div class="container pt-5 <?php if ( ! empty( $theme_options['container'] ) ) { print esc_html( $theme_options['container'] ); } ?>">
		<div class="row">
			<div class="col-12">
				<main class="page-content" id="page-content">
					<div class="text-center">
						<?php get_template_part( 'template-parts/content' ); ?>
					</div>
					<?php get_template_part( 'template-parts/pagination' ); ?>
				</main><!-- /page-content -->
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /body -->

<?php
get_footer();
?>
