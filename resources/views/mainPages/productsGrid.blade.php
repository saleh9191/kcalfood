
    @unless($products->isEmpty())
        @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-4 mb-30" style="z-index: 0">

                <div class="product">
                    <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                    </div>
                    <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">{{$product->name}}</h5></a>
                        <div class="star-rating" title="Rated 5.00 out of 5"><span style="width: 100%;">5.00</span></div>
                        <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endunless
