@extends('client.layouts.main')

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('client.home')}}">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="cart_page_bg">
        <div class="container">
            <div class="shopping_cart_area">
                <form action="#">

                    <div class="row cartDataDiv">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product_name">Size</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody class="cart-page-view">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <a href="javascript:void(0)" class="btn-clear">Clear Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon_area cartDataDiv">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
{{--                                <div class="coupon_code left">--}}
{{--                                    <h3>Coupon</h3>--}}
{{--                                    <div class="coupon_inner">--}}
{{--                                        <p>Enter your coupon code if you have one.</p>--}}
{{--                                        <input placeholder="Coupon code" type="text">--}}
{{--                                        <button type="submit">Apply coupon</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Total</h3>
                                    <div class="coupon_inner">
{{--                                        <div class="cart_subtotal">--}}
{{--                                            <p>Subtotal</p>--}}
{{--                                            <p class="cart_amount">0</p>--}}
{{--                                        </div>--}}
                                        {{-- <div class="cart_subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart_amount"><span>Flat Rate:</span> ৳{{ Cart::instance('cart')->tax() }}</p>
                                        </div> --}}
                                        {{-- <a href="#">Calculate shipping</a> --}}

                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount cart-total-price">0</p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="{{ route('client.checkout') }}">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row cartEmptyDiv">
                        <div class="col-md-12 text-center">
                            <h2>Your cart is empty !</h2>
                            <h5 class="mt-3">Add Items to it now.</h5>
                            <a href="{{ route('client.shop') }}" class="btn btn-warning mt-5">Shop Now</a>
                        </div>
                    </div>

                    <!--coupon code area end-->
                </form>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->

@endsection

@push('scripts')

@endpush
