@extends('frontend.include.master')
@section('content')
    
   
    <!-- Page Title (Dark)-->
    <div class="bg-dark py-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Order tracking</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Tracking order: <span class="h4 font-weight-normal text-light">34VB5540K83</span></h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container py-5 mb-2 mb-md-3">
      <!-- Details-->
      <div class="row mb-4">
        <div class="col-sm-4 mb-2">
          <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Shipped via:</span>UPS Ground</div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Status:</span>Processing order</div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Expected date:</span>October 15, 2019</div>
        </div>
      </div>
      <!-- Progress-->
      <div class="card border-0 box-shadow-lg">
        <div class="card-body pb-2">
          <ul class="nav nav-tabs media-tabs nav-justified">
            <li class="nav-item">
              <div class="nav-link completed">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-bag"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">First step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Order placed</h6>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link active">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-settings"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Second step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Processing order</h6>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-star"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Third step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Quality check</h6>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="nav-link">
                <div class="media align-items-center">
                  <div class="media-tab-media mr-3"><i class="czi-package"></i></div>
                  <div class="media-body">
                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Fourth step</div>
                    <h6 class="media-tab-title text-nowrap mb-0">Product dispatched</h6>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- Footer-->
      <div class="d-sm-flex flex-wrap justify-content-between align-items-center text-center pt-4">
        <div class="custom-control custom-checkbox mt-2 mr-3">
          <input class="custom-control-input" type="checkbox" id="notify-me"  >
          <label class="custom-control-label" for="notify-me">Notify me when order is delivered</label>
        </div><a class="btn btn-primary btn-sm mt-2" href="#order-details" data-toggle="modal">View Order Details</a>
      </div>
    </div>
    <!-- Order Details Modal-->
    <div class="modal fade" id="order-details">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Order No - 34VB5540K83</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body pb-0">
            <!-- Item-->
            <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="{{'/product-details'}}" style="width: 10rem;"><img src="img/shop/cart/01.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="{{'/product-details'}}">Women Colorblock Sneakers</a></h3>
                  <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>8.5</div>
                  <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>White &amp; Blue</div>
                  <div class="font-size-lg text-accent pt-2">$154.<small>00</small></div>
                </div>
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Quantity:</div>1
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Subtotal</div>$154.<small>00</small>
              </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between my-4 pb-3 pb-sm-2 border-bottom">
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="{{'/product-details'}}" style="width: 10rem;"><img src="img/shop/cart/02.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="{{'/product-details'}}">TH Jeans City Backpack</a></h3>
                  <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>Tommy Hilfiger</div>
                  <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Khaki</div>
                  <div class="font-size-lg text-accent pt-2">$79.<small>50</small></div>
                </div>
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Quantity:</div>1
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Subtotal</div>$79.<small>50</small>
              </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between my-4 pb-3 pb-sm-2 border-bottom">
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="{{'/product-details'}}" style="width: 10rem;"><img src="img/shop/cart/03.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="{{'/product-details'}}">3-Color Sun Stash Hat</a></h3>
                  <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>The North Face</div>
                  <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Pink / Beige / Dark blue</div>
                  <div class="font-size-lg text-accent pt-2">$22.<small>50</small></div>
                </div>
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Quantity:</div>1
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Subtotal</div>$22.<small>50</small>
              </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex justify-content-between my-4">
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="{{'/product-details'}}" style="width: 10rem;"><img src="img/shop/cart/04.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="{{'/product-details'}}">Cotton Polo Regular Fit</a></h3>
                  <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>42</div>
                  <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Light blue</div>
                  <div class="font-size-lg text-accent pt-2">$9.<small>00</small></div>
                </div>
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Quantity:</div>1
              </div>
              <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                <div class="text-muted mb-2">Subtotal</div>$9.<small>00</small>
              </div>
            </div>
          </div>
          <!-- Footer-->
          <div class="modal-footer flex-wrap justify-content-between bg-secondary font-size-md">
            <div class="px-2 py-1"><span class="text-muted">Subtotal:&nbsp;</span><span>$265.<small>00</small></span></div>
            <div class="px-2 py-1"><span class="text-muted">Shipping:&nbsp;</span><span>$22.<small>50</small></span></div>
            <div class="px-2 py-1"><span class="text-muted">Tax:&nbsp;</span><span>$9.<small>50</small></span></div>
            <div class="px-2 py-1"><span class="text-muted">Total:&nbsp;</span><span class="font-size-lg">$297.<small>00</small></span></div>
          </div>
        </div>
      </div>
    </div>


    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    @endsection