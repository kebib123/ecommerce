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
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('themes-assets/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('themes-assets/icons/favicon-16x16.png')}}">
{{--    <link rel="manifest" href="site.webmanifest">--}}
{{--    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">--}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('themes-assets/css/simplebar.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('themes-assets/css/tiny-slider.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('themes-assets/css/drift-basic.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('themes-assets/css/lightgallery.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('themes-assets/css/nouislider.min.css')}}">
      {{--    {{toastr css}}--}}
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('themes-assets/css/theme.min.css')}}">
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
            <form class="needs-validation tab-pane fade show active"  method="post" action="{{route('login')}}" autocomplete="off" novalidate id="signin-tab">
             @csrf
              <div class="form-group">
                <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">With social account:</h3>
                <div class="d-inline-block align-middle"><a class="social-btn sb-google mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Google"><i class="czi-google"></i></a><a class="social-btn sb-facebook mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Facebook"><i class="czi-facebook"></i></a><a class="social-btn sb-twitter mr-2 mb-2" href="#" data-toggle="tooltip" title="" data-original-title="Sign in with Twitter"><i class="czi-twitter"></i></a></div>
              </div>

              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" name="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" name="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }} id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="account-password-recovery.php">Forgot password?</a>
              </div>

                <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab" method="post" action="{{route('user-registration')}}">
              @csrf
                <div class="form-group">
                    <label for="reg-fn">First Name</label>
                    <input class="form-control" type="text" name="first_name"  id="reg-fn">
                    <div class="invalid-feedback">Please enter your first name!</div>
                </div>
                <div class="form-group">
                    <label for="reg-ln">Last Name</label>
                    <input class="form-control" type="text" name="last_name"  id="reg-ln">
                    <div class="invalid-feedback">Please enter your last name!</div>
                </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" name="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
                <div class="form-group">
                    <label for="reg-phone">Phone Number</label>
                    <input class="form-control" type="text" name="phone_number" id="reg-phone">
                    <div class="invalid-feedback">Please enter your phone number!</div>
                </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" name="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" name="password_confirmation" id="su-password-confirm" required>
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
{{--    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">--}}
{{--      <div class="modal-dialog modal-xl">--}}
{{--        <div class="modal-content">--}}
{{--          <div class="modal-header">--}}
{{--            <h4 class="modal-title product-title"><a href="{{'/product-details'}}" data-toggle="tooltip" data-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>--}}
{{--            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--          </div>--}}
{{--          <div class="modal-body">--}}
{{--            <div class="row">--}}
{{--              <!-- Product gallery-->--}}
{{--              <div class="col-lg-7 pr-lg-0">--}}
{{--                <div class="cz-product-gallery">--}}
{{--                  <div class="cz-preview order-sm-2">--}}
{{--                    <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="{{asset('themes-assets/img/shop/single/gallery/01.jpg')}}" data-zoom="{{asset('themes-assets/img/shop/single/gallery/01.jpg')}}" alt="Product image">--}}
{{--                      <div class="cz-image-zoom-pane"></div>--}}
{{--                    </div>--}}
{{--                    <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="{{asset('themes-assets/img/shop/single/gallery/02.jpg')}}" data-zoom="{{asset('themes-assets/img/shop/single/gallery/02.jpg')}}" alt="Product image">--}}
{{--                      <div class="cz-image-zoom-pane"></div>--}}
{{--                    </div>--}}
{{--                    <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="{{asset('themes-assets/img/shop/single/gallery/03.jpg')}}" data-zoom="{{asset('themes-assets/img/shop/single/gallery/03.jpg')}}" alt="Product image">--}}
{{--                      <div class="cz-image-zoom-pane"></div>--}}
{{--                    </div>--}}
{{--                    <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="{{asset('themes-assets/img/shop/single/gallery/04.jpg')}}" data-zoom="{{asset('themes-assets/img/shop/single/gallery/04.jpg')}}" alt="Product image">--}}
{{--                      <div class="cz-image-zoom-pane"></div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <!-- Product details-->--}}
{{--              <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">--}}
{{--                <div class="product-details ml-auto pb-3">--}}
{{--                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="{{'/product-details'}}#reviews">--}}
{{--                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>--}}
{{--                      </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>--}}
{{--                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>--}}
{{--                  </div>--}}
{{--                  <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>--}}
{{--                    <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>--}}
{{--                  </div>--}}
{{--                  <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Red/Dark blue/White</span></div>--}}
{{--                  <div class="position-relative mr-n4 mb-3">--}}
{{--                    <div class="custom-control custom-option custom-control-inline mb-2">--}}
{{--                      <input class="custom-control-input" type="radio" name="color" id="color1" checked>--}}
{{--                      <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>--}}
{{--                    </div>--}}
{{--                    <div class="custom-control custom-option custom-control-inline mb-2">--}}
{{--                      <input class="custom-control-input" type="radio" name="color" id="color2">--}}
{{--                      <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>--}}
{{--                    </div>--}}
{{--                    <div class="custom-control custom-option custom-control-inline mb-2">--}}
{{--                      <input class="custom-control-input" type="radio" name="color" id="color3">--}}
{{--                      <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>--}}
{{--                    </div>--}}
{{--                    <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>--}}
{{--                  </div>--}}
{{--                  <form class="mb-grid-gutter">--}}
{{--                    <div class="form-group">--}}
{{--                      <label class="font-weight-medium pb-1" for="product-size">Size:</label>--}}
{{--                      <select class="custom-select" required id="product-size">--}}
{{--                        <option value="">Select size</option>--}}
{{--                        <option value="xs">XS</option>--}}
{{--                        <option value="s">S</option>--}}
{{--                        <option value="m">M</option>--}}
{{--                        <option value="l">L</option>--}}
{{--                        <option value="xl">XL</option>--}}
{{--                      </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group d-flex align-items-center">--}}
{{--                      <select class="custom-select mr-3" style="width: 5rem;">--}}
{{--                        <option value="1">1</option>--}}
{{--                        <option value="2">2</option>--}}
{{--                        <option value="3">3</option>--}}
{{--                        <option value="4">4</option>--}}
{{--                        <option value="5">5</option>--}}
{{--                      </select>--}}
{{--                      <button class="btn btn-primary btn-shadow btn-block" type="submit"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>--}}
{{--                    </div>--}}
{{--                  </form>--}}
{{--                  <h5 class="h6 mb-3 pb-2 border-bottom"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info</h5>--}}
{{--                  <h6 class="font-size-sm mb-2">Style</h6>--}}
{{--                  <ul class="font-size-sm pl-4">--}}
{{--                    <li>Hooded top</li>--}}
{{--                  </ul>--}}
{{--                  <h6 class="font-size-sm mb-2">Composition</h6>--}}
{{--                  <ul class="font-size-sm pl-4">--}}
{{--                    <li>Elastic rib: Cotton 95%, Elastane 5%</li>--}}
{{--                    <li>Lining: Cotton 100%</li>--}}
{{--                    <li>Cotton 80%, Polyester 20%</li>--}}
{{--                  </ul>--}}
{{--                  <h6 class="font-size-sm mb-2">Art. No.</h6>--}}
{{--                  <ul class="font-size-sm pl-4 mb-0">--}}
{{--                    <li>183260098</li>--}}
{{--                  </ul>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
    <!-- Navbar 3 Level (Light)-->
   <header class="bg-light box-shadow-sm "><!-- Topbar-->
      <div class="topbar topbar-dark bg-dark">
        <div class="container">
          <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">Useful links</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="tel:00331697720"><i class="czi-support text-muted mr-2"></i>(00) 33 169 7720</a></li>
              <li><a class="dropdown-item" href="{{route('track-form')}}"><i class="czi-location text-muted mr-2"></i>Order tracking</a></li>

            </ul>
          </div>
          <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="czi-support"></i><span class="text-muted mr-1">Support</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
          <div class="cz-carousel cz-controls-static d-none d-md-block">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
              <div class="topbar-text">Free shipping for order over Rs.2000</div>
              <div class="topbar-text">We return money within 30 days</div>
              <div class="topbar-text">Friendly 24/7 customer support</div>
            </div>
          </div>
{{--          <div class="ml-3 text-nowrap">--}}
{{--            <a class="topbar-link mr-4 d-none d-md-inline-block" href="{{route('track-form')}}"><i class="czi-location"></i>Order tracking</a>--}}
{{--            <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown"><img class="mr-2" width="20" src="img/flags/en.png" alt="English"/>Eng / $</a>--}}
{{--              <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                <li class="dropdown-item">--}}
{{--                  <select class="custom-select custom-select-sm">--}}
{{--                    <option value="usd">$ USD</option>--}}
{{--                    <option value="eur">€ EUR</option>--}}
{{--                    <option value="ukp">£ UKP</option>--}}
{{--                    <option value="jpy">¥ JPY</option>--}}
{{--                  </select>--}}
{{--                </li>--}}
{{--                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/fr.png" alt="Français"/>Français</a></li>--}}
{{--                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="img/flags/de.png" alt="Deutsch"/>Deutsch</a></li>--}}
{{--                <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="img/flags/it.png" alt="Italiano"/>Italiano</a></li>--}}
{{--              </ul>--}}
{{--            </div>--}}
{{--          </div>--}}
        </div>
      </div>
      <div class="navbar navbar-expand-lg navbar-light bg-light navbar-sticky">
        <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="{{url('/')}}" style="min-width: 7rem;"><img width="142" src="{{asset('themes-assets/img/logo-dark.png')}}" alt="Cyberlink"/></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="{{url('/')}}" style="min-width: 4.625rem;"><img width="74" src="{{asset('themes-assets/img/logo-icon.png')}}" alt="Cyberlink"/></a>
          <!-- Toolbar-->
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>


            <button class="navbar-tool d-none d-lg-flex" href="#searchBox"  data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-search"></i></div>
            </button>




              <a class="navbar-tool d-none d-lg-flex" href="{{route('wishlist')}}"><span class="navbar-tool-tooltip">Wishlist</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-heart"></i></div></a>


{{--              @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--            <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2"  data-toggle="modal">--}}
{{--                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>--}}

{{--                    <div class="navbar-tool-text ml-n3"><small>{{\Illuminate\Support\Facades\Auth::user()->first_name}}</small>My Account</div></a>--}}
{{--          @else--}}
{{--                  <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">--}}
{{--                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>--}}
{{--                <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>--}}
{{--              @endif--}}

              @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->roles=='user')

              <div class="navbar-tool dropdown ml-2 mr-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="{{route('user-orders')}}"><i class="czi-user"></i></a><a class="navbar-tool-text ml-n1" href="{{route('user-orders')}}"><small>My Account</small>Hi {{\Illuminate\Support\Facades\Auth::user()->first_name}}</a>


                  <div class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
                      <h6 class="dropdown-header">Dashboard</h6>



                      <a class="dropdown-item d-flex align-items-center" href="{{route('user-orders')}}"><i class="czi-bag opacity-60 mr-2"></i>Orders <span class="font-size-xs text-muted ml-auto">4</span></a>


                      <a class="dropdown-item d-flex align-items-center" href="{{route('wishlist')}}"><i class="czi-heart opacity-60 mr-2"></i>Wishlist<span class="font-size-xs text-muted ml-auto">4</span></a>


{{--                      <a class="dropdown-item d-flex align-items-center" href="account-tickets.php"><i class="czi-help opacity-60 mr-2"></i>Support tickets <span class="font-size-xs text-muted ml-auto">3</span></a>--}}


                      <div class="dropdown-divider"></div>
                      <h6 class="dropdown-header">Account settings</h6>

                      <a class="dropdown-item d-flex align-items-center" href="{{route('user-profile')}}"><i class="czi-user opacity-60 mr-2"></i>Profile info </a>


                      <a class="dropdown-item d-flex align-items-center" href="{{route('user-address')}}"><i class="czi-location  opacity-60 mr-2"></i>Addresses </a>


{{--                      <a class="dropdown-item d-flex align-items-center" href="account-payment.php"><i class="czi-card opacity-60 mr-2"></i>Payment methods</a>--}}





                      <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>
                  </div>
              </div>

              @elseif(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->roles=='admin')

                          <a href="{{route('dashboard')}}"><h6 class="dropdown-header">Dashboard</h6></a>

                  <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"><i class="czi-sign-out opacity-60 mr-2"></i>Sign Out</a>


              @else

                  <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                      <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>
              @endif



              <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{route('cart-item')}}"><span class="navbar-tool-label">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="shop-cart.php"><small>My Cart</small>{{\Melihovv\ShoppingCart\Facades\ShoppingCart::getTotal()}}</a>
                <!-- Cart dropdown-->
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $value)
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="{{route('product-details')}}"><img width="64" src="{{url('images/products/'.$value->options->image)}}" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="{{route('product-details')}}">{{$value->name}}</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">{{$value->price}}.<small>00</small></span><span class="text-muted">x {{$value->qty}}</span></div>
                          </div>
                        </div>
                      </div>
                        @endforeach
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="{{route('cart-item')}}">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="{{route('checkout-address')}}"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
              </div>



          </div>
          <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
            <!-- Search-->
            <div class="input-group-overlay d-lg-none my-3">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="form-control prepended-form-control" name="search" id="search_query" type="text" placeholder="Search Products">
            </div>
            <!-- Categories dropdown-->
              <ul class="navbar-nav mega-nav pl-lg-2 pr-lg-2 mr-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid align-middle mt-n1 mr-2"></i>Categories</a>
                 <ul class="dropdown-menu">
                     @foreach($cat as $value)
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('product-list',$value->slug)}}" >{{$value->name}}</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                            @foreach($value->subCategory as $child)
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <a href="{{route('product-list',$child->slug)}}"><h6 class="font-size-base mb-3">{{$child->name}}</h6></a>
                              <ul class="widget-list">
                                  @foreach($child->subCategory as $value2)
                                <li class="widget-list-item pb-1">
                                    <a class="widget-list-link" href="{{route('product-list',$value2->slug)}}">{{$value2->name}}</a>
                                </li>
                                  @endforeach
                              </ul>
                            </div>
                          </div>

                            @endforeach
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{asset('images/categories/'.$value->image)}}" alt="Computers & Accessories"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$149.<small>80</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="{{route('product-list',$value->slug)}}">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                         @endforeach
                  </ul>
                </li>
              </ul>
            <!-- Primary menu-->
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="{{'/'}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{'/about'}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{'/blog'}}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{'/contacts'}}">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Search collapse-->
       <form method="post" action="{{route('search-results')}}">
           @csrf
      <div class="search-box collapse" id="searchBox">
        <div class="card pt-2 pb-4 border-0 rounded-0">
          <div class="container">
            <div class="input-group-overlay">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="typeahead form-control prepended-form-control"  name="search" value="" type="text" placeholder="Search Product">
            </div>
          </div>
        </div>
      </div>
       </form>
    </header>

