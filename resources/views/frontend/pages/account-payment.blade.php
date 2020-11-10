@extends('frontend.include.master-login')
@section('content')
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Payment methods</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">My payment methods</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-3">
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="cz-sidebar-static rounded-lg box-shadow-lg px-0 pb-0 mb-5 mb-lg-0">
            <div class="px-4 mb-4">
              <div class="media align-items-center">
                <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/shop/account/avatar.jpg" alt="Susan Gardner"></div>
                <div class="media-body pl-3">
                  <h3 class="font-size-base mb-0">Susan Gardner</h3><span class="text-accent font-size-sm">s.gardner@example.com</span>
                </div>
              </div>
            </div>
            <div class="bg-secondary px-4 py-3">
              <h3 class="font-size-sm mb-0 text-muted">Dashboard</h3>
            </div>
            <ul class="list-unstyled mb-0">
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-orders.php"><i class="czi-bag opacity-60 mr-2"></i>Orders<span class="font-size-sm text-muted ml-auto">1</span></a></li>
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-wishlist.php"><i class="czi-heart opacity-60 mr-2"></i>Wishlist<span class="font-size-sm text-muted ml-auto">3</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-tickets.php"><i class="czi-help opacity-60 mr-2"></i>Support tickets<span class="font-size-sm text-muted ml-auto">1</span></a></li>
            </ul>
            <div class="bg-secondary px-4 py-3">
              <h3 class="font-size-sm mb-0 text-muted">Account settings</h3>
            </div>
            <ul class="list-unstyled mb-0">
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-profile.php"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-address.php"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="account-payment.php"><i class="czi-card opacity-60 mr-2"></i>Payment methods</a></li>
              <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.php"><i class="czi-sign-out opacity-60 mr-2"></i>Sign out</a></li>
            </ul>
          </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
          <!-- Toolbar-->
          <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
            <h6 class="font-size-base text-light mb-0">Primary payment method is used by default</h6><a class="btn btn-primary btn-sm" href="account-signin.php"><i class="czi-sign-out mr-2"></i>Sign out</a>
          </div>
          <!-- Payment methods list-->
          <div class="table-responsive font-size-md">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>Your credit / debit cards</th>
                  <th>Name on card</th>
                  <th>Expires on</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                      <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 4999<span class="align-middle badge badge-info ml-2">Primary</span></div>
                    </div>
                  </td>
                  <td class="py-3 align-middle">Susan Gardner</td>
                  <td class="py-3 align-middle">08 / 2019</td>
                  <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                      <div class="czi-trash"></div></a></td>
                </tr>
                <tr>
                  <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-master.png" width="39" alt="MesterCard">
                      <div class="media-body"><span class="font-weight-medium text-heading mr-1">MasterCard</span>ending in 0015</div>
                    </div>
                  </td>
                  <td class="py-3 align-middle">Susan Gardner</td>
                  <td class="py-3 align-middle">11 / 2021</td>
                  <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                      <div class="czi-trash"></div></a></td>
                </tr>
                <tr>
                  <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-paypal.png" width="39" alt="PayPal">
                      <div class="media-body"><span class="font-weight-medium text-heading mr-1">PayPal</span>s.gardner@example.com</div>
                    </div>
                  </td>
                  <td class="py-3 align-middle">&mdash;</td>
                  <td class="py-3 align-middle">&mdash;</td>
                  <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                      <div class="czi-trash"></div></a></td>
                </tr>
                <tr>
                  <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                      <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 6073</div>
                    </div>
                  </td>
                  <td class="py-3 align-middle">Susan Gardner</td>
                  <td class="py-3 align-middle">09 / 2021</td>
                  <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                      <div class="czi-trash"></div></a></td>
                </tr>
                <tr>
                  <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                      <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 9791</div>
                    </div>
                  </td>
                  <td class="py-3 align-middle">Susan Gardner</td>
                  <td class="py-3 align-middle">05 / 2021</td>
                  <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                      <div class="czi-trash"></div></a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr class="pb-4">
          <div class="text-sm-right"><a class="btn btn-primary" href="#add-payment" data-toggle="modal">Add payment method</a></div>
        </section>
      </div>
    </div>
     


      <!-- Add Payment Method-->
    <form class="needs-validation modal fade" method="post" id="add-payment" tabindex="-1" novalidate>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add a payment method</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="custom-control custom-radio mb-4">
              <input class="custom-control-input" type="radio" id="paypal" name="payment-method">
              <label class="custom-control-label" for="paypal">PayPal<img class="d-inline-block align-middle ml-2" src="img/card-paypal.png" width="39" alt="PayPal"></label>
            </div>
            <div class="custom-control custom-radio mb-4">
              <input class="custom-control-input" type="radio" id="card" name="payment-method" checked>
              <label class="custom-control-label" for="card">Credit / Debit card<img class="d-inline-block align-middle ml-2" src="img/cards.png" width="187" alt="Credit card"></label>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                <div class="invalid-feedback">Please fill in the card number!</div>
              </div>
              <div class="form-group col-sm-6">
                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                <div class="invalid-feedback">Please provide name on the card!</div>
              </div>
              <div class="form-group col-sm-3">
                <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                <div class="invalid-feedback">Please provide card expiration date!</div>
              </div>
              <div class="form-group col-sm-3">
                <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                <div class="invalid-feedback">Please provide card CVC code!</div>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-primary btn-block mt-0" type="submit">Register this card</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>



    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
   @endsection