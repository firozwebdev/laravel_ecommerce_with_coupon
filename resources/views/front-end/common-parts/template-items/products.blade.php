<section class="best-seller section-block">
    <div class="container">
        <div class="heading"><span>Products</span></div>
        <div class="product-list">
            <div class="row">
                
                @foreach ($products as $product)
                
                <div class="col-md-3 col-sm-6">
                        <div class="product-box">
                        <div class="img"><img src="/assets/images/product-img/{{ $product->image }}" alt="" /></div>
                            <div class="product-detail">
                                <div class="name"><strong>{{ $product->name }}- </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                <div class="rating">
                                    <a href="index.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="index.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="index.html#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                    <a href="index.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="index.html#"><i class="fa fa-star" aria-hidden="true"></i></a>
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
</section> 