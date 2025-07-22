@extends('layouts.app')
@section('content')
    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-5">
                            <h1 class="mb-15">Cosmetics & Personal Care</h1>
                            <!-- <div class="breadcrumb">
                                <a href="/" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Shop <span></span> Snack
                            </div> -->
                        </div>
                        <div class="col-xl-9 text-end d-none d-xl-block">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="page-login.html"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content account dashboard-content pl-50">
                                    <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Hello Rosie!</h3>
                                            </div>
                                            <div class="card-body">
                                                <p>
                                                    From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>,<br />
                                                    manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Your Orders</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Total</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>#1357</td>
                                                                <td>March 45, 2020</td>
                                                                <td>Processing</td>
                                                                <td>$125.00 for 2 item</td>
                                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>#2468</td>
                                                                <td>June 29, 2020</td>
                                                                <td>Completed</td>
                                                                <td>$364.00 for 5 item</td>
                                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>#2366</td>
                                                                <td>August 02, 2020</td>
                                                                <td>Completed</td>
                                                                <td>$280.00 for 3 item</td>
                                                                <td><a href="#" class="btn-small d-block">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">Orders tracking</h3>
                                            </div>
                                            <div class="card-body contact-from-area">
                                                <p>To track your order please enter your OrderID in the box below and press "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                                            <div class="input-style mb-20">
                                                                <label>Order ID</label>
                                                                <input name="order-id" placeholder="Found in your order confirmation email" type="text" />
                                                            </div>
                                                            <div class="input-style mb-20">
                                                                <label>Billing email</label>
                                                                <input name="billing-email" placeholder="Email you used during checkout" type="email" />
                                                            </div>
                                                            <button class="submit submit-auto-width" type="submit">Track</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card mb-3 mb-lg-0">
                                                    <div class="card-header">
                                                        <h3 class="mb-0">Billing Address</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <address>
                                                            3522 Interstate<br />
                                                            75 Business Spur,<br />
                                                            Sault Ste. <br />Marie, MI 49783
                                                        </address>
                                                        <p>New York</p>
                                                        <a href="#" class="btn-small">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Shipping Address</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <address>
                                                            4299 Express Lane<br />
                                                            Sarasota, <br />FL 34249 USA <br />Phone: 1.941.227.4444
                                                        </address>
                                                        <p>Sarasota</p>
                                                        <a href="#" class="btn-small">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Account Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Already have an account? <a href="page-login.html">Log in instead!</a></p>
                                                <form method="post" name="enq">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>First Name <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="name" type="text" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Last Name <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="phone" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Display Name <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="dname" type="text" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Email Address <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="email" type="email" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Current Password <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="password" type="password" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>New Password <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="npassword" type="password" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Confirm Password <span class="required">*</span></label>
                                                            <input required="" class="form-control" name="cpassword" type="password" />
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">Save Change</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->





        <div class="container mb-30">
            <div class="row ">






                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="sidebar-widget  mb-30 ml-30">
                        <h5 class="section-title style-1 mb-30">Category</h5>

                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="page-login.html"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- <ul>
                            <li>
                                <a href="/product"> <img src="imgs/theme/icons/cosmetics.png" alt="" />Cosmetic & Personal Care</a><span class="count">30</span>
                            </li>
                            <li>
                                <a href="/product"> <img src="imgs/theme/icons/food.png" alt="" />Food & Beverages</a><span class="count">35</span>
                            </li>
                            <li>
                                <a href="/product"> <img src="imgs/theme/icons/pharmaceutical.png" alt="" />Pharmaceutical </a><span class="count">42</span>
                            </li>
                            <li>
                                <a href="/product"> <img src="imgs/theme/icons/homecare.png" alt="" />Home Care & Chemicals</a><span class="count">68</span>
                            </li>

                        </ul> -->
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30 ml-30">
                        <h5 class="section-title style-1 mb-30">Fill by price</h5>

                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">Meterial</label>
                                <div class="custome-checkbox">
                                    <div class="row">
                                        <div  class="col-md-6">
                                            <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>37X97</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>ACRILIC</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>GLASS</span></label>
                                    <br />

                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>PP</span></label>
                                </div>

                                <div  class="col-md-6">
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>HDPE</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>LD</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>PET</span></label>
                                </div>
                                </div>
                                </div>
                                <label class="fw-900 mt-15">Shape</label>
                                <div class="custome-checkbox">
                                    <div class="row">
                                        <div  class="col-md-6">
                                            <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>FLAT</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>HEXOGON</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>RECTANGLE</span></label>

                                </div>

                                <div  class="col-md-6">
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>ROUND</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>SQUARE</span></label>

                                </div>
                                </div>
                                </div>


                                <label class="fw-900 mt-15">Volume In Ml</label>
                                <div class="custome-checkbox">
                                    <div class="row">
                                        <div  class="col-md-6">





                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>100 GM</span></label>
                                    <br/>
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>10 ML</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>1000 ML</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>190 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>20 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>200 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>2600 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>30 GM</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" ><span>30 Ml</span></label>
                                    <br />


                                </div>



                                <div  class="col-md-6">
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>15 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>150 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>185 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>190 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>25 GM</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>25 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>250 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>320 Ml</span></label>
                                    <br />
                                    <input type="checkbox" class="check">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>350 Ml</span></label>

                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <a href="/product" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                    </div>

                </div>






                <div class="col-lg-9">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Download Catelouge</button>
                            <!-- <p>We found <strong class="text-brand">29</strong> items for you!</p> -->
                        </div>




                        <div class="sort-by-product-area">

                            <div class="sort-by-cover mr-10">
                                <a href="" class="btn btn-sm btn-default filter"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                            </div>


                        </div>
                    </div>

                    <div class="tab-content account dashboard-content pl-50">
                        <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <div class="card">
                                <div class="row product-grid">
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->




                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <div class="card">
                                <div class="row product-grid">
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->




                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                            <div class="card">
                                <div class="row product-grid">
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->




                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                            <div class="row product-grid">
                                <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="/product-detail">
                                                    <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                    <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="/product">Hodo Foods</a>
                                            </div>
                                            <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                            <div class="product-rate-cover">
                                                <!-- <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                            </div>
                                            <!-- <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div> -->
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$54.85</span>
                                                    <span class="old-price">$55.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end product card-->
                                <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="/product-detail">
                                                    <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                    <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="/product">Hodo Foods</a>
                                            </div>
                                            <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                            <div class="product-rate-cover">
                                                <!-- <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                            </div>
                                            <!-- <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div> -->
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$54.85</span>
                                                    <span class="old-price">$55.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end product card-->
                                <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="/product-detail">
                                                    <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                    <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="/product">Hodo Foods</a>
                                            </div>
                                            <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                            <div class="product-rate-cover">
                                                <!-- <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                            </div>
                                            <!-- <div>
                                                <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                            </div> -->
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>$54.85</span>
                                                    <span class="old-price">$55.8</span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end product card-->




                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                            <div class="card">
                                <div class="row product-grid">
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/product-detail">
                                                        <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/product">Hodo Foods</a>
                                                </div>
                                                <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <!-- <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                                </div>
                                                <!-- <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div> -->
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->




                                </div>
                            </div>
                        </div>
                    </div>
























                    <!-- <div class="row product-grid">
                        <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/product-detail">
                                            <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="/product">Hodo Foods</a>
                                    </div>
                                    <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                    <div class="product-rate-cover">
                                        <!-- <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span> --
                                    </div>
                                    <!-- <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                    </div> --
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card--
                        <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/product-detail">
                                            <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="/product">Hodo Foods</a>
                                    </div>
                                    <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                    <div class="product-rate-cover">
                                        <!-- <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span> --
                                    </div>
                                    <!-- <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                    </div> --
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card--
                        <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/product-detail">
                                            <img class="default-img" src="imgs/shop/product-6-1.jpg" alt="" />
                                            <img class="hover-img" src="imgs/shop/product-6-2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <!-- <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> --
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="/product">Hodo Foods</a>
                                    </div>
                                    <h2><a href="/product-detail">Chobani Complete Vanilla Greek</a></h2>
                                    <div class="product-rate-cover">
                                        <!-- <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span> --
                                    </div>
                                    <!-- <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                    </div> --
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$54.85</span>
                                            <span class="old-price">$55.8</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="/cart"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card--




                    </div> -->




                </div>


























            </div>
        </div>



        <div class="mobile-header-active1 mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="/"><img src="imgs/theme/logo.png" alt="logo" /></a>
                    </div>
                    <div class="mobile-menu-close1 close-style-wrap close-style-position-inherit">
                        <button class="close-style search-close">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>

               <!-- Fillter By Price -->
               <div class="sidebar-widget price_range range mb-30 ml-30">
                <h5 class="section-title style-1 mb-30">Fill by price</h5>

                <div class="list-group">
                    <div class="list-group-item mb-10 mt-10">
                        <label class="fw-900">Meterial</label>
                        <div class="custome-checkbox">
                            <div class="row">
                                <div  class="col-md-6">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>37X97</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>ACRILIC</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>GLASS</span></label>
                            <br />

                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>PP</span></label>
                        </div>

                        <div  class="col-md-6">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>HDPE</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>LD</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>PET</span></label>
                        </div>
                        </div>
                        </div>
                        <label class="fw-900 mt-15">Shape</label>
                        <div class="custome-checkbox">
                            <div class="row">
                                <div  class="col-md-6">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>FLAT</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>HEXOGON</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>RECTANGLE</span></label>

                        </div>

                        <div  class="col-md-6">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>ROUND</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>SQUARE</span></label>

                        </div>
                        </div>
                        </div>


                        <label class="fw-900 mt-15">Volume In Ml</label>
                        <div class="custome-checkbox">
                            <div class="row">
                                <div  class="col-md-4">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>100 GM</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>10 ML</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>1000 ML</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>190 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>20 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>200 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>2600 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>30 GM</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>30 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>33 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>375 Ml</span></label>

                        </div>

                        <div  class="col-md-4">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>100 GM</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>15 GM</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>1500 Ml </span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>180 GM</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>2000 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>210 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>230 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>300 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>35 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>40 Ml</span></label>



                        </div>

                        <div  class="col-md-4">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>15 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>150 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>185 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>190 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>25 GM</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>25 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>250 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>320 Ml</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>350 Ml</span></label>

                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <a href="/product" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
            </div>


            </div>
        </div>
    </main>
    @endsection
