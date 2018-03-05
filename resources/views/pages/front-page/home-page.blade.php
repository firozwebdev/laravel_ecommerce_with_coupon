
@extends('layout.front-layout.front-layout')
@section('home-page')
<div id="wrapper">
    

    
    <!-- ****************** Banner Section	****************** -->
    <section id="banner">
        <div class="banner-slider">
            <div class="slide-div">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="row-md-height">
                                <div class="col-md-6 col-md-push-6 col-md-height">
                                    <img src="{{ asset('assets/images/banner-img/slide-1.png') }}" alt="Banner Image" class="img-responsive" />
                                </div>
                                <div class="col-md-6 col-md-pull-6 col-md-height">
                                    <h1>Welcome to Chocolate.</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-div">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="row-md-height">
                                <div class="col-md-6 col-md-push-6 col-md-height">
                                    <img src="{{ asset('assets/images/banner-img/slide-2.png') }}" alt="Banner Image" class="img-responsive" />
                                </div>
                                <div class="col-md-6 col-md-pull-6 col-md-height">
                                    <h1>Welcome to Chocolate.</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-div">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="row-md-height">
                                <div class="col-md-6 col-md-push-6 col-md-height">
                                    <img src="{{ asset('assets/images/banner-img/slide-3.png') }}" alt="Banner Image" class="img-responsive" />
                                </div>
                                <div class="col-md-6 col-md-pull-6 col-md-height">
                                    <h1>Welcome to Chocolate.</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    
    <div id="content">
        <!-- ****************** Offers Section ****************** -->
        @include('pages.front-page.front-page-partials.offer-section')
        <!-- ****************** Upcoming Offers Section	****************** -->
        <section class="upcoming-offers">
            <div class="overlay">
                <div class="black-overlay"></div>
                <div class="container">
                    <div class="detail">
                        <span class="title">UPCOMING</span>
                        <h2><span>christmas</span> CORPORATE COLLECTION</h2>
                        <p>A brand new Christmas Corporate Collection on your way...</p>
                        <a href="index.html#" class="btn btn-detail">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ****************** Featured Products Section ****************** -->

        @include('pages.front-page.front-page-partials.featured-product')

        <!-- ****************** Best Sellers Section ****************** -->
        @include('pages.front-page.front-page-partials.best-sold-product')

        <!-- ****************** Our Brands Section ****************** -->
        <section class="our-brands section-block">
            <div class="container">
                <div class="heading"><span>Our Brand</span></div>
                <div class="brands-slider">
                    <div><img src="{{ asset('assets/images/brand-img/brand1.jpg') }}" alt="" /></div>
                    <div><img src="{{ asset('assets/images/brand-img/brand2.jpg') }}" alt="" /></div>
                    <div><img src="{{ asset('assets/images/brand-img/brand3.jpg') }}" alt="" /></div>
                    <div><img src="{{ asset('assets/images/brand-img/brand4.jpg') }}" alt="" /></div>
                    <div><img src="{{ asset('assets/images/brand-img/brand5.jpg') }}" alt="" /></div>
                    <div><img src="{{ asset('assets/images/brand-img/brand6.jpg') }}" alt="" /></div>
                    <div><img src="{{ asset('assets/images/brand-img/brand7.jpg') }}" alt="" /></div>
                    <div><img src="{{ asset('assets/images/brand-img/brand8.jpg') }}" alt="" /></div>
                </div>
            </div>
        </section>
        <!-- ****************** New Arrivals Section ****************** -->
        <section class="new-arrivals section-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html#"><img src="{{ asset('assets/images/img15.jpg') }}" alt="" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="index.html#"><img src="{{ asset('assets/images/img16.jpg') }}" alt="" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="index.html#"><img src="{{ asset('assets/images/img17.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****************** Our Customer  Section ****************** -->
        <section class="our-customers section-block">
            <div class="container">
                <div class="heading"><span>Customers love our chocolates</span></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="cust-info">
                                    <span class="icon"><i class="fa fa-gift" aria-hidden="true"></i></span>
                                    <p><span class="counter">200</span> Orders Per Day </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="cust-info">
                                    <span class="icon"><i class="fa fa-users " aria-hidden="true"></i></span>
                                    <p><span class="counter">35000</span> Customers </p>
                                </div>
                            </div> 
                            <div class="col-sm-4">
                                <div class="cust-info">
                                    <span class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                                    <p><span class="counter">15</span> Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-slider">
                            <div>
                                <div class="client-feedback">
                                    <div class="client-img"><img src="{{ asset('assets/images/user-img.jpg') }}" alt="" /></div>
                                    <div class="detail">
                                        <h4>John Doe</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the ...</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="client-feedback">
                                    <div class="client-img"><img src="{{ asset('assets/images/user-img.jpg') }}" alt="" /></div>
                                    <div class="detail">
                                        <h4>John Doe</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the ...</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="client-feedback">
                                    <div class="client-img"><img src="{{ asset('assets/images/user-img.jpg') }}" alt="" /></div>
                                    <div class="detail">
                                        <h4>John Doe</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the ...</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- ****************** Footer Section ****************** -->
    <footer id="footer">
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>CONTACTS</h4>
                                <address>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>1344 Franklee Lane, Eagleville<br>Pennsylvania NY - 01403</p>
                                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:letters@chocolate.com">letters@chocolate.com</a></p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i><a href="index.html#">Live Chat</a></p>
                                </address>
                            </div>
                            <div class="col-sm-6">
                                <h4>BUSINESS ACCOUNTS</h4>
                                <ul class="list-unstyled">
                                    <li><a href="index.html#">Business Account Request</a></li>
                                    <li><a href="index.html#">Business Email Order Form </a></li>
                                    <li><a href="index.html#">Business Fax Order Form</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>CUSTOMER SERVICE</h4>
                                <ul class="list-unstyled">
                                    <li><a href="index.html#">Order Tracking</a></li>
                                    <li><a href="shipping-info.html">Shipping Info</a></li>
                                    <li><a href="index.html#">Return Policy</a></li>
                                    <li><a href="index.html#">Check Gift Card Balance</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h4>NEWS AND UPDATES</h4>
                                <ul class="list-unstyled">
                                    <li><a href="index.html#">Catalog Subscribe</a></li>
                                    <li><a href="index.html#">Catalog Unsubscribe</a></li>
                                    <li><a href="index.html#">Email Preferences</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-letter">
                            <h4>Get the latest</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email address">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                        <h4>CONNECT WITH US</h4>
                        <ul class="list-inline social-links">
                            <li><a href="index.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="index.html#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-4">
                        <span class="copyright">&copy;<span class="year">2016</span> chocolate.com. All rights reserved</span>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline">
                            <li><a href="index.html#">Sitemap</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="index.html#">Privacy Policy</a></li>
                            <li><a href="index.html#">Terms & Conditions</a></li>
                            <li><a href="blog-left-sidebar.html">Blog</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                
            </div> 
        </div>
    </footer>
</div>
@endsection