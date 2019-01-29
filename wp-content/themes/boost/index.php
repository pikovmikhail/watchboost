<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Boost_Normal
*/
?>
<?php get_header(); ?>

<!-- Fallback for IE 8 and IE 9 -->
<!--[if IE]>
<style>
.button.border:after{
top: 29px;
}
.button.border:hover:before, .button.border:hover:after {
border-bottom: 3px solid #e04e5e;
}
</style>
<![endif]-->

<!-- <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->

<section id="blog-hero" class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h1 class="text-center bignoodleFont primary_orange_text">Blog</h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-7">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-4">
				<div class="card">
					<a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Card image cap"></a>
					<div class="card-body">
					  <a href="<?php the_permalink() ?>"><h4 class="card-title koverwatchFont primary_orange_text"><?php the_title(); ?></h4></a>
					  <?php
						  function the_excerpt_max_charlength($charlength) {
						  $excerpt = get_the_excerpt();
						  $charlength++;

						  if ( mb_strlen( $excerpt ) > $charlength ) {
							  $subex = mb_substr( $excerpt, 0, $charlength - 5 );
							  $exwords = explode( ' ', $subex );
							  $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
							  if ( $excut < 0 ) {
								  echo mb_substr( $subex, 0, $excut );
							  } else {
								  echo $subex;
							  }
							  echo '[...]';
						  } else {
							  echo $excerpt;
						  }
						}
					  ?>
					  <p class="card-text montserratFont secondary_white_text"><?php the_excerpt_max_charlength(200); ?></p>
					  <a href="<?php the_permalink() ?>" style="text-decoration:underline;" class="koverwatchFont primary_orange_text">READ MORE</a>
					</div>
				</div>
			</div>
        <h2></h2>
<?php endwhile; else: ?>
    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
</div>
	</div>
</section>
<?php
get_footer();
?>
