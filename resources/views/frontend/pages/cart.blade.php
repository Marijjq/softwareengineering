@extends('frontend.layouts.master')

@section('content')

<section id="wsus__cart_view">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="wsus__cart_list">
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr class="d-flex">
                                    <th class="wsus__pro_img">
                                        Product Item
                                    </th>
                                    <th class="wsus__pro_name">
                                        Product Details
                                    </th>
                                    <th class="wsus__pro_select" style="width: 330px;">
                                        Quantity
                                    </th>
                                    
                                    <th class="wsus__pro_tk">
                                        Price
                                    </th>
                                    <th class="wsus__pro_icon">
                                        Clear Cart
                                    </th>
                                </tr>
                                @foreach ($cartItems as $cartItem)
                                    <tr class="d-flex">
                                        <td class="wsus__pro_img">
                                            <img src="{{ optional($cartItem->book)->image }}" alt="{{ $cartItem->book->name }}" class="img-fluid w-100">
                                        </td>
                                        <td class="wsus__pro_name">
                                            <p><strong>Title:</strong> {{ $cartItem->book->name }}</p>
                                            <p><strong>Author:</strong> {{ optional($cartItem->book->author)->name . ' ' . optional($cartItem->book->author)->surname }}</p>
                                            <p><strong>Category:</strong> {{ optional($cartItem->book->category)->name }}</p>
                                        </td>
                                        <td class="wsus__pro_select" style="width: 330px;">
                                            <div class="input-group quantity-input" style="width: 100%;">
                                                <a href="{{ route('qty-decrement', ['rowId' => $cartItem->id]) }}" class="btn btn-outline-info" type="button">-</a>
                                                <input type="number" value="{{ $cartItem->quantity }}" name="quantity[]" class="form-control form-control-sm" style="width: 50px; text-align: center;">
                                                <a href="{{ route('qty-increment', ['rowId' => $cartItem->id]) }}" class="btn btn-outline-info" type="button">+</a>
                                            </div>
                                        </td>
                                        
                                        <td class="wsus__pro_tk">
                                            <h6>${{ number_format($cartItem->quantity * $cartItem->book->init_price, 2) }}</h6>
                                        </td>
                                        <td class="wsus__pro_icon">
                                            <a href="{{ route('remove-book', $cartItem->id) }}"><i class="far fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>


                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3" style="position: relative;">
                @php
                $subtotal = 0;
                $taxRate = 0.15; // 15%
                $tax = 0;
            
                foreach ($cartItems as $cartItem) {
                    $subtotal += $cartItem->quantity * $cartItem->book->init_price;
                    // Calculate tax based on subtotal (price)
                    $tax += $cartItem->quantity * $cartItem->book->init_price * $taxRate;
                }
            
                $total = $subtotal + $tax;
            
                // Round the values to two decimal places
                $subtotal = round($subtotal, 2);
                $tax = round($tax, 2);
                $total = round($total, 2);
            @endphp 
            
            <div class="wsus__cart_list_footer_button" id="sticky_sidebar" style="will-change: transform; transform: translateZ(0px);">
                <h6>Total Cart</h6>
                <p>Subtotal ${{$subtotal}}</p>
                <p>Tax ${{$tax}} (15%)</p>
                <p>Total: ${{ $total }}</p>
            </div>
            
            
            
                <a class="common_btn mt-4 w-100 text-center" href="{{ route('user.checkout') }}">Checkout</a>
                <a class="common_btn mt-1 w-100 text-center" href="{{ route('shop') }}"><i class="fab fa-shopify" aria-hidden="true"></i> Go Shop</a>
            </div>
            <div id="sticky_sidebar" class="wsus__cart_list_footer_button jquery-stickit-spacer" style="height: 438.4px; visibility: hidden !important; display: none !important;"></div>
        </div>
        </div>
    </div>
</section>



@endsection