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
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Orders history</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">My orders</h1>
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
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="account-orders.php"><i class="czi-bag opacity-60 mr-2"></i>Orders<span class="font-size-sm text-muted ml-auto">1</span></a></li>
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-wishlist.php"><i class="czi-heart opacity-60 mr-2"></i>Wishlist<span class="font-size-sm text-muted ml-auto">3</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-tickets.php"><i class="czi-help opacity-60 mr-2"></i>Support tickets<span class="font-size-sm text-muted ml-auto">1</span></a></li>
            </ul>
            <div class="bg-secondary px-4 py-3">
              <h3 class="font-size-sm mb-0 text-muted">Account settings</h3>
            </div>
            <ul class="list-unstyled mb-0">
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-profile.php"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
              <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-address.php"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-payment.php"><i class="czi-card opacity-60 mr-2"></i>Payment methods</a></li>
              <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.php"><i class="czi-sign-out opacity-60 mr-2"></i>Sign out</a></li>
            </ul>
          </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
          <!-- Toolbar-->
          <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
            <div class="form-inline">
              <label class="text-light opacity-75 text-nowrap mr-2 d-none d-lg-block" for="order-sort">Sort orders:</label>
              <select class="form-control custom-select" id="order-sort">
                <option>All</option>
                <option>Delivered</option>
                <option>In Progress</option>
                <option>Delayed</option>
                <option>Canceled</option>
              </select>
            </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.php"><i class="czi-sign-out mr-2"></i>Sign out</a>
          </div>
          <!-- Orders list-->
          <div class="table-responsive font-size-md">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>Order #</th>
                  <th>Date Purchased</th>
                  <th>Status</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">34VB5540K83</a></td>
                  <td class="py-3">May 21, 2019</td>
                  <td class="py-3"><span class="badge badge-info m-0">In Progress</span></td>
                  <td class="py-3">$358.75</td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">78A643CD409</a></td>
                  <td class="py-3">December 09, 2018</td>
                  <td class="py-3"><span class="badge badge-danger m-0">Canceled</span></td>
                  <td class="py-3"><span>$760.50</span></td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">112P45A90V2</a></td>
                  <td class="py-3">October 15, 2018</td>
                  <td class="py-3"><span class="badge badge-warning m-0">Delayed</span></td>
                  <td class="py-3">$1,264.00</td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">28BA67U0981</a></td>
                  <td class="py-3">July 19, 2018</td>
                  <td class="py-3"><span class="badge badge-success m-0">Delivered</span></td>
                  <td class="py-3">$198.35</td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">502TR872W2</a></td>
                  <td class="py-3">April 04, 2018</td>
                  <td class="py-3"><span class="badge badge-success m-0">Delivered</span></td>
                  <td class="py-3">$2,133.90</td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium font-size-sm" href="#order-details" data-toggle="modal">47H76G09F33</a></td>
                  <td class="py-3">March 30, 2018</td>
                  <td class="py-3"><span class="badge badge-success m-0">Delivered</span></td>
                  <td class="py-3">$86.40</td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr class="pb-4">
          <!-- Pagination-->
          <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#"><i class="czi-arrow-left mr-2"></i>Prev</a></li>
            </ul>
            <ul class="pagination">
              <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
              <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
              <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
            </ul>
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="czi-arrow-right ml-2"></i></a></li>
            </ul>
          </nav>
        </section>
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
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.php" style="width: 10rem;"><img src="img/shop/cart/01.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.php">Women Colorblock Sneakers</a></h3>
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
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.php" style="width: 10rem;"><img src="img/shop/cart/02.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.php">TH Jeans City Backpack</a></h3>
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
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.php" style="width: 10rem;"><img src="img/shop/cart/03.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.php">3-Color Sun Stash Hat</a></h3>
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
              <div class="media d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="shop-single-v1.php" style="width: 10rem;"><img src="img/shop/cart/04.jpg" alt="Product"></a>
                <div class="media-body pt-2">
                  <h3 class="product-title font-size-base mb-2"><a href="shop-single-v1.php">Cotton Polo Regular Fit</a></h3>
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