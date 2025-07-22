@extends('layouts.app')
@section('content')


    <main class="main">
        <section class="home-slider position-relative mb-30">
            <div class="container">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(imgs/slider/slider-1.png)">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                    From Raw Materials to <br>Reliable Bottles: <br>Quality You Can Trust.
                                </h1>

                                <a href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" class="btn btn-sm1 mt-30" target="_blank">Find Me On Whatsapp<i class="fa fa-whatsapp ml-5" aria-hidden="true"></i></a>

                                <!-- <div class="whatsapp1">
                                    <a href=""> Find Me On Whatsapp <span><i class="fa fa-whatsapp" aria-hidden="true"></i></span></a>
                                </div> -->


<!--
                                <div class="whatsapp">

                                    <h5>Find Me On Whatsapp</h5>
                                    <a href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>



                            </div> -->

                                <!-- <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Find Me On Whatsapp" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form> -->
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(imgs/slider/slider-2.png)">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                   Bringing Bottle<br> Designs to Life.
                                </h1>
                                <!-- <p class="mb-65">Save up to 50% off on your first order</p> -->

                                <a href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" class="btn btn-sm1 mt-30" target="_blank">Find Me On Whatsapp<i class="fa fa-whatsapp ml-5" aria-hidden="true" ></i></a>


                                <!-- <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form> -->
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
        </section>
        <!--End hero slider-->






        <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2 wow animate__animated animate__fadeIn">
                    <h3>Featured Products</h3>
                    <ul class="nav nav-tabs links" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Pharmaceutical</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Oil Bottles</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Honey & Squash</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Juices</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-six" data-bs-toggle="tab" data-bs-target="#tab-six" type="button" role="tab" aria-controls="tab-six" aria-selected="false">PET Jars</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-seven" data-bs-toggle="tab" data-bs-target="#tab-seven" type="button" role="tab" aria-controls="tab-seven" aria-selected="false">Thinner & Phenyl</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-eight" data-bs-toggle="tab" data-bs-target="#tab-eight" type="button" role="tab" aria-controls="tab-eight" aria-selected="false">Mineral Water</button>
                        </li>





                    </ul>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">



                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/ayurvedhic/AY04.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/oil/10.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/sanitizer/1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/shop/fp-hand.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/thinner/1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/ayurvedhic/ay06h.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/oil/14.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/sanitizer/15.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/ayurvedhic/ay08.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/thinner/4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                        </div>
                        <!--End product-grid-4-->
                    </div>



                    <!--En tab one-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/shop/fp-hand.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/shop/fp-pharma.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="/pharmaceutical">
                                    <img class="featured-product" src="imgs/shop/fp-hand1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/oil-1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/oil-2.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/oil-3.jpg" alt="" />
                                </a>

                            </div>



                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/oil-4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->




                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three-->
                    <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                        <div class="row product-grid-4">


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/honey-1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/honey-2.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/honey-3.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/honey-4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->


                    <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/juice-1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/juice-2.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/juice-3.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/juice-4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->


                    <div class="tab-pane fade" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-2.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-3.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->


                    <div class="tab-pane fade" id="tab-seven" role="tabpanel" aria-labelledby="tab-seven">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="#">
                                    <img class="featured-product" src="imgs/thinner/1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="#">
                                    <img class="featured-product" src="imgs/thinner/2.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="#">
                                    <img class="featured-product" src="imgs/thinner/3.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="#">
                                    <img class="featured-product" src="imgs/thinner/4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->


                    <div class="tab-pane fade" id="tab-eight" role="tabpanel" aria-labelledby="tab-eight">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/water/1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/water/2.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/water/3.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/water/4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->

                    <div class="tab-pane fade" id="tab-nine" role="tabpanel" aria-labelledby="tab-nine">
                        <div class="row product-grid-4">
                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-1.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-2.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->


                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-3.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->

                            <div class="col-lg-1-1 col-md-4 col-12 col-sm-6">
                                <a href="oil.html">
                                    <img class="featured-product" src="imgs/shop/pet-4.jpg" alt="" />
                                </a>

                            </div>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab four-->


                    <!--En tab seven-->
                </div>
                <!--End tab-content-->
            </div>
        </section>




        <!--End category slider-->
        <section class="banners mb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text">
                                <h4>
                                    Crafting the Vessels<br> of Everyday Life
                                </h4>
                                <!-- <a href="shop-grid-right.html" class="btn btn-xs mb-2">View More <i class="fi-rs-arrow-small-right"></i></a> -->
                                <a href="imgs/catelogue/HONEY.pdf" target="_blank" class="btn btn-xs mb-2">Download Catelogue <i class="fi-rs-arrow-small-right"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <img src="imgs/banner/banner-2.png" alt="" />
                            <div class="banner-text">
                                <h4>
                                    Shaping the Future, <br>One Bottle at a Time.
                                </h4>
                                <!-- <a href="shop-grid-right.html" class="btn btn-xs mb-2">View More <i class="fi-rs-arrow-small-right"></i></a> -->
                                <a href="imgs/catelogue/HONEY.pdf" target="_blank" class="btn btn-xs mb-2">Download Catelogue <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <img src="imgs/banner/banner-3.png" alt="" />
                            <div class="banner-text">
                                <h4>Your Vision, Our Bottles:<br> Partnering for Packaging Excellence.</h4>
                                <!-- <a href="shop-grid-right.html" class="btn btn-xs mb-2">View More <i class="fi-rs-arrow-small-right"></i></a> -->
                                <a href="imgs/catelogue/HONEY.pdf" target="_blank" class="btn btn-xs mb-2">Download Catelogue <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="row align-items-center mb-50">
                            <div class="col-lg-4">
                                <div class="carausel-3-columns-cover position-relative">
                                    <div id="carausel-3-columns-arrows"></div>
                                    <div class="carausel-3-columns" id="carausel-3-columns">
                                        <img src="imgs/page/about-1.png" alt="" />
                                        <img src="imgs/page/abt2.png" alt="" />
                                        <img src="imgs/page/abt3.png" alt="" />
                                        <img src="imgs/page/abt4.png" alt="" />
                                    </div>
                                </div>
                                <!-- <img src="imgs/page/about-1.png" alt="" class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" /> -->
                            </div>
                            <div class="col-lg-8">
                                <div class="pl-25 abt-content">
                                    <h2 class="mb-30">About Us</h2>
                                    <p class="mb-25">Welcome to WIN POLYMERS your premier destination for top-quality plastic bottle manufacturing. Based in the vibrant city of Thrissur, Kerala, we are a leading name among plastic bottle manufacturers and wholesalers, committed to delivering excellence in every product we create.</p>
                                    <h3 class="mb-30">Who We Are </h3>
                                    <p class="mb-50">At WIN POLYMERS we take pride in being a cornerstone of the plastic bottle industry. Our state-of-the-art manufacturing plant in Kanjany, Thrissur is equipped with cutting-edge technology to produce a diverse range of plastic bottles and jars tailored to meet the needs of various industries. With years of experience and a dedicated team of professionals, we ensure that every bottle and jar we produce meets the highest standards of quality and reliability.</p>

                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>

        </div>
        <!--End banners-->





        <section class="popular-categories product-tabs section-padding">
            <div class="container wow animate__animated animate__fadeIn">
                <div class="section-title">
                    <div class="title">
                        <h3>Popular Products</h3>

                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-5-columns-arrow" id="carausel-5-columns-arrows"></div>
                </div>

                <div class="tab-content" id="myTabContent">

                <div class="carausel-5-columns-cover position-relative">
                    <div class="carausel-5-columns" id="carausel-5-columns">

                        <div class="  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="mx-2 product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap mb-3">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img" src="imgs/shop/pp_1.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/pp_1.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <!-- <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    -->
                                    </div>

                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="shop-product-right.html">HR01 (Oil)</a></h2>

                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>1000ml</span>
                                            <!-- <span class="old-price">$32.8</span> -->
                                        </div>
                                        <div class="add-cart">

                                            <a class="add" href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" target="_blank"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <h6><a href="shop-grid-right.html">Oganic Kiwi</a></h6>
                            <span>28 items</span> -->
                        </div>



                        <div class="  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="mx-2 product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap mb-3">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img" src="imgs/shop/pp-2.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/pp-2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
<!--
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                     -->
                                    </div>

                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="shop-product-right.html">HN03 (Honey)</a></h2>

                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>750ml</span>
                                            <!-- <span class="old-price">$32.8</span> -->
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" hhref="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" target="_blank"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <h6><a href="shop-grid-right.html">Oganic Kiwi</a></h6>
                            <span>28 items</span> -->
                        </div>



                        <div class="  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="mx-2 product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap mb-3">
                                    <div class="product-img product-img-zoom">
                                        <a href="#">
                                            <img class="default-img" src="imgs/shop/pp-3.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/pp-3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <!-- <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                     -->
                                    </div>

                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="#">JS07</a></h2>

                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>750ml</span>
                                            <!-- <span class="old-price">$32.8</span> -->
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" target="_blank"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <h6><a href="shop-grid-right.html">Oganic Kiwi</a></h6>
                            <span>28 items</span> -->
                        </div>



                        <div class="  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="mx-2 product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap mb-3">
                                    <div class="product-img product-img-zoom">
                                        <a href="#">
                                            <img class="default-img" src="imgs/shop/pp-4.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/pp-4.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <!-- <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                     -->
                                    </div>

                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="#">MS02</a></h2>

                                    <div class="product-card-bottom  mt-0">
                                        <div class="product-price">
                                            <span>100ml</span>
                                            <!-- <span class="old-price">$32.8</span> -->
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" target="_blank"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <h6><a href="shop-grid-right.html">Oganic Kiwi</a></h6>
                            <span>28 items</span> -->
                        </div>

                        <div class="  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="mx-2 product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap mb-3">
                                    <div class="product-img product-img-zoom">
                                        <a href="#">
                                            <img class="default-img" src="imgs/shop/pp-5.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/pp-5.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <!-- <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    -->
                                    </div>

                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="#">RJ28</a></h2>

                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>2000ml</span>
                                            <!-- <span class="old-price">$32.8</span> -->
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" target="_blank"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <h6><a href="shop-grid-right.html">Oganic Kiwi</a></h6>
                            <span>28 items</span> -->
                        </div>

                        <div class="  wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="mx-2 product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap mb-3">
                                    <div class="product-img product-img-zoom">
                                        <a href="#">
                                            <img class="default-img" src="imgs/shop/pp-6.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/pp-6.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">

                                        <!-- <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                     -->
                                    </div>

                                </div>
                                <div class="product-content-wrap">

                                    <h2><a href="#">WT08</a></h2>

                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>500ml</span>
                                            <!-- <span class="old-price">$32.8</span> -->
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="https://api.whatsapp.com/send?phone=+919497073174&amp;text=Hi" target="_blank"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <h6><a href="shop-grid-right.html">Oganic Kiwi</a></h6>
                            <span>28 items</span> -->
                        </div>


                    </div>
                </div>

                </div>
            </div>
        </section>








        <!--End 4 columns-->
    </main>



@endsection
