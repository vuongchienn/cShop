
@extends("customer.layout.master")


@section('title','Blog')


@section('content')



       <!-- Breadcrumb Logo Section Begin -->
    <div class ="breacrumb-section">
        <div class = 'container'>
            <div class="row">
                    <div class="col-lg-12">
                        <div class = "breadcrumb-text">
                            <a href = "index.html"><i class = "fa fa-home"></i>Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    {{-- Blog section --}}
    <section class = "blog-section spad">
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class = "blog-sidebar">
                        <div class = "search-form">
                            <h4>Search</h4>
                            <form action = "#" >
                                <input type = "text" placeholder="Search...">
                                <button type = "submit"><i class = "fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class = "blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="">codeleanon</a></li>
                                <li><a href="">Travel</a></li>
                                <li><a href="">Picnic</a></li>
                                <li><a href="">Model</a></li>
                            </ul>
                        </div>

                        <div class = "recent-post">
                            <h4>Recent Post</h4>
                            <div class=  "recent-blog">
                                <a href = "#" class="rb-item">
                                    <div class ="rb-pic">
                                        <img src=  "customer/img/blog/recent-1.jpg" alt = "">
                                    </div>
                                    <div class = "rb-text">
                                        <h6>The Personal Trait That Makes...</h6>
                                        <p>codeleanon<span>Jan 1, 2025</span></p>
                                    </div>
                                </a>
    
                                <a href = "#" class="rb-item">
                                    <div class ="rb-pic">
                                        <img src=  "customer/img/blog/recent-2.jpg" alt = "">
                                    </div>
                                    <div class = "rb-text">
                                        <h6>The Personal Trait That Makes...</h6>
                                        <p>codeleanon<span>Jan 1, 2025</span></p>
                                    </div>
                                </a>
    
                                <a href = "#" class="rb-item">
                                    <div class ="rb-pic">
                                        <img src=  "customer/img/blog/recent-3.jpg" alt = "">
                                    </div>
                                    <div class = "rb-text">
                                        <h6>The Personal Trait That Makes...</h6>
                                        <p>codeleanon<span>Jan 1, 2025</span></p>
                                    </div>
                                </a>
    
                                <a href = "#" class="rb-item">
                                    <div class ="rb-pic">
                                        <img src=  "customer/img/blog/recent-4.jpg" alt = "">
                                    </div>
                                    <div class = "rb-text">
                                        <h6>The Personal Trait That Makes...</h6>
                                        <p>codeleanon<span>Jan 1, 2025</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=  "blog-tags">
                            <h4>Product Tags</h4>
                            <div class = "tag-item">
                                <a href="#">Towel</a>
                                <a href="#">Shoes</a>
                                <a href="#">Coat</a>
                                <a href="#">Dresses</a>
                                <a href="#">Trousers</a>
                                <a href="#">Men's hats</a>
                                <a href="#">Backpack</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="col-lg-9 order-1 order-lg-2">
                    <div class = "row">
                        <div class = "col-lg-6 col-sm-6">
                            <div class=  "blog-item">
                                <div class = "bi-pic">
                                    <img src = "customer/img/blog/blog-1.jpg" alt = "">
                                </div>
                                <div class = "bi-text">
                                    <a href=  "blog-details.html">
                                        <h4>The Personal Trait That Makes People Happier</h4>
                                        <p>travel<span>Jan 1,2025</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-6 col-sm-6">
                            <div class=  "blog-item">
                                <div class = "bi-pic">
                                    <img src = "customer/img/blog/blog-2.jpg" alt = "">
                                </div>
                                <div class = "bi-text">
                                    <a href=  "blog-details.html">
                                        <h4>The Personal Trait That Makes People Happier</h4>
                                        <p>travel<span>Jan 1,2025</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-6 col-sm-6">
                            <div class=  "blog-item">
                                <div class = "bi-pic">
                                    <img src = "customer/img/blog/blog-3.jpg" alt = "">
                                </div>
                                <div class = "bi-text">
                                    <a href=  "blog-details.html">
                                        <h4>The Personal Trait That Makes People Happier</h4>
                                        <p>travel<span>Jan 1,2025</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-6 col-sm-6">
                            <div class=  "blog-item">
                                <div class = "bi-pic">
                                    <img src = "customer/img/blog/blog-4.jpg" alt = "">
                                </div>
                                <div class = "bi-text">
                                    <a href=  "blog-details.html">
                                        <h4>The Personal Trait That Makes People Happier</h4>
                                        <p>travel<span>Jan 1,2025</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-6 col-sm-6">
                            <div class=  "blog-item">
                                <div class = "bi-pic">
                                    <img src = "customer/img/blog/blog-5.jpg" alt = "">
                                </div>
                                <div class = "bi-text">
                                    <a href=  "blog-details.html">
                                        <h4>The Personal Trait That Makes People Happier</h4>
                                        <p>travel<span>Jan 1,2025</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-6 col-sm-6">
                            <div class=  "blog-item">
                                <div class = "bi-pic">
                                    <img src = "customer/img/blog/blog-1.jpg" alt = "">
                                </div>
                                <div class = "bi-text">
                                    <a href=  "blog-details.html">
                                        <h4>The Personal Trait That Makes People Happier</h4>
                                        <p>travel<span>Jan 1,2025</span></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class = "col-lg-12">
                            <div class = "loading-more">
                                <i class = "icon_loading"></i>
                                <a href = "#">Loading More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
   