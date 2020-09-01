<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cyberlink E-commerce
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Rasanpani">
    <meta name="keywords" content="Rasanpani">
    <meta name="author" content="Rasanpani">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="vendor/drift-zoom/dist/drift-basic.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/nouislider/distribute/nouislider.min.css"/>
 

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
  <!-- Body-->
    <body  >
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="form-group">
                <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">With social account:</h3>
                <div class="d-inline-block align-middle"><a class="social-btn sb-google mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Google"><i class="czi-google"></i></a><a class="social-btn sb-facebook mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Facebook"><i class="czi-facebook"></i></a><a class="social-btn sb-twitter mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Twitter"><i class="czi-twitter"></i></a></div>
              </div>

              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox" id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="account-password-recovery.php">Forgot password?</a>
              </div>
              <a class="btn btn-primary btn-block btn-shadow" href="account-orders.php" type="submit">Sign in</a>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="form-group">
                <label for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title product-title"><a href="shop-single-v1.php" data-toggle="tooltip" data-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pr-lg-0">
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
                  <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
                <div class="product-details ml-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="shop-single-v1.php#reviews">
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                      </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                  </div>
                  <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                    <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                  </div>
                  <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Red/Dark blue/White</span></div>
                  <div class="position-relative mr-n4 mb-3">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color1" checked>
                      <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color2">
                      <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color3">
                      <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                    </div>
                    <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                  </div>
                  <form class="mb-grid-gutter">
                    <div class="form-group">
                      <label class="font-weight-medium pb-1" for="product-size">Size:</label>
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
                  <h5 class="h6 mb-3 pb-2 border-bottom"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info</h5>
                  <h6 class="font-size-sm mb-2">Style</h6>
                  <ul class="font-size-sm pl-4">
                    <li>Hooded top</li>
                  </ul>
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
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar 3 Level (Light)-->
   <header class="bg-light box-shadow-sm "><!-- Topbar-->
      <div class="topbar topbar-dark bg-dark">
        <div class="container">
          <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">Useful links</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="tel:00331697720"><i class="czi-support text-muted mr-2"></i>(00) 33 169 7720</a></li>
              <li><a class="dropdown-item" href="order-tracking-form.php"><i class="czi-location text-muted mr-2"></i>Order tracking</a></li>

            </ul>
          </div>
          <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="czi-support"></i><span class="text-muted mr-1">Support</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
          <div class="cz-carousel cz-controls-static d-none d-md-block">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
              <div class="topbar-text">Free shipping for order over $200</div>
              <div class="topbar-text">We return money within 30 days</div>
              <div class="topbar-text">Friendly 24/7 customer support</div>
            </div>
          </div>
          <div class="ml-3 text-nowrap"> 
            <a class="topbar-link mr-4 d-none d-md-inline-block" href="order-tracking-form.php"><i class="czi-location"></i>Order tracking</a>
            <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng / $</a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item">
                  <select class="custom-select custom-select-sm">
                    <option value="usd">$ USD</option>
                    <option value="eur">€ EUR</option>
                    <option value="ukp">£ UKP</option>
                    <option value="jpy">¥ JPY</option>
                  </select>
                </li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/fr.png" alt="Français"/>Français</a></li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/de.png" alt="Deutsch"/>Deutsch</a></li>
                <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="img/flags/it.png" alt="Italiano"/>Italiano</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
        <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="index.php" style="min-width: 7rem;"><img width="142" src="img/logo-dark.png" alt="Cyberlink"/></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="index.php" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon.png" alt="Cyberlink"/></a>
          <!-- Toolbar-->
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>

            <a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div>
            </a>




              <a class="navbar-tool d-none d-lg-flex" href="account-wishlist.php"><span class="navbar-tool-tooltip">Wishlist</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div></a>



            <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>


              <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.php"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="shop-cart.php"><small>My Cart</small>$265.00</a>
                <!-- Cart dropdown-->
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/01.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">Women Colorblock Sneakers</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/02.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">TH Jeans City Backpack</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/03.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">3-Color Sun Stash Hat</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v1.php"><img width="64" src="img/shop/cart/widget/04.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v1.php">Cotton Polo Regular Fit</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.php">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout-details.php"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
              </div>


           
          </div>
          <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
            <!-- Search-->
            <div class="input-group-overlay d-lg-none my-3">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="form-control prepended-form-control" type="text" placeholder="Search Products">
            </div>
            <!-- Categories dropdown-->
              <ul class="navbar-nav mega-nav pl-lg-2 pr-lg-2 mr-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid align-middle mt-n1 mr-2"></i>Categories</a>
                 <ul class="dropdown-menu">
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> Computers &amp; Accessories</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Computers</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ls.php">Laptops &amp; Tablets</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Computers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer External Components</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer Internal Components</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Networking Products (NAS)</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Single Board Computers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Barebones</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Monitors</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags, Cases &amp; Sleeves</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Adapters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cooling Pads</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Screens</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Security Locks</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stands</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/07.jpg" alt="Computers & Accessories"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$149.<small>80</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> Smartphones &amp; Tablets</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links mb-3">
                              <h6 class="font-size-base mb-3">Smartphones</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPhone</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Smartphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Phablets</a></li>
                              </ul>
                            </div>
                            <div class="widget widget-links">
                              <h6 class="font-size-base">Tablets</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPad</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Tablets</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tablets with Keyboard</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessory Kits</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Battery Packs</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Car Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Power Adapters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">FM Transmitters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts &amp; Stands</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Parts</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Styluses</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/09.jpg" alt="Smartphones & Tablets"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$127.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> TV, Video &amp; Audio</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Television &amp; Video</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV Sets</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater Systems</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD Players &amp; Recorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Blue-ray Players &amp; Recorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">HD DVD Players &amp; Recorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD-VCR Combos</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DTV Converters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Receivers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Amplifiers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projectors</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projection Screens</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satelite Television</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV-DTD Combos</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Systems</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Cinema Systems</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Streaming Media Players</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">VCRs</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Glasses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/08.jpg" alt="TV, Video & Audio"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$78.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> Cameras, Photo &amp; Video</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Cameras &amp; Lenses</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Point &amp; Shoot Digital Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DSLR Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mirrorless Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Body Mounted Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Lenses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camera Lenses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Macro &amp; Ringlight Flashes</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Shoe Mount Flashes</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tripods &amp; Monopods</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Studio</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags &amp; Cases</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Binoculars &amp; Scopes</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Chargers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Protector Foils</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Filters &amp; Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Remote Controls</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rain Covers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Viewfinders</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/10.jpg" alt="Cameras, Photo & Video"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$210.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> Headphones</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Headphones</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Earbud Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Over-Ear Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">On-Ear Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sports &amp; Fitness Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Noise-Cancelling Headphones</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cases &amp; Sleeves</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ear Pads</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/11.jpg" alt="Headphones"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$35.<small>99</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> Wearable Electronics</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Gadgets</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smartwatches</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Fitness Trackers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smart Glasses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rings</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Virtual Reality</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Clips, Arm &amp; Wristbands</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/12.jpg" alt="Wearable Electronics"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$79.<small>50</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> Printers &amp; Ink</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links mb-3">
                              <h6 class="font-size-base mb-3">By type</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">All-in-One</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Copying</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Faxing</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printing</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Printing Only</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Scanning</a></li>
                              </ul>
                            </div>
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Scanners</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Business Card Scanners</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Document Scanners</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Flatbed &amp; Photo Scanners</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Slide &amp; Negative Scanners</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base">Printers</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Dot Matrix Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Inkjet Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Label Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Laser Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wide Format Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Plotter Printers</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/13.jpg" alt="Printers & Ink"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$54.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> </i>Video Games</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Games &amp; Hardware</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Games</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 4</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 3</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox One</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox 360</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo Switch</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii U</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PC</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mac</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo 3DS &amp; 2DS</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo DS</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation Vita</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sony PSP</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Retro Gaming</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Microconsoles</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Digital Games</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/14.jpg" alt="Video Games"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$19.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> Speakers &amp; Home Music</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Speakers</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bookshelf Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ceiling &amp; In-Wall Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Center-Channel Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floorstanding Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Outdoor Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satellite Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Bars</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Subwoofers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Surround Sound Systems</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Home Audio</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wireless &amp; Streaming Audio</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stereo System Components</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Compact Radios &amp; Stereos</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Audio Accessories</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/16.jpg" alt="Speakers & Home Music"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$43.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"> HDD/SSD Data Storage</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Data Storage</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Hard Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Solid State Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Zip Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floppy &amp; Tape Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Hard Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Solid State Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Network Attached Storage</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">USB Flash Drives</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="img/shop/departments/15.jpg" alt="HDD/SSD Data Storage"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$21.<small>60</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            <!-- Primary menu-->
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Search collapse-->
      <div class="search-box collapse" id="searchBox">
        <div class="card pt-2 pb-4 border-0 rounded-0">
          <div class="container">
            <div class="input-group-overlay">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="form-control prepended-form-control" type="text" placeholder="Search Product">
            </div>
          </div>
        </div>
      </div>
    </header>