@extends('frontend.include.master')
@section('content')
    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4">
      <div class="row justify-content-center">
        <div class="col-md-6  ">
          <div class="card border-0 box-shadow">
            <div class="card-body">
          <h2 class="h4 mb-3"> Sign up</h2>
          <p class="font-size-sm text-muted mb-4">Registration takes less than a minute but gives you full control over your orders.</p>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-fn">First Name</label>
                  <input class="form-control" type="text" required id="reg-fn">
                  <div class="invalid-feedback">Please enter your first name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-ln">Last Name</label>
                  <input class="form-control" type="text" required id="reg-ln">
                  <div class="invalid-feedback">Please enter your last name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-email">E-mail Address</label>
                  <input class="form-control" type="email" required id="reg-email">
                  <div class="invalid-feedback">Please enter valid email address!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-phone">Phone Number</label>
                  <input class="form-control" type="text" required id="reg-phone">
                  <div class="invalid-feedback">Please enter your phone number!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-password">Password</label>
                  <input class="form-control" type="password" required id="reg-password">
                  <div class="invalid-feedback">Please enter password!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="reg-password-confirm">Confirm Password</label>
                  <input class="form-control" type="password" required id="reg-password-confirm">
                  <div class="invalid-feedback">Passwords do not match!</div>
                </div>
              </div>
            </div>
            <div class="text-right">
              <button class="btn btn-primary" type="submit"><i class="czi-user mr-2 ml-n1"></i>Sign Up</button>
            </div>
          </form>
            </div>
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