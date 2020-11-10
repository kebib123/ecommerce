<!-- Reviews-->
@if($product->reviews->isNotEmpty())
<div class="border-top border-bottom my-lg-3 py-5">
    <div class="container pt-md-2" id="reviews">
        <div class="row pb-3">
            <div class="col-lg-4 col-md-5">
                <h2 class="h3 mb-4">{{$count}} Reviews</h2>
                <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                        class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                        class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                        class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                        class="czi-star font-size-sm text-muted mr-1"></i></div>
                <span class="d-inline-block align-middle">{{$average}} Overall rating</span>
{{--                <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>--}}
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="d-flex align-items-center mb-2">
                    <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i
                            class="czi-star-filled font-size-xs ml-1"></i></div>
                    <div class="w-100">
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                 aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="text-muted ml-3">{{$fivestar->count()}}</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i
                            class="czi-star-filled font-size-xs ml-1"></i></div>
                    <div class="w-100">
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar"
                                 style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="text-muted ml-3">{{$fourstar->count()}}</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i
                            class="czi-star-filled font-size-xs ml-1"></i></div>
                    <div class="w-100">
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar"
                                 style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="text-muted ml-3">{{$threestar->count()}}</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i
                            class="czi-star-filled font-size-xs ml-1"></i></div>
                    <div class="w-100">
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar"
                                 style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="text-muted ml-3">{{$twostar->count()}}</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i
                            class="czi-star-filled font-size-xs ml-1"></i></div>
                    <div class="w-100">
                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;"
                                 aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <span class="text-muted ml-3">{{$onestar->count()}}</span>
                </div>
            </div>
        </div>
        <hr class="mt-4 pb-4 mb-3">
        <div class="row">
            <!-- Reviews list-->
            <div class="col-md-7">
{{--                <div class="d-flex justify-content-end pb-4">--}}
{{--                    <div class="form-inline flex-nowrap">--}}
{{--                        <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort--}}
{{--                            by:</label>--}}
{{--                        <select class="custom-select custom-select-sm" id="sort-reviews">--}}
{{--                            <option>Newest</option>--}}
{{--                            <option>Oldest</option>--}}
{{--                            <option>Popular</option>--}}
{{--                            <option>High rating</option>--}}
{{--                            <option>Low rating</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Review-->
{{--                {{$product->reviews}}--}}
                @foreach($product->reviews as $value)
                <div class="product-review pb-4 mb-4 border-bottom">
                    <div class="d-flex mb-3">
                        <div class="media media-ie-fix align-items-center mr-4 pr-2">
{{--                            <img class="rounded-circle"--}}
{{--                                 width="50"--}}
{{--                                                                                          src="img/shop/reviews/01.jpg"--}}
{{--                                                                                          alt="Rafael Marquez"/>--}}
                            <div class="media-body pl-3">
                                <h6 class="font-size-sm mb-0">{{$value->name}}</h6><span
                                    class="font-size-ms text-muted">{{$value->created_at}}</span>
                            </div>
                        </div>
                        <div>
                            <div class="star-rating">
                                @for ($i=0; $i<$value->rating; $i++)
                                <i class="sr-star czi-star-filled active [$i]"></i>
                                @endfor
                            </div>
                            <div class="font-size-ms text-muted">83% of users found this review helpful</div>
                        </div>
                    </div>
                    <p class="font-size-md mb-2">{{$value->review}}</p>
                    <ul class="list-unstyled font-size-ms pt-1">
                        <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>{{$value->pros}}
                        </li>
                        <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>{{$value->cons}}
                        </li>
                    </ul>
{{--                    <div class="text-nowrap">--}}
{{--                        <button class="btn-like" type="button">15</button>--}}
{{--                        <button class="btn-dislike" type="button">3</button>--}}
{{--                    </div>--}}
                </div>
                @endforeach

                <div class="text-center">
                    <button class="btn btn-outline-accent" type="button"><i class="czi-reload mr-2"></i>Load more
                        reviews
                    </button>
                </div>
            </div>
        @endif

        <!-- Leave review form-->
            <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
                    <h3 class="h4 pb-2">Write a review</h3>
                    <form class="needs-validation" id="review_form" method="post" novalidate>
                        <div class="form-group">
                            <label for="review-name">Your name<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" required id="review-name">
                            <div class="invalid-feedback">Please enter your name!</div>
                            <small class="form-text text-muted">Will be displayed on the comment.</small>
                        </div>
                        <div class="form-group">
                            <label for="review-email">Your email<span class="text-danger">*</span></label>
                            <input class="form-control" type="email"  name="email" required id="review-email">
                            <div class="invalid-feedback">Please provide valid email address!</div>
                            <small class="form-text text-muted">Authentication only - we won't spam you.</small>
                        </div>
                        <div class="form-group">
                            <label for="review-rating">Rating<span class="text-danger">*</span></label>
                            <select class="custom-select" name="rating" required id="review-rating">
                                <option value="" selected disabled>Choose rating</option>
                                <option value="5">5 stars</option>
                                <option value="4">4 stars</option>
                                <option value="3">3 stars</option>
                                <option value="2">2 stars</option>
                                <option value="1">1 star</option>
                            </select>
                            <div class="invalid-feedback">Please choose rating!</div>
                        </div>
                        <div class="form-group">
                            <label for="review-text">Review<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="review" rows="6" required id="review-text"></textarea>
                            <div class="invalid-feedback">Please write a review!</div>
                            <small class="form-text text-muted">Your review must be at least 50 characters.</small>
                        </div>
                        <div class="form-group">
                            <label for="review-pros">Pros</label>
                            <textarea class="form-control" name="pros" rows="2" placeholder="Separated by commas"
                                      id="review-pros"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for="review-cons">Cons</label>
                            <textarea class="form-control" name="cons" rows="2" placeholder="Separated by commas"
                                      id="review-cons"></textarea>
                        </div>
                        <button class="btn btn-primary btn-shadow btn-block" id="add_review" type="submit">Submit a Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product carousel (Style with)-->
<div class="container pt-5">
    <h2 class="h3 text-center pb-4">Style with</h2>
    <div class="cz-carousel cz-controls-static cz-controls-outside">
        <div class="cz-carousel-inner"
             data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/14.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Jeans</a>
                        <h3 class="product-title font-size-sm"><a href="#">Slim Taper Fit Jeans</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/17.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            T-shirts</a>
                        <h3 class="product-title font-size-sm"><a href="#">Cotton T-shirt Regular Fit</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$9.<small>50</small></span>
                                <del class="font-size-sm text-muted">$11.<small>50</small></del>
                            </div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i
                                    class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/18.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Shoes</a>
                        <h3 class="product-title font-size-sm"><a href="#">Men’s Leather Keds</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price text-accent">$64.<small>99</small></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/19.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            T-shirts</a>
                        <h3 class="product-title font-size-sm"><a href="#">3 Color Collection of T-shirts</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price text-accent">$27.<small>99</small></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/13.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            T-shirts</a>
                        <h3 class="product-title font-size-sm"><a href="#">Cotton Polo Regular Fit</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price text-accent">$13.<small>50</small></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i
                                    class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product carousel (You may also like)-->
<div class="container py-5 my-md-3">
    <h2 class="h3 text-center pb-4">You may also like</h2>
    <div class="cz-carousel cz-controls-static cz-controls-outside">
        <div class="cz-carousel-inner"
             data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Hoodie</a>
                        <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/21.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Hoodie</a>
                        <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price text-accent">$26.<small>99</small></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/22.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Hoodie</a>
                        <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price text-accent">$24.<small>99</small></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i
                                    class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/23.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Hoodie</a>
                        <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price text-accent">$24.<small>99</small></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card card-static">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                            title="Add to wishlist"><i class="czi-heart"></i></button>
                    <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/24.jpg"
                                                                                  alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s
                            Hoodie</a>
                        <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price text-accent">$25.<small>00</small></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i
                                    class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->

@push('scripts')
    <script>
        $('#add_review').on('click', function (e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

            let myform = document.getElementById('review_form');
            let formData = new FormData(myform);
            formData.append('product_id',{{$product->id}});

            $.ajax({
                type: 'POST',
                url: '{{route('add-review')}}',
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
                    if (data.status == 'error') {
                        toastr.error(data.message);
                    }

                },
                error: function (a) {//if an error occurs
                    // hideLoading();
                    alert("An error occured while uploading data.\n error code : " + a.statusText);
                }
            });


        });

    </script>
@endpush
