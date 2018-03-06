@extends('front-end.layout.app-layout')
@section('shop-page')
<div id="content" style="padding-top:235px;">
    <!-- ****************** Breadcrumb Section	****************** -->
    @include('front-end.common-parts.breadcrumb.breadcrumb')
    <!-- ****************** Discount Banner Section	****************** -->
    <section>
        <div class="container">
            <div class="discount-banner">
                <h1>25%</h1>
                <p>Special Discount</p>
                <a href="my-wishlist.html#" class="btn btn-default">Shop Now</a>
            </div>
        </div>
    </section>
    <section class="list-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="filter-list">
                            <h4>Price selector</h4>
                            <div class="check-list price-selector">
                                <div id="keypress"></div> 
                                <input type="text" id="input-with-keypress-0" class="form-control"> 
                                <input type="text" id="input-with-keypress-1" class="form-control">
                            </div>
                        </div> 
                        
                        <div class="filter-list">
                            <h4>Chocolate Type</h4>
                            <div class="check-list">
                                <label class="label_check" for="checkbox-01">
                                     <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked="">Almond
                                </label>
                                <label class="label_check" for="checkbox-02">
                                    <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox">Truffle
                                </label>
                                <label class="label_check" for="checkbox-03">
                                    <input name="sample-checkbox-03" id="checkbox-03" value="1" type="checkbox">Gems
                                </label>
                                <label class="label_check" for="checkbox-04">
                                    <input name="sample-checkbox-04" id="checkbox-04" value="1" type="checkbox">Chocolate
                                </label>
                                <label class="label_check" for="checkbox-05">
                                    <input name="sample-checkbox-05" id="checkbox-05" value="1" type="checkbox">Praline
                                </label>
                                <label class="label_check" for="checkbox-06">
                                    <input name="sample-checkbox-06" id="checkbox-06" value="1" type="checkbox">Dry fruit
                                </label>
                                <label class="label_check" for="checkbox-07">
                                    <input name="sample-checkbox-07" id="checkbox-07" value="1" type="checkbox">Cashew nut
                                </label>
                                <label class="label_check" for="checkbox-08">
                                    <input name="sample-checkbox-08" id="checkbox-08" value="1" type="checkbox">Raisins
                                </label>
                                <label class="label_check" for="checkbox-09">
                                    <input name="sample-checkbox-09" id="checkbox-09" value="1" type="checkbox">Mendiants
                                </label>
                            </div>
                        </div>
                        
                        <div class="filter-list">
                            <h4>Chocolate Categories</h4>
                            <div class="check-list">
                                <ul class="choclate-categories">
                                    <li class="has-child"><a href="javascript:void(0);">Cacao <span>(4)</span></a>
                                        <ul class="cat-list">
                                            <li><a href="my-wishlist.html#">Cacao Nibs</a></li>
                                               <li><a href="my-wishlist.html#">Raw Cacao</a></li>
                                            <li><a href="my-wishlist.html#">Roasted Cacao</a></li>
                                            <li><a href="my-wishlist.html#">Ground Cacao</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="my-wishlist.html#">Chocolate Liquor <span>(8)</span></a></li>
                                    <li class="has-child"><a href="javascript:void(0);">Unsweetened Chocolate <span>(6)</span></a>
                                        <ul class="cat-list"l>
                                            <li><a href="my-wishlist.html#">Chocolate</a></li>
                                               <li><a href="my-wishlist.html#">Baking Chocolate</a></li>
                                            <li><a href="my-wishlist.html#">Pure Chocolate</a></li>
                                            <li><a href="my-wishlist.html#">Bitter Chocolate</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child"><a href="javascript:void(0);">Chocolates <span>(4)</span></a>
                                        <ul class="cat-list">
                                            <li><a href="my-wishlist.html#">Chocolate Candies</a></li>
                                               <li><a href="my-wishlist.html#">Truffles</a></li>
                                            <li><a href="my-wishlist.html#">Creams</a></li>
                                            <li><a href="my-wishlist.html#">Pralines</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child"><a href="javascript:void(0);">Bittersweet Chocolate <span>(5)</span></a>
                                        <ul class="cat-list">
                                            <li><a href="my-wishlist.html#">Semisweet Chocolate</a></li>
                                               <li><a href="my-wishlist.html#">Dark Chocolate</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="my-wishlist.html#">Sweet Chocolate <span>(4)</span></a></li>
                                    <li><a href="my-wishlist.html#">Milk Chocolate <span>(5)</span></a></li>
                                    <li><a href="my-wishlist.html#">White Chocolate <span>(7)</span></a></li>
                                    <li class="has-child"><a href="javascript:void(0);">Chocolate Coating <span>(1)</span></a>
                                        <ul class="cat-list">
                                            <li><a href="my-wishlist.html#">Compound Chocolate Coating</a></li>
                                               <li><a href="my-wishlist.html#">Summer Coating</a></li>
                                            <li><a href="my-wishlist.html#">Chocolate Flavored Coating</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="my-wishlist.html#">Baking Chocolate <span>(15)</span></a></li>
                                    <li class="has-child"><a href="javascript:void(0);">Ground Chocolate <span>(6)</span></a>
                                        <ul class="cat-list">
                                            <li><a href="my-wishlist.html#">Powdered Chocolate</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child"><a href="javascript:void(0);">Cocoa <span>(4)</span></a>
                                        <ul class="cat-list">
                                            <li><a href="my-wishlist.html#">Cocoa Powder</a></li>
                                               <li><a href="my-wishlist.html#">Unsweetened Cocoa Powder</a></li>
                                            <li><a href="my-wishlist.html#">Unsweetened Cocoa</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="filter-section clearfix">
                        <div class="top-left-filter">
                            <div class="filter-group">
                                <label>Short by : </label>
                                <select id="short-by" class="selectpicker show-tick form-control">
                                    <option>Popular</option>
                                    <option>New</option>
                                    <option>Mostly Viewed</option> 
                                </select>
                            </div>
                            <div class="filter-group">
                                <ul class="list-inline view-options">
                                    <li class="active"><a href="search-page.html"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                                    <li><a href="list-view.html"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-right-filter">
                            <div class="filter-group">
                                <label>Show :</label>
                                <select id="show-items" class="selectpicker show-tick form-control">
                                    <option>12</option>
                                    <option>15</option>
                                    <option>20</option> 
                                </select>
                            </div>
                            <div class="filter-group">
                                <ul class="pagination">
                                    <li class="active"><a href="my-wishlist.html#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="my-wishlist.html#">2 </a></li>
                                    <li><a href="my-wishlist.html#" aria-label="Previous"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="img"><img src="assets/images/product-img/img2.jpg" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ 449.0</span></div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="new-label"><span>NEW</span></div>
                                    <div class="img"><img src="assets/images/product-img/img3.jpg" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ 449.0</span></div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="img">
                                        <img src="assets/images/product-img/img4.jpg" alt="" />
                                        <span class="discount">20%</span>
                                    </div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price">
                                            <span>$ 359.2</span>
                                            <span class="old-price">$ 449.0</span>
                                        </div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="new-label"><span>NEW</span></div>
                                    <div class="img"><img src="assets/images/product-img/img3.jpg" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ 449.0</span></div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="img">
                                        <img src="assets/images/product-img/img4.jpg" alt="" />
                                        <span class="discount">20%</span>
                                    </div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price">
                                            <span>$ 359.2</span>
                                            <span class="old-price">$ 449.0</span>
                                        </div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="img"><img src="assets/images/product-img/img2.jpg" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ 449.0</span></div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="img"><img src="assets/images/product-img/img1.jpg" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ 449.0</span></div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="img"><img src="assets/images/product-img/img3.jpg" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ 449.0</span></div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-box">
                                    <div class="img">
                                        <img src="assets/images/product-img/img4.jpg" alt="" />
                                        <span class="discount">20%</span>
                                    </div>
                                    <div class="product-detail">
                                        <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                        <div class="rating">
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price">
                                            <span>$ 359.2</span>
                                            <span class="old-price">$ 449.0</span>
                                        </div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
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