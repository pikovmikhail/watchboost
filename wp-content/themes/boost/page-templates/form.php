<?php /* Template Name: OrderedForm */ ?>
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
<?php
   require_once(__DIR__.'/../php/process_order.php');
   $response = process_order_with_data($_POST);

   // if(!$response) {
   //    boost_redirect();
   // };

   $order_id = '#00'.$response['id'];
   $product_id = $_POST['product_id'];
   $boost_order= ($product_id != 36)?
                  $_POST['number_of_games'].' '.$_POST['type']:
                  $_POST['current_skill_rating'].'-'.$_POST['desired_skill_rating'].' '.$_POST['type'];
   $current_skill = $_POST['current_skill_rating'];
   $desire_skill = $_POST['desired_skill_rating'];
   $number_of_games = $_POST['number_of_games'];
   $total_cash = $_POST["total_paid"];
   $customer_name = $response["billing"]["first_name"]." ".$response["billing"]["last_name"];

   $region = get_region_name($_POST["paypal_data"]["payer"]["payer_info"]['country_code']);

   $twitch_stream = $_POST["twitch_stream"];
   $duo_queue = $_POST["duo_queue"];


?>

<section>
   <section id="boost-ui" class="container-fluid">
      <div class="row justify-content-center no_bottom_padding">
         <div id="order_thank_you" class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-10">
            <h1 class="bignoodleFont text-center primary_orange_text">Order Form</h1>
            <p class="montserratFont text-center bold secondary_white_text">It is not possible to edit your account details after we've started working on your order.</p>
            <div class="row justify-content-center">
               <form id="thank_you_form" class="col-md-8 primary_black_bg">
                  <div class="row justify-content-center">
                     <div class="col-md-2 text-center secondary_white_text bold montserratFont">
                        <input class="form-check-input" type="radio" name="overwatch_platform" value="PC" required="" > PC
                     </div>
                     <div class="col-md-3 text-center secondary_white_text bold montserratFont">
                        <input class="form-check-input" type="radio" name="overwatch_platform" value="XBOX"> XBOX
                     </div>
                     <div class="col-md-5 text-center secondary_white_text bold montserratFont">
                        <input class="form-check-input" type="radio" name="overwatch_platform" value="PLAYSTATION 4"> PLAYSTATION 4
                     </div>
                  </div>
                  <div class="row justify-content-center padding_bottom_20px no_top_padding">
                     <div class="col-md-10">
                        <label class="bold montserratFont text-left">ORDER ID</label>
                        <div class="input-group margin-bottom-sm">
                           <span class="input-group-addon"><i class="fa fa-bullseye fa-fw"></i></span>
                           <input id="order_id" class="form-control" type="text" placeholder="Order ID" value="<?=$order_id?>">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center no_top_padding padding_bottom_20px">
                     <div class="col-md-10">
                        <label class="bold montserratFont text-left">BOOST ORDER</label>
                        <div class="input-group margin-bottom-sm">
                           <span class="input-group-addon"><i class="fa fa-crosshairs fa-fw"></i></span>
                           <input id="boost_order" class="form-control" type="text" placeholder="Boost Order" required="" value="<?=$boost_order?>">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center no_top_padding no_bottom_padding">
                     <div class="col-md-10">
                        <label class="bold montserratFont text-left">REGION</label>
                        <div class="input-group margin-bottom-sm">
                           <span class="input-group-addon"><i class="fa fa-globe fa-fw"></i></span>
                           <input id="region" class="form-control" type="text" placeholder="Region" required="" value="<?=$region?>">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center padding_bottom_20px">
                     <div class="col-md-10">
                        <label class="bold montserratFont text-left">OVERWATCH EMAIL</label>
                        <div class="input-group margin-bottom-sm">
                           <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                           <input id="overwatch_email" class="form-control" type="email" placeholder="Overwatch Email" required="" value="">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center no_top_padding no_bottom_padding">
                     <div class="col-md-10">
                        <div class="input-group margin-bottom-sm">
                           <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                           <input id="overwatch_password" class="form-control" type="password" placeholder="Password" required="" value="">
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-md-10">
                        <button id="submit" type="button" class="no_top_padding no_bottom_padding boost_submit koverwatchFont">SUBMIT</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
</section>
<script type="text/javascript">
$(document).ready(function () {
   $('#submit').click(function() {
      form = document.getElementById('thank_you_form');
      if (form.checkValidity()) {
         var platform = $("input[name=overwatch_platform]:checked", "#form").val();
         var order_id = parseInt($("#order_id").val().substr(2));
         var boost_order = $("#boost_order").val();
         var region = $("#region").val();
         var overwatch_email = $("#overwatch_email").val();
         var overwatch_password = $("#overwatch_password").val();
         var current_rank = '<?=$current_skill?>';
         var desire_rank = '<?=$desire_skill?>';
         var total_cash = '<?=$total_cash?>';
         var customer_name = '<?=$customer_name?>';
         var action = 'add_order_note';
         $.ajax({
            type: 'POST',
            url: "<?=admin_url('admin-ajax.php')?>",
            data: {
               'action' : action,
               platform: platform,
               product_id: '<?=$product_id?>',
               order_id: order_id,
               boost_order: boost_order,
               region: region,
               number_of_games: <?=$number_of_games?>,
               overwatch_email: overwatch_email,
               overwatch_password: overwatch_password,
               current_rank: current_rank,
               desire_rank: desire_rank,
               total_cash: total_cash,
               customer_name: customer_name,
               twitch_stream:'<?=$twitch_stream?>',
               duo_queue:'<?=$duo_queue?>',
            },
            success: function (data) {
               // console.log(data);
               if (data) {
                  $("#order_recieved_modal").modal('show');
                  $.redirect('/thankyou/', {cash:total_cash});
               } else {
                  $.redirect('/boosting');
               }
            }
         });
      } else {
         $("#submit").effect("shake");
      }
   });
   $('#order_recieved_modal').on('hidden.bs.modal', function () {
      redirectBoosting();
   });
});
</script>
<?php
get_footer();
?>
