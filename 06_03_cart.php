<!doctype html>
<html lang="en">

<!-- 06_03_cart.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>06_03_cart</title>
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
                                <h1>your cart</h1>
                            </div>
                        </div>
                        <!-- End page title -->

                        <!-- Breadcrumbs -->
                        <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">shop</a></li>
                            <li><a href="#">cart</a></li>
                        </ul>
                        <!-- End breadcrumbs -->
                    </div>
                </div>

                <main id="main" class="site-main">
                    <div class="uni-cart-body">
                        <div id="post" class="container">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form" method="post">
                                        <table class="woocommerce-cart-form__contents table shop_table_responsive">
                                            <thead>
                                            <tr>
                                                <th class="product-remove"></th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                </td>
                                                <td class="product-name">
                                                    <span class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="images/shop/img-4.png" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image img-responsive">
                                                        </a>
                                                    </span>
                                                    <a href="#">Redufluxes</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        26.00
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity">
                                                        <input type="number" class="qty" min="0"  value="1">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <div class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        26.00
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                <td class="product-remove">
                                                    <a href="#" class="remove"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                </td>
                                                <td class="product-name">
                                                    <span class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="images/shop/img.png" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image img-responsive">
                                                        </a>
                                                    </span>
                                                    <a href="#">Sperm Plus</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        26.00
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="quantity">
                                                        <input type="number" class="qty" min="0" value="1">
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <div class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        26.00
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>

                                            <tfoot>
                                            <tr>
                                                <td class="actions" colspan="5">
                                                    <div class="coupon">
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                                        <input type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                                    </div>
                                                    <input type="submit" class="button" name="update_cart" value="Update cart">
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </form>

                                    <div class="cart-collaterals">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="cart_totals">
                                                    <h2>Cart totals</h2>
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody><tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>15.00</span></td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>15.00</span></strong> </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="wc-proceed-to-checkout">
                                                        <a href="#" class="checkout-button button alt wc-forward">Proceed to checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

<!-- 06_03_cart.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->
</html>