
@extends('front-end.layout.app-layout')
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
        @include('front-end.pages.front-page.front-page-partials.offer-section')
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

        @include('front-end.common-parts.template-items.products')

        <!-- ****************** Best Sellers Section ****************** -->
        @include('front-end.common-parts.template-items.best-sold-product')

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
    

</div>
@endsection