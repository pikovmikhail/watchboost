<?php
/**
* Template part for displaying page content in page.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Boost_Normal
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<header class="entry-header">
			<?php the_title('<h1 class="text-center bignoodleFont primary_orange_text entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->


		<div class="row justify-content-center secondary_white_text montserratFont">
			<div class="entry-content col-5">
				<?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'boost'),
                    'after'  => '</div>',
                ));
                ?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
