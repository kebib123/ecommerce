@extends('frontend.include.master')
@section('content')
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.php">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Checkout</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <div class="row">
        <section class="col-lg-8">
          <!-- Steps-->
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="{{route('cart-item')}}">
                    <div class="step-progress"><span class="step-count">1</span></div>
                    <div class="step-label"><i class="czi-cart"></i>Cart</div></a><a class="step-item active current" href="{{route('checkout-address')}}">
                    <div class="step-progress"><span class="step-count">2</span></div>
                    <div class="step-label"><i class="czi-user-circle"></i>Your details</div></a><a class="step-item" href="{{'checkout-shipping'}}">
                    {{--              <div class="step-progress"><span class="step-count">3</span></div>--}}
                    {{--              <div class="step-label"><i class="czi-package"></i>Shipping</div></a><a class="step-item" href="{{route('checkout-payment')}}">--}}
                    <div class="step-progress"><span class="step-count">4</span></div>
                    <div class="step-label"><i class="czi-card"></i>Payment</div></a><a class="step-item" href="{{route('checkout-review')}}">
                    <div class="step-progress"><span class="step-count">5</span></div>
                    <div class="step-label"><i class="czi-check-circle"></i>Review</div></a></div>
          <!-- Payment methods accordion-->
          <h2 class="h6 pb-3 mb-2">Choose payment method</h2>
          <div class="accordion mb-2" id="payment-method" role="tablist">
            <div class="card">
              <div class="card-header" role="tab">
                <h3 class="accordion-heading"><a href="#card" data-toggle="collapse"><i class="czi-card font-size-lg mr-2 mt-n1 align-middle"></i>Pay with Credit Card<span class="accordion-indicator"></span></a></h3>
              </div>
              <div class="collapse show" id="card" data-parent="#payment-method" role="tabpanel">
                <div class="card-body">
                  <p class="font-size-sm">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="img/cards.png" style="width: 187px;" alt="Cerdit Cards"></p>
                  <div class="card-wrapper"></div>
                  <form class="interactive-credit-card row">
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                    </div>
                    <div class="form-group col-sm-6">
                      <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group col-sm-3">
                      <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                    </div>
                    <div class="form-group col-sm-3">
                      <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                    </div>
                    <div class="col-sm-6">
                      <button class="btn btn-outline-primary btn-block mt-0" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h3 class="accordion-heading"><a class="collapsed" href="#paypal" data-toggle="collapse"><i class="czi-paypal mr-2 align-middle"></i>Pay with PayPal<span class="accordion-indicator"></span></a></h3>
              </div>
              <div class="collapse" id="paypal" data-parent="#payment-method" role="tabpanel">
                <div class="card-body font-size-sm">
                  <p><span class='font-weight-medium'>PayPal</span> - the safer, easier way to pay</p>
                  <form class="row" method="post">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="E-mail" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input class="form-control" type="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex flex-wrap justify-content-between align-items-center"><a class="nav-link-style" href="#">Forgot password?</a>
                        <button class="btn btn-primary" type="submit">Log In</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
{{--              <div class="card">--}}
{{--                  <div class="form-group col-sm-6">--}}
{{--                      <input class="form-control" type="radio" name="number" placeholder="Card Number" required>--}}
{{--                  </div>--}}
{{--              </div>--}}

          </div>
          <!-- Navigation (desktop)-->
          <div class="d-none d-lg-flex pt-4">
{{--            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="{{route('shipping-page')}}"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Shipping</span><span class="d-inline d-sm-none">Back</span></a></div>--}}
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="{{route('checkout-review',['order_id'=>$order->id])}}"><span class="d-none d-sm-inline">Review your order</span><span class="d-inline d-sm-none">Review order</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </section>
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <div class="widget mb-3">
              <h2 class="widget-title text-center">Order summary</h2>

                @foreach($cartItem as $value)
                    <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="{{'/product-details'}}"><img width="64" src="{{url('images/products/'.$value->options->image)}}" alt="Product"/></a>
                        <div class="media-body">
                            <h6 class="widget-product-title"><a href="{{'/product-details'}}">{{$value->name}}</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">{{$value->price}}.<small>00</small></span><span class="text-muted">x {{$value->qty}}</span></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <ul class="list-unstyled font-size-sm pb-2 border-bottom">
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Subtotal:</span><span class="text-right">{{$order->subtotal}}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Shipping:</span><span class="text-right">{{$order->shippings->shipping_price}}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Taxes:</span><span class="text-right">{{$order->tax}}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="mr-2">Discount:</span><span class="text-right">—</span></li>
            </ul>
            <h3 class="font-weight-normal text-center my-4">{{$order->grand_total}}</h3>
            <form class="needs-validation" method="post" novalidate>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Promo code" required>
                <div class="invalid-feedback">Please provide promo code.</div>
              </div>
              <button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
            </form>
          </div>
        </aside>
      </div>
      <!-- Navigation (mobile)-->
      <div class="row d-lg-none">
        <div class="col-lg-8">
          <div class="d-flex pt-4 mt-3">
            <div class="w-50 pr-3"><a class="btn btn-secondary btn-block" href="checkout-shipping.php"><i class="czi-arrow-left mt-sm-0 mr-1"></i><span class="d-none d-sm-inline">Back to Shipping</span><span class="d-inline d-sm-none">Back</span></a></div>
            <div class="w-50 pl-2"><a class="btn btn-primary btn-block" href="checkout-review.php"><span class="d-none d-sm-inline">Review your order</span><span class="d-inline d-sm-none">Review order</span><i class="czi-arrow-right mt-sm-0 ml-1"></i></a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
       <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
   @endsection
