<div class="row mx-n2">

    @if($products->count()==0)
        <span class="center">No Products To Show.</span>
    @endif
    @if($products->isNotEmpty())
        @foreach($products->take(6) as $value)
            <input type="hidden" id="product_id" value="{{$value->id}}">
            <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <button id="product_wishlist" class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                            data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                    @if($value->images->isNotEmpty())
                        <a class="card-img-top d-block overflow-hidden"
                           href="{{route('product-details',$value->slug)}}"><img
                                src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}"
                                alt="Product"></a>

                    @endif
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                                   href="{{route('product-details',$value->slug)}}">{{$value->categories->first()->name}}</a>
                        <h3 class="product-title font-size-sm"><a
                                href="{{route('product-details',$value->slug)}}">{{$value->product_name}}</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price">Rs.<span class="text-accent">{{$value->price}}.<small>00</small></span>
                            </div>

                            @if($value->reviews->isNotEmpty())
                                @foreach($value->reviews as $value1)
                                    <div class="star-rating">
                                        @for ($i=0; $i<$value1->rating; $i++)
                                            <i class="sr-star czi-star-filled active [$i]"></i>
                                        @endfor
                                    </div>
                                @endforeach
                            @else
                                <div class="star-rating">
                                    <i class="sr-star czi-star-filled"></i>
                                    <i class="sr-star czi-star-filled"></i>
                                    <i class="sr-star czi-star-filled"></i>
                                    <i class="sr-star czi-star-filled"></i>
                                    <i class="sr-star czi-star-filled"></i>
                                </div>
                            @endif                  </div>
                    </div>
                    {{--                <div class="card-body card-body-hidden">--}}
                    {{--                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>--}}
                    {{--                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-{{$value->id}}" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>--}}
                    {{--                </div>--}}
                </div>
                <hr class="d-sm-none">
            </div>
        @endforeach
    @endif

</div>
<!-- Banner-->
<div class="py-sm-2">
    <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-lg">
        <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
            <h4 class="font-size-lg font-weight-light mb-2">Converse All Star</h4>
            <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop
                Now</a>
        </div>
        <img class="d-block ml-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
    </div>
</div>
<!-- Products grid-->
<div class="row mx-n2">
    <!-- Product-->
    @if($products->count() >= 6)
    @foreach($products->skip(6) as $value)
        <input type="hidden" id="product_id" value="{{$value->id}}">
        <div class="col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <button id="product_wishlist" class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                        data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                @if($value->images->isNotEmpty())
                    <a class="card-img-top d-block overflow-hidden" href="{{route('product-details',$value->slug)}}"><img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"></a>

                @endif
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"
                                               href="{{route('product-details',$value->slug)}}">{{$value->categories->first()->name}}</a>
                    <h3 class="product-title font-size-sm"><a
                            href="{{route('product-details',$value->slug)}}">{{$value->product_name}}</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price">Rs.<span
                                class="text-accent">{{$value->price}}.<small>00</small></span></div>

                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                class="sr-star czi-star-filled active"></i><i
                                class="sr-star czi-star-filled active"></i><i
                                class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                    </div>
                </div>
                {{--                <div class="card-body card-body-hidden">--}}
                {{--                  <button class="btn btn-prim5yary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>--}}
                {{--                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-{{$value->id}}" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>--}}
                {{--                </div>--}}
            </div>
            <hr class="d-sm-none">
        </div>
    @endforeach
        @endif


</div>
