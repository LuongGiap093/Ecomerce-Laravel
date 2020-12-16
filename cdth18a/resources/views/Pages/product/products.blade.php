@extends('Pages.layout')

@section('title', 'Products')

@section('content')
    <?php //unset(session('cart')) ?>
    <div class="agileinfo-ads-display col-md-9">
        <div class="wrapper">
            <!-- first section (nuts) -->
            <div class="product-sec1">
                <h3 class="heading-tittle">Nuts</h3>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m1.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.html">Almonds, 100g</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">$149.00</span>
                                <del>$280.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Almonds, 100g">
                                        <input type="hidden" name="amount" value="149.00">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m2.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.html">Cashew Nuts, 100g</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">$200.00</span>
                                <del>$420.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Cashew Nuts, 100g">
                                        <input type="hidden" name="amount" value="200.00">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/m3.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.html">Pista..., 250g</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">$520.99</span>
                                <del>$600.99</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Pista, 250g">
                                        <input type="hidden" name="amount" value="520.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //first section (nuts) -->
            <!-- second section (nuts special) -->
            <div class="product-sec1 product-sec2">
                <div class="col-xs-7 effect-bg">
                    <h3 class="">Pure Energy</h3>
                    <h6>Enjoy our all healthy Products</h6>
                    <p>Get Extra 10% Off</p>
                </div>
                <h3 class="w3l-nut-middle">Nuts &amp; Dry Fruits</h3>
                <div class="col-xs-5 bg-right-nut">
                    <img src="images/nut1.png" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //second section (nuts special) -->
            <!-- third section (oils) -->
            <div class="product-sec1">
                <h3 class="heading-tittle">Oils</h3>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/mk4.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.html">Freedom Oil, 1L</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">$78.00</span>
                                <del>$110.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Freedom Sunflower Oil, 1L">
                                        <input type="hidden" name="amount" value="78.00">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/mk5.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.html">Saffola Gold, 1L</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">$130.00</span>
                                <del>$150.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Saffola Gold, 1L">
                                        <input type="hidden" name="amount" value="130.00">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="images/mk6.jpg" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.html">Fortune Oil, 5L</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">$399.99</span>
                                <del>$500.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Fortune Oil, 5L">
                                        <input type="hidden" name="amount" value="399.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //third section (oils) -->
            <!-- fourth section (noodles) -->
            <div class="product-sec1">
                <h3 class="heading-tittle">Pasta &amp; Noodles</h3>
                @foreach($products as $product)
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset('images/'. $product->image)}}" width="200px" height="200px" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.html">{{($product->product_name) }}</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">{{number_format($product->product_price) }} đ</span>
                                <del>$25.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="YiPPee Noodles, 65g">
                                        <input type="hidden" name="amount" value="15.00">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <input type="submit" name="submit" value="Add to cart" class="button">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach              
                <div class="clearfix"></div>
            </div>
            <!-- //fourth section (noodles) -->
        </div>
    </div>
@endsection

@section('test1')
<?php //unset(session('cart')) ?>
<div class="agileits-navi_search">
    <form action="#" method="post">
        <select id="agileinfo-nav_search" name="agileinfo_search" required="">
            <option value="">All Categories</option>
            <option value="Kitchen">Kitchen</option>
            <option value="Household">Household</option>
            <option value="Snacks &amp; Beverages">Snacks & Beverages</option>
            <option value="Personal Care">Personal Care</option>
            <option value="Gift Hampers">Gift Hampers</option>
            <option value="Fruits &amp; Vegetables">Fruits & Vegetables</option>
            <option value="Baby Care">Baby Care</option>
            <option value="Soft Drinks &amp; Juices">Soft Drinks & Juices</option>
            <option value="Frozen Food">Frozen Food</option>
            <option value="Bread &amp; Bakery">Bread & Bakery</option>
            <option value="Sweets">Sweets</option>
        </select>
    </form>
</div>
@stop