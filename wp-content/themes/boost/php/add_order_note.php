<?php
require_once ABSPATH.'wp-load.php';
require_once(__DIR__.'/vendor/autoload.php');
use Automattic\WooCommerce\Client;

if(isset($_POST['thank_you_platform'])) {
	add_order_note();
}
$Title = '';
function add_order_note() {
	$woocommerce = new Client(
	    site_url(''),
	    'ck_ca76ab4fca0eaceaae15433ce8cab6f9b1a1b5c3',
	    'cs_2308cd79ba1fdaa0154459b14bcc6cb810df7914',
	    [
	        'wp_api' => true,
	        'version' => 'wc/v1'
	    ]
	);

	$platform = $_POST["platform"];
	$order_id = $_POST["order_id"];
	$boost_order = $_POST["boost_order"];
	$region = $_POST["region"];
	$product_id = $_POST["product_id"];
	$overwatch_email = $_POST["overwatch_email"];
	$overwatch_password = $_POST["overwatch_password"];
	$current_rank = $_POST["current_rank"];
	$desire_rank = $_POST["desire_rank"];
	$total_cash = $_POST["total_cash"];
	$customer_name = $_POST["customer_name"];
	$twitch_stream = $_POST["twitch_stream"];
	$duo_queue = $_POST["duo_queue"];
	// $message = $product_id == 36 ?
	// "Order: {$boost_order} \n
	// Platform: {$platform} \n
	// Region: {$region} \n
	// Overwatch Email: {$overwatch_email} \n
	// Overwatch Password: {$overwatch_password} "
	// :
	// "Platform: {$platform} \n
	// Region: {$region} \n
	// Overwatch Email: {$overwatch_email} \n
	// Overwatch Password: {$overwatch_password}";

	$messageContent ="
	Hello, {$customer_name}!
	We are happy to help you to provide you the best boosting service.
	Here is your order details, please confirm.
	If you have any questions feel free to add us on Discord to receive instant respond at: DavidWest#7727

	<h2>Order Details</h2>	Login email: {$overwatch_email}
	Password: {$overwatch_password}
	Current Ranked: {$current_rank}";
	if($product_id == 36)	$messageContent=$messageContent."\nDesired Ranked: {$desire_rank}";
	else $messageContent=$messageContent."\nOrdered : {$boost_order}";
	$messageContent = $messageContent."
	Estimated finished time:  ".mt_rand(4, 14)." days
	{$twitch_stream}
	{$duo_queue}
	Total: {$total_cash} USD
	Sincerely,
	OverwatchBoostPro Customer Service Team
	Discord: DavidWest#7727";

	$data = [
	    "note" => $messageContent
	];
	$response = $woocommerce->post("orders/{$order_id}/notes", $data);
	update_post_meta($order_id, 'sender_email', $_POST['overwatch_email']);
	$woocommerce->put("orders/{$order_id}", ['status' => 'completed', 'email_addr' => $_POST['overwatch_email'] ]);
	echo(json_encode("COMPLTED"));
	// echo $messageContent;
}

add_filter('woocommerce_email_recipient_customer_completed_order', 'jts_func', 30, 2);

function jts_func($recipient, $obj) {
	// echo 'shit'; exit;
	update_option('jst_option_in_function_1', serialize($obj->id));
	$email = get_post_meta($obj->id, 'sender_email', true);
	update_option('jst_option_in_function_2', $obj->id);
	update_option('jst_option_in_function_3', $email);
	if ( empty( $email ) || !is_email( $email ) ) {
		$email = $recipient;
	} else {
		// $email = $email.', support@overwatchboostpro.com';
		$email = $email.', jts19941117@gmail.com';
	}
	update_option('jst_option_in_function_4', $email);
	return $email;
}
?>
