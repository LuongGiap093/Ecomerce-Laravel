@extends('Pages.layout')

@section('title', 'Search')

@section('content')
    <?php //unset(session('cart')) ?>
    <div class="agileinfo-ads-display col-md-9">
        <div class="wrapper">
            <!-- first section (nuts) -->
            <div class="product-sec1">
                <h3 class="heading-tittle">Sản phẩm tìm kiếm</h3>
                <h5>Tìm thấy {{count($productss)}} sản phẩm </h5>
                @foreach($productss as $product)
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
           
             
               
            </div>
            <!-- //first section (nuts) -->
            <!-- second section (nuts special) -->
           
            <!-- //second section (nuts special) -->
            <!-- third section (oils) -->
         

            <!-- //third section (oils) -->
       
        
    </div>
@endsection

{{-- @section('test1')
<?php //unset(session('cart')) ?>

<div class="agileits-navi_search">

    <form action="#" method="post">
        
        <select id="agileinfo-nav_search" name="agileinfo_search" required="">
            <option value="">All Categories</option>
            @foreach($categorys as $category)
            <option  value=""><a href="">{{$category->category_name}}</option>
        
            @endforeach  
           
        </select>
     
    </form>
  
</div>

@endsection --}}

