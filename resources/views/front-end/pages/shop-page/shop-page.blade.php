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
                   @include('front-end.common-parts.template-items.sidebar')
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
                            <div id="shop-box-products">
                                    <?php $i = 0; ?>
                                    @foreach ($products as $product)
                                    <?php $i++; ?>
                                    <div class="col-md-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="img"><img src="{{ asset('assets/images/product-img/'.$product->image) }}" alt="" /></div>
                                                <div class="product-detail">
                                                    <div class="name"><strong>{{ $product->name }} - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                    <div class="rating">
                                                        <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="my-wishlist.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                        <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                        <a href="my-wishlist.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="price"><span>{{ $product->price }}</span></div>
                                                </div>
                                                <div class="hover-block">
                                                    <ul class="list-inline">
                                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <li><a href="{{ route('store.show',[ 'product' => $product->slug ]) }}" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
            
                                    @endforeach
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</div>

@endsection