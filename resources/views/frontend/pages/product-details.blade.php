@extends('frontend.include.master')
@section('content')
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Product Page v.1</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Sports Hooded Sweatshirt</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container">
      <!-- Gallery + details-->
      <div class="bg-light box-shadow-lg rounded-lg px-4 py-3 mb-5">
        <div class="px-lg-3">
          <div class="row">
            <!-- Product gallery-->
            <div class="col-lg-7 pr-lg-0 pt-lg-4">
              <div class="cz-product-gallery">
                <div class="cz-preview order-sm-2">
                  <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="img/shop/single/gallery/01.jpg" data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="img/shop/single/gallery/02.jpg" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                  <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                    <div class="cz-image-zoom-pane"></div>
                  </div>
                </div>
                <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a><a class="cz-thumblist-item video-item" href="https://www.youtube.com/watch?v=1vrXpMLLK14">
                    <div class="cz-thumblist-item-text"><i class="czi-video"></i>Video</div></a></div>
              </div>
            </div>
            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0">
              <div class="product-details ml-auto pb-3">
                <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                  <button class="btn-wishlist mr-0 mr-lg-n3" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div>
                <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                  <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                </div>
                <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted" id="colorOption">Red/Dark blue/White</span></div>
                <div class="position-relative mr-n4 mb-3">
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color1" data-label="colorOption" value="Red/Dark blue/White" checked>
                    <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                  </div>
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color2" data-label="colorOption" value="Beige/White/Dark grey">
                    <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                  </div>
                  <div class="custom-control custom-option custom-control-inline mb-2">
                    <input class="custom-control-input" type="radio" name="color" id="color3" data-label="colorOption" value="Dark grey/White/Orange">
                    <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                  </div>
                  <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                </div>
                <form class="mb-grid-gutter" method="post">
                  <div class="form-group">
                    <div class="d-flex justify-content-between align-items-center pb-1">
                      <label class="font-weight-medium" for="product-size">Size:</label><a class="nav-link-style font-size-sm" href="#size-chart" data-toggle="modal"><i class="czi-ruler lead align-middle mr-1 mt-n1"></i>Size guide</a>
                    </div>
                    <select class="custom-select" required id="product-size">
                      <option value="">Select size</option>
                      <option value="xs">XS</option>
                      <option value="s">S</option>
                      <option value="m">M</option>
                      <option value="l">L</option>
                      <option value="xl">XL</option>
                    </select>
                  </div>
                  <div class="form-group d-flex align-items-center">
                    <select class="custom-select mr-3" style="width: 5rem;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <button class="btn btn-primary btn-shadow btn-block" type="submit"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                  </div>
                </form>
                <!-- Product panels-->
                <div class="accordion mb-4" id="productPanels">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a href="#productInfo" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse show" id="productInfo" data-parent="#productPanels">
                      <div class="card-body">
                        <h6 class="font-size-sm mb-2">Composition</h6>
                        <ul class="font-size-sm pl-4">
                          <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                          <li>Lining: Cotton 100%</li>
                          <li>Cotton 80%, Polyester 20%</li>
                        </ul>
                        <h6 class="font-size-sm mb-2">Art. No.</h6>
                        <ul class="font-size-sm pl-4 mb-0">
                          <li>183260098</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#shippingOptions" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="czi-delivery text-muted lead align-middle mt-n1 mr-2"></i>Shipping options<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="shippingOptions" data-parent="#productPanels">
                      <div class="card-body font-size-sm">
                        <div class="d-flex justify-content-between border-bottom pb-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Courier</div>
                            <div class="font-size-sm text-muted">2 - 4 days</div>
                          </div>
                          <div>$26.50</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local shipping</div>
                            <div class="font-size-sm text-muted">up to one week</div>
                          </div>
                          <div>$10.00</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Flat rate</div>
                            <div class="font-size-sm text-muted">5 - 7 days</div>
                          </div>
                          <div>$33.85</div>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                          <div>
                            <div class="font-weight-semibold text-dark">UPS ground shipping</div>
                            <div class="font-size-sm text-muted">4 - 6 days</div>
                          </div>
                          <div>$18.00</div>
                        </div>
                        <div class="d-flex justify-content-between pt-2">
                          <div>
                            <div class="font-weight-semibold text-dark">Local pickup from store</div>
                            <div class="font-size-sm text-muted">&mdash;</div>
                          </div>
                          <div>$0.00</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h3 class="accordion-heading"><a class="collapsed" href="#localStore" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="czi-location text-muted font-size-lg align-middle mt-n1 mr-2"></i>Find in local store<span class="accordion-indicator"></span></a></h3>
                    </div>
                    <div class="collapse" id="localStore" data-parent="#productPanels">
                      <div class="card-body">
                        <select class="custom-select">
                          <option value>Select your country</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Belgium">Belgium</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="Spain">Spain</option>
                          <option value="UK">United Kingdom</option>
                          <option value="USA">USA</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Sharing-->
                <h6 class="d-inline-block align-middle font-size-base my-2 mr-2">Share:</h6><a class="share-btn sb-twitter mr-2 my-2" href="#"><i class="czi-twitter"></i>Twitter</a><a class="share-btn sb-instagram mr-2 my-2" href="#"><i class="czi-instagram"></i>Instagram</a><a class="share-btn sb-facebook my-2" href="#"><i class="czi-facebook"></i>Facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product description section 1-->
      <div class="row align-items-center py-md-3">
        <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2"><img class="d-block rounded-lg" src="img/shop/single/prod-img.jpg" alt="Image"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4 order-md-1">
          <h2 class="h3 mb-4 pb-2">High quality materials</h2>
          <h6 class="font-size-base mb-3">Soft cotton blend</h6>
          <p class="font-size-sm text-muted pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.</p>
          <h6 class="font-size-base mb-3">Washing instructions</h6>
          <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#wash" data-toggle="tab" role="tab"><i class="czi-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#bleach" data-toggle="tab" role="tab"><i class="czi-bleach font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#hand-wash" data-toggle="tab" role="tab"><i class="czi-hand-wash font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#ironing" data-toggle="tab" role="tab"><i class="czi-ironing font-size-xl"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#dry-clean" data-toggle="tab" role="tab"><i class="czi-dry-clean font-size-xl"></i></a></li>
          </ul>
          <div class="tab-content text-muted font-size-sm">
            <div class="tab-pane fade show active" id="wash" role="tabpanel">30° mild machine washing</div>
            <div class="tab-pane fade" id="bleach" role="tabpanel">Do not use any bleach</div>
            <div class="tab-pane fade" id="hand-wash" role="tabpanel">Hand wash normal (30°)</div>
            <div class="tab-pane fade" id="ironing" role="tabpanel">Low temperature ironing</div>
            <div class="tab-pane fade" id="dry-clean" role="tabpanel">Do not dry clean</div>
          </div>
        </div>
      </div>
      <!-- Product description section 2-->
      <div class="row align-items-center py-4 py-lg-5">
        <div class="col-lg-5 col-md-6 offset-lg-1"><img class="d-block rounded-lg" src="img/shop/single/prod-map.png" alt="Map"></div>
        <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
          <h2 class="h3 mb-4 pb-2">Where is it made?</h2>
          <h6 class="font-size-base mb-3">Apparel Manufacturer, Ltd.</h6>
          <p class="font-size-sm text-muted pb-2">​Sam Tower, 6 Road No 32, Dhaka 1875, Bangladesh</p>
          <div class="d-flex mb-2">
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">3258</h4>
              <p>Workers</p>
            </div>
            <div class="mr-4 pr-2 text-center">
              <h4 class="h2 text-accent mb-1">43%</h4>
              <p>Female</p>
            </div>
            <div class="text-center">
              <h4 class="h2 text-accent mb-1">57%</h4>
              <p>Male</p>
            </div>
          </div>
          <h6 class="font-size-base mb-3">Factory information</h6>
          <p class="font-size-sm text-muted pb-md-2">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
    </div>
    <!-- Reviews-->
    <div class="border-top border-bottom my-lg-3 py-5">
      <div class="container pt-md-2" id="reviews">
        <div class="row pb-3">
          <div class="col-lg-4 col-md-5">
            <h2 class="h3 mb-4">74 Reviews</h2>
            <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i class="czi-star font-size-sm text-muted mr-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
            <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">43</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">16</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">9</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">4</span>
            </div>
            <div class="d-flex align-items-center">
              <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i class="czi-star-filled font-size-xs ml-1"></i></div>
              <div class="w-100">
                <div class="progress" style="height: 4px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><span class="text-muted ml-3">2</span>
            </div>
          </div>
        </div>
        <hr class="mt-4 pb-4 mb-3">
        <div class="row">
          <!-- Reviews list-->
          <div class="col-md-7">
            <div class="d-flex justify-content-end pb-4">
              <div class="form-inline flex-nowrap">
                <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                <select class="custom-select custom-select-sm" id="sort-reviews">
                  <option>Newest</option>
                  <option>Oldest</option>
                  <option>Popular</option>
                  <option>High rating</option>
                  <option>Low rating</option>
                </select>
              </div>
            </div>
            <!-- Review-->
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/01.jpg" alt="Rafael Marquez"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Rafael Marquez</h6><span class="font-size-ms text-muted">June 28, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                  <div class="font-size-ms text-muted">83% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">15</button>
                <button class="btn-dislike" type="button">3</button>
              </div>
            </div>
            <!-- Review-->
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/02.jpg" alt="Barbara Palson"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Barbara Palson</h6><span class="font-size-ms text-muted">May 17, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                  <div class="font-size-ms text-muted">99% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">34</button>
                <button class="btn-dislike" type="button">1</button>
              </div>
            </div>
            <!-- Review-->
            <div class="product-review pb-4 mb-4 border-bottom">
              <div class="d-flex mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle" width="50" src="img/shop/reviews/03.jpg" alt="Daniel Adams"/>
                  <div class="media-body pl-3">
                    <h6 class="font-size-sm mb-0">Daniel Adams</h6><span class="font-size-ms text-muted">May 8, 2019</span>
                  </div>
                </div>
                <div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                  <div class="font-size-ms text-muted">75% of users found this review helpful</div>
                </div>
              </div>
              <p class="font-size-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
              <ul class="list-unstyled font-size-ms pt-1">
                <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
              </ul>
              <div class="text-nowrap">
                <button class="btn-like" type="button">26</button>
                <button class="btn-dislike" type="button">9</button>
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-outline-accent" type="button"><i class="czi-reload mr-2"></i>Load more reviews</button>
            </div>
          </div>
          <!-- Leave review form-->
          <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
            <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
              <h3 class="h4 pb-2">Write a review</h3>
              <form class="needs-validation" method="post" novalidate>
                <div class="form-group">
                  <label for="review-name">Your name<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" required id="review-name">
                  <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                </div>
                <div class="form-group">
                  <label for="review-email">Your email<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" required id="review-email">
                  <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                </div>
                <div class="form-group">
                  <label for="review-rating">Rating<span class="text-danger">*</span></label>
                  <select class="custom-select" required id="review-rating">
                    <option value="">Choose rating</option>
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
                  <textarea class="form-control" rows="6" required id="review-text"></textarea>
                  <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                </div>
                <div class="form-group">
                  <label for="review-pros">Pros</label>
                  <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                </div>
                <div class="form-group mb-4">
                  <label for="review-cons">Cons</label>
                  <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                </div>
                <button class="btn btn-primary btn-shadow btn-block" type="submit">Submit a Review</button>
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
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/14.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Jeans</a>
                <h3 class="product-title font-size-sm"><a href="#">Slim Taper Fit Jeans</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static"><span class="badge badge-danger badge-shadow">Sale</span>
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/17.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s T-shirts</a>
                <h3 class="product-title font-size-sm"><a href="#">Cotton T-shirt Regular Fit</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$9.<small>50</small></span>
                    <del class="font-size-sm text-muted">$11.<small>50</small></del>
                  </div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/18.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Shoes</a>
                <h3 class="product-title font-size-sm"><a href="#">Men’s Leather Keds</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$64.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/19.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s T-shirts</a>
                <h3 class="product-title font-size-sm"><a href="#">3 Color Collection of T-shirts</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$27.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/13.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s T-shirts</a>
                <h3 class="product-title font-size-sm"><a href="#">Cotton Polo Regular Fit</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$13.<small>50</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
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
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/21.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$26.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/22.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$24.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/23.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$24.<small>99</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div>
            <div class="card product-card card-static">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/24.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Hoodie</a>
                <h3 class="product-title font-size-sm"><a href="#">Block-colored Hooded Top</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price text-accent">$25.<small>00</small></div>
                  <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
   <!-- Size chart modal-->
    <div class="modal fade" id="size-chart">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist" style="margin-bottom: -1rem;">
              <li class="nav-item"><a class="nav-link active" href="#mens" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="true">Men's sizes</a></li>
              <li class="nav-item"><a class="nav-link" href="#womens" data-toggle="tab" role="tab" aria-controls="womens" aria-selected="false">Women's sizes</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body p-0">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="mens" role="tabpanel">
                <div class="table-responsive">
                  <table class="table font-size-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th class="align-middle bg-secondary">US<br>Sizes</th>
                        <th class="align-middle">Euro<br>Sizes</th>
                        <th class="align-middle">UK<br>Sizes</th>
                        <th class="align-middle">Inches</th>
                        <th class="align-middle">CM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6</td>
                        <td>39</td>
                        <td>5.5</td>
                        <td>9.25"</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6.5</td>
                        <td>39</td>
                        <td>6</td>
                        <td>9.5"</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7</td>
                        <td>40</td>
                        <td>6.5</td>
                        <td>9.625"</td>
                        <td>24.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7.5</td>
                        <td>40-41</td>
                        <td>7</td>
                        <td>9.75"</td>
                        <td>24.8</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8</td>
                        <td>41</td>
                        <td>7.5</td>
                        <td>9.9375"</td>
                        <td>25.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8.5</td>
                        <td>41-42</td>
                        <td>8</td>
                        <td>10.125"</td>
                        <td>25.7</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9</td>
                        <td>42</td>
                        <td>8.5</td>
                        <td>10.25"</td>
                        <td>26</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9.5</td>
                        <td>42-43</td>
                        <td>9</td>
                        <td>10.4375"</td>
                        <td>26.7</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10</td>
                        <td>43</td>
                        <td>9.5</td>
                        <td>10.5625"</td>
                        <td>27</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10.5</td>
                        <td>43-44</td>
                        <td>10</td>
                        <td>10.75"</td>
                        <td>27.3</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11</td>
                        <td>44</td>
                        <td>10.5</td>
                        <td>10.9375"</td>
                        <td>27.9</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11.5</td>
                        <td>44-45</td>
                        <td>11</td>
                        <td>11.125"</td>
                        <td>28.3</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">12</td>
                        <td>45</td>
                        <td>11.5</td>
                        <td>11.25"</td>
                        <td>28.6</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">13</td>
                        <td>46</td>
                        <td>12.5</td>
                        <td>11.5625"</td>
                        <td>29.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">14</td>
                        <td>47</td>
                        <td>13.5</td>
                        <td>11.875"</td>
                        <td>30.2</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">15</td>
                        <td>48</td>
                        <td>14.5</td>
                        <td>12.1875"</td>
                        <td>31</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">16</td>
                        <td>49</td>
                        <td>15.5</td>
                        <td>12.5"</td>
                        <td>31.8</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="womens" role="tabpanel">
                <div class="table-responsive">
                  <table class="table font-size-sm text-center mb-0">
                    <thead>
                      <tr>
                        <th class="align-middle bg-secondary">US<br>Sizes</th>
                        <th class="align-middle">Euro<br>Sizes</th>
                        <th class="align-middle">UK<br>Sizes</th>
                        <th class="align-middle">Inches</th>
                        <th class="align-middle">CM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bg-secondary font-weight-medium">4</td>
                        <td>35</td>
                        <td>2</td>
                        <td>8.1875"</td>
                        <td>20.8</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">4.5</td>
                        <td>35</td>
                        <td>2.5</td>
                        <td>8.375"</td>
                        <td>21.3</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">5</td>
                        <td>35-36</td>
                        <td>3</td>
                        <td>8.5"</td>
                        <td>21.6</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">5.5</td>
                        <td>36</td>
                        <td>3.5</td>
                        <td>8.75"</td>
                        <td>22.2</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6</td>
                        <td>36-37</td>
                        <td>4</td>
                        <td>8.875"</td>
                        <td>22.5</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">6.5</td>
                        <td>37</td>
                        <td>4.5</td>
                        <td>9.0625"</td>
                        <td>23</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7</td>
                        <td>37-38</td>
                        <td>5</td>
                        <td>9.25"</td>
                        <td>23.5</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">7.5</td>
                        <td>38</td>
                        <td>5.5</td>
                        <td>9.375"</td>
                        <td>23.8</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8</td>
                        <td>38-39</td>
                        <td>6</td>
                        <td>9.5"</td>
                        <td>24.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">8.5</td>
                        <td>39</td>
                        <td>6.5</td>
                        <td>9.6875"</td>
                        <td>24.6</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9</td>
                        <td>39-40</td>
                        <td>7</td>
                        <td>9.875"</td>
                        <td>25.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">9.5</td>
                        <td>40</td>
                        <td>7.5</td>
                        <td>10"</td>
                        <td>25.4</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10</td>
                        <td>40-41</td>
                        <td>8</td>
                        <td>10.1875"</td>
                        <td>25.9</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">10.5</td>
                        <td>41</td>
                        <td>8.5</td>
                        <td>10.3125"</td>
                        <td>26.2</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11</td>
                        <td>41-42</td>
                        <td>9</td>
                        <td>10.5"</td>
                        <td>26.7</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">11.5</td>
                        <td>42</td>
                        <td>9.5</td>
                        <td>10.6875"</td>
                        <td>27.1</td>
                      </tr>
                      <tr>
                        <td class="bg-secondary font-weight-medium">12</td>
                        <td>42-43</td>
                        <td>10</td>
                        <td>10.875"</td>
                        <td>27.6</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection