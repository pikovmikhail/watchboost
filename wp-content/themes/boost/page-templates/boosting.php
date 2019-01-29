<?php /* Template Name: Boosting */ ?>
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
<section id="boost-ui" class="container-fluid">
    <div class="row justify-content-center no_bottom_padding">
        <div id="boost_container" class="col-lg-5 col-md-6 col-sm-8 col-10">
            <div id="boost_nav" class="row primary_black_bg justify-content-center">
                <div class="boost_nav_item boost_nav_item_active col-3 koverwatchFont secondary_white_text text-center">
                    <h3 id="skill_rating_heading" class="primary_orange_text">SKILL RATING</h3>
                </div>
                <div class="boost_nav_item col-3 koverwatchFont secondary_white_text text-center">
                    <h3 id="solo_duo_heading">SOLO/DUO GAMES</h3>
                </div>
                <div class="boost_nav_item col-3 koverwatchFont secondary_white_text text-center">
                    <h3 id="placement_heading">PLACEMENT GAMES</h3>
                </div>
            </div>
            <div class="low_opacity row no_top_padding justify-content-center">
                <div id="current_skill_rating" class="col-md-3 col-xs-12">
                    <div class="form-group text-center">
                        <label class="montserratFont" for="name">CURRENT SKILL <br>RATING</label>
                        <input id="rating_value_min_1" type="number" step="50" class="boost_input form-control" value="3500">
                    </div>
                </div>
                <div id="prev_season_rank" class="col-md-3 col-xs-12" style="display:none;">
                    <div class="form-group text-center">
                        <label class="montserratFont" for="name">PREVIOUS SEASON <br>RANK</label>
                        <select style="background-color: #111114 !important; color:white !important; border: solid 1px white !important; padding: 2px !important; height: 58px;" id="prev_season_rank_value" class="boost_input_select boost_input form-control">
                            <option value="Unranked">Unranked</option>
                            <option value="1 - 1499">1 - 1499</option>
                            <option value="1500 - 1999">1500 - 1999</option>
                            <option value="2000 - 2499">2000 - 2499</option>
                            <option value="2500 - 2999">2500 - 2999</option>
                            <option value="3000 - 3499">3000 - 3499</option>
                            <option value="3500 - 3999">3500 - 3999</option>
                            <option value="4000+">4000+</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 offset-md-2 col-xm-12 no_right_padding">
                    <div id="num_desired_skill_section" class="form-group text-center">
                        <label class="montserratFont" for="name">DESIRED SKILL <br>RATING</label>
                        <div class="row no_top_padding no_bottom_padding">
                            <div class="col-9 col-xm-9 no_right_padding">
                                <input id="rating_value_max_1" step="50" type="number" class="boost_input form-control" value="4000">
                            </div>
                            <div class="col-2 col-xm-2">
                                <div id="plus_increment" class="increment_button row no_top_padding no_bottom_padding text-center secondary_white_text" style="height:50%">
                                    <div class="col-12 no_padding">
                                        <span>+</span>
                                    </div>
                                </div>
                                <div id="minus_increment" class="increment_button row no_top_padding no_bottom_padding text-center secondary_white_text" style="height:50%">
                                    <div class="col-12 no_padding">
                                        <span>-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="num_of_games_section" class="form-group text-center" style="display:none;">
                        <label class="montserratFont" for="name">NUMBER OF <br>GAMES</label>
                        <div class="row no_top_padding no_bottom_padding">
                            <div class="col-9 col-xm-9 no_right_padding">
                                <input id="num_games_value_max_1" type="number" min="1" max="10" class="boost_input form-control" value="5">
                            </div>
                            <div class="col-2 col-xm-2">
                                <div id="plus_games_increment" class="increment_button row no_top_padding no_bottom_padding text-center secondary_white_text" style="height:50%">
                                    <div class="col-12 no_padding">
                                        <span>+</span>
                                    </div>
                                </div>
                                <div id="minus_games_increment" class="increment_button row no_top_padding no_bottom_padding text-center secondary_white_text" style="height:50%">
                                    <div class="col-12 no_padding">
                                        <span>-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider_range_section" class="row no_bottom_padding primary_black_bg justify-content-center">
                <div class="col-12">
                    <div id="slider-range"></div>
                    <div class="row no_top_padding no_bottom_padding">
                        <div class="col-6 text-left secondary_white_text montserratFont">
                            <p>0</p>
                        </div>
                        <div class="col-6 text-right secondary_white_text montserratFont">
                            <p>4650</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="game_slider_range_section" style="display:none;" class="row no_bottom_padding primary_black_bg justify-content-center">
                <div class="col-12">
                    <div id="game-slider-range"></div>
                    <div class="row no_top_padding no_bottom_padding">
                        <div class="col-6 text-left secondary_white_text montserratFont">
                            <p>1</p>
                        </div>
                        <div class="col-6 text-right secondary_white_text montserratFont">
                            <p>10</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no_top_padding no_bottom_padding primary_black_bg">
                <div class="col-6 text-center horizontal_option">
                    <input type="checkbox" name="streaming_checkbox" id="streaming_checkbox" value="">
                    <div>
                        <i class="fa fa-twitch" aria-hidden="true"></i>
                        <p class="montserratFont bold secondary_white_text">Streaming (+15%)</p>
                    </div>
                </div>
                <div class="col-6 text-center horizontal_option">
                    <input type="checkbox" name="streaming_duo_queue" id="streaming_duo_queue" value="">
                    <div>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p class="montserratFont bold secondary_white_text">Duo Queue (+60%)</p>
                    </div>
                </div>
            </div>
            <div class="row no_top_padding no_bottom_padding primary_black_bg">
                <div class="col-12">
                    <div class="montserratFont bold text-center secondary_white_text" id="pricing_calculation">
                    </div>
                </div>
            </div>
            <div class="row no_top_padding no_bottom_padding align-items-end">
                <div class="col-md-6">
                    <label class="montserratFont bold">PROMO CODE</label>
                    <div class="row no_top_padding">
                        <div class="col-6 no_right_padding">
                            <input style="width:100%;" id="boost_coupon_value" class="boost_input" type="text" name="" value="">
                        </div>
                        <div class="col-4">
                            <button id="promo_apply_btn" class="boost_ui_button" type="button" onclick="get_coupon();" name="button">APPLY</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no_top_padding">
                        <div class="col-12 text-right no_right_padding">
                            <!-- <button onclick="process_order();" style="height:58px;" class="boost_ui_button" type="button" name="button"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>CHECKOUT</button> -->
                            <div id="paypal_button_container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container-fluid">
        <a name="FAQ"></a>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1 class="bignoodleFont primary_orange_text">FAQ</h1>
                <div id="faq_accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    After payment, what do I do now?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Please make sure you fill out our form for your account details so we can make sure your order gets started on time.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I contact you guys?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                You can fill out the contact form on the website. Or, you can email us at <a href="mailto:support@overwatchboostpro.edu">support@overwatchboostpro.edu</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Will my account get banned?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                There is always a chance no matter which site you select to boost your SR. From our past experiences, it is not likely your account will get banned. In addition, we only use booster that is physically live in your region so it won’t seem like you travel all over the world to get your SR boost. Most sites use other region boosters so it has a higher chance your account will get banned.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    I ordered a boost, when will it be started?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Your boosting order will be assigned to a booster within an hour or two. Sometimes, it is possible to take longer than that. We promise you the order will be assigned in 24 hours.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    How would I know when my order is completed?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                You will get an email notification after your service is completed. Additionally, you can check on our member’s area for status of the order.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script src="https://www.paypalobjects.com/api/checkout.js" data-version-4>
</script>
<?php
get_footer();
?>
