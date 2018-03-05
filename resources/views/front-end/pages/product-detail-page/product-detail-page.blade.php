
@extends('front-end.layout.app-layout')
@section('product-detail-page')
    <div class="content"  style="padding-top:235px;">
        @include('front-end.common-parts.breadcrumb.breadcrumb')

        <section class="inner-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <!-- ****************** Product Detail Section	****************** -->
                        <div class="product-detail-section">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="product-view">
                                            <div class="product-img">
                                                <img src="assets/images/product-img.jpg" alt="" />
                                            </div>
                                            <a href="assets/images/product-img.jpg" class="example-image-link view-btn" data-lightbox="example-1">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="product-info">
                                            <div class="name">Truffle Nut Collection</div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            <p>We don't use any artificial flavors, all the paste inside the truffle chocolate is made from original dry nuts pulp. You will feel the best combination of chocolate and nuts in these truffles. Just try you will fall in love on the first bite.</p>
                                            <div class="availability">Availability: In stock</div>
                                            <div class="price">$ 449.0</div>
                                            <div>
                                                <div class="input-group qty-btn">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quant[1]" class="form-control input-number" value="1" >
                                                    <span class="input-group-btn"> 
                                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                                <a href="cart.html" class="btn btn-info btn-large">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desc  section-block">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="product-detail.html#description" aria-controls="description" role="tab" data-toggle="tab">Description</a>
                                    </li>
                                    <li role="presentation"><a href="product-detail.html#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="reviews">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ****************** Similar Products Section	****************** -->
                      @include('front-end.common-parts.template-items.similar-product')
                      
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="services-list">
                                <div class="service-box">
                                    <div class="icon">
                                        <span><i class="fa fa-truck" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="info">
                                        <h5>Free shipping</h5>
                                        <p>For US orders with subtotal > $40, shipping is on us!</p>
                                    </div>
                                </div>
                                <div class="service-box">
                                    <div class="icon">
                                        <span><i class="fa fa-heart" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="info">
                                        <h5>Our promise</h5>
                                        <p>All products are made with the finest ingredients and premium c</p>
                                    </div>
                                </div>
                                <div class="service-box">
                                    <div class="icon">
                                        <span><i class="fa fa-comments" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="info">
                                        <h5>Customer service</h5>
                                        <p>Mon - Fri / 9:00AM - 5:00PM EST 800.123.3254 | info@chocolate.c</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="gift-box">
                                <div class="gift-slider">
                                    <div>
                                        <h3>Giving a gift?</h3>
                                        <p>You can add additional gift options upon checkout</p>
                                        <ul class="list-unstyled">
                                            <li><a href="product-detail.html#">premium gift box</a></li>
                                            <li><a href="product-detail.html#">greeting card</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3>Giving a gift?</h3>
                                        <img src="assets/images/gift-box.jpg" alt="" class="img-responsive" />
                                    </div>
                                    <div>
                                        <h3>Giving a gift?</h3>
                                        <p>You can add additional gift options upon checkout</p>
                                        <ul class="list-unstyled">
                                            <li><a href="product-detail.html#">premium gift box</a></li>
                                            <li><a href="product-detail.html#">greeting card</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        
    </div>
@endsection