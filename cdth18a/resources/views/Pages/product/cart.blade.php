@extends('Pages.checkout.layout')

@section('title', 'Cart')

@section('content')
        <span id="status"></span>
    <table id="cart" class="table table-hover table-condensed">    
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Thành tiền</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ;?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price']*  $details['quantity'] ?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs">
                            <img src="{{ asset('images/'.$details['image']) }}" width="100px" height="100px" class="img-responsive"/>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center"><span class="product-subtotal" >{{ number_format($details['price']*$details['quantity']) }}</span></td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                        <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong><span class="cart-total">Tạm tính {{ number_format($total) }}đ</span></strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/product') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></td>       
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong><span class="cart-total">Tổng tiền {{ number_format($total) }}đ</span></strong></td> 
        </tr>
        <tr>
            <td colspan="4" class="hidden-xs"></td>
            <td><a href="{{ url('/product') }}" class="btn btn-warning"><i  ></i>Thanh toán</a></td>       
         
        </tr>
        
        
        </tfoot>
        </div>

    </table>

@endsection
