@extends('frontend.include.master')
@section('content')
    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <h2 class="h3 mb-4">Forgot your password?</h2>
          <p class="font-size-md">Change your password in three easy steps. This helps to keep your new password secure.</p>
          <ol class="list-unstyled font-size-md">
            <li><span class="text-primary mr-2">1.</span>Fill in your email address below.</li>
            <li><span class="text-primary mr-2">2.</span>We'll email you a temporary code.</li>
            <li><span class="text-primary mr-2">3.</span>Use the code to change your password on our secure website.</li>
          </ol>
          <div class="card py-2 mt-4">
            <form class="card-body needs-validation" novalidate>
              <div class="form-group">
                <label for="recover-email">Enter your email address</label>
                <input class="form-control" type="email" id="recover-email" required>
                <div class="invalid-feedback">Please provide valid email address.</div>
              </div>
              <button class="btn btn-primary" type="submit">Get new password</button>
            </form>
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