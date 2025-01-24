<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href = "{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="customer/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="customer/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="customer/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="customer/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="customer/css/style.css" type="text/css">
</head>

<body>
    <!-- Start coding here -->


    <div id = "preloder">
        <div class = "loader">
            
        </div>
    </div>


    <header class = "header-section">    
        <div class = "header-top">

            <div class=  "container">
                <div class = "ht-left">
                    <div class = "mail-service">
                        <i class = "fa fa-envelope"></i>
                        vuongtatchien21122004@gmail.com
                    </div>
                    <div class = "phone-service">
                        <i class = "fa fa-phone"></i>
                        0123456789
                    </div>
                </div>

                <div class = "ht-right">
                    <a href = "{{route('login') }}" class = "login-panel"><i class = "fa fa-user"></i>Login</a>
                    <div class = "lan-selector">
                        <select class= "language_drop" name = "contries" id = "contries" style = "width:300px;">
                            <option value = "yt" data-image="customer/img/flag-1.jpg" data-imagecss = "flag yt"
                            data-title = "English">
                                English
                            </option>
    
                            <option value = "yu" data-image="customer/img/flag-2.jpg" data-imagecss = "flag yu"
                            data-title = "Bangladesh">
                                German
                            </option>
                        </select>
                    </div>

                    <div class= "top-social">
                        <a href = "#"><i class = "ti-facebook"></i></a>
                        <a href = "#"><i class = "ti-twitter-alt"></i></a>
                        <a href = "#"><i class = "ti-linkedin"></i></a>
                        <a href = "#"><i class = "ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class = "container">
            <div class = "inner-header">
                <div class= "row">
                    <div class = "col-lg-2 col-md-2">
                        <div class ="logo">
                            <a href = "index.html">
                                <img src = "customer/img/logo.png" height = "25" alt = "">
                            </a>
                        </div>
                    </div>
                    <div class = "col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type ="button" class = "category-btn">All Categories</button>
                            <div class = "input-group">
                                <input type = "text" placeholder="What do you need?">
                                <button type = "button "><i class = "ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class = "col-lg-3 col-md-3 text-right">
                        <div>
                            <ul class = "nav-right"> 
                                <li class= "heart-icon">
                                    <a href = "#"> 
                                        <i class = "icon_heart_alt"></i>
                                        <span>1</span>
                                    </a>
                                </li>

                                <li class= "cart-icon">
                                    <a href = "#"> 
                                        <i class = "icon_bag_alt"></i>
                                        <span>3</span>
                                    </a>
                                    <div class=  "cart-hover">
                                        <div class = "select-items">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class = "si-pic"><img src= "customer/img/select-product-1.jpg"></td>
                                                        <td class=  "si-text">
                                                            <div class= "product-selected">
                                                                <p>&60.00 x 1</p>
                                                                <h6>Kabino Bedside Table</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close"> 
                                                            <i class= "ti-close"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class = "si-pic"><img src= "customer/img/select-product-1.jpg"></td>
                                                        <td class=  "si-text">
                                                            <div class= "product-selected">
                                                                <p>&60.00 x 1</p>
                                                                <h6>Kabino Bedside Table</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close"> 
                                                            <i class= "ti-close"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class = "si-pic"><img src= "customer/img/select-product-2.jpg"></td>
                                                        <td class=  "si-text">
                                                            <div class= "product-selected">
                                                                <p>&60.00 x 1</p>
                                                                <h6>Kabino Bedside Table</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close"> 
                                                            <i class= "ti-close"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class= "select-total">
                                            <span>total</span>
                                            <h5>$120.00</h5>
                                        </div>
                                        <div class= "select-button">
                                            <a href = "shopping-cart.html" class ="primary-btn view-card">VIEW CARD</a>
                                            <a href = "check-out.html" class ="primary-btn check-btn">CHECK OUT</a>
                                        </div>

                                    </div>
                                </li>

                                <li class= "cart-price">
                                    $150.00
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "nav-item">
            <div class="container">
                <div class= "nav-depart">
                    <div class= "depart-btn">
                        <i class= "ti-menu"></i>
                        <span>All departments</span>
                        <ul class= "depart-hover">
                            <li class ="active"><a href = "#">Women's Clothing</a></li>       
                            <li><a href = "#">Men's Clothing</a></li>
                            <li><a href = "#">Underwear</a></li>
                            <li><a href = "#">Kid's Clothing</a></li>
                            <li><a href = "#">Brand </a></li>
                            <li><a href = "#">Accessories/Shoes</a></li>
                            <li><a href = "#">Luxury Brand</a></li>
                            <li><a href = "#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class ="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products.index') }}">Shop</a></li>
                        <li><a href="">Collection</a>
                            <ul class="dropdown">
                                <li><a href = "">Men's</a></li>
                                <li><a href = "">Women's</a></li>
                                <li><a href = "">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                                <li><a href = "">Blog Details</a></li>
                                <li><a href = "">Shopping Cart</a></li>
                                <li><a href = "{{ route('check-out') }}">Checkout</a></li>
                                <li><a href = "">Faq</a></li>
                                <li><a href = "">Register</a></li>
                                <li><a href = "">Login</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <div id = "mobile-menu-wrap">

                </div>
            </div>
        </div>  
    </header>


    {{-- content --}}
    @yield('content')



 {{-- Partner Logo Section Begin --}}

 <div class = "partner-logo"> 
    <div class = "container">
        <div class = "logo-carousel owl-carousel">
            <div class = "logo-item">
                <div class ="tablecell-inner">
                    <img src = "customer/img/logo-carousel/logo-1.png">
                </div>
            </div>

            <div class = "logo-item">
                <div class ="tablecell-inner">
                    <img src = "customer/img/logo-carousel/logo-2.png">
                </div>
            </div>

            <div class = "logo-item">
                <div class ="tablecell-inner">
                    <img src = "customer/img/logo-carousel/logo-3.png">
                </div>
            </div>
            <div class = "logo-item">
                <div class ="tablecell-inner">
                    <img src = "customer/img/logo-carousel/logo-4.png">
                </div>
            </div>
            <div class = "logo-item">
                <div class ="tablecell-inner">
                    <img src = "customer/img/logo-carousel/logo-5.png">
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Footer Section Begin --}}
<footer class=  "footer-section">
    <div class = "container">
        <div class = "row">
            <div class ="col-lg-3">
                <div class ="footer-left">
                    <div class= "footer-logo">
                        <a href ="" >
                            <img src=  "customer/img/footer-logo.png" height = "25" alt= "">
                        </a>
                    </div>
                    <ul>
                        <li>1A Yet Kieu . Ha Noi</li>
                        <li>Phone : 09123914791</li>
                        <li>Email : asfhsdf@gmail.com</li>
                    </ul>
                    <div class= "footer-social">
                        <a href ="#"><i class = "fa fa-facebook"></i></a>
                        <a href ="#"><i class = "fa fa-instagram"></i></a>
                        <a href ="#"><i class = "fa fa-twitter"></i></a>
                        <a href ="#"><i class = "fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class ="col-lg-2 offset-lg-1">
                <div class = "footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href ="#">About us</a> </li>
                        <li><a href ="#">Checkout</a> </li>
                        <li><a href ="#">Contact</a> </li>
                        <li><a href ="#">Serivius</a> </li>
                    </ul>
                </div>
            </div>
            <div class ="col-lg-2">
                <div class = "footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href ="#">My Account</a> </li>
                        <li><a href ="#">Contact</a> </li>
                        <li><a href ="#">Shopping Cart</a> </li>
                        <li><a href ="#">Shop</a> </li>
                    </ul>
                </div>
            </div>
            <div class ="col-lg-4">
                <div class=  "newslatter-item">
                    <h5>
                        Join Our Newsletter Now
                    </h5>
                    <p>Get email updates about our latest shop and special offers</p>
                    <form action = "#" class ="subscribe-form" method  = "POST">
                        <input type = "text" placeholder ="Enter Your Mail">
                        <button type = "button" >Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=  "copyright-reserved">
        <div class=  "container">
            <div class=  "row">
                <div class="col-lg-12">
                    <div class = "copyright-text">
                        Copyright <script>document.write(new Date().getFullYear());</script>All rights reserved
                    </div>

                    <div class=  "payment-pic">
                        <img src=  "customer/img/payment-method.png" alt = "">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    


<!-- Js Plugins -->
<script src="customer/js/jquery-3.3.1.min.js"></script>
<script src="customer/js/bootstrap.min.js"></script>
<script src="customer/js/jquery-ui.min.js"></script>
<script src="customer/js/jquery.countdown.min.js"></script>
<script src="customer/js/jquery.nice-select.min.js"></script>
<script src="customer/js/jquery.zoom.min.js"></script>
<script src="customer/js/jquery.dd.min.js"></script>
<script src="customer/js/jquery.slicknav.js"></script>
<script src="customer/js/owl.carousel.min.js"></script>
<script src="customer/js/main.js"></script>
<script src = "owlcarousel2-filter.min.js"></script>
</body>

</html>