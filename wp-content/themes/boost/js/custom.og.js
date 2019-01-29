var streaming_addOn_multiplier = 1.15;
var duo_queue_addOn_multiplier = 1.6;
var price_per_skill = 2.00;
var price_per_solo_duo_game = 15.00;
var price_per_placement_game = 15.00;
var price = 0;
var price_solo_duo = 0;
var price_placement = 0;
var coupon_executed = false;
var paypal_data;
var country_codes = {
    "BD": "Bangladesh",
    "BE": "Belgium",
    "BF": "Burkina Faso",
    "BG": "Bulgaria",
    "BA": "Bosnia and Herzegovina",
    "BB": "Barbados",
    "WF": "Wallis and Futuna",
    "BL": "Saint Barthelemy",
    "BM": "Bermuda",
    "BN": "Brunei",
    "BO": "Bolivia",
    "BH": "Bahrain",
    "BI": "Burundi",
    "BJ": "Benin",
    "BT": "Bhutan",
    "JM": "Jamaica",
    "BV": "Bouvet Island",
    "BW": "Botswana",
    "WS": "Samoa",
    "BQ": "Bonaire, Saint Eustatius and Saba ",
    "BR": "Brazil",
    "BS": "Bahamas",
    "JE": "Jersey",
    "BY": "Belarus",
    "BZ": "Belize",
    "RU": "Russia",
    "RW": "Rwanda",
    "RS": "Serbia",
    "TL": "East Timor",
    "RE": "Reunion",
    "TM": "Turkmenistan",
    "TJ": "Tajikistan",
    "RO": "Romania",
    "TK": "Tokelau",
    "GW": "Guinea-Bissau",
    "GU": "Guam",
    "GT": "Guatemala",
    "GS": "South Georgia and the South Sandwich Islands",
    "GR": "Greece",
    "GQ": "Equatorial Guinea",
    "GP": "Guadeloupe",
    "JP": "Japan",
    "GY": "Guyana",
    "GG": "Guernsey",
    "GF": "French Guiana",
    "GE": "Georgia",
    "GD": "Grenada",
    "GB": "United Kingdom",
    "GA": "Gabon",
    "SV": "El Salvador",
    "GN": "Guinea",
    "GM": "Gambia",
    "GL": "Greenland",
    "GI": "Gibraltar",
    "GH": "Ghana",
    "OM": "Oman",
    "TN": "Tunisia",
    "JO": "Jordan",
    "HR": "Croatia",
    "HT": "Haiti",
    "HU": "Hungary",
    "HK": "Hong Kong",
    "HN": "Honduras",
    "HM": "Heard Island and McDonald Islands",
    "VE": "Venezuela",
    "PR": "Puerto Rico",
    "PS": "Palestinian Territory",
    "PW": "Palau",
    "PT": "Portugal",
    "SJ": "Svalbard and Jan Mayen",
    "PY": "Paraguay",
    "IQ": "Iraq",
    "PA": "Panama",
    "PF": "French Polynesia",
    "PG": "Papua New Guinea",
    "PE": "Peru",
    "PK": "Pakistan",
    "PH": "Philippines",
    "PN": "Pitcairn",
    "PL": "Poland",
    "PM": "Saint Pierre and Miquelon",
    "ZM": "Zambia",
    "EH": "Western Sahara",
    "EE": "Estonia",
    "EG": "Egypt",
    "ZA": "South Africa",
    "EC": "Ecuador",
    "IT": "Italy",
    "VN": "Vietnam",
    "SB": "Solomon Islands",
    "ET": "Ethiopia",
    "SO": "Somalia",
    "ZW": "Zimbabwe",
    "SA": "Saudi Arabia",
    "ES": "Spain",
    "ER": "Eritrea",
    "ME": "Montenegro",
    "MD": "Moldova",
    "MG": "Madagascar",
    "MF": "Saint Martin",
    "MA": "Morocco",
    "MC": "Monaco",
    "UZ": "Uzbekistan",
    "MM": "Myanmar",
    "ML": "Mali",
    "MO": "Macao",
    "MN": "Mongolia",
    "MH": "Marshall Islands",
    "MK": "Macedonia",
    "MU": "Mauritius",
    "MT": "Malta",
    "MW": "Malawi",
    "MV": "Maldives",
    "MQ": "Martinique",
    "MP": "Northern Mariana Islands",
    "MS": "Montserrat",
    "MR": "Mauritania",
    "IM": "Isle of Man",
    "UG": "Uganda",
    "TZ": "Tanzania",
    "MY": "Malaysia",
    "MX": "Mexico",
    "IL": "Israel",
    "FR": "France",
    "IO": "British Indian Ocean Territory",
    "SH": "Saint Helena",
    "FI": "Finland",
    "FJ": "Fiji",
    "FK": "Falkland Islands",
    "FM": "Micronesia",
    "FO": "Faroe Islands",
    "NI": "Nicaragua",
    "NL": "Netherlands",
    "NO": "Norway",
    "NA": "Namibia",
    "VU": "Vanuatu",
    "NC": "New Caledonia",
    "NE": "Niger",
    "NF": "Norfolk Island",
    "NG": "Nigeria",
    "NZ": "New Zealand",
    "NP": "Nepal",
    "NR": "Nauru",
    "NU": "Niue",
    "CK": "Cook Islands",
    "XK": "Kosovo",
    "CI": "Ivory Coast",
    "CH": "Switzerland",
    "CO": "Colombia",
    "CN": "China",
    "CM": "Cameroon",
    "CL": "Chile",
    "CC": "Cocos Islands",
    "CA": "Canada",
    "CG": "Republic of the Congo",
    "CF": "Central African Republic",
    "CD": "Democratic Republic of the Congo",
    "CZ": "Czech Republic",
    "CY": "Cyprus",
    "CX": "Christmas Island",
    "CR": "Costa Rica",
    "CW": "Curacao",
    "CV": "Cape Verde",
    "CU": "Cuba",
    "SZ": "Swaziland",
    "SY": "Syria",
    "SX": "Sint Maarten",
    "KG": "Kyrgyzstan",
    "KE": "Kenya",
    "SS": "South Sudan",
    "SR": "Suriname",
    "KI": "Kiribati",
    "KH": "Cambodia",
    "KN": "Saint Kitts and Nevis",
    "KM": "Comoros",
    "ST": "Sao Tome and Principe",
    "SK": "Slovakia",
    "KR": "South Korea",
    "SI": "Slovenia",
    "KP": "North Korea",
    "KW": "Kuwait",
    "SN": "Senegal",
    "SM": "San Marino",
    "SL": "Sierra Leone",
    "SC": "Seychelles",
    "KZ": "Kazakhstan",
    "KY": "Cayman Islands",
    "SG": "Singapore",
    "SE": "Sweden",
    "SD": "Sudan",
    "DO": "Dominican Republic",
    "DM": "Dominica",
    "DJ": "Djibouti",
    "DK": "Denmark",
    "VG": "British Virgin Islands",
    "DE": "Germany",
    "YE": "Yemen",
    "DZ": "Algeria",
    "US": "United States",
    "UY": "Uruguay",
    "YT": "Mayotte",
    "UM": "United States Minor Outlying Islands",
    "LB": "Lebanon",
    "LC": "Saint Lucia",
    "LA": "Laos",
    "TV": "Tuvalu",
    "TW": "Taiwan",
    "TT": "Trinidad and Tobago",
    "TR": "Turkey",
    "LK": "Sri Lanka",
    "LI": "Liechtenstein",
    "LV": "Latvia",
    "TO": "Tonga",
    "LT": "Lithuania",
    "LU": "Luxembourg",
    "LR": "Liberia",
    "LS": "Lesotho",
    "TH": "Thailand",
    "TF": "French Southern Territories",
    "TG": "Togo",
    "TD": "Chad",
    "TC": "Turks and Caicos Islands",
    "LY": "Libya",
    "VA": "Vatican",
    "VC": "Saint Vincent and the Grenadines",
    "AE": "United Arab Emirates",
    "AD": "Andorra",
    "AG": "Antigua and Barbuda",
    "AF": "Afghanistan",
    "AI": "Anguilla",
    "VI": "U.S. Virgin Islands",
    "IS": "Iceland",
    "IR": "Iran",
    "AM": "Armenia",
    "AL": "Albania",
    "AO": "Angola",
    "AQ": "Antarctica",
    "AS": "American Samoa",
    "AR": "Argentina",
    "AU": "Australia",
    "AT": "Austria",
    "AW": "Aruba",
    "IN": "India",
    "AX": "Aland Islands",
    "AZ": "Azerbaijan",
    "IE": "Ireland",
    "ID": "Indonesia",
    "UA": "Ukraine",
    "QA": "Qatar",
    "MZ": "Mozambique"
};
var skill_rating_slider_prices = [
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.5,
    4.75,
    4.75,
    4.75,
    4.75,
    4.75,
    4.75,
    4.75,
    4.75,
    5.0,
    5.0,
    6.0,
    6.0,
    6.5,
    6.5,
    6.5,
    7.0,
    7.0,
    7.5,
    7.5,
    8.0,
    8.0,
    8.5,
    8.5,
    8.5,
    9.0,
    9.0,
    9.5,
    9.5,
    10.0,
    10.0,
    11.0,
    11.0,
    12.0,
    12.0,
    12.5,
    13.0,
    13.5,
    14.0,
    15.0,
    16.0,
    19.0,
    20.0,
    21.0,
    21.5,
    22.0,
    22.5,
    23.0,
    24.0,
    25.0,
    26.0,
    31.0,
    33.0,
    34.5,
    35.5,
    36.0,
    36.5,
    38.0,
    41.0,
    49.0,
    54.0,
    61.0,
    68.0,
    79.0,
    89.0,
    100.0,
    125.0,
    150.0,
    200.0,
    250.0,
    325.0,
    395.0,
    445.0,
    495.0,
    495.0,
    495.0,
    495.0,
    495.0,
    495.0,
    495.0,
    495.0
];

var solo_duo_game_slider_prices = [
    4.9,
    4.9,
    4.9,
    4.9,
    4.9,
    4.9,
    4.9,
    4.9,
    4.9,
    5.0,
    5.0,
    5.0,
    5.0,
    5.0,
    5.0,
    5.0,
    5.0,
    5.0,
    5.0,
    5.0,
    5.2,
    5.4,
    5.6,
    5.8,
    6.0,
    6.2,
    6.4,
    6.6,
    6.8,
    7.0,
    7.1,
    7.2,
    7.3,
    7.4,
    7.5,
    7.6,
    7.7,
    7.8,
    7.9,
    8.0,
    8.1,
    8.2,
    8.3,
    8.4,
    8.5,
    8.6,
    8.7,
    8.8,
    8.9,
    9.0,
    9.2,
    9.4,
    9.6,
    9.8,
    10.0,
    10.2,
    10.4,
    10.6,
    10.8,
    11.0,
    11.2,
    11.4,
    11.6,
    11.8,
    12.0,
    12.5,
    13.0,
    13.5,
    14.0,
    14.5,
    15.0,
    15.5,
    16.0,
    16.5,
    17.0,
    17.5,
    18.0,
    18.5,
    19.0,
    20.0,
    21.0,
    22.0,
    23.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0,
    24.0
];

function process_coupon_and_update_price(coupon_object) {
    if (coupon_object) {
        if (coupon_object.discount_type === "percent" && !coupon_executed) {
            price = price - (price * (coupon_object.amount / 100));
            price = price.toFixed(2)
            var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
            $("#pricing_calculation").html(pricing);
            $("#pricing_calculation").append(`<br> Using Promo Code ${coupon_object.code}`);
            coupon_executed = true;
        }
    } else {
        $("#boost_coupon_value").effect("shake");
    }
}

function home_contact_form() {
    form = document.getElementById('home_contact');
    if (form.checkValidity()) {
        $.ajax({
            type: 'POST',
            url: 'http://overwatchboostpro.edu/wp-content/themes/boost/php/contact/contact.php',
            dataType: 'json',
            encode: true,
            data: {
                'name': $("#home_contact_form_name").val(),
                'email': $("#home_contact_form_email").val(),
                'message': $("#home_contact_form_message").val()
            },
            success: function(data) {
                if (data === "SENT") {
                    $("#home_contact_success_modal").modal('show');
                    $("#contact_form").fadeToggle();
                } else if (data === "NOT_SENT") {
                    $("#home_contact_failure_modal").modal('show');
                }
            }
        });
    } else {
        $("#home_contact input, #home_contact textarea").css("border-bottom", "solid 2px #E69B3C");
    }
}

function job_contact_form_1() {
    form = document.getElementById('job_application_1');
    if (form.checkValidity()) {
        var name = $("#job_application_1_name").val();
        var pc = $("#job_application_1_gamertag_pc_checkbox").prop("checked")
            ? "PC Player"
            : "Not PC Player";
        var xbox = $("#job_application_1_gamertag_xbox_checkbox").prop("checked")
            ? "Xbox Player"
            : "Not Xbox Player";
        var ps4 = $("#job_application_1_gamertag_ps4_checkbox").prop("checked")
            ? "PS4 Player"
            : "Not PS4 Player";
        var email = $("#job_application_1_email").val();
        var pc_gamertag = $("#job_application_1_gamertag_pc").val();
        var skype = $("#job_application_1_skype").val();
        var xbox_gamertag = $("#job_application_1_gamertag_xbox").val();
        var location = country_codes[$("#job_application_1_location").val()];
        var ps4_gamertag = $("#job_application_1_gamertag_ps4").val();
        var message = $("#job_application_1_message").val();
        $.ajax({
            type: 'POST',
            url: 'http://overwatchboostpro.edu/wp-content/themes/boost/php/contact/boosters.php',
            dataType: 'json',
            encode: true,
            data: {
                'name': name,
                'pc': pc,
                'xbox': xbox,
                'ps4': ps4,
                'email': email,
                'pc_gamertag': pc_gamertag,
                'skype': skype,
                'xbox_gamertag': xbox_gamertag,
                'location': location,
                'ps4_gamertag': ps4_gamertag,
                'message': message
            },
            success: function(data) {
                if (data === "SENT") {
                    $("#job_contact_success_modal").modal('show');
                    $("#application1").fadeToggle();
                } else if (data === "NOT_SENT") {
                    $("#job_contact_failure_modal").modal('show');
                }
            }
        });
    } else {
        $("#application1 input, #application1 textarea, #application1 select, job_application_1_location").css("border-bottom", "solid 2px #E69B3C");
    }
}

function job_contact_form_2() {
    form = document.getElementById('job_application_2');
    if (form.checkValidity()) {
        var name = $("#job_application_2_name").val();
        var pc = $("#job_application_2_gamertag_pc_checkbox").prop("checked")
            ? "PC Player"
            : "Not PC Player";
        var xbox = $("#job_application_2_gamertag_xbox_checkbox").prop("checked")
            ? "Xbox Player"
            : "Not Xbox Player";
        var ps4 = $("#job_application_2_gamertag_ps4_checkbox").prop("checked")
            ? "PS4 Player"
            : "Not PS4 Player";
        var email = $("#job_application_2_email").val();
        var pc_gamertag = $("#job_application_2_gamertag_pc").val();
        var skype = $("#job_application_2_skype").val();
        var xbox_gamertag = $("#job_application_2_gamertag_xbox").val();
        var location = country_codes[$("#job_application_2_location").val()];
        var ps4_gamertag = $("#job_application_2_gamertag_ps4").val();
        var message = $("#job_application_2_message").val();
        $.ajax({
            type: 'POST',
            url: 'http://overwatchboostpro.edu/wp-content/themes/boost/php/contact/coaches.php',
            dataType: 'json',
            encode: true,
            data: {
                'name': name,
                'pc': pc,
                'xbox': xbox,
                'ps4': ps4,
                'email': email,
                'pc_gamertag': pc_gamertag,
                'skype': skype,
                'xbox_gamertag': xbox_gamertag,
                'location': location,
                'ps4_gamertag': ps4_gamertag,
                'message': message
            },
            success: function(data) {
                if (data === "SENT") {
                    $("#job_contact_success_modal").modal('show');
                    $("#application2").fadeToggle();
                } else if (data === "NOT_SENT") {
                    $("#job_contact_failure_modal").modal('show');
                }
            }
        });
    } else {
        $("#application2 input, #application1 textarea, #application1 select, job_application_2_location").css("border-bottom", "solid 2px #E69B3C");
    }
}

function checklimits(val, min_or_max) {
    if (min_or_max === "min") {
        if (val < 0) {
            return 0;
        } else if (val > $("#slider-range").slider("option", "values")[1]) {
            return $("#slider-range").slider("option", "values")[1];
        } else {
            return val;
        }
    } else {
        if (val > 4650) {
            return 4650;
        } else if (val < $("#slider-range").slider("option", "values")[0]) {
            return $("#slider-range").slider("option", "values")[0];
        } else {
            return val
        }
    }
}

function calculate_price() {
    var min_val = parseInt($("#firstHandle").text());
    var max_val = parseInt($("#secondHandle").text());
    var min_price_position = Math.round(min_val / 50);
    var max_price_position = max_val / 50;
    var price_pre_adjustment = skill_rating_slider_prices.slice(min_price_position, max_price_position).reduce(function(a, b) {
        return a + b;
    }, 0);
    price = (price_pre_adjustment * 0.95).toFixed(2);
}

function calculate_price_solo_duo() {
    var price_per_game = solo_duo_game_slider_prices[Math.round((parseInt($("#rating_value_min_1").val()) / 5000) * solo_duo_game_slider_prices.length)];
    price_solo_duo = (price_per_game * parseInt($("#num_games_value_max_1").val()) * 0.95).toFixed(2);
}

function calculate_price_placement() {
    var placement_value = $("#prev_season_rank_value").val()
    var price_per_game;
    switch (placement_value) {
        case "Unranked":
            price_per_game = 7;
            break;
        case "1 - 1499":
            price_per_game = 5;
            break;
        case "1500 - 1999":
            price_per_game = 5.5;
            break;
        case "2000 - 2499":
            price_per_game = 6.5;
            break;
        case "2500 - 2999":
            price_per_game = 7.5;
            break;
        case "3000 - 3499":
            price_per_game = 8.5;
            break;
        case "3500 - 3999":
            price_per_game = 9.5;
            break;
        case "4000+":
            price_per_game = 11;
            break;
        default:
            price_per_game = 7;
    }
    price_placement = (price_per_game * parseInt($("#num_games_value_max_1").val()) * 0.95).toFixed(2);
}

function get_coupon() {
    var coupon_value = $("#boost_coupon_value").val();
    $.ajax({
        type: 'POST',
        url: 'http://overwatchboostpro.edu/wp-content/themes/boost/php/get_coupon.php',
        dataType: 'json',
        encode: true,
        data: {
            'coupon': coupon_value
        },
        success: function(data) {
            if (data !== "no_coupon") {
                process_coupon_and_update_price(data);
            } else {
                $("#boost_coupon_value").effect("shake");
            }
        }
    });
}

$("#close_order_recived").click(function() {
    location.reload();
})

function thank_you_submit_btn() {
    form = document.getElementById('thank_you_form');
    if (form.checkValidity()) {
        var thank_you_platform = $("input[name=overwatch_platform]:checked", "#thank_you_form").val();
        var thank_you_id = parseInt($("#thank_you_id").val().substr(2));
        var thank_you_boost_order = $("#thank_you_boost_order").val();
        var thank_you_region = $("#thank_you_region").val();
        var thank_you_overwatch_email = $("#thank_you_overwatch_email").val();
        var thank_you_overwatch_password = $("#thank_you_overwatch_password").val();
        $.ajax({
            type: 'POST',
            url: 'http://overwatchboostpro.edu/wp-content/themes/boost/php/add_order_note.php',
            dataType: 'json',
            encode: true,
            data: {
                thank_you_platform,
                thank_you_id,
                thank_you_boost_order,
                thank_you_region,
                thank_you_overwatch_email,
                thank_you_overwatch_password
            },
            success: function(data) {
                if (data) {
                    $("#order_recieved_modal").modal('show');
                }
            }
        });
    } else {
        $("#thank_you_submit").effect("shake");
    }
}

function roundnum(num) {
    return Math.round(num / 50) * 50;
}

function process_order() {
    order_info = get_order_info();
    $.ajax({
        type: 'POST',
        url: 'http://overwatchboostpro.edu/wp-content/themes/boost/php/process_order.php',
        dataType: 'json',
        encode: true,
        data: order_info,
        success: function(data) {
            if (data) {
                $("#boost_container").toggle();
                $("#order_thank_you").fadeToggle();
                $("#thank_you_id").val(`#00${data.id}`);
                var boost_order_text = (order_info.number_of_games)
                    ? `${order_info.number_of_games} ${order_info.type}`
                    : `${order_info.current_skill_rating} - ${order_info.desired_skill_rating} ${order_info.type}`
                $("#thank_you_boost_order").val(boost_order_text);
                $("#thank_you_region").val(country_codes[order_info.paypal_data.payer.payer_info.shipping_address.country_code]);
            }
        }
    });
}

function refresh() {
    $("#rating_value_max_1").val(checklimits($("#slider-range").slider("option", "values")[1], "max"));
    $("#rating_value_min_1").val(checklimits($("#slider-range").slider("option", "values")[0], "min"));
    $('#firstHandle').text($("#slider-range").slider("option", "values")[0], "min");
    $('#secondHandle').text($("#slider-range").slider("option", "values")[1], "max");
    calculate_price_solo_duo();
    calculate_price_placement();
    calculate_price();
    if ($("#solo_duo_heading").parent().hasClass("boost_nav_item_active")) {
        price = price_solo_duo;
    } else if ($("#placement_heading").parent().hasClass("boost_nav_item_active")) {
        price = price_placement;
    }
    var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
    $("#pricing_calculation").html(pricing);
    $('#streaming_checkbox').prop('checked', false);
    $('#streaming_duo_queue').prop('checked', false);

}

$("#close1").click(function() {
    $("#application1").fadeToggle();
    $("#application_button_1").fadeToggle();
});

$("#application_button_1").click(function() {
    $("#application1").fadeToggle();
    $("#application_button_1").fadeToggle();
});

$("#close2").click(function() {
    $("#application2").fadeToggle();
    $("#application_button_2").fadeToggle();
});

$("#application_button_2").click(function() {
    $("#application2").fadeToggle();
    $("#application_button_2").fadeToggle();
});

$("#slider-range").slider({
    range: true,
    min: 0,
    max: 4650,
    step: 50,
    values: [
        2000, 2500
    ],
    slide: function(event, ui) {
        $(".selector").slider("option", "values", [
            checklimits(ui.values[0]),
            checklimits(ui.values[1])
        ]);
        $("#rating_value_min_1").val(ui.values[0]);
        $("#rating_value_max_1").val(ui.values[1]);
        $('#firstHandle').text(ui.values[0]);
        $('#secondHandle').text(ui.values[1]);
        calculate_price_solo_duo();
        calculate_price_placement();
        calculate_price();
        if ($("#solo_duo_heading").parent().hasClass("boost_nav_item_active")) {
            price = price_solo_duo;
        } else if ($("#placement_heading").parent().hasClass("boost_nav_item_active")) {
            price = price_placement;
        }
        var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
        $("#pricing_calculation").html(pricing);
        $('#streaming_checkbox').prop('checked', false);
        $('#streaming_duo_queue').prop('checked', false);
    }
});

$("#game-slider-range").slider({
    min: 1,
    max: 10,
    step: 1,
    value: 5,
    range: "min",
    animate: true,
    slide: function(event, ui) {
        $("#firstGameHandle").text(ui.value);
        $("#num_games_value_max_1").val(ui.value);
        calculate_price_solo_duo();
        calculate_price_placement();
        calculate_price();
        if ($("#solo_duo_heading").parent().hasClass("boost_nav_item_active")) {
            price = price_solo_duo;
        } else if ($("#placement_heading").parent().hasClass("boost_nav_item_active")) {
            price = price_placement;
        }
        var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
        $("#pricing_calculation").html(pricing);
        $('#streaming_checkbox').prop('checked', false);
        $('#streaming_duo_queue').prop('checked', false);
    },
    change: function(event, ui) {
        $("#firstGameHandle").text(ui.value);
        $("#num_games_value_max_1").val(ui.value);
        calculate_price_solo_duo();
        calculate_price_placement();
        calculate_price();
        if ($("#solo_duo_heading").parent().hasClass("boost_nav_item_active")) {
            price = price_solo_duo;
        } else if ($("#placement_heading").parent().hasClass("boost_nav_item_active")) {
            price = price_placement;
        }
        var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
        $("#pricing_calculation").html(pricing);
        $('#streaming_checkbox').prop('checked', false);
        $('#streaming_duo_queue').prop('checked', false);
    }
});

$("#game-slider-range.ui-slider.ui-corner-all.ui-slider-horizontal.ui-widget.ui-widget-content span:nth-child(2)").append("<div class='game_range_handle' id='firstGameHandle'>5</div>");

$("#slider-range.ui-slider.ui-corner-all.ui-slider-horizontal.ui-widget.ui-widget-content span:nth-child(2)").append("<div class='range_handle' id='firstHandle'>3500</div>");
$("#slider-range.ui-slider.ui-corner-all.ui-slider-horizontal.ui-widget.ui-widget-content span:nth-child(3)").append("<div class='range_handle' id='secondHandle'>4000</div>");
var firstHandle = $("#firstHandle");
var secondHandle = $("#secondHandle");

$('#rating_value_min_1').change(function() {
    $("#slider-range").slider("option", "values", [
        checklimits(parseInt($('#rating_value_min_1').val()), "min"),
        checklimits(parseInt($('#rating_value_max_1').val()), "max")
    ]);
    refresh();
});

$('#prev_season_rank_value').change(function() {
    refresh();
})

$('#rating_value_max_1').change(function() {
    $("#rating_value_max_1").val(roundnum($("#rating_value_max_1").val()));
    $("#slider-range").slider("option", "values", [
        checklimits(parseInt($('#rating_value_min_1').val()), "min"),
        checklimits(parseInt($('#rating_value_max_1').val()), "max")
    ]);
    refresh();
});

$("#num_games_value_max_1").change(function() {
    if ($("#num_games_value_max_1").val() > 10) {
        $("#num_games_value_max_1").val(10);
    } else if ($("#num_games_value_max_1").val() < 1) {
        $("#num_games_value_max_1").val(1);
    }
    refresh();
});

$("#plus_increment").click(function() {
    $("#slider-range").slider("option", "values", [
        $("#slider-range").slider("option", "values")[0],
        checklimits($("#slider-range").slider("option", "values")[1] + 50)
    ]);
    refresh();
});

$("#minus_increment").click(function() {
    $("#slider-range").slider("option", "values", [
        $("#slider-range").slider("option", "values")[0],
        checklimits($("#slider-range").slider("option", "values")[1] - 50)
    ]);
    refresh();
});

$("#plus_games_increment").click(function() {
    var current_value = $("#num_games_value_max_1").val();
    if (current_value < 10) {
        $("#num_games_value_max_1").val(parseInt(current_value) + 1);
        $("#game-slider-range").slider("option", "value", parseInt(current_value) + 1);
        refresh();
    }
});

$("#minus_games_increment").click(function() {
    var current_value = $("#num_games_value_max_1").val();
    if (current_value > 1) {
        $("#num_games_value_max_1").val(parseInt(current_value) - 1);
        $("#game-slider-range").slider("option", "value", parseInt(current_value) - 1);
        refresh();
    }
});

$("#solo_duo_heading").click(function() {
    $(".boost_nav_item").removeClass("boost_nav_item_active");
    $(".boost_nav_item h3").removeClass("primary_orange_text");
    $("#solo_duo_heading").parent().addClass("boost_nav_item_active");
    $("#solo_duo_heading").addClass("primary_orange_text");
    if ($("#num_of_games_section").css("display") === "none") {
        $("#num_of_games_section").toggle();
        $("#num_desired_skill_section").toggle();
        $("#slider_range_section").toggle();
        $("#game_slider_range_section").fadeToggle();
        refresh();
        coupon_executed = false;
    }
    if ($("#prev_season_rank").css("display") === "block") {
        $("#current_skill_rating").toggle();
        $("#prev_season_rank").toggle();
    }
});

$("#placement_heading").click(function() {
    $(".boost_nav_item").removeClass("boost_nav_item_active");
    $(".boost_nav_item h3").removeClass("primary_orange_text");
    $("#placement_heading").parent().addClass("boost_nav_item_active");
    $("#placement_heading").addClass("primary_orange_text");
    if ($("#num_of_games_section").css("display") === "none") {
        $("#num_of_games_section").toggle();
        $("#num_desired_skill_section").toggle();
        $("#slider_range_section").toggle();
        $("#game_slider_range_section").fadeToggle();
        refresh();
        coupon_executed = false;
    }
    if ($("#current_skill_rating").css("display") === "block") {
        $("#current_skill_rating").toggle();
        $("#prev_season_rank").toggle();
    }

});

$("#skill_rating_heading").click(function() {
    $(".boost_nav_item").removeClass("boost_nav_item_active");
    $(".boost_nav_item h3").removeClass("primary_orange_text");
    $("#skill_rating_heading").parent().addClass("boost_nav_item_active");
    $("#skill_rating_heading").addClass("primary_orange_text");
    if ($("#num_desired_skill_section").css("display") === "none") {
        $("#num_of_games_section").toggle();
        $("#num_desired_skill_section").toggle();
        $("#slider_range_section").fadeToggle();
        $("#game_slider_range_section").fadeToggle();
        $("#current_skill_rating").toggle();
        $("#prev_season_rank").toggle();
        refresh();
        coupon_executed = false;
    }
    if ($("#prev_season_rank").css("display") === "block") {
        $("#current_skill_rating").toggle();
        $("#prev_season_rank").toggle();
    }
});

$("#streaming_checkbox").change(function() {
    if ($("#streaming_checkbox").is(":checked")) {
        price *= streaming_addOn_multiplier;
        price = price.toFixed(2);
        var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
        $("#pricing_calculation").html(pricing);
    } else {
        price /= streaming_addOn_multiplier;
        price = price.toFixed(2);
        var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
        $("#pricing_calculation").html(pricing);
    }
});

$('#order_recieved_modal').on('hidden.bs.modal', function(e) {
    location.reload();
})

$("#streaming_duo_queue").change(function() {
    if ($("#streaming_duo_queue").is(":checked")) {
        old_price = price;
        price *= duo_queue_addOn_multiplier;
        price = price.toFixed(2)
        var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
        $("#pricing_calculation").html(pricing);
    } else {
        price /= duo_queue_addOn_multiplier;
        price = price.toFixed(2);
        var pricing = `SKILL RATING BOOST FROM ${$('#rating_value_min_1').val()} TO ${$('#rating_value_max_1').val()} FOR <span class="primary_orange_text">$${price}</span>`;
        $("#pricing_calculation").html(pricing);
    }
});

calculate_price();
calculate_price_solo_duo();
calculate_price_placement();
refresh();

function get_order_info() {
    var total_paid = price;
    var current_skill_rating = $("#rating_value_min_1").val();
    var desired_skill_rating = $("#rating_value_max_1").val();
    var number_of_games = $("#num_games_value_max_1").val();
    var twitch_stream = $('#streaming_checkbox').prop('checked')
        ? "Twitch Stream Package Added"
        : "No Twitch Stream";
    var duo_queue = $('#streaming_duo_queue').prop('checked')
        ? "Duo Queue Package Added"
        : "No Duo Queue";
    var type;
    if ($("#solo_duo_heading").parent().hasClass("boost_nav_item_active")) {
        var product_id = 37;
        type = "Solo/Duo Game(s)"
        return {
            type,
            product_id,
            total_paid,
            current_skill_rating,
            number_of_games,
            twitch_stream,
            duo_queue,
            paypal_data
        }
    } else if ($("#placement_heading").parent().hasClass("boost_nav_item_active")) {
        var product_id = 38;
        type = "Placement Game(s)"
        return {
            type,
            product_id,
            total_paid,
            current_skill_rating,
            number_of_games,
            twitch_stream,
            duo_queue,
            paypal_data
        }
    } else {
        var product_id = 36;
        type = "Skill Rating Improvement"
        return {
            type,
            product_id,
            total_paid,
            current_skill_rating,
            desired_skill_rating,
            twitch_stream,
            duo_queue,
            paypal_data
        }
    }

}

paypal.Button.render({
    locale: 'en_US',
    style: {
        size: 'medium',
        color: 'gold',
        shape: 'rect'
    },
    env: 'production',
    commit: true,
    client: {
        sandbox: 'AVAWrMyXQ90T33x9mwD94SKMayeX687jTKGBot31Pd7xY6iZpMIr35HgNm8HkMRgSqwcm1qMENahmscv',
        production: 'AaZ5DYYQQyGKX7InnSZC5lJcwoSdXsUpNyKffDz8ipsXXV6vFUYBAN1h3a9rfzzzBoP8xJStWufYLtON'
    },
    payment: function(data, actions) {
        return actions.payment.create({
            transactions: [
                {
                    amount: {
                        total: price.toString(),
                        currency: 'USD'
                    }
                }
            ]
        });
    },
    commit: true,
    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(response) {
            paypal_data = response;
            process_order();
        });
    },
    onCancel: function(data) {}
}, '#paypal_button_container');
