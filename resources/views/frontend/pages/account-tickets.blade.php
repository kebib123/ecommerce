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
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Support tickets</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 text-light mb-0">Support tickets</h1>
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
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="account-tickets.php"><i class="czi-help opacity-60 mr-2"></i>Support tickets<span class="font-size-sm text-muted ml-auto">1</span></a></li>
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
                <option>Open</option>
                <option>Closed</option>
              </select>
            </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.php"><i class="czi-sign-out mr-2"></i>Sign out</a>
          </div>
          <!-- Tickets list-->
          <div class="table-responsive font-size-md">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>Ticket Subject</th>
                  <th>Date Submitted | Updated</th>
                  <th>Type</th>
                  <th>Priority</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium" href="account-single-ticket.php">My new ticket</a></td>
                  <td class="py-3">09/27/2019 | 09/30/2019</td>
                  <td class="py-3">Website problem</td>
                  <td class="py-3"><span class="badge badge-warning m-0">High</span></td>
                  <td class="py-3"><span class="badge badge-success m-0">Open</span></td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium" href="account-single-ticket.php">Another ticket</a></td>
                  <td class="py-3">08/21/2019 | 08/23/2019</td>
                  <td class="py-3">Partner request</td>
                  <td class="py-3"><span class="badge badge-info m-0">Medium</span></td>
                  <td class="py-3"><span class="badge badge-secondary m-0">Closed</span></td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium" href="account-single-ticket.php">Yet another ticket</a></td>
                  <td class="py-3">11/19/2018 | 11/20/2018</td>
                  <td class="py-3">Complaint</td>
                  <td class="py-3"><span class="badge badge-danger m-0">Urgent</span></td>
                  <td class="py-3"><span class="badge badge-secondary m-0">Closed</span></td>
                </tr>
                <tr>
                  <td class="py-3"><a class="nav-link-style font-weight-medium" href="account-single-ticket.php">My old ticket</a></td>
                  <td class="py-3">06/19/2018 | 06/20/2018</td>
                  <td class="py-3">Info inquiry</td>
                  <td class="py-3"><span class="badge badge-success m-0">Low</span></td>
                  <td class="py-3"><span class="badge badge-secondary m-0">Closed</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr class="mb-4">
          <div class="text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#open-ticket">Submit new ticket</button>
          </div>
        </section>
      </div>
    </div>
     


    <!-- Open Ticket Modal-->
    <form class="needs-validation modal fade" method="post" id="open-ticket" tabindex="-1" novalidate>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Submit new ticket</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p class="text-muted font-size-sm">We normally respond tickets within 2 business days.</p>
            <div class="form-group">
              <label for="ticket-subject">Subject</label>
              <input class="form-control" type="text" id="ticket-subject" required>
              <div class="invalid-feedback">Please fill in the subject line!</div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="ticket-type">Type</label>
                  <select class="form-control custom-select" id="ticket-type" required>
                    <option value>Choose type</option>
                    <option value="Website problem">Website problem</option>
                    <option value="Partner request">Partner request</option>
                    <option value="Complaint">Complaint</option>
                    <option value="Info inquiry">Info inquiry</option>
                  </select>
                  <div class="invalid-feedback">Please choose ticket type!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="ticket-priority">Priority</label>
                  <select class="form-control custom-select" id="ticket-priority" required>
                    <option value>How urgent is your issue?</option>
                    <option value="Urgent">Urgent</option>
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                  </select>
                  <div class="invalid-feedback">Please choose how urgent your ticket is!</div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ticket-description">Describe your issue</label>
              <textarea class="form-control" id="ticket-description" rows="8" required></textarea>
              <div class="invalid-feedback">Please provide ticket description!</div>
            </div>
            <div class="custom-file mb-3">
              <input class="custom-file-input" type="file" id="file-input">
              <label class="custom-file-label" for="file-input">Choose file...</label>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Submit Ticket</button>
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