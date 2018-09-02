<?php
/**
 * Template (part) displaying common header area.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0.0
 * @version 1.0.4
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<?php if ( get_header_textcolor() ) : ?>
	<style type="text/css">
		#header,
		#header a { 
			color: #<?php print get_header_textcolor(); ?>;
		}
	</style>
	<?php endif; ?>
</head>
<body class="<?php print esc_html( implode( ' ', get_body_class() ) ); ?>">
	<header id="header" class="header bg-light">
		<a class="skip-link screen-reader-text" href="#body">
			<?php printf( esc_html( 'Skip to content', 'developry-lite' ) ); ?>
		</a>
		<?php get_template_part( 'template-parts/navbar' ); ?>
	</header><!-- /header -->

	<?php if ( empty( $theme_options['featured_image'] ) || 'show' !== $theme_options['featured_image'] ) : ?>
		<p class="p-4"></p><!-- fixed header fix -->
	<?php endif; ?>
