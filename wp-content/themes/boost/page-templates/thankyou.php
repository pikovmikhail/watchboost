<?php /* Template Name: Thank you */ ?>
<?php get_header(); ?>

<?php
require_once(__DIR__.'/../php/process_order.php');


try{
	if(!isset($_POST['cash'])) {
		boost_redirect();
	}
	$cash = $_POST['cash'];
} catch (Exception $ex) {
	exit;
}
?>
<section id="hero" class="d-flex container-fluid">
	<div style="width:100%;" class="row justify-content-center align-items-center">
		<div class="col-8 align-self-center">
			<h1 id="hero-text" class="koverwatchFont text-center">Thank you </h1>
			<p class="secondary_white_text montserratFont text">
				Your order has been received.
				<br/>
				We have sent you an order confirmation to your PayPal email.
				<br/>
				We will get into contact with you and get to work right away.
			</p>
			<a href="./Boosting" class="hex_button koverwatchFont ribbon-outset borders">Return</a>
		</div>
	</div>
</section>
<script type="text/javascript">
$(document).ready(function () {

	window.dataLayer = window.dataLayer || [];

	function csm_gtag() {
		dataLayer.push(arguments);
	}

	csm_gtag('event', 'conversion', {
		'send_to': 'AW-826172052/vfE4CN_mqXoQlMX5iQM',
		'value': <?=$cash?>,
		'currency': 'USD'
	});
});
</script>
<?php
get_footer();
?>
