@extends('frontend.include.master')
@section('content')
{{--    @if($category)--}}
{{--        <h1>{{$category->name}}</h1>--}}
{{--    @endif--}}
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="{{route('index')}}"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">{{$category->name}}</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">{{$category->name}}</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4">
          <!-- Sidebar-->
          <div class="cz-sidebar rounded-lg box-shadow-lg" id="shop-sidebar">
            <div class="cz-sidebar-header box-shadow-sm">
              <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close"><span class="d-inline-block font-size-xs font-weight-normal align-middle">Close sidebar</span><span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span></button>
            </div>
            <div class="cz-sidebar-body">
              <!-- Categories-->
              <div class="widget widget-categories mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Categories</h3>
                <div class="accordion mt-n1" id="shop-categories">
                  <!-- Shoes-->
                    @foreach($cat as $value)
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#shoes"  data-toggle="collapse" aria-expanded="false" aria-controls="shoes">{{$value->name}}<span class="accordion-indicator"></span></a></h3>

                    </div>
                    <div class="collapse" id="shoes" data-parent="#shop-categories">
                      <div class="card-body">
                        <div class="widget widget-links cz-filter">
                          <div class="input-group-overlay input-group-sm mb-2">
{{--                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">--}}
{{--                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>--}}
                          </div>
                          <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                              @foreach($value->subCategory as $child)

                              <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="{{route('product-list',$child->slug)}}"><span class="cz-filter-item-text">{{$child->name}}</span><span class="font-size-xs text-muted ml-3">{{$child->products->count()}}</span></a></li>
                              @foreach($child->subCategory as $value2)
                                  <li class="widget-list-item pb-1">
                                      <a class="widget-list-link" href="{{route('product-list',$value2->slug)}}">{{$value2->name}}</a>
                                  </li>
                              @endforeach
                              @endforeach

                          </ul>

                        </div>
                      </div>
                    </div>
                  </div>
                    @endforeach

                </div>
              </div>
              <!-- Price range-->
              <div class="widget mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Price</h3>
                <div class="cz-range-slider product_filter" data-start-min="0" data-start-max="30000" data-min="0" data-max="30000" data-step="1">
                  <div class="cz-range-slider-ui"></div>
                  <div class="d-flex pb-1">
                    <div class="w-50 pr-2 mr-2">
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend"><span class="input-group-text">Rs.</span></div>
                        <input class="product_filter price_filter_min form-control cz-range-slider-value-min" type="text">
                      </div>
                    </div>
                    <div class="w-50 pl-2">
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend"><span class="input-group-text">Rs.</span></div>
                        <input class="product_filter price_filter_max form-control cz-range-slider-value-max" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <!-- Filter by Brand-->
                <div class="widget cz-filter mb-4 pb-4 border-bottom">
                    <h3 class="widget-title">Brand</h3>
                    <div class="input-group-overlay input-group-sm mb-2">
                        <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                        <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                    </div>
                    <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                        @foreach($brand as $value1)
                        <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                            <div class="custom-control custom-checkbox">
                                <input class="product_filter brand_filter custom-control-input" type="checkbox" id="{{'brand'.$value1->id}}" value="{{$value1->id}}">
                                <label class="custom-control-label cz-filter-item-text" for="{{'brand'.$value1->id}}">{{$value1->brand_name}}</label>
                            </div><span class="font-size-xs text-muted">425</span>
                        </li>
                            @endforeach

{{--                        @foreach($brand as $value)--}}
{{--                                                <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">--}}
{{--                                                    <div class="custom-control custom-checkbox">--}}
{{--                                                        <input class="product_filter brand_filter custom-control-input" type="checkbox" id="{{$value->id}}" value="{{$value->id}}">--}}
{{--                                                        <label class="custom-control-label cz-filter-item-text" for="{{'bibek'.$value->id}}">{{$value->brand_name}}</label>--}}
{{--                                                    </div><span class="font-size-xs text-muted">{{$value->count()}}</span>--}}
{{--                                                </li>--}}
{{--                                            @endforeach--}}

                    </ul>
                </div>
              <!-- Filter by Size-->
              <div class="widget cz-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Size</h3>
                <div class="input-group-overlay input-group-sm mb-2">
                  <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                  <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                </div>
                <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                    @foreach($size as $value)
                  <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="size_filter custom-control custom-checkbox">
                      <input class="product_filter size_filter custom-control-input" name="size[]" type="checkbox" id="{{$value->id}}" value="{{$value->id}}" >
                      <label class="custom-control-label cz-filter-item-text " for="{{$value->id}}">{{$value->title}}</label>
                    </div><span class="font-size-xs text-muted">{{$value->count()}}</span>
                  </li>
                    @endforeach


                </ul>
              </div>
            </div>
          </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
          <!-- Toolbar-->
          <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
            <div class="d-flex flex-wrap">
              <div class="form-inline flex-nowrap mr-3 mr-sm-4 pb-3">
                <label class="text-light opacity-75 text-nowrap mr-2 d-none d-sm-block" for="sorting">Sort by:</label>
                <select class="item_sort form-control custom-select" id="sorting">
                    <option selected="selected" value="">--Select--</option>
                    <option value="popular">Popularity</option>
                  <option value="low_to_high">Low - Hight Price</option>
                  <option value="high_to_low">High - Low Price</option>
{{--                  <option>Average Rating</option>--}}
                  <option value="a_to_z">A - Z Order</option>
                  <option value="z_to_a">Z - A Order</option>
                </select><span class="font-size-sm text-light opacity-75 text-nowrap ml-2 d-none d-md-block">of 287 products</span>
              </div>
            </div>
            <div class="d-flex pb-3"><a class="nav-link-style nav-link-light mr-3" href="#"><i class="czi-arrow-left"></i></a><span class="font-size-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ml-3" href="#"><i class="czi-arrow-right"></i></a></div>

          </div>
          <!-- Products grid-->
            <div class="filter product_filter_result ">
                <div class="row mx-n2" >
                    <!-- Product-->
                    {{--              {{$products}}--}}
                    @if($products->count()==0)
                        <span class="center">No Products To Show.</span>
                    @endif
                    @if($products->isNotEmpty())
                        @foreach($products->take(6) as $value)
                            <input type="hidden" id="product_id" value="{{$value->id}}">
                            <div class="col-md-4 col-sm-6 px-2 mb-4">
                                <div class="card product-card">
                                    <button id="product_wishlist" class="btn-wishlist btn-sm"  type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                                    @if($value->images->isNotEmpty())
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('product-details',$value->slug)}}"><img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"></a>
                                    @endif
                                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="{{route('product-details',$value->slug)}}">{{$value->categories->first()->name}}</a>
                                        <h3 class="product-title font-size-sm"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}}</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price">Rs.<span class="text-accent">{{$value->price}}.<small>00</small></span></div>

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
                <div class="py-sm-2" >
                    <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-lg">
                        <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
                            <h4 class="font-size-lg font-weight-light mb-2">Converse All Star</h4>
                            <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                        </div><img class="d-block ml-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
                    </div>
                </div>
                <!-- Products grid-->
                <div class="row mx-n2">
                    <!-- Product-->
                    @foreach($products->skip(6) as $value)
                        <input type="hidden" id="product_id" value="{{$value->id}}">
                        <div class="col-md-4 col-sm-6 px-2 mb-4">
                            <div class="card product-card">
                                <button id="product_wishlist" class="btn-wishlist btn-sm"  type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                                @if($value->images->isNotEmpty())
                                    <a class="card-img-top d-block overflow-hidden" href="{{route('product-details',$value->slug)}}"><img src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}" alt="Product"></a>
                                @endif
                                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="{{route('product-details',$value->slug)}}">{{$value->categories->first()->name}}</a>
                                    <h3 class="product-title font-size-sm"><a href="{{route('product-details',$value->slug)}}">{{$value->product_name}}</a></h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="product-price">Rs.<span class="text-accent">{{$value->price}}.<small>00</small></span></div>

                                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                        </div>
                                    </div>
                                </div>
                                {{--                <div class="card-body card-body-hidden">--}}
                                {{--                  <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>--}}
                                {{--                  <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-{{$value->id}}" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>--}}
                                {{--                </div>--}}
                            </div>
                            <hr class="d-sm-none">
                        </div>
                    @endforeach


                </div>
            </div>

          <hr class="my-3">

        <!-- Pagination-->
          <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a></li>
            </ul>
            <ul class="pagination">
              <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
              <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
            </ul>
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>
            </ul>
          </nav>
        </section>
      </div>
    </div>
{{--@if($products->isNotEmpty())--}}
{{--    @foreach($products as $value)--}}
{{--<div class="modal-quick-view modal fade modal-id" id="quick-view-{{$value->id}}" itemid="{{$value->id}}" tabindex="-1">--}}
{{--    <div class="modal-dialog modal-xl">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h4 class="modal-title product-title"><a href="{{'/product-details'}}" data-toggle="tooltip" data-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>--}}
{{--                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="row">--}}
{{--                    <!-- Product gallery-->--}}
{{--                    <div class="col-lg-7 pr-lg-0 pt-lg-4">--}}
{{--                        <div class="cz-product-gallery">--}}
{{--                            <div class="cz-preview order-sm-2">--}}

{{--                                <div class="cz-preview-item active" id="first"><img class="cz-image-zoom"--}}
{{--                                                                                    src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}"--}}
{{--                                                                                    data-zoom="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}"--}}
{{--                                                                                    alt="Product image">--}}
{{--                                    <div class="cz-image-zoom-pane"></div>--}}
{{--                                </div>--}}
{{--                                @foreach($value->images as $img)--}}
{{--                                    <div class="cz-preview-item" id="second"><img class="cz-image-zoom"--}}
{{--                                                                                  src="{{asset('/images/products/'.$img->image)}}"--}}
{{--                                                                                  data-zoom="{{asset('/images/products/'.$img->image)}}"--}}
{{--                                                                                  alt="Product image">--}}
{{--                                        <div class="cz-image-zoom-pane"></div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                            <div class="cz-thumblist order-sm-1">--}}
{{--                                <a class="cz-thumblist-item active" href="#first"><img--}}
{{--                                        src="{{asset('images/products/'.$value->images->where('is_main','=',1)->first()->image)}}"--}}
{{--                                        alt="Product thumb"></a>--}}
{{--                                @foreach($value->images as $img)--}}
{{--                                    <a class="cz-thumblist-item" href="#second"><img--}}
{{--                                            src="{{asset('/images/products/'.$img->image)}}" alt="Product thumb"></a>--}}
{{--                                @endforeach--}}
{{--                                <a class="cz-thumblist-item video-item"--}}
{{--                                   href="https://www.youtube.com/watch?v=1vrXpMLLK14">--}}
{{--                                    <div class="cz-thumblist-item-text"><i class="czi-video"></i>Video</div>--}}
{{--                                </a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Product details-->--}}
{{--                    <div class="col-lg-5 pt-4 pt-lg-0">--}}
{{--                        <div class="product-details ml-auto pb-3">--}}
{{--                            <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews"--}}
{{--                                                                                                   data-scroll>--}}
{{--                                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i--}}
{{--                                            class="sr-star czi-star-filled active"></i><i--}}
{{--                                            class="sr-star czi-star-filled active"></i><i--}}
{{--                                            class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>--}}
{{--                                    </div>--}}
{{--                                    <span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>--}}
{{--                                                                @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--                                <button class="btn-wishlist mr-0 mr-lg-n3" type="button" id="product_wishlist"--}}
{{--                                        data-toggle="tooltip"--}}
{{--                                        title="Add to wishlist"><i class="czi-heart"></i></button>--}}
{{--                                                                @endif--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">Rs.<span class="h3 font-weight-normal text-accent mr-1">{{$value->discount_price}}.<small>00</small></span>--}}
{{--                                @if($value->on_sale==1)--}}
{{--                                    <del class="text-muted font-size-lg mr-3">{{$value->price}}.<small>00</small>--}}
{{--                                    </del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <form class="mb-grid-gutter" id="add_to_cart">--}}
{{--                                <input type="hidden" name="product_id" value="{{$value->id}}">--}}

{{--                                <div class="font-size-sm mb-4"><span--}}
{{--                                        class="text-heading font-weight-medium mr-1">Color:</span><span--}}
{{--                                        class="text-muted" id="colorOption"></span></div>--}}
{{--                                <div class="position-relative mr-n4 mb-3">--}}
{{--                                                                        //freesize wala//--}}
{{--                                    @if(isset($value->colorstocks))--}}
{{--                                        @foreach($value->colorstocks as $value1)--}}
{{--                                            <div class="custom-control custom-option custom-control-inline mb-2">--}}
{{--                                                <input class="custom-control-input size_stock" type="radio" name="color"--}}
{{--                                                       id="{{$value1->title}}" data-label="colorOption"--}}
{{--                                                       value="{{$value1->title}}" checked>--}}
{{--                                                <label class="custom-option-label rounded-circle"--}}
{{--                                                       for="{{$value1->title}}"><span--}}
{{--                                                        class="custom-option-color rounded-circle"--}}
{{--                                                        style="background-color:{{$value1->title}}"></span></label>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                                                        size with stock--}}
{{--                                    @if(isset($value->stocks))--}}
{{--                                        @foreach($value->stocks as $value2)--}}
{{--                                            <div class="custom-control custom-option custom-control-inline mb-2">--}}
{{--                                                <input class="custom-control-input size_stock" type="radio" name="color"--}}
{{--                                                       id="{{$value2->colors->title}}"--}}
{{--                                                       data-label="colorOption" value="{{$value2->colors->title}}"--}}
{{--                                                       checked>--}}
{{--                                                <label class="custom-option-label rounded-circle"--}}
{{--                                                       for="{{$value2->colors->title}}"><span--}}
{{--                                                        class="custom-option-color rounded-circle"--}}
{{--                                                        style="background-color:{{$value2->colors->title}}"></span></label>--}}
{{--                                            </div>--}}

{{--                                        @endforeach--}}
{{--                                    @endif--}}
{{--                                    <div class="product-badge product-available mt-n1"><i--}}
{{--                                            class="czi-security-check"></i>Product available--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h4 id="stock_qty">In Stock:</h4>--}}

{{--                                <div class="form-group">--}}
{{--                                    <div class="d-flex justify-content-between align-items-center pb-1">--}}
{{--                                        <label class="font-weight-medium" for="product-size">Size:</label><a--}}
{{--                                            class="nav-link-style font-size-sm" href="#size-chart"--}}
{{--                                            data-toggle="modal"><i class="czi-ruler lead align-middle mr-1 mt-n1"></i>Size--}}
{{--                                            guide</a>--}}
{{--                                    </div>--}}
{{--                                    @if(isset($value->stocks)&&($value->size_variation==1))--}}
{{--                                        <select class="custom-select free_size" name="size" required>--}}
{{--                                            <option value="" selected disabled>Select size</option>--}}

{{--                                            @foreach($value->stocks as $stock)--}}
{{--                                                <option value="{{$stock->size->title}}"--}}
{{--                                                        selected>{{$stock->size->title}}</option>--}}
{{--                                            @endforeach--}}
{{--                                            @else--}}
{{--                                                <h3>Free Size</h3>--}}
{{--                                            @endif--}}
{{--                                        </select>--}}
{{--                                </div>--}}
{{--                                <div class="form-group d-flex align-items-center">--}}
{{--                                                        <select class="custom-select mr-3" name="quantity" style="width: 5rem;">--}}
{{--                                                          <option value="1">1</option>--}}
{{--                                                          <option value="2">2</option>--}}
{{--                                                          <option value="3">3</option>--}}
{{--                                                          <option value="4">4</option>--}}
{{--                                                          <option value="5">5</option>--}}
{{--                                                        </select>--}}
{{--                                    <input type="number" name="quantity" min="1" max=""--}}
{{--                                           class="form-control" id="stock_limit" style="width: 5rem;">--}}

{{--                                    <button class="btn btn-primary btn-shadow btn-block" id="cart_btn"><i--}}
{{--                                            class="czi-cart font-size-lg mr-2"></i>Add to Cart--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <!-- Product panels-->--}}
{{--                            <div class="accordion mb-4" id="productPanels">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <h3 class="accordion-heading"><a href="#productInfo" role="button"--}}
{{--                                                                         data-toggle="collapse" aria-expanded="true"--}}
{{--                                                                         aria-controls="productInfo"><i--}}
{{--                                                    class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product--}}
{{--                                                info<span class="accordion-indicator"></span></a></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="collapse show" id="productInfo" data-parent="#productPanels">--}}
{{--                                        <div class="card-body">--}}
{{--                                            {!! $value->short_description !!}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Sharing-->--}}
{{--                            <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6><a--}}
{{--                                class="share-btn sb-twitter mr-2 my-2" href="#"><i class="czi-twitter"></i>Twitter</a><a--}}
{{--                                class="share-btn sb-instagram mr-2 my-2" href="#"><i class="czi-instagram"></i>Instagram</a><a--}}
{{--                                class="share-btn sb-facebook my-2" href="#"><i class="czi-facebook"></i>Facebook</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--    @endif--}}


     <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="#shop-sidebar" data-toggle="sidebar"><span class="cz-handheld-toolbar-icon"><i class="czi-filter-alt"></i></span><span class="cz-handheld-toolbar-label">Filters</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#product_wishlist').click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{route('wishlist')}}',
                data: {
                    product_id:{{$value->id}}
                },

                success: function (data) {
                    console.log(data);
                    jQuery.each(data.errors, function (key, value) {
                        toastr.error(value);
                        // hideLoading();

                    });
                    if (data.status == 'success') {
                        toastr.success(data.message);
                    }
                    if (data.status == 'error') {
                        toastr.error(data.message);
                    }


                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while adding to wishlist.\n error code : " + a.statusText);
                }
            });

        });

        $('.size_stock').click(function () {
            let free_size = $('.free_size').val();
            let color = this.value;
            getStock(free_size, color);
        });
        $('.free_size').on('change', function () {
            var color = $("input[type='radio'].size_stock:checked").val();
            console.log(color);
            var freesize = this.value;
            getStock(freesize, color);
        });

        $(window).on("load", function () {
            var color = $("input[type='radio'].size_stock:checked").val();
            var size = $('select[name=size] option').filter(':selected').val();
            getStock(size, color);

        });

        function getStock(free_size, color,) {
            var id = $('.modal-id').attr('itemId');
            console.log(id);
            $.ajax({
                type: 'GET',
                url: '{{route('cart-filter')}}',
                data: {
                    free_size: free_size,
                    color: color,
                    product_id:{{$value->id}}
                },


                success: function (data) {
                    $('#stock_limit').attr({
                        'max':data.stock_amount
                    });

                    document.getElementById("stock_qty").innerHTML = 'In Stock:'.concat(data.stock_amount);
                    // console.log(data.stock_amount);

                },

            });
        }

        $('#cart_btn').on('click', function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

            let myform = document.getElementById('add_to_cart');
            let formData = new FormData(myform);

            $.ajax({
                type: 'POST',
                url: '{{route('cart-add')}}',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                success: function (data) {
                    console.log(data);
                    jQuery.each(data.errors, function (key, value) {
                        toastr.error(value);
                        // hideLoading();

                    });
                    if (data.status == 'success') {
                        toastr.success(data.message);
                    }


                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });


        });
        // filter
        $(document).ready(function () {


            $('.product_filter').bind("click change keyup",function (e){
                let size_variations= multilple_values('size_filter');
                console.log(size_variations);
               let brand_variation=multilple_values('brand_filter');
               console.log(brand_variation);
               let price_variation_min=$('.price_filter_min').val();
               let price_variation_max=$('.price_filter_max').val();

               var slug= "{{$category_slug}}";

                function multilple_values(inputclass) {
                    var val = new Array();
                    $.each($("." + inputclass + ":checked"), function() {
                        val.push($(this).val());
                    });
                    return val;
                }

                $.ajax({
                    type: 'GET',
                    url: '{{route('product-list')}}',
                    data:{
                        brand: brand_variation,
                        size: size_variations,
                        slug: slug,
                        min_price:price_variation_min,
                        max_price:price_variation_max,
                    },

                    success:function (response) {
                       $('.product_filter_result').replaceWith($('.product_filter_result')).html(response);
                    }
                });
            });
            $('.item_sort').change(function (e) {
                var val = $(this).find(':checked').val();
                console.log(val);

                $.ajax({
                    url: document.URL,
                    type: 'get',
                    data: {
                        value: val,
                    },
                    success: function (result) {
                        $('#product_filter_result').replaceWith($('#product_filter_result')).html(result);
                    }
                });

            })

            //

        });
    </script>
    @endpush
