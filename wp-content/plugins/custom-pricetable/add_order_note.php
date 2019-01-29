<?php
// require ABSPATH.'wp-load.php';
// require './vendor/autoload.php';
// use Automattic\WooCommerce\Client;

// add_action( 'wp_ajax_add_order_info', 'add_order_info' );
// add_action( 'wp_ajax_nopriv_add_order_info', 'add_order_info' );

// function add_order_info() {
// 	echo 'ok'; exit;


// 	$woocommerce = new Client(
// 	    'http://overwatchboostpro.edu/',
// 	    'ck_ca76ab4fca0eaceaae15433ce8cab6f9b1a1b5c3',
// 	    'cs_2308cd79ba1fdaa0154459b14bcc6cb810df7914',
// 	    [
// 	        'wp_api' => true,
// 	        'version' => 'wc/v1'
// 	    ]
// 	);

// 	$thank_you_platform = $_POST["thank_you_platform"];
// 	$thank_you_id = $_POST["thank_you_id"];
// 	$thank_you_boost_order = $_POST["thank_you_boost_order"];
// 	$thank_you_region = $_POST["thank_you_region"];
// 	$thank_you_overwatch_email = $_POST["thank_you_overwatch_email"];
// 	$thank_you_overwatch_password = $_POST["thank_you_overwatch_password"];
// 	exit;

// 	echo 'thank_you_platform'.$thank_you_platform.'<br>';
// 	echo 'thank_you_id'.$thank_you_id.'<br>';
// 	echo 'thank_you_boost_order'.$thank_you_boost_order.'<br>';
// 	echo 'thank_you_region'.$thank_you_region.'<br>';
// 	echo 'thank_you_overwatch_email'.$thank_you_overwatch_email.'<br>';
// 	echo 'thank_you_overwatch_password'.$thank_you_overwatch_password.'<br>';

// 	$message = isset($thank_you_boost_order) ? "
// 	Order: {$thank_you_boost_order} \n
// 	Platform: {$thank_you_platform} \n
// 	Region: {$thank_you_region} \n
// 	Overwatch Email: {$thank_you_overwatch_email} \n
// 	Overwatch Password: {$thank_you_overwatch_password}
// 	" : "
// 	Platform: {$thank_you_platform} \n
// 	Region: {$thank_you_region} \n
// 	Overwatch Email: {$thank_you_overwatch_email} \n
// 	Overwatch Password: {$thank_you_overwatch_password}
// 	";

// 	// title 
// 	// Title: Your Order ID: #0012345281( the system give an order ID automatically) from OverWatchBoost{ro

// 	// Hello [customer’s first name from Paypal]
// 	// We are happy to help you to provide you the best boosting service.
// 	// Here is your order details, please confirm. If you have any questions feel free to add us on Discord to receive instant respond at: DavidWest#7727

// 	// Order Details ( middle and in bond)
// 	// Login email:
// 	// Password:
// 	// Current Ranked: [ from the website]
// 	// Desired Ranked:: [from the website]
// 	// Estimated finished time: 4-14 days ( Better answer on discord)

// 	// Total: [ from the website]


// 	$data = [
// 	    "note" => $message
// 	];
// 	$response = $woocommerce->post("orders/{$thank_you_id}/notes", $data);
// 	$woocommerce->put("orders/{$thank_you_id}", ['status' => 'completed']);
// 	echo(json_encode("COMPLTED"));
// }
?>
