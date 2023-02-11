<?php
require_once 'includes/header.php'
?>

<!-- ekka Cart Start -->
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items">
                <li>
                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                        <span class="cart-price"><span>$76.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1"/>
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/12_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                        <span class="cart-price"><span>$64.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1"/>
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/3_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                        <span class="cart-price"><span>$59.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1"/>
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                    <tr>
                        <td class="text-left">Sub-Total :</td>
                        <td class="text-right">$300.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">VAT (20%) :</td>
                        <td class="text-right">$60.00</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total :</td>
                        <td class="text-right primary-color">$360.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="cart.html" class="btn btn-primary">View Cart</a>
                <a href="checkout.html" class="btn btn-secondary">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- ekka Cart End -->

<!-- Ec Shop page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-shop-rightside col-lg-12 col-md-12">
                <!-- Shop Top Start -->
                <div class="ec-pro-list-top d-flex">
                    <div class="col-md-6 ec-grid-list">
                        <div class="ec-gl-btn">
                            <button class="btn sidebar-toggle-icon"><img src="assets/images/icons/filter.svg"
                                                                         class="svg_img gl_svg" alt="filter"/></button>
                            <button class="btn btn-grid-50 active"><img src="assets/images/icons/grid.svg"
                                                                        class="svg_img gl_svg" alt="grid"/></button>
                            <button class="btn btn-list-50"><img src="assets/images/icons/list.svg"
                                                                 class="svg_img gl_svg" alt="list"/></button>
                        </div>
                    </div>
                    <div class="col-md-6 ec-sort-select">
                        <span class="sort-by">Sort by</span>
                        <div class="ec-select-inner">
                            <select name="ec-select" id="ec-select">
                                <option selected disabled>Position</option>
                                <option value="1">Relevance</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Shop Top End -->

                <!-- Shop content Start -->
                <div class="shop-pro-content">
                    <div class="shop-pro-inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/6_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/6_2.jpg" alt="Product"/>
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck
                                                T-Shirt</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/6_1.jpg"
                                                                          data-src-hover="assets/images/product-image/6_1.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/6_2.jpg"
                                                           data-src-hover="assets/images/product-image/6_2.jpg"
                                                           data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz"
                                                                          data-old="$25.00" data-new="$20.00"
                                                                          data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                           data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                           data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/7_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/7_2.jpg" alt="Product"/>
                                            </a>
                                            <span class="percentage">20%</span>
                                            <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve
                                                Shirt</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/7_1.jpg"
                                                                          data-src-hover="assets/images/product-image/7_1.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#01f1f1;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/7_2.jpg"
                                                           data-src-hover="assets/images/product-image/7_2.jpg"
                                                           data-tooltip="Orange"><span
                                                                    style="background-color:#b89df8;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz"
                                                                          data-old="$12.00" data-new="$10.00"
                                                                          data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                           data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                           data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/1_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/1_2.jpg" alt="Product"/>
                                            </a>
                                            <span class="percentage">20%</span>
                                            <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a>
                                        </h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/1_1.jpg"
                                                                          data-src-hover="assets/images/product-image/1_1.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#90cdf7;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/1_2.jpg"
                                                           data-src-hover="assets/images/product-image/1_2.jpg"
                                                           data-tooltip="Orange"><span
                                                                    style="background-color:#ff3b66;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/1_3.jpg"
                                                           data-src-hover="assets/images/product-image/1_3.jpg"
                                                           data-tooltip="Green"><span
                                                                    style="background-color:#ffc476;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/1_4.jpg"
                                                           data-src-hover="assets/images/product-image/1_4.jpg"
                                                           data-tooltip="Sky Blue"><span
                                                                    style="background-color:#1af0ba;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz"
                                                                          data-old="$40.00" data-new="$30.00"
                                                                          data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                           data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/2_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/2_2.jpg" alt="Product"/>
                                            </a>
                                            <span class="percentage">20%</span>
                                            <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a>
                                        </h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$40.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/2_1.jpg"
                                                                          data-src-hover="assets/images/product-image/2_2.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#fdbf04;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/3_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/3_2.jpg" alt="Product"/>
                                            </a>
                                            <span class="percentage">20%</span>
                                            <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Designer Leather
                                                Purses</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/3_1.jpg"
                                                                          data-src-hover="assets/images/product-image/3_1.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#75e3ff;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/3_2.jpg"
                                                           data-src-hover="assets/images/product-image/3_2.jpg"
                                                           data-tooltip="Orange"><span
                                                                    style="background-color:#11f7d8;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/3_3.jpg"
                                                           data-src-hover="assets/images/product-image/3_3.jpg"
                                                           data-tooltip="Green"><span
                                                                    style="background-color:#acff7c;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/3_5.jpg"
                                                           data-src-hover="assets/images/product-image/3_5.jpg"
                                                           data-tooltip="Sky Blue"><span
                                                                    style="background-color:#e996fa;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/4_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/4_2.jpg" alt="Product"/>
                                            </a>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Cowboy
                                                Hat</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/4_1.jpg"
                                                                          data-src-hover="assets/images/product-image/4_1.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#ebbf60;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/4_2.jpg"
                                                           data-src-hover="assets/images/product-image/4_2.jpg"
                                                           data-tooltip="Orange"><span
                                                                    style="background-color:#b4fc57;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/4_3.jpg"
                                                           data-src-hover="assets/images/product-image/4_3.jpg"
                                                           data-tooltip="Green"><span
                                                                    style="background-color:#2ea1cd;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/4_4.jpg"
                                                           data-src-hover="assets/images/product-image/4_4.jpg"
                                                           data-tooltip="Sky Blue"><span
                                                                    style="background-color:#c1a1fd;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/5_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/5_2.jpg" alt="Product"/>
                                            </a>
                                            <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather Belt for
                                                Men</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/5_1.jpg"
                                                                          data-src-hover="assets/images/product-image/5_1.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#9e9e9e;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/5_2.jpg"
                                                           data-src-hover="assets/images/product-image/5_2.jpg"
                                                           data-tooltip="Orange"><span
                                                                    style="background-color:#eb8e76;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz"
                                                                          data-old="$15.00" data-new="$10.00"
                                                                          data-tooltip="Small">32</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$17.00"
                                                           data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                     src="assets/images/product-image/8_1.jpg" alt="Product"/>
                                                <img class="hover-image"
                                                     src="assets/images/product-image/8_2.jpg" alt="Product"/>
                                            </a>
                                            <span class="percentage">20%</span>
                                            <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                               title="Quick view" data-bs-toggle="modal"
                                               data-bs-target="#ec_quickview_modal"><img
                                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt=""/></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare"
                                                   title="Compare"><img src="assets/images/icons/compare.svg"
                                                                        class="svg_img pro_svg" alt=""/></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt=""/> Add To Cart
                                                </button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart
                                                Watches</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the
                                            1500s, when an unknown printer took a galley.
                                        </div>
                                        <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                          data-src="assets/images/product-image/8_2.jpg"
                                                                          data-src-hover="assets/images/product-image/8_2.jpg"
                                                                          data-tooltip="Gray"><span
                                                                    style="background-color:#e9dddd;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/8_3.jpg"
                                                           data-src-hover="assets/images/product-image/8_3.jpg"
                                                           data-tooltip="Orange"><span
                                                                    style="background-color:#ffd5cb;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                           data-src="assets/images/product-image/8_4.jpg"
                                                           data-src-hover="assets/images/product-image/8_4.jpg"
                                                           data-tooltip="Green"><span
                                                                    style="background-color:#92e4fd;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ec Pagination Start -->
                    <div class="ec-pro-pagination">
                        <span>Showing 1-12 of 21 item(s)</span>
                        <ul class="ec-pro-pagination-inner">
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Ec Pagination End -->
                </div>
                <!--Shop content End -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop page -->

<!-- Footer Start -->
<?php require_once 'includes/footer.php' ?>
<!-- Footer Area End -->

<!-- Modal -->
<div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <!-- Swiper -->
                        <div class="qty-product-cover">
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                            </div>
                        </div>
                        <div class="qty-nav-thumb">
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="quickview-pro-content">
                            <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for
                                    women</a>
                            </h5>
                            <div class="ec-quickview-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>

                            <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s,
                            </div>
                            <div class="ec-quickview-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </div>

                            <div class="ec-pro-variation">
                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                    <span>Color</span>
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch">
                                            <li><span style="background-color:#696d62;"></span></li>
                                            <li><span style="background-color:#d73808;"></span></li>
                                            <li><span style="background-color:#577023;"></span></li>
                                            <li><span style="background-color:#2ea1cd;"></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                    <span>Size</span>
                                    <div class="ec-pro-variation-content">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                                  data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-quickview-qty">
                                <div class="qty-plus-minus">
                                    <input class="qty-input" type="text" name="ec_qtybtn" value="1"/>
                                </div>
                                <div class="ec-quickview-cart ">
                                    <button class="btn btn-primary"><img src="assets/images/icons/cart.svg"
                                                                         class="svg_img pro_svg" alt=""/> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- Footer navigation panel for responsive display -->
<div class="ec-nav-toolbar">
    <div class="container">
        <div class="ec-nav-panel">
            <div class="ec-nav-panel-icons">
                <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt=""/></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt=""/><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="index.php" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                                                               class="svg_img header_svg" alt="icon"/></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                                                                   class="svg_img header_svg" alt="icon"/><span
                            class="ec-cart-noti">4</span></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                                                                class="svg_img header_svg" alt="icon"/></a>
            </div>

        </div>
    </div>
</div>
<!-- Footer navigation panel for responsive display end -->

<!-- Recent Purchase Popup  -->

<!-- Recent Purchase Popup end -->

<!-- Cart Floating Button -->
<div class="ec-cart-float">
    <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
        <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt=""/></div>
        <span class="ec-cart-count cart-count-lable">3</span>
    </a>
</div>
<!-- Cart Floating Button end -->

<!-- Whatsapp -->
<?php require_once 'includes/whatsapp.php' ?>
<!-- Whatsapp end -->

<!-- Feature tools -->
<div class="ec-tools-sidebar-overlay"></div>
<div class="ec-tools-sidebar">
    <div class="tool-title">
        <h3>Features</h3>
    </div>
    <a href="#" class="ec-tools-sidebar-toggle in-out">
        <img alt="icon" src="assets/images/common/settings.png"/>
    </a>
    <div class="ec-tools-detail">
        <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
            <h3>Color Scheme</h3>
            <ul class="bg-panel">
                <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                <li data-color="02"><a href="#" class="colorcode2"></a></li>
                <li data-color="03"><a href="#" class="colorcode3"></a></li>
                <li data-color="04"><a href="#" class="colorcode4"></a></li>
                <li data-color="05"><a href="#" class="colorcode5"></a></li>
            </ul>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Backgrounds</h3>
            <ul class="bg-panel">
                <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
            </ul>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Full Screen mode</h3>
            <div class="ec-fullscreen-mode">
                <div class="ec-fullscreen-switch">
                    <div class="ec-fullscreen-btn">Mode</div>
                    <div class="ec-fullscreen-on">On</div>
                    <div class="ec-fullscreen-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Dark mode</h3>
            <div class="ec-change-mode">
                <div class="ec-mode-switch">
                    <div class="ec-mode-btn">Mode</div>
                    <div class="ec-mode-on">On</div>
                    <div class="ec-mode-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>RTL mode</h3>
            <div class="ec-change-rtl">
                <div class="ec-rtl-switch">
                    <div class="ec-rtl-btn">Rtl</div>
                    <div class="ec-rtl-on">On</div>
                    <div class="ec-rtl-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Language</h3>
            <div class="ec-change-lang">
                <span id="google_translate_element"></span>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Clear local storage</h3>
            <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
        </div>
    </div>
</div>
<!-- Feature tools end -->

<!-- Vendor JS -->
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

<!--Plugins JS-->
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/nouislider.js"></script>
<script src="assets/js/plugins/countdownTimer.min.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/infiniteslidev2.js"></script>
<script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
<!-- Google translate Js -->
<script src="assets/js/vendor/google-translate.js"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<!-- Main Js -->
<script src="assets/js/main.js"></script>

</body>
</html>