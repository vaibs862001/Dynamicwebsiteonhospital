<!doctype html>
<html lang="en">

<!-- 06_04_checkout.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>06_04_checkout</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="fonts/poppins/poppins.css">
    <link rel="stylesheet" href="plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/process-bar/tox-progress.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugin/animsition/css/animate.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/mediaelement/mediaelementplayer.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="plugin/lightgallery/lightgallery.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--load page-->
<div class="load-page">
    <div class="sk-wave">
        <div class="sk-rect sk-rect1"></div>
        <div class="sk-rect sk-rect2"></div>
        <div class="sk-rect sk-rect3"></div>
        <div class="sk-rect sk-rect4"></div>
        <div class="sk-rect sk-rect5"></div>
    </div>
</div>

<!-- Mobile nav -->
<?php include('include/header.php');?>

        <div id="main-content" class="site-main-content">
            <div class="site-content-area">

                <div class="uni-banner-default uni-background-1">
                    <div class="container">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="page-title-inner">
                                <h1>check out</h1>
                            </div>
                        </div>
                        <!-- End page title -->

                        <!-- Breadcrumbs -->
                        <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">shop</a></li>
                            <li><a href="#">check out</a></li>
                        </ul>
                        <!-- End breadcrumbs -->
                    </div>
                </div>

                <main id="main" class="clearfix right_sidebar">
                    <div class="uni-checkout-body">
                        <div class="container">
                            <div class="tg-container">
                                <div id="primary">

                                    <div class="entry-thumbnail">

                                        <div class="entry-content-text-wrapper clearfix">
                                            <div class="entry-content-wrapper">
                                                <div class="entry-content">
                                                    <div class="woocommerce">
                                                        <div class="woocommerce-info">
                                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Returning customer
                                                            <a href="#" class="showcoupon click-here-to-login">Click here to login </a>
                                                        </div>
                                                        <div class="vk-form-woo-login">
                                                            <div class="row">
                                                                <form class="woocomerce-form woocommerce-form-login login" method="post" >
                                                                    <div class="col-md-12">
                                                                        <p>If you shopped with us before, please enter your details in the boxes below.
                                                                            If you are a new customer, please proceed to the Billing & Shipping section.
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="form-row form-row-first">
                                                                            <input type="text" class="input-text" name="username" id="nameemail" placeholder="Username or email">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="form-row form-row-last">
                                                                            <input class="input-text" type="password" name="password" id="password" placeholder="Password">
                                                                        </p>
                                                                    </div>
                                                                    <div class="clear"></div>


                                                                    <div class="col-md-12">
                                                                        <div class="vk-checkout-login">
                                                                            <div class="row">
                                                                                <div class="col-md-9">
                                                                                    <p class="form-row">
                                                                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="b6598ef61e">
                                                                                        <input type="hidden" name="_wp_http_referer" value="/structure-contruction/checkout/">
                                                                                        <input type="submit" class="button" name="login" value="LOGIN">
                                                                                        <input type="hidden" name="redirect" value="">
                                                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                                                                            <span>Remember me</span>
                                                                                        </label>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <p class="lost_password">
                                                                                        <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Lost your password?</a>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="clear"></div>
                                                                </form>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>

                                                        <div class="woocommerce-info">
                                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Have a coupon
                                                            <a href="#" class="showcoupon click-here-entry-code">Click here to entry your code </a>
                                                        </div>

                                                        <div class="vk-check-coupon">
                                                            <div class="row">
                                                                <form class="checkout_coupon" method="post">

                                                                    <div class="col-md-9">
                                                                        <p class="form-row form-row-first">
                                                                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <p class="form-row form-row-last">
                                                                            <input type="submit" class="button" name="apply_coupon" value="APPLY COUPON">
                                                                        </p>
                                                                    </div>

                                                                    <div class="clear"></div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="vk-checkout-billing-left">
                                                                <div class="col-md-6">
                                                                    <div class="woocommerce-billing-fields">

                                                                        <h3>Billing details</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                                                        <label for="billing_first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                                                                        <label for="billing_last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="">
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-last validate-required" id="billing_phone_field" data-priority="20">
                                                                                        <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="">
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-last validate-required" id="billing_email_field" data-priority="20">
                                                                                        <label for="billing_phone" class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <p class="form-row form-row-last validate-required" id="billing_company_field" data-priority="20">
                                                                                <label for="billing_company" class="">Company name</label>
                                                                                <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="">
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_country_field" data-priority="20">
                                                                                <label for="billing_country" class="">Country</label>
                                                                                <select name="billing_country" id="billing_country" class="country_to_state country_select select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                                                                                    <option value="">Select a country…</option>
                                                                                    <option value="AX">Åland Islands</option>
                                                                                    <option value="AF">Afghanistan</option>
                                                                                    <option value="AL">Albania</option>
                                                                                </select>
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_address_field" data-priority="20">
                                                                                <label for="billing_address" class="">Address<abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="billing_address" id="billing_address" placeholder="" value="">
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_town_city_field" data-priority="20">
                                                                                <label for="billing_town_city" class="">Town/City<abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="billing_town_city" id="billing_town_city" placeholder="" value="">
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_postcode_field" data-priority="20">
                                                                                <label for="billing_postcode" class="">Postcode/ZIP</label>
                                                                                <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required" id="billing_ordernote_field" data-priority="20">
                                                                                <label class="">Order Notes</label>
                                                                                <textarea class="input-text " name="billing_ordercode" id="billing_ordercode" placeholder="" ></textarea>
                                                                                <!--                                                            <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" >-->
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="vk-checkout-creat-account">
                                                                        <h3>
                                                                            <input id="paymentmethodcheque" type="checkbox" class="input-radio checkbox-create-account" name="payment_method" value="cheque" data-order_button_text="">

                                                                            <label for="payment_method_cheque">
                                                                                Create An Account?</label>
                                                                        </h3>
                                                                        <div class="vk-check-create-account-form checkbox-create-account-form">
                                                                            <form class="woocomerce-form woocommerce-form-login login" method="post" >
                                                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.
                                                                                </p>
                                                                                <p class="form-row form-row-first">
                                                                                    <label class="">Password <abbr class="required" title="required">*</abbr></label>
                                                                                    <input type="password" class="input-text" name="username" id="username" placeholder="">
                                                                                </p>
                                                                                <div class="clearfix"></div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="vk-checkout-order-paypal">
                                                                        <div id="order_review" class="woocommerce-checkout-review-order">
                                                                            <div class="vk-checkout-order-left">
                                                                                <h3>Your order</h3>
                                                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th class="product-name">Product</th>
                                                                                        <th class="product-total">Total</th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr class="cart_item">
                                                                                        <td class="product-name">
                                                                                            Beautiful White T-Shirt
                                                                                        </td>
                                                                                        <td class="product-total">
                                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>52.00</span>						</td>
                                                                                    </tr>
                                                                                    <tr class="cart_item">
                                                                                        <td class="product-name">
                                                                                            Beautiful White T-Shirt
                                                                                        </td>
                                                                                        <td class="product-total">
                                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>52.00</span>						</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                    <tfoot>

                                                                                    <tr class="cart-subtotal">
                                                                                        <th>Subtotal</th>
                                                                                        <th><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>52.00</span></th>
                                                                                    </tr>
                                                                                    <tr class="order-total">
                                                                                        <th>Total</th>
                                                                                        <th><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>52.00</span></strong> </th>
                                                                                    </tr>

                                                                                    </tfoot>
                                                                                </table>
                                                                            </div>

                                                                            <div id="payment" class="woocommerce-checkout-payment">
                                                                                <h3>Payment method</h3>
                                                                                <ul class="wc_payment_methods payment_methods">
                                                                                    <li class="wc_payment_method payment_method_cheque">
                                                                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="">

                                                                                        <label for="payment_method_cheque">
                                                                                            Check payments 	</label>
                                                                                        <div class="payment_box payment_method_cheque">
                                                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li><hr></li>
                                                                                    <li class="wc_payment_method payment_method_paypal">
                                                                                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">

                                                                                        <label for="payment_method_paypal">
                                                                                            PayPal <img src="images/paypal.jpg" alt="PayPal acceptance mark"><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>	</label>
                                                                                        <div class="payment_box payment_method_paypal" style="display:none;">
                                                                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="form-row place-order">
                                                                                    <noscript>
                                                                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.			&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;
                                                                                    </noscript>

                                                                                    <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="PLACE ORDER" data-value="Place order">

                                                                                    <input type="hidden" id="wpnonce" name="_wpnonce" value="341d89a24a"><input type="hidden" name="_wp_http_referer" value="/structure-contruction/checkout/?wc-ajax=update_order_review">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- .entry-content -->
                                            </div>
                                        </div>
                                    </div>


                                </div> <!-- Primary end -->
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>

        <?php include('include/footer.php');?>
    </div>
</div>
<script src="plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/bootstrap/js/bootstrap.js"></script>
<script src="plugin/process-bar/tox-progress.js"></script>
<script src="plugin/waypoint/jquery.waypoints.min.js"></script>
<script src="plugin/counterup/jquery.counterup.min.js"></script>
<script src="plugin/owl-carouse/owl.carousel.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/mediaelement/mediaelement-and-player.js"></script>
<script src="plugin/masonry/masonry.pkgd.min.js"></script>
<script src="plugin/datetimepicker/moment.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.tr.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.fr.js"></script>

<script src="plugin/lightgallery/picturefill.min.js"></script>
<script src="plugin/lightgallery/lightgallery.js"></script>
<script src="plugin/lightgallery/lg-pager.js"></script>
<script src="plugin/lightgallery/lg-autoplay.js"></script>
<script src="plugin/lightgallery/lg-fullscreen.js"></script>
<script src="plugin/lightgallery/lg-zoom.js"></script>
<script src="plugin/lightgallery/lg-hash.js"></script>
<script src="plugin/lightgallery/lg-share.js"></script>
<script src="plugin/sticky/jquery.sticky.js"></script>

<script src="js/main.js"></script>
</body>

<!-- 06_04_checkout.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->
</html>