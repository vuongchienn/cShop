@extends('customer.layout.master')

@section('title','Shopping Cart')

@section('content')


    <!-- Breadcrumb Logo Section Begin -->
    <div class ="breacrumb-section">
        <div class = 'container'>
            <div class="row">
                    <div class="col-lg-12">
                        <div class = "breadcrumb-text">
                            <a href = "#"><i class = "fa fa-home"></i>Home</a>
                            <a href = "#">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Shopping Cart Section -->
    <div class = "shopping-cart spad">
        <div class = "container">
            <div class= "row">
                <div class= "col-lg-12">
                    <div class=  "cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class = "p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $totalPrice = 0
                                @endphp
                                @foreach($productInCarts as $productInCart)
                                                        @php
                                                        $totalPrice += $productInCart->pivot->quantity * $productInCart->price;
                                                        @endphp
                                    <tr>
                                        <td class ="cart-pic first-row"><img src= "customer/img/cart-page/product-1.jpg" alt =""></td>
                                        <td class= "cart-title first-row">
                                            <h5>{{ $productInCart->name }}</h5>
                                        </td>
                                        <td class=  "p-price first-row">${{ $productInCart->price }}</td>
                                        <td class ="qua-col first-row"> 
                                            <div class = "quantity">
                                                <div class = "pro-qty">
                                                    <input type= "text" value="{{ $productInCart->pivot->quantity }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class=  "total-price first-row">${{ ($productInCart->pivot->quantity * $productInCart->price) }}</td>
                                        <form action = {{ Route('cart.destroy',$productInCart->id) }} method = "POST">
                                            @method('DELETE')
                                            @csrf
                                            <td class= "close-td first-row"><button style = "border:none;background:white;" type = "submit"><i class= "ti-close"></i></button></td>
                                        </form>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                    <div class = "row">
                        <div class = "col-lg-4">
                            <div class= "cart-buttons">
                                <a href = "{{ Route('products.index') }}" class= "primary-btn continue-shop">Continue shopping</a>
                                <a href = "#" class= "primary-btn up-cart">Update cart</a>
                            </div>
                            <div class = "discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action = "#" class ="coupon-form">
                                    <input type = "text" placeholder= "Enter your codes">
                                    <button type= "submit" class= "site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class= "col-lg-4 offset-lg-4">
                            <div class = "proceed-checkout">
                                <ul>
                                    <li class = "subtotal">Subtotal<span>${{ $totalPrice }}</span></li>
                                    <li class = "cart-total">Total<span>${{ $totalPrice }}</span></li>
                                </ul>
                                <a href=  "#" class = "proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection