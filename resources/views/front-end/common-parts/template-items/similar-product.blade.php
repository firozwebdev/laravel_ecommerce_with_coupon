<div class="similar-products section-block">
    <div class="heading"><span>Similar Products</span></div>
    <div class="product-list similar-product-slider">
        @foreach ($similarProducts as $similarProduct)
        <div class="col-md-4 col-sm-6">
                <div class="product-box">
                    <div class="img"><img src="{{ asset('assets/images/product-img/'.$similarProduct->image) }}" alt="" /></div>
                    <div class="product-detail">
                        <div class="name"><strong>{{ $similarProduct->name }} - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                        <div class="rating">
                            <a href="product-detail.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                            <a href="product-detail.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                            <a href="product-detail.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                            <a href="product-detail.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                            <a href="product-detail.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                        </div>
                        <div class="price"><span>{{ $similarProduct->price }}</span></div>
                    </div>
                    <div class="hover-block">
                        <ul class="list-inline">
                            <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                            <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="{{ route('store.show',[ 'product' => $similarProduct->slug ]) }}" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    
        @endforeach
    
    </div>
</div>