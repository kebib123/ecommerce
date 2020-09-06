@extends('frontend.include.master-login')
@section('content')
    <!-- Page Content-->
    <div class="container pb-5 mb-sm-4">
      <div class="pt-5">
        <div class="card py-3 mt-sm-3">
          <div class="card-body text-center">
            <h2 class="h4 pb-3">Thank you for your order!</h2>
            <p class="font-size-sm mb-2">Your order has been placed and will be processed as soon as possible.</p>
            <p class="font-size-sm mb-2">Make sure you make note of your order number, which is <span class='font-weight-medium'>34VB5540K83.</span></p>
            <p class="font-size-sm">You will be receiving an email shortly with confirmation of your order. <u>You can now:</u></p><a class="btn btn-secondary mt-3 mr-3" href="shop-grid-ls.php">Go back shopping</a><a class="btn btn-primary mt-3" href="order-tracking.php"><i class="czi-location"></i>&nbsp;Track order</a>
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