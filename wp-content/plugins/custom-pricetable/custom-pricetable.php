<?php
/*
	Plugin Name: Custom Price Table
*/

add_action('admin_menu', 'customPriceValue_setup_menu');

function customPriceValue_setup_menu(){
	$menu = add_menu_page( 'Boost Price Control Plugin Page', 'Boost Price', 'manage_options', 'boost-price', 'custom_price_table_main_function' );
	add_action( 'load-' . $menu, 'admin_custom_css' );
}

function admin_custom_css(){
    add_action( 'admin_enqueue_scripts', 'rsm_admin_enqueue_script' );
}

function rsm_admin_enqueue_script() {
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), '4.2.1', true );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'rsm-custom-style', plugin_dir_url( __FILE__ ) .'assets/custom_price_table.css' );
}

function custom_pricetable() {
	wp_enqueue_script( "rsm-gtag", "https://www.googletagmanager.com/gtag/js?id=AW-826172052");
	wp_register_script('boost-custom-js', get_template_directory_uri() .'/js/custom.js', array( 'jquery' ), NULL, true);
	$custom_price = get_option( 'rsm_custom_price', false );
	wp_localize_script('boost-custom-js', 'custom_price', $custom_price);
	wp_localize_script('boost-custom-js', 'admin_ajax_url', admin_url('admin-ajax.php'));
	wp_enqueue_script('boost-custom-js');
}
add_action( 'wp_enqueue_scripts', 'custom_pricetable' );

// wp_enqueue_style( 'rsm-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );
function custom_price_table_main_function(){

	if ( ! empty($_POST['submit']) ) {
		update_option( 'rsm_custom_price', $_POST );
	}

	$custom_price = get_option( 'rsm_custom_price', false );
	?>
<div class="price_update wrapper">
	<form method="post" action="">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="skill-rating-tab" data-toggle="tab" href="#skill-rating" role="tab" aria-controls="skill-rating" aria-selected="true">Skill Rating</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="solo-duo-tab" data-toggle="tab" href="#solo-duo" role="tab" aria-controls="solo-duo" aria-selected="false">Sold/Duo Games</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="placement-tab" data-toggle="tab" href="#placement" role="tab" aria-controls="placement" aria-selected="false">Placement Games</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="skill-rating" role="tabpanel" aria-labelledby="skill-rating-tab">
				<div class="row skill_rating">
					<?php
						$skill_rating = array();
						if ( ! empty($custom_price) && array_key_exists('skill_rating', $custom_price) ) {
							$skill_rating = $custom_price['skill_rating'];
						} else {
							$skill_rating = array(4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.5, 4.75, 4.75, 4.75, 4.75, 4.75, 4.75, 4.75, 4.75, 5.0, 5.0, 6.0, 6.0, 6.5, 6.5, 6.5, 7.0, 7.0, 7.5, 7.5, 8.0, 8.0, 8.5, 8.5, 8.5, 9.0, 9.0, 9.5, 9.5, 10.0, 10.0, 11.0, 11.0, 12.0, 12.0, 12.5, 13.0, 13.5, 14.0, 15.0, 16.0, 19.0, 20.0, 21.0, 21.5, 22.0, 22.5, 23.0, 24.0, 25.0, 26.0, 31.0, 33.0, 34.5, 35.5, 36.0, 36.5, 38.0, 41.0, 49.0, 54.0, 61.0, 68.0, 79.0, 89.0, 100.0, 125.0, 150.0, 200.0, 250.0, 325.0, 395.0, 445.0, 495.0, 495.0, 495.0, 495.0, 495.0, 495.0, 495.0, 495.0);
						}

						$i = 0;
					?>

					<?php for ( $row = 0; $row < 6; $row++ ) : ?>
						<div class="col-md-2">
							<?php for ( $col = 0; $col < 17 && $i < 100; $col ++, $i++ ) : ?>

								<label><?php echo $i * 50 . ' - ' . ($i + 1) * 50 ?></label><input type="text" name="skill_rating[<?php echo $i ?>]" value="<?php echo $skill_rating[$i] ?>"><br>

							<?php endfor ?>
						</div>
					<?php endfor; ?>

				</div>
			</div>
			<div class="tab-pane fade" id="solo-duo" role="tabpanel" aria-labelledby="solo-duo-tab">
				<div class="row solo_duo">
					<?php
						$solo_duo = array();
						if ( ! empty($custom_price) && array_key_exists('solo_duo', $custom_price) ) {
							$solo_duo = $custom_price['solo_duo'];
						} else {
							$solo_duo = array(4.9, 4.9, 4.9, 4.9, 4.9, 4.9, 4.9, 4.9, 4.9, 5.0, 5.0, 5.0, 5.0, 5.0, 5.0, 5.0, 5.0, 5.0, 5.0, 5.0, 5.2, 5.4, 5.6, 5.8, 6.0, 6.2, 6.4, 6.6, 6.8, 7.0, 7.1, 7.2, 7.3, 7.4, 7.5, 7.6, 7.7, 7.8, 7.9, 8.0, 8.1, 8.2, 8.3, 8.4, 8.5, 8.6, 8.7, 8.8, 8.9, 9.0, 9.2, 9.4, 9.6, 9.8, 10.0, 10.2, 10.4, 10.6, 10.8, 11.0, 11.2, 11.4, 11.6, 11.8, 12.0, 12.5, 13.0, 13.5, 14.0, 14.5, 15.0, 15.5, 16.0, 16.5, 17.0, 17.5, 18.0, 18.5, 19.0, 20.0, 21.0, 22.0, 23.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0, 24.0);
						}

						$i = 0;
					?>
					<?php for ( $row = 0; $row < 6; $row++ ) : ?>
						<div class="col-md-2">
							<?php for ( $col = 0; $col < 17 && $i < 100; $col ++, $i++ ) : ?>

								<label><?php echo $i * 50 . ' - ' . ($i + 1) * 50 ?></label><input type="text" name="solo_duo[<?php echo $i ?>]" value="<?php echo $solo_duo[$i] ?>"><br>

							<?php endfor ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
			<div class="tab-pane fade" id="placement" role="tabpanel" aria-labelledby="placement-tab">
				<div class="row placement">
					<div class="col-md-12">
					<?php
						$placement = array();
						if ( ! empty($custom_price) && array_key_exists('placement', $custom_price) ) {
							$placement = $custom_price['placement'];
						} else {
							$placement = array("Unranked" => 7, "1 - 1499" => 5, "1500 - 1999" => 5.5, "2000 - 2499" => 6.5, "2500 - 2999" => 7.5, "3000 - 3499" => 8.5, "3500 - 3999" => 9.5, "4000+" => 11, "default" => 7);
						}
					?>
					<?php foreach ( $placement as $key => $value ) { ?>

						<label><?php echo $key ?></label><input type="text" name="placement[<?php echo $key ?>]" value="<?php echo $value ?>"><br>

					<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="submit" name="submit" value="Update" class="btn btn-primary btn-lg">
			</div>
		</div>
	</form>
</div>
<?php
}








?>