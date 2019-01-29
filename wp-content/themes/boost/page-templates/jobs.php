<?php /* Template Name: Jobs */ ?>
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

<section id="jobs-page" class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h1 class="text-center bignoodleFont primary_orange_text">Jobs</h1>
			<p class="text-center montserratFont secondary_white_text">We are always looking to add more motivated and skilled people to the Overwatch Boosting Pro team. Here’s a look at some of the vacancies that we are currently looking to fill. </p>
		</div>
	</div>
	<section>
		<div class="row justify-content-center no_bottom_padding">
			<div class="content_box col-md-6 primary_black_bg">
				<h3 class="koverwatchFont primary_orange_text">Boosters</h3>
				<p class="montserratFont secondary_white_text">As a Booster with Overwatch Booster Pro, your job will be to either play on behalf of our customers via their accounts, or to play with them in a group setting. You should have a passion for playing, have exceptional skills, and it goes without saying that you should have an impressive winning streak. </p>
				<h4 class="koverwatchFont primary_orange_text">REQUIREMENTS FOR THIS POSITION INCLUDE:</h4>
				<ul class="secondary_white_text montserratFont">
					<li>Exceptional customer service skills</li>
					<li>Hold a Top 500 rank in any season</li>
					<li>Willingness to work on orders that are lower ranked</li>
					<li>Enjoy playing in a group setting</li>
					<li>Willingness and ability to work (or play) for a minimum of 3 hours a day</li>
				</ul>
				<button type="button" id="application_button_1" class="boost_button koverwatchFont">Application Form</button>
			</div>
		</div>
		<div class="row justify-content-center no_top_padding">
			<div id="application1" style="display:none" class="content_box col-md-6 secondary_black_bg">
				<a href="#"><i id="close1" class="fa fa-times close_button" aria-hidden="true"></i></a>
				<form method="POST" id="job_application_1">
					<div class="row no_bottom_padding ">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-user" aria-hidden="true"></i>YOUR NAME</label>
								<input required="required" id="job_application_1_name" type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<label style="float:left;display: block;width: 100%;"class="montserratFont" for="name">PLATFORMS</label>
							<div class="form-group">
								<div class="form-check form-check-inline col-3">
									<label class="form-check-label">
										<input id="job_application_1_gamertag_pc_checkbox" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="PC"> PC
									</label>
								</div>
								<div class="form-check form-check-inline col-3">
									<label class="form-check-label">
										<input id="job_application_1_gamertag_xbox_checkbox" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="XBOX"> XBOX
									</label>
								</div>
								<div class="form-check form-check-inline col-3">
									<label class="form-check-label">
										<input id="job_application_1_gamertag_ps4_checkbox" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="PS4"> PS4
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-envelope-o" aria-hidden="true"></i>EMAIL</label>
								<input required="required" id="job_application_1_email" type="email" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="email"><i class="fa fa-windows" aria-hidden="true"></i>GAMERTAG</label>
								<input id="job_application_1_gamertag_pc" type="text" class="form-control" name="email" aria-describedby="emailHelp">
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-skype" aria-hidden="true"></i>SKYPE</label>
								<input id="job_application_1_skype" type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="email"><img style="width:1em;margin-right:10px;" src="<?php echo get_template_directory_uri() ?>/img/xbox.svg" alt="">GAMERTAG</label>
								<input id="job_application_1_gamertag_xbox" type="email" class="form-control" name="email" aria-describedby="emailHelp">
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-globe" aria-hidden="true"></i>LOCATION</label>
								<!-- <input id="" type="text" class="form-control" name="name"> -->
								<select id="job_application_1_location" class="boost_input form-control">
									<option value="Empty">Select</option>
									<option value="AF">Afghanistan</option>
									<option value="AX">Åland Islands</option>
									<option value="AL">Albania</option>
									<option value="DZ">Algeria</option>
									<option value="AS">American Samoa</option>
									<option value="AD">Andorra</option>
									<option value="AO">Angola</option>
									<option value="AI">Anguilla</option>
									<option value="AQ">Antarctica</option>
									<option value="AG">Antigua and Barbuda</option>
									<option value="AR">Argentina</option>
									<option value="AM">Armenia</option>
									<option value="AW">Aruba</option>
									<option value="AU">Australia</option>
									<option value="AT">Austria</option>
									<option value="AZ">Azerbaijan</option>
									<option value="BS">Bahamas</option>
									<option value="BH">Bahrain</option>
									<option value="BD">Bangladesh</option>
									<option value="BB">Barbados</option>
									<option value="BY">Belarus</option>
									<option value="BE">Belgium</option>
									<option value="BZ">Belize</option>
									<option value="BJ">Benin</option>
									<option value="BM">Bermuda</option>
									<option value="BT">Bhutan</option>
									<option value="BO">Bolivia, Plurinational State of</option>
									<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
									<option value="BA">Bosnia and Herzegovina</option>
									<option value="BW">Botswana</option>
									<option value="BV">Bouvet Island</option>
									<option value="BR">Brazil</option>
									<option value="IO">British Indian Ocean Territory</option>
									<option value="BN">Brunei Darussalam</option>
									<option value="BG">Bulgaria</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="KH">Cambodia</option>
									<option value="CM">Cameroon</option>
									<option value="CA">Canada</option>
									<option value="CV">Cape Verde</option>
									<option value="KY">Cayman Islands</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="CL">Chile</option>
									<option value="CN">China</option>
									<option value="CX">Christmas Island</option>
									<option value="CC">Cocos (Keeling) Islands</option>
									<option value="CO">Colombia</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo, the Democratic Republic of the</option>
									<option value="CK">Cook Islands</option>
									<option value="CR">Costa Rica</option>
									<option value="CI">Côte d'Ivoire</option>
									<option value="HR">Croatia</option>
									<option value="CU">Cuba</option>
									<option value="CW">Curaçao</option>
									<option value="CY">Cyprus</option>
									<option value="CZ">Czech Republic</option>
									<option value="DK">Denmark</option>
									<option value="DJ">Djibouti</option>
									<option value="DM">Dominica</option>
									<option value="DO">Dominican Republic</option>
									<option value="EC">Ecuador</option>
									<option value="EG">Egypt</option>
									<option value="SV">El Salvador</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="EE">Estonia</option>
									<option value="ET">Ethiopia</option>
									<option value="FK">Falkland Islands (Malvinas)</option>
									<option value="FO">Faroe Islands</option>
									<option value="FJ">Fiji</option>
									<option value="FI">Finland</option>
									<option value="FR">France</option>
									<option value="GF">French Guiana</option>
									<option value="PF">French Polynesia</option>
									<option value="TF">French Southern Territories</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GE">Georgia</option>
									<option value="DE">Germany</option>
									<option value="GH">Ghana</option>
									<option value="GI">Gibraltar</option>
									<option value="GR">Greece</option>
									<option value="GL">Greenland</option>
									<option value="GD">Grenada</option>
									<option value="GP">Guadeloupe</option>
									<option value="GU">Guam</option>
									<option value="GT">Guatemala</option>
									<option value="GG">Guernsey</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="GY">Guyana</option>
									<option value="HT">Haiti</option>
									<option value="HM">Heard Island and McDonald Islands</option>
									<option value="VA">Holy See (Vatican City State)</option>
									<option value="HN">Honduras</option>
									<option value="HK">Hong Kong</option>
									<option value="HU">Hungary</option>
									<option value="IS">Iceland</option>
									<option value="IN">India</option>
									<option value="ID">Indonesia</option>
									<option value="IR">Iran, Islamic Republic of</option>
									<option value="IQ">Iraq</option>
									<option value="IE">Ireland</option>
									<option value="IM">Isle of Man</option>
									<option value="IL">Israel</option>
									<option value="IT">Italy</option>
									<option value="JM">Jamaica</option>
									<option value="JP">Japan</option>
									<option value="JE">Jersey</option>
									<option value="JO">Jordan</option>
									<option value="KZ">Kazakhstan</option>
									<option value="KE">Kenya</option>
									<option value="KI">Kiribati</option>
									<option value="KP">Korea, Democratic People's Republic of</option>
									<option value="KR">Korea, Republic of</option>
									<option value="KW">Kuwait</option>
									<option value="KG">Kyrgyzstan</option>
									<option value="LA">Lao People's Democratic Republic</option>
									<option value="LV">Latvia</option>
									<option value="LB">Lebanon</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libya</option>
									<option value="LI">Liechtenstein</option>
									<option value="LT">Lithuania</option>
									<option value="LU">Luxembourg</option>
									<option value="MO">Macao</option>
									<option value="MK">Macedonia, the former Yugoslav Republic of</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="MY">Malaysia</option>
									<option value="MV">Maldives</option>
									<option value="ML">Mali</option>
									<option value="MT">Malta</option>
									<option value="MH">Marshall Islands</option>
									<option value="MQ">Martinique</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MX">Mexico</option>
									<option value="FM">Micronesia, Federated States of</option>
									<option value="MD">Moldova, Republic of</option>
									<option value="MC">Monaco</option>
									<option value="MN">Mongolia</option>
									<option value="ME">Montenegro</option>
									<option value="MS">Montserrat</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="MM">Myanmar</option>
									<option value="NA">Namibia</option>
									<option value="NR">Nauru</option>
									<option value="NP">Nepal</option>
									<option value="NL">Netherlands</option>
									<option value="NC">New Caledonia</option>
									<option value="NZ">New Zealand</option>
									<option value="NI">Nicaragua</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="NU">Niue</option>
									<option value="NF">Norfolk Island</option>
									<option value="MP">Northern Mariana Islands</option>
									<option value="NO">Norway</option>
									<option value="OM">Oman</option>
									<option value="PK">Pakistan</option>
									<option value="PW">Palau</option>
									<option value="PS">Palestinian Territory, Occupied</option>
									<option value="PA">Panama</option>
									<option value="PG">Papua New Guinea</option>
									<option value="PY">Paraguay</option>
									<option value="PE">Peru</option>
									<option value="PH">Philippines</option>
									<option value="PN">Pitcairn</option>
									<option value="PL">Poland</option>
									<option value="PT">Portugal</option>
									<option value="PR">Puerto Rico</option>
									<option value="QA">Qatar</option>
									<option value="RE">Réunion</option>
									<option value="RO">Romania</option>
									<option value="RU">Russian Federation</option>
									<option value="RW">Rwanda</option>
									<option value="BL">Saint Barthélemy</option>
									<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
									<option value="KN">Saint Kitts and Nevis</option>
									<option value="LC">Saint Lucia</option>
									<option value="MF">Saint Martin (French part)</option>
									<option value="PM">Saint Pierre and Miquelon</option>
									<option value="VC">Saint Vincent and the Grenadines</option>
									<option value="WS">Samoa</option>
									<option value="SM">San Marino</option>
									<option value="ST">Sao Tome and Principe</option>
									<option value="SA">Saudi Arabia</option>
									<option value="SN">Senegal</option>
									<option value="RS">Serbia</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SG">Singapore</option>
									<option value="SX">Sint Maarten (Dutch part)</option>
									<option value="SK">Slovakia</option>
									<option value="SI">Slovenia</option>
									<option value="SB">Solomon Islands</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="GS">South Georgia and the South Sandwich Islands</option>
									<option value="SS">South Sudan</option>
									<option value="ES">Spain</option>
									<option value="LK">Sri Lanka</option>
									<option value="SD">Sudan</option>
									<option value="SR">Suriname</option>
									<option value="SJ">Svalbard and Jan Mayen</option>
									<option value="SZ">Swaziland</option>
									<option value="SE">Sweden</option>
									<option value="CH">Switzerland</option>
									<option value="SY">Syrian Arab Republic</option>
									<option value="TW">Taiwan, Province of China</option>
									<option value="TJ">Tajikistan</option>
									<option value="TZ">Tanzania, United Republic of</option>
									<option value="TH">Thailand</option>
									<option value="TL">Timor-Leste</option>
									<option value="TG">Togo</option>
									<option value="TK">Tokelau</option>
									<option value="TO">Tonga</option>
									<option value="TT">Trinidad and Tobago</option>
									<option value="TN">Tunisia</option>
									<option value="TR">Turkey</option>
									<option value="TM">Turkmenistan</option>
									<option value="TC">Turks and Caicos Islands</option>
									<option value="TV">Tuvalu</option>
									<option value="UG">Uganda</option>
									<option value="UA">Ukraine</option>
									<option value="AE">United Arab Emirates</option>
									<option value="GB">United Kingdom</option>
									<option value="US">United States</option>
									<option value="UM">United States Minor Outlying Islands</option>
									<option value="UY">Uruguay</option>
									<option value="UZ">Uzbekistan</option>
									<option value="VU">Vanuatu</option>
									<option value="VE">Venezuela, Bolivarian Republic of</option>
									<option value="VN">Viet Nam</option>
									<option value="VG">Virgin Islands, British</option>
									<option value="VI">Virgin Islands, U.S.</option>
									<option value="WF">Wallis and Futuna</option>
									<option value="EH">Western Sahara</option>
									<option value="YE">Yemen</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="email"><img style="width:1.3em;margin-right:10px;" src="<?php echo get_template_directory_uri() ?>/img/ps4.svg"/>GAMERTAG</label>
								<input id="job_application_1_gamertag_ps4" type="email" class="form-control" name="email" aria-describedby="emailHelp">
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-12">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="exampleInputEmail1"><i class="fa fa-commenting-o" aria-hidden="true"></i>YOUR MESSAGE</label>
								<textarea id="job_application_1_message" name="comment" name="message" form="usrform"></textarea>
							</div>
						</div>
					</div>
					<button type="button" id="contact_form_submit" onclick="job_contact_form_1();" class="btn btn-primary koverwatchFont">SEND</button>
				</form>
			</div>
		</div>
	</section>
	<section>
		<div class="row justify-content-center no_bottom_padding">
			<div class="content_box col-md-6 primary_black_bg">
				<h3 class="koverwatchFont primary_orange_text">Coaches</h3>
				<p class="montserratFont secondary_white_text">Coaches at Overwatch Boost Pro are required to create and execute their own lessons. They must also be able to manage and schedule lessons, and arrive in a timely manner. If you don’t have coaching experience with Overwatch, experience coaching other games is helpful.</p>
				<h4 class="koverwatchFont primary_orange_text">REQUIREMENTS FOR THIS POSITION INCLUDE:</h4>
				<ul class="secondary_white_text montserratFont">
					<li>Master tier rank or better</li>
					<li>Ability to plan effective lessons</li>
					<li>Available to coach at least 5 hours per week</li>
					<li>Proficiency in the language you would like to coach in</li>
				</ul>
				<button type="button" id="application_button_2" class="boost_button koverwatchFont">Application Form</button>
			</div>
		</div>
		<div class="row justify-content-center no_top_padding">
			<div id="application2" style="display:none" class="content_box col-md-6 secondary_black_bg">
				<a href="#"><i id="close1" class="fa fa-times close_button" aria-hidden="true"></i></a>
				<form method="POST" id="job_application_2">
					<div class="row no_bottom_padding ">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-user" aria-hidden="true"></i>YOUR NAME</label>
								<input required="required" id="job_application_2_name" type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<label style="float:left;display: block;width: 100%;"class="montserratFont" for="name">PLATFORMS</label>
							<div class="form-group">
								<div class="form-check form-check-inline col-3">
									<label class="form-check-label">
										<input id="job_application_2_gamertag_pc_checkbox" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="PC"> PC
									</label>
								</div>
								<div class="form-check form-check-inline col-3">
									<label class="form-check-label">
										<input id="job_application_2_gamertag_xbox_checkbox" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="XBOX"> XBOX
									</label>
								</div>
								<div class="form-check form-check-inline col-3">
									<label class="form-check-label">
										<input id="job_application_2_gamertag_ps4_checkbox" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="PS4"> PS4
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-envelope-o" aria-hidden="true"></i>EMAIL</label>
								<input required="required" id="job_application_2_email" type="email" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="email"><i class="fa fa-windows" aria-hidden="true"></i>GAMERTAG</label>
								<input id="job_application_2_gamertag_pc" type="text" class="form-control" name="email" aria-describedby="emailHelp">
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-skype" aria-hidden="true"></i>SKYPE</label>
								<input id="job_application_2_skype" type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="email"><img style="width:1em;margin-right:10px;" src="<?php echo get_template_directory_uri() ?>/img/xbox.svg" alt="">GAMERTAG</label>
								<input id="job_application_2_gamertag_xbox" type="email" class="form-control" name="email" aria-describedby="emailHelp">
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="name"><i class="fa fa-globe" aria-hidden="true"></i>LOCATION</label>
								<!-- <input id="" type="text" class="form-control" name="name"> -->
								<select id="job_application_2_location" class="boost_input form-control">
									<option value="Empty">Select</option>
									<option value="AF">Afghanistan</option>
									<option value="AX">Åland Islands</option>
									<option value="AL">Albania</option>
									<option value="DZ">Algeria</option>
									<option value="AS">American Samoa</option>
									<option value="AD">Andorra</option>
									<option value="AO">Angola</option>
									<option value="AI">Anguilla</option>
									<option value="AQ">Antarctica</option>
									<option value="AG">Antigua and Barbuda</option>
									<option value="AR">Argentina</option>
									<option value="AM">Armenia</option>
									<option value="AW">Aruba</option>
									<option value="AU">Australia</option>
									<option value="AT">Austria</option>
									<option value="AZ">Azerbaijan</option>
									<option value="BS">Bahamas</option>
									<option value="BH">Bahrain</option>
									<option value="BD">Bangladesh</option>
									<option value="BB">Barbados</option>
									<option value="BY">Belarus</option>
									<option value="BE">Belgium</option>
									<option value="BZ">Belize</option>
									<option value="BJ">Benin</option>
									<option value="BM">Bermuda</option>
									<option value="BT">Bhutan</option>
									<option value="BO">Bolivia, Plurinational State of</option>
									<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
									<option value="BA">Bosnia and Herzegovina</option>
									<option value="BW">Botswana</option>
									<option value="BV">Bouvet Island</option>
									<option value="BR">Brazil</option>
									<option value="IO">British Indian Ocean Territory</option>
									<option value="BN">Brunei Darussalam</option>
									<option value="BG">Bulgaria</option>
									<option value="BF">Burkina Faso</option>
									<option value="BI">Burundi</option>
									<option value="KH">Cambodia</option>
									<option value="CM">Cameroon</option>
									<option value="CA">Canada</option>
									<option value="CV">Cape Verde</option>
									<option value="KY">Cayman Islands</option>
									<option value="CF">Central African Republic</option>
									<option value="TD">Chad</option>
									<option value="CL">Chile</option>
									<option value="CN">China</option>
									<option value="CX">Christmas Island</option>
									<option value="CC">Cocos (Keeling) Islands</option>
									<option value="CO">Colombia</option>
									<option value="KM">Comoros</option>
									<option value="CG">Congo</option>
									<option value="CD">Congo, the Democratic Republic of the</option>
									<option value="CK">Cook Islands</option>
									<option value="CR">Costa Rica</option>
									<option value="CI">Côte d'Ivoire</option>
									<option value="HR">Croatia</option>
									<option value="CU">Cuba</option>
									<option value="CW">Curaçao</option>
									<option value="CY">Cyprus</option>
									<option value="CZ">Czech Republic</option>
									<option value="DK">Denmark</option>
									<option value="DJ">Djibouti</option>
									<option value="DM">Dominica</option>
									<option value="DO">Dominican Republic</option>
									<option value="EC">Ecuador</option>
									<option value="EG">Egypt</option>
									<option value="SV">El Salvador</option>
									<option value="GQ">Equatorial Guinea</option>
									<option value="ER">Eritrea</option>
									<option value="EE">Estonia</option>
									<option value="ET">Ethiopia</option>
									<option value="FK">Falkland Islands (Malvinas)</option>
									<option value="FO">Faroe Islands</option>
									<option value="FJ">Fiji</option>
									<option value="FI">Finland</option>
									<option value="FR">France</option>
									<option value="GF">French Guiana</option>
									<option value="PF">French Polynesia</option>
									<option value="TF">French Southern Territories</option>
									<option value="GA">Gabon</option>
									<option value="GM">Gambia</option>
									<option value="GE">Georgia</option>
									<option value="DE">Germany</option>
									<option value="GH">Ghana</option>
									<option value="GI">Gibraltar</option>
									<option value="GR">Greece</option>
									<option value="GL">Greenland</option>
									<option value="GD">Grenada</option>
									<option value="GP">Guadeloupe</option>
									<option value="GU">Guam</option>
									<option value="GT">Guatemala</option>
									<option value="GG">Guernsey</option>
									<option value="GN">Guinea</option>
									<option value="GW">Guinea-Bissau</option>
									<option value="GY">Guyana</option>
									<option value="HT">Haiti</option>
									<option value="HM">Heard Island and McDonald Islands</option>
									<option value="VA">Holy See (Vatican City State)</option>
									<option value="HN">Honduras</option>
									<option value="HK">Hong Kong</option>
									<option value="HU">Hungary</option>
									<option value="IS">Iceland</option>
									<option value="IN">India</option>
									<option value="ID">Indonesia</option>
									<option value="IR">Iran, Islamic Republic of</option>
									<option value="IQ">Iraq</option>
									<option value="IE">Ireland</option>
									<option value="IM">Isle of Man</option>
									<option value="IL">Israel</option>
									<option value="IT">Italy</option>
									<option value="JM">Jamaica</option>
									<option value="JP">Japan</option>
									<option value="JE">Jersey</option>
									<option value="JO">Jordan</option>
									<option value="KZ">Kazakhstan</option>
									<option value="KE">Kenya</option>
									<option value="KI">Kiribati</option>
									<option value="KP">Korea, Democratic People's Republic of</option>
									<option value="KR">Korea, Republic of</option>
									<option value="KW">Kuwait</option>
									<option value="KG">Kyrgyzstan</option>
									<option value="LA">Lao People's Democratic Republic</option>
									<option value="LV">Latvia</option>
									<option value="LB">Lebanon</option>
									<option value="LS">Lesotho</option>
									<option value="LR">Liberia</option>
									<option value="LY">Libya</option>
									<option value="LI">Liechtenstein</option>
									<option value="LT">Lithuania</option>
									<option value="LU">Luxembourg</option>
									<option value="MO">Macao</option>
									<option value="MK">Macedonia, the former Yugoslav Republic of</option>
									<option value="MG">Madagascar</option>
									<option value="MW">Malawi</option>
									<option value="MY">Malaysia</option>
									<option value="MV">Maldives</option>
									<option value="ML">Mali</option>
									<option value="MT">Malta</option>
									<option value="MH">Marshall Islands</option>
									<option value="MQ">Martinique</option>
									<option value="MR">Mauritania</option>
									<option value="MU">Mauritius</option>
									<option value="YT">Mayotte</option>
									<option value="MX">Mexico</option>
									<option value="FM">Micronesia, Federated States of</option>
									<option value="MD">Moldova, Republic of</option>
									<option value="MC">Monaco</option>
									<option value="MN">Mongolia</option>
									<option value="ME">Montenegro</option>
									<option value="MS">Montserrat</option>
									<option value="MA">Morocco</option>
									<option value="MZ">Mozambique</option>
									<option value="MM">Myanmar</option>
									<option value="NA">Namibia</option>
									<option value="NR">Nauru</option>
									<option value="NP">Nepal</option>
									<option value="NL">Netherlands</option>
									<option value="NC">New Caledonia</option>
									<option value="NZ">New Zealand</option>
									<option value="NI">Nicaragua</option>
									<option value="NE">Niger</option>
									<option value="NG">Nigeria</option>
									<option value="NU">Niue</option>
									<option value="NF">Norfolk Island</option>
									<option value="MP">Northern Mariana Islands</option>
									<option value="NO">Norway</option>
									<option value="OM">Oman</option>
									<option value="PK">Pakistan</option>
									<option value="PW">Palau</option>
									<option value="PS">Palestinian Territory, Occupied</option>
									<option value="PA">Panama</option>
									<option value="PG">Papua New Guinea</option>
									<option value="PY">Paraguay</option>
									<option value="PE">Peru</option>
									<option value="PH">Philippines</option>
									<option value="PN">Pitcairn</option>
									<option value="PL">Poland</option>
									<option value="PT">Portugal</option>
									<option value="PR">Puerto Rico</option>
									<option value="QA">Qatar</option>
									<option value="RE">Réunion</option>
									<option value="RO">Romania</option>
									<option value="RU">Russian Federation</option>
									<option value="RW">Rwanda</option>
									<option value="BL">Saint Barthélemy</option>
									<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
									<option value="KN">Saint Kitts and Nevis</option>
									<option value="LC">Saint Lucia</option>
									<option value="MF">Saint Martin (French part)</option>
									<option value="PM">Saint Pierre and Miquelon</option>
									<option value="VC">Saint Vincent and the Grenadines</option>
									<option value="WS">Samoa</option>
									<option value="SM">San Marino</option>
									<option value="ST">Sao Tome and Principe</option>
									<option value="SA">Saudi Arabia</option>
									<option value="SN">Senegal</option>
									<option value="RS">Serbia</option>
									<option value="SC">Seychelles</option>
									<option value="SL">Sierra Leone</option>
									<option value="SG">Singapore</option>
									<option value="SX">Sint Maarten (Dutch part)</option>
									<option value="SK">Slovakia</option>
									<option value="SI">Slovenia</option>
									<option value="SB">Solomon Islands</option>
									<option value="SO">Somalia</option>
									<option value="ZA">South Africa</option>
									<option value="GS">South Georgia and the South Sandwich Islands</option>
									<option value="SS">South Sudan</option>
									<option value="ES">Spain</option>
									<option value="LK">Sri Lanka</option>
									<option value="SD">Sudan</option>
									<option value="SR">Suriname</option>
									<option value="SJ">Svalbard and Jan Mayen</option>
									<option value="SZ">Swaziland</option>
									<option value="SE">Sweden</option>
									<option value="CH">Switzerland</option>
									<option value="SY">Syrian Arab Republic</option>
									<option value="TW">Taiwan, Province of China</option>
									<option value="TJ">Tajikistan</option>
									<option value="TZ">Tanzania, United Republic of</option>
									<option value="TH">Thailand</option>
									<option value="TL">Timor-Leste</option>
									<option value="TG">Togo</option>
									<option value="TK">Tokelau</option>
									<option value="TO">Tonga</option>
									<option value="TT">Trinidad and Tobago</option>
									<option value="TN">Tunisia</option>
									<option value="TR">Turkey</option>
									<option value="TM">Turkmenistan</option>
									<option value="TC">Turks and Caicos Islands</option>
									<option value="TV">Tuvalu</option>
									<option value="UG">Uganda</option>
									<option value="UA">Ukraine</option>
									<option value="AE">United Arab Emirates</option>
									<option value="GB">United Kingdom</option>
									<option value="US">United States</option>
									<option value="UM">United States Minor Outlying Islands</option>
									<option value="UY">Uruguay</option>
									<option value="UZ">Uzbekistan</option>
									<option value="VU">Vanuatu</option>
									<option value="VE">Venezuela, Bolivarian Republic of</option>
									<option value="VN">Viet Nam</option>
									<option value="VG">Virgin Islands, British</option>
									<option value="VI">Virgin Islands, U.S.</option>
									<option value="WF">Wallis and Futuna</option>
									<option value="EH">Western Sahara</option>
									<option value="YE">Yemen</option>
									<option value="ZM">Zambia</option>
									<option value="ZW">Zimbabwe</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="email"><img style="width:1.3em;margin-right:10px;" src="<?php echo get_template_directory_uri() ?>/img/ps4.svg"/>GAMERTAG</label>
								<input id="job_application_2_gamertag_ps4" type="email" class="form-control" name="email" aria-describedby="emailHelp">
							</div>
						</div>
					</div>
					<div class="row no_bottom_padding no_top_padding">
						<div class="col-12">
							<div class="form-group">
								<label style="float:left"class="montserratFont" for="exampleInputEmail1"><i class="fa fa-commenting-o" aria-hidden="true"></i>YOUR MESSAGE</label>
								<textarea id="job_application_2_message" name="comment" name="message" form="usrform"></textarea>
							</div>
						</div>
					</div>
					<button type="button" id="contact_form_submit" onclick="job_contact_form_2();" class="btn btn-primary koverwatchFont">SEND</button>
				</form>
			</div>
		</div>
	</section>
</section>
<div class="modal fade" id="job_contact_success_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header primary_black_bg text-center">
				<h3 class="modal-title koverwatchFont primary_orange_text" id="exampleModalLabel">SENT!</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="primary_orange_text" style="opacity:1;text-shadow:none;" aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body secondary_white_text montserratFont text secondary_black_bg">
				Your application has been recieved and will be responded to as soon as possible.
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="job_contact_failure_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header primary_black_bg text-center">
				<h3 class="modal-title koverwatchFont primary_orange_text" id="exampleModalLabel">Failure</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="primary_orange_text" style="opacity:1;text-shadow:none;" aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body secondary_white_text montserratFont text secondary_black_bg">
				There has been an error while sending our message, please try again later.
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
