@extends('customer.layout.master')

@section('title','Home')


@section('content')


    {{-- Hero section --}}
    <section class  = "hero-section">
        <div class = "hero-items owl-carousel">
            <div class = "single-hero-items set-bg" data-setbg = "customer/img/hero-4.jpg">
                <div class= "container">
                    <div class=  "row">
                        <div class="col-lg-5">
                            <span>FOR HER</span>
                            <h1>
                                Stylish Winter Collection
                            </h1>           
                            <p>Discover the perfect outfits for winter! Modern designs and unparalleled comfort for the season.</p>        
                            <a href = "{{ Route('products.index') }}" class = "primary-btn">Show now</a>         
                        </div>
                    </div>

                    <div class ="off-card">
                        <h2>Sale <span>Up to 60%</span></h2>
                    </div>
                </div>
            </div>

            <div class = "single-hero-items set-bg" data-setbg = "customer/img/hero-5.avif">
                <div class= "container">
                    <div class=  "row">
                        <div class="col-lg-5">
                            <span>FOR HIM</span>
                            <h1>
                                Classic & Modern Styles
                            </h1>           
                            <p>Elevate your wardrobe with our latest collection. Perfect fits, bold designs, and unbeatable offers!</p>        
                            <a href = "{{ Route("products.index") }}" class = "primary-btn">Show now</a>         
                        </div>
                    </div>

                    <div class ="off-card">
                        <h2>Sale <span>Up to 60%</span></h2>
                    </div>
                </div>
            </div>

            <div class = "single-hero-items set-bg" data-setbg = "customer/img/hero-2.jpg">
                <div class= "container">
                    <div class=  "row">
                        <div class="col-lg-5">
                            <span>FOR KIDS</span>
                            <h1>
                                Fun & Playful Styles
                            </h1>           
                            <p>Discover the cutest outfits for your little ones! Comfort and style for every adventure.</p>        
                            <a href = "{{ Route("products.index") }}" class = "primary-btn">Show now</a>         
                        </div>
                    </div>

                    <div class ="off-card">
                        <h2>Sale <span>Up to 40%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Banner Section --}}
    
    <div class = "banner-section spad">
        <div class ="container-fluid">
            <div class= "row">
                <div class=  "col-lg-4">
                    <div class= "single-banner">
                        <img src = "customer/img/banner-1.jpg" alt= "">
                        <div class= "inner-text">
                            <h4>Men's</h4>
                        </div>  
                    </div>
                </div>

                <div class=  "col-lg-4">
                    <div class= "single-banner">
                        <img src = "customer/img/banner-2.jpg" alt= "">
                        <div class= "inner-text">
                            <h4>Women's</h4>
                        </div>  
                    </div>
                </div>

                <div class=  "col-lg-4">
                    <div class= "single-banner">
                        <img src = "customer/img/banner-3.jpg" alt= "">
                        <div class= "inner-text">
                            <h4>Kid's</h4>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
        

    {{-- Women Banner Section Begin --}}
    <section class= "women-banner spad">
        <div class = "container-fluid">
            <div class= "row">
                <div class = "col-lg-3">
                    <div class= "product-large set-bg" data-setbg = "customer/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href = "{{ Route('products.index') }}">Discover More</a>
                    </div>
                </div>

                <div class = "col-lg-8 offset-lg-1">
                    <div class= "filter-control">
                        <ul>
                            <li class ="active item" data-tag = "*" data-category = "women">All</li>
                            <li class= "item" data-tag = ".Clothing" data-category = "women">Clothings</li>
                            <li class = "item" data-tag = ".HandBag" data-category = "women">HandBag</li>
                            <li class = "item" data-tag = ".Shoes" data-category = "women">Shoes</li>
                            <li class = "item" data-tag = ".Accessories" data-category = "women">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">

                        @foreach($womenRelatedProducts as $womenRelatedProduct)
                        <div class= "product-item item {{ $womenRelatedProduct->tag }}">
                            <div class= "pi-pic">
                                <img src=  "{{ $womenRelatedProduct->productImages->isNotEmpty() ? asset('storage/' . $womenRelatedProduct->productImages->first()->path) : asset('./customer/img/products/man-1.jpg') }}" alt = "">
                                @if($womenRelatedProduct->discount !=null)
                                    <div class= "sale">
                                        Sale
                                    </div>
                                @endif
                                <div class= "icon">
                                    <i class ="icon_heart_alt"></i>
                                </div>  
                                <ul>
                                    <li  class="w-icon-acive"><a href= "#"><i class= "icon_bag_alt"></i></a></li>
                                    <li class= "quick-view"><a href= "{{ Route('products.show',$womenRelatedProduct->id) }}" class="">Quick View</a></li>
                                    <li class = "w-icon"><a href= "#" class=""><i class= "fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class = "pi-text">
                                <div class = "catagory-name">{{ $womenRelatedProduct->category->name }}</div>
                                <a href ="#">
                                    <h5>{{ $womenRelatedProduct->name }}</h5>
                                </a>
                                <div class ="product-price">
                                    ${{ $womenRelatedProduct->discount }}
                                    <span>${{ $womenRelatedProduct->price }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Deal of the week section  -->

    <section class= "deal-of-week set-bg spad" data-setbg="customer/img/time-bg.jpg">
        <div class= "container">
            <div class="col-lg-6 text-center">
                <div class ="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Don't miss out on this exclusive deal! Stylish, high-quality, and at an unbeatable price.</p>
                    <div class= "product-price">
                        $35.00
                        <span>/HandBag</span>
                    </div>
                </div>
                <div class ="countdown-timer" id = "countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>

                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>

                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>

                    
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href = "#" class = "primary-btn">Shop Now</a>
            </div>
        </div>

    </section>

    {{-- Man Banner Section Begin --}}
    <section class= "man-banner spad">
        <div class = "container-fluid">
            <div class= "row">

                <div class = "col-lg-8">
                    <div class= "filter-control">
                        <ul>
                            <li class ="active item" data-tag = "*" data-category = "men">All</li>
                            <li class= "item" data-tag = ".Clothing" data-category = "men">Clothings</li>
                            <li class = "item" data-tag = ".HandBag" data-category = "men">HandBag</li>
                            <li class = "item" data-tag = ".Shoes" data-category = "men">Shoes</li>
                            <li class = "item" data-tag = ".Accessories" data-category = "men">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach($menRelatedProducts as $menRelatedProduct)

                        <div class= "product-item item {{ $menRelatedProduct->tag }}">
                            <div class= "pi-pic">
                                <img src=  "{{ $menRelatedProduct->productImages->isNotEmpty() ? asset('storage/' . $menRelatedProduct->productImages->first()->path) : asset('./customer/img/products/man-1.jpg') }}" alt = "">
                                @if($menRelatedProduct->discount!=null)
                                    <div class=  "sale">
                                        Sale
                                    </div>  
                                @endif
                                <div class= "icon">
                                    <i class ="icon_heart_alt"></i>
                                </div>  
                                <ul>
                                    <li  class="w-icon-acive"><a href= "#"><i class= "icon_bag_alt"></i></a></li>
                                    <li class= "quick-view"><a href= "{{ Route('products.show',$menRelatedProduct->id) }}" class="">Quick View</a></li>
                                    <li class = "w-icon"><a href= "#" class=""><i class= "fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class = "pi-text">
                                <div class = "catagory-name">{{ $menRelatedProduct->category->name }}</div>
                                <a href ="#">
                                    <h5>{{ $menRelatedProduct->name }}</h5>
                                </a>
                                <div class ="product-price">
                                    ${{ $menRelatedProduct->discount }}
                                    <span>${{ $menRelatedProduct->price }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>

                <div class = "col-lg-3  offset-lg-1">
                    <div class= "product-large set-bg" data-setbg = "customer/img/products/man-large.jpg">
                        <h2>Man's</h2>
                        <a href = "{{ Route('products.index') }}">Discover More</a>
                    </div>
                </div>

             
            </div>
        </div>
    </section>



    {{-- Instagram section begin --}}

    <div class= "instagram-photo">
        <div class= "insta-item set-bg" data-setbg="customer/img/insta-1.jpg">
            <div class= "inside-text">
                <i class ="ti-instagram"></i>
                <h5><a href = "#">VuongChien</a></h5>
            </div>  
        </div>

        <div class= "insta-item set-bg" data-setbg="customer/img/insta-2.jpg">
            <div class= "inside-text">
                <i class ="ti-instagram"></i>
                <h5><a href = "#">VuongChien</a></h5>
            </div>  
        </div>

        <div class= "insta-item set-bg" data-setbg="customer/img/insta-3.jpg">
            <div class= "inside-text">
                <i class ="ti-instagram"></i>
                <h5><a href = "#">VuongChien</a></h5>
            </div>  
        </div>
        <div class= "insta-item set-bg" data-setbg="customer/img/insta-4.jpg">
            <div class= "inside-text">
                <i class ="ti-instagram"></i>
                <h5><a href = "#">VuongChien</a></h5>
            </div>  
        </div>

        <div class= "insta-item set-bg" data-setbg="customer/img/insta-5.jpg">
            <div class= "inside-text">
                <i class ="ti-instagram"></i>
                <h5><a href = "#">VuongChien</a></h5>
            </div>  
        </div>

        <div class= "insta-item set-bg" data-setbg="customer/img/insta-6.jpg">
            <div class= "inside-text">
                <i class ="ti-instagram"></i>
                <h5><a href = "#">VuongChien</a></h5>
            </div>  
        </div>
    </div>
        

    <!-- Latest Blog Section Begin -->
    <section class ="latest-blog spad">
        <div class = "container">
            <div class= "row">
                <div class= "col-lg-12">
                    <div class= "section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>

            <div class= "row">
                <div class ="col-lg-4 col-md-6">
                    <div class= "single-latest-blog">
                        <img src= "customer/img/latest-1.jpg" alt ="">
                        <div class ="latest-text">
                            <div class= "tag-list">
                                <div class ="tag-item">
                                    <i class = "fa fa-calendar-o"></i>
                                    Jan 1,2025
                                </div>

                                <div class ="tag-item">
                                    <i class = "fa fa-comment-o"></i>
                                    10
                                </div>
                            </div>

                            <a href = "#">
                                <h4>The Best Street Style From London</h4>
                            </a>
                            <p>
                                Sed quia non numquam modi tempora indunt ut ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class ="col-lg-4 col-md-6">
                    <div class= "single-latest-blog">
                        <img src= "customer/img/latest-1.jpg" alt ="">
                        <div class ="latest-text">
                            <div class= "tag-list">
                                <div class ="tag-item">
                                    <i class = "fa fa-calendar-o"></i>
                                    Jan 1,2025
                                </div>

                                <div class ="tag-item">
                                    <i class = "fa fa-comment-o"></i>
                                    10
                                </div>
                            </div>

                            <a href = "#">
                                <h4>The Best Street Style From London</h4>
                            </a>
                            <p>
                                Sed quia non numquam modi tempora indunt ut ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class ="col-lg-4 col-md-6">
                    <div class= "single-latest-blog">
                        <img src= "customer/img/latest-1.jpg" alt ="">
                        <div class ="latest-text">
                            <div class= "tag-list">
                                <div class ="tag-item">
                                    <i class = "fa fa-calendar-o"></i>
                                    Jan 1,2025
                                </div>

                                <div class ="tag-item">
                                    <i class = "fa fa-comment-o"></i>
                                    10
                                </div>
                            </div>

                            <a href = "#">
                                <h4>The Best Street Style From London</h4>
                            </a>
                            <p>
                                Sed quia non numquam modi tempora indunt ut ...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class ="benefit-items">
                <div class= "row">
                    <div class= "col-lg-4">
                        <div class ="single-benefit">
                            <div class ="sb-icon">
                                <img src ="customer/img/icon-1.png" alt ="">
                            </div>
                            <div class="sb-text">
                                <h6>FREE SHIPPING</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>

                    <div class= "col-lg-4">
                        <div class ="single-benefit">
                            <div class ="sb-icon">
                                <img src ="customer/img/icon-2.png" alt ="">
                            </div>
                            <div class="sb-text">
                                <h6>DELIVERY ON TIME</h6>
                                <p>If good have problems</p>
                            </div>
                        </div>
                    </div>

                    <div class= "col-lg-4">
                        <div class ="single-benefit">
                            <div class ="sb-icon">
                                <img src ="customer/img/icon-1.png" alt ="">
                            </div>
                            <div class="sb-text">
                                <h6>SECURE PAYMENT</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection