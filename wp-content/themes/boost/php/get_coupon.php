<?php
require './vendor/autoload.php';
use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://overwatchboostpro.edu/',
    'ck_ca76ab4fca0eaceaae15433ce8cab6f9b1a1b5c3',
    'cs_2308cd79ba1fdaa0154459b14bcc6cb810df7914',
    [
        'wp_api' => true,
        'version' => 'wc/v1'
    ]
);

$coupon_value = $_POST['coupon'];
$all_coupons = $woocommerce->get('coupons');

function find_coupon_object($coupons_array, $coupon_code) {
    if(empty($coupon_code)) {
        return;
    } else {
        foreach ($coupons_array as $coupon){
            if($coupon['code'] == $coupon_code) {
                return $coupon;
            }
        }
        return "no_coupon";
    }
}

echo(json_encode(find_coupon_object($all_coupons,$coupon_value)));
?>
