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
                @foreach($productss ?? '' as $product)
                <div class="col-md-4 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset('images/'. $product->image)}}" width="200px" height="200px" alt="">
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
                @endforeach

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
                                    <a href="{{ url('product/detailsproduct/'.$product->product_id) }}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="{{ url('product/chitiet')}}">{{($product->product_name)}}</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">{{number_format($product->product_price) }} đ</span>
                                <del>$25.00</del>
                            </div>
                            
                        </div>
                        <p class="btn-holder"><a href="{{ url('product/add-to-cart/'.$product->product_id) }}" class="btn btn-warning btn-block text-center" role="button">Thêm vào giỏ hàng</a> </p>
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
            @foreach($categorys as $category)
            <option value="#">{{$category->category_name}}</option>
            @endforeach  
           
        </select>
     
    </form>
  
</div>

@endsection


@section('content')
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Single Page
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <div class="col-md-5 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    
                    <div class="clearfix"></div>
                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1311px, 0px, 0px);"><li data-thumb="images/se3.jpg" class="clone" aria-hidden="true" style="width: 437px; float: left; display: block;">
                            <div class="thumb-image">
                                <img src="images/se3.jpg" data-imagezoom="true" class="img-responsive" alt="" draggable="false"> </div>
                        </li>
                        <li data-thumb="images/se1.jpg" style="width: 437px; float: left; display: block;" class="">
                            <div class="thumb-image">
                                <img src="images/se1.jpg" data-imagezoom="true" class="img-responsive" alt="" draggable="false"> </div>
                        </li>
                        <li data-thumb="images/se2.jpg" class="" style="width: 437px; float: left; display: block;">
                            <div class="thumb-image">
                                <img src="images/se2.jpg" data-imagezoom="true" class="img-responsive" alt="" draggable="false"> </div>
                        </li>
                        <li data-thumb="images/se3.jpg" class="flex-active-slide" style="width: 437px; float: left; display: block;">
                            <div class="thumb-image">
                                <img src="images/se3.jpg" data-imagezoom="true" class="img-responsive" alt="" draggable="false"> </div>
                        </li>
                    <li data-thumb="images/se1.jpg" style="width: 437px; float: left; display: block;" class="clone" aria-hidden="true">
                            <div class="thumb-image">
                                <img src="images/se1.jpg" data-imagezoom="true" class="img-responsive" alt="" draggable="false"> </div>
                        </li></ul></div><ol class="flex-control-nav flex-control-thumbs"><li><img src="images/se1.jpg" class="" draggable="false"></li><li><img src="images/se2.jpg" draggable="false" class=""></li><li><img src="images/se3.jpg" draggable="false" class="flex-active"></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
            </div>
        </div>
        <div class="col-md-7 single-right-left simpleCart_shelfItem">
            <h3>Ambipur Air Freshener - 275 g </h3>
            <div class="rating1">
                <span class="starRating">
                    <input id="rating5" type="radio" name="rating" value="5">
                    <label for="rating5">5</label>
                    <input id="rating4" type="radio" name="rating" value="4">
                    <label for="rating4">4</label>
                    <input id="rating3" type="radio" name="rating" value="3" checked="">
                    <label for="rating3">3</label>
                    <input id="rating2" type="radio" name="rating" value="2">
                    <label for="rating2">2</label>
                    <input id="rating1" type="radio" name="rating" value="1">
                    <label for="rating1">1</label>
                </span>
            </div>
            <p>
                <span class="item_price">$265.00</span>
                <del>$285.00</del>
                <label>Free delivery</label>
            </p>
            <div class="single-infoagile">
                <ul>
                    <li>
                        Cash on Delivery Eligible.
                    </li>
                    <li>
                        Delivery to within 7 - 10 business days.
                    </li>
                    <li>
                        Sold by Cloudtail India (4.2 out of 5 | 95,027 ratings).
                    </li>
                    <li>
                        6 offer from
                        <span class="item_price">$285.00</span>
                    </li>
                </ul>
            </div>
            <div class="product-single-w3l">
                <p>
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>Pantry Cashback Offer</p>
                <ul>
                    <li>
                        Doesn't just cover, Truly removes odours
                    </li>
                    <li>
                        Ambi Pur is a brand of air freshener products available in the United States, Europe, Asia and Oceania.
                    </li>
                    <li>
                        Their range of products may be used in the home or in the car with a variety of smells and properties such as odor neutralisation.
                    </li>
                    <li>
                        Transforms your home from smelly to smiley
                    </li>
                </ul>
                <p>
                    <i class="fa fa-refresh" aria-hidden="true"></i>All food products are
                    <label>returnable.</label>
                </p>
            </div>
            <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="business" value=" ">
                            <input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG">
                            <input type="hidden" name="amount" value="951.00">
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
        <div class="clearfix"> </div>
    </div>
</div>
@endsection