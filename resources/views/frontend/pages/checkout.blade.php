@extends('frontend.layouts.master')

@section('title')
    <!-- Add your title here if needed -->
@endsection

@section('content')
    <!--============================
        BREADCRUMB START
    {{-- ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>check out</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li><a href="{{ route('user.checkout') }}">check out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================ --}}
        BREADCRUMB END
    ==============================-->

    <!--============================
        CHECK OUT PAGE START
    ==============================-->
    <section id="wsus__cart_view">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="wsus__check_form">
                        <div class="d-flex">
                                <h5>Shipping Details </h5>                            
                        </div>
                        <div class="wsus__check_form mt-3">
                            <form action="{{ route('user.checkout.address.create') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Phone *" name="phone" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="email" placeholder="Email *" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Country *" name="country" value="{{ old('country') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="State" name="state" value="{{ old('state') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Town / City *" name="city" value="{{ old('city') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Zip *" name="zip" value="{{ old('zip') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Address *" name="address" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                   
                                </div>
                            </form>
                        </div>
                                      
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="wsus__order_details" id="sticky_sidebar">
                        <!-- Order Summary -->
                        <div class="wsus__order_details_summery">
                            <h6>Order Summary</h6>
                            <p>Subtotal: <span>${{ Cart::subtotal() }}</span></p>
                            <p>Delivery: <span>${{ Cart::tax() }}</span></p>
                            <p><b>Total:</b> <span>${{ Cart::subtotal() + Cart::tax() }}</span></p>


                            <!-- Checkout Form -->
                            <form action="" method="POST" id="CheckoutForm">
                                @csrf
                                <input type="hidden" name="shipping_address_id" value="" id="inputShippingAddressId">
                            </form>

                            <!-- Place Order Button -->
                            <a href="" id="submitCheckoutForm" class="common_btn">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

@endsection
