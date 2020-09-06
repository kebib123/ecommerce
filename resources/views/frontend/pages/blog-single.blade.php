@extends('frontend.include.master')
@section('content')
    <div class="bg-secondary py-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Blog</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Single post</li>
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 mb-0">Single post with sidebar</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5">
      <div class="row pt-5 mt-md-2">
        <section class="col-lg-8">
          <!-- Post meta-->
          <div class="d-flex flex-wrap justify-content-between align-items-center pb-4 mt-n1">
            <div class="d-flex align-items-center font-size-sm mb-2"><a class="blog-entry-meta-link" href="#">
                <div class="blog-entry-author-ava"><img src="img/blog/meta/02.jpg" alt="Cynthia Gomez"></div>Cynthia Gomez</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Jul 17</a></div>
            <div class="font-size-sm mb-2"><a class="blog-entry-meta-link text-nowrap" href="#comments" data-scroll><i class="czi-message"></i>3</a></div>
          </div>
          <!-- Gallery-->
          <div class="cz-gallery row pb-2">
            <div class="col-sm-8"><a class="gallery-item rounded-lg mb-grid-gutter" href="img/blog/single/01.jpg" data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;Gallery image caption #1&lt;/h6&gt;"><img src="img/blog/single/th01.jpg" alt="Gallery image"><span class="gallery-item-caption">Gallery image caption #1</span></a></div>
            <div class="col-sm-4"><a class="gallery-item rounded-lg mb-grid-gutter" href="img/blog/single/02.jpg" data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;Gallery image caption #2&lt;/h6&gt;"><img src="img/blog/single/th02.jpg" alt="Gallery image"><span class="gallery-item-caption">Gallery image caption #2</span></a><a class="gallery-item rounded-lg mb-grid-gutter" href="img/blog/single/03.jpg" data-sub-html="&lt;h6 class=&quot;font-size-sm text-light&quot;&gt;Gallery image caption #3&lt;/h6&gt;"><img src="img/blog/single/th03.jpg" alt="Gallery image"><span class="gallery-item-caption">Gallery image caption #3</span></a></div>
          </div>
          <!-- Post content-->
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minima veniam, quis nostrum exercitationem occaecat cupidatat non proident.</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <blockquote class="cz-testimonial my-4 pt-4 pb-2">
            <div class="card border-0 box-shadow-sm"><span class="cz-testimonial-mark"></span>
              <div class="card-body font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
            </div>
            <footer class="d-flex justify-content-center pt-4">
              <div class="media align-items-center"><img class="rounded" width="50" src="img/testimonials/01.jpg" alt="Mary Grant"/>
                <div class="media-body pl-3">
                  <h6 class="font-size-sm mb-n1">Mary Alice Grant</h6><span class="font-size-ms text-muted">Shopoholic</span>
                </div>
              </div>
            </footer>
          </blockquote>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
          <!-- Post tags + sharing-->
          <div class="d-flex flex-wrap justify-content-between pt-2 pb-4 mb-1">
            <div class="mt-3 mr-3"><a class="btn-tag mr-2 mb-2" href="#">#merchandise</a><a class="btn-tag mb-2" href="#">#printed tshirts</a></div>
            <div class="mt-3"><span class="d-inline-block align-middle text-muted font-size-sm mr-3 mb-2">Share post:</span><a class="social-btn sb-facebook mr-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-twitter mr-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-pinterest mr-2 mb-2" href="#"><i class="czi-pinterest"></i></a></div>
          </div>
          <!-- Post navigation-->
          <nav class="entry-navigation" aria-label="Post navigation"><a class="entry-navigation-link" href="#" data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true" data-content="&lt;div class=&quot;media align-items-center&quot;&gt;&lt;img src=&quot;img/blog/navigation/01.jpg&quot; width=&quot;60&quot; class=&quot;mr-3&quot; alt=&quot;Post thumb&quot;&gt;&lt;div class=&quot;media-body&quot;&gt;&lt;h6  class=&quot;font-size-sm font-weight-semibold mb-0&quot;&gt;How to choose perfect shoes for running&lt;/h6&gt;&lt;span class=&quot;d-block font-size-xs text-muted&quot;&gt;by Susan Mayer&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"><i class="czi-arrow-left mr-2"></i><span class="d-none d-sm-inline">Prev post</span></a><a class="entry-navigation-link" href="blog-list.php"><i class="czi-view-list mr-2"></i><span class="d-none d-sm-inline">All posts</span></a><a class="entry-navigation-link" href="#" data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true" data-content="&lt;div class=&quot;media align-items-center&quot;&gt;&lt;img src=&quot;img/blog/navigation/02.jpg&quot; width=&quot;60&quot; class=&quot;mr-3&quot; alt=&quot;Post thumb&quot;&gt;&lt;div class=&quot;media-body&quot;&gt;&lt;h6  class=&quot;font-size-sm font-weight-semibold mb-0&quot;&gt;Factors behind smart watches popularity&lt;/h6&gt;&lt;span class=&quot;d-block font-size-xs text-muted&quot;&gt;by Logan Coleman&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;"><span class="d-none d-sm-inline">Next post</span><i class="czi-arrow-right ml-2"></i></a></nav>
          <!-- Comments-->
          <div class="pt-2 mt-5" id="comments">
            <h2 class="h4">Comments<span class="badge badge-secondary font-size-sm text-body align-middle ml-2">3</span></h2>
            <!-- comment-->
            <div class="media py-4 border-bottom"><img class="rounded-circle" width="50" src="img/testimonials/04.jpg" alt="Laura Willson"/>
              <div class="media-body pl-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h6 class="font-size-md mb-0">Laura Willson</h6><a class="nav-link-style font-size-sm font-weight-medium" href="#"><i class="czi-reply mr-2"></i>Reply</a>
                </div>
                <p class="font-size-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 7, 2019</span>
                <!-- comment reply-->
                <div class="media border-top pt-4 mt-4"><img class="rounded-circle" width="50" src="img/testimonials/03.jpg" alt="Michael Davis"/>
                  <div class="media-body pl-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h6 class="font-size-md mb-0">Michael Davis</h6>
                    </div>
                    <p class="font-size-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 13, 2019</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- comment-->
            <div class="media py-4"><img class="rounded-circle" width="50" src="img/testimonials/02.jpg" alt="Benjamin Miller"/>
              <div class="media-body pl-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h6 class="font-size-md mb-0">Benjamin Miller</h6><a class="nav-link-style font-size-sm font-weight-medium" href="#"><i class="czi-reply mr-2"></i>Reply</a>
                </div>
                <p class="font-size-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Aug 15, 2019</span>
              </div>
            </div>
            <!-- Post comment form-->
            <div class="card border-0 box-shadow my-2">
              <div class="card-body">
                <div class="media"><img class="rounded-circle" width="50" src="img/testimonials/01.jpg" alt="Mary Alice"/>
                  <form class="media-body needs-validation ml-3" novalidate>
                    <div class="form-group">
                      <textarea class="form-control" rows="4" placeholder="Write comment..." required></textarea>
                      <div class="invalid-feedback">Please write your comment.</div>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <aside class="col-lg-4">
          <!-- Sidebar-->
          <div class="cz-sidebar border-left ml-lg-auto" id="blog-sidebar">
            <div class="cz-sidebar-header box-shadow-sm">
              <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close"><span class="d-inline-block font-size-xs font-weight-normal align-middle">Close sidebar</span><span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span></button>
            </div>
            <div class="cz-sidebar-body py-lg-1" data-simplebar data-simplebar-auto-hide="true">
              <!-- Categories-->
              <div class="widget widget-links mb-grid-gutter pb-grid-gutter border-bottom">
                <h3 class="widget-title">Blog categories</h3>
                <ul class="widget-list">
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Online shopping</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Fashion</span><span class="font-size-xs text-muted ml-3">25</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Personal finance</span><span class="font-size-xs text-muted ml-3">13</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Travel &amp; vacation</span><span class="font-size-xs text-muted ml-3">7</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Lifestyle</span><span class="font-size-xs text-muted ml-3">34</span></a></li>
                  <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>Technology</span><span class="font-size-xs text-muted ml-3">6</span></a></li>
                </ul>
              </div>
              <!-- Trending posts-->
              <div class="widget mb-grid-gutter pb-grid-gutter border-bottom">
                <h3 class="widget-title">Trending posts</h3>
                <div class="media align-items-center mb-3"><a href="blog-single.php"><img class="rounded" src="img/blog/widget/01.jpg" width="64" alt="Post image"></a>
                  <div class="media-body pl-3">
                    <h6 class="blog-entry-title font-size-sm mb-0"><a href="blog-single.php">Retro Cameras are Trending. Why so Popular?</a></h6><span class="font-size-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Andy Williams</a></span>
                  </div>
                </div>
                <div class="media align-items-center mb-3"><a href="blog-single.php"><img class="rounded" src="img/blog/widget/02.jpg" width="64" alt="Post image"></a>
                  <div class="media-body pl-3">
                    <h6 class="blog-entry-title font-size-sm mb-0"><a href="blog-single.php">New Trends in Suburban Fashion</a></h6><span class="font-size-ms text-muted">by <a href='#' class='blog-entry-meta-link'>Susan Mayer</a></span>
                  </div>
                </div>
                <div class="media align-items-center"><a href="blog-single.php"><img class="rounded" src="img/blog/widget/03.jpg" width="64" alt="Post image"></a>
                  <div class="media-body pl-3">
                    <h6 class="blog-entry-title font-size-sm mb-0"><a href="blog-single.php">Augmented Reality - Game Changing Technology</a></h6><span class="font-size-ms text-muted">by <a href='#' class='blog-entry-meta-link'>John Doe</a></span>
                  </div>
                </div>
              </div>
              <!-- Popular tags-->
              <div class="widget mb-grid-gutter">
                <h3 class="widget-title">Popular tags</h3><a class="btn-tag mr-2 mb-2" href="#">#fashion</a><a class="btn-tag mr-2 mb-2" href="#">#gadgets</a><a class="btn-tag mr-2 mb-2" href="#">#online shopping</a><a class="btn-tag mr-2 mb-2" href="#">#top brands</a><a class="btn-tag mr-2 mb-2" href="#">#travel</a><a class="btn-tag mr-2 mb-2" href="#">#cartzilla news</a><a class="btn-tag mr-2 mb-2" href="#">#personal finance</a><a class="btn-tag mr-2 mb-2" href="#">#tips &amp; tricks</a>
              </div>
              <!-- Promo banner-->
              <div class="bg-size-cover bg-position-center rounded-lg py-5" style="background-image: url(img/blog/banner-bg.jpg);">
                <div class="py-5 px-4 text-center">
                  <h5 class="mb-2">Your Add Banner Here</h5>
                  <p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
    <!-- Related posts-->
    <div class="bg-secondary py-5">
      <div class="container py-3">
        <h2 class="h4 text-center pb-4">You may also like</h2>
        <div class="cz-carousel">
          <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;740&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 30}}}">
            <!-- article-->
            <article><a class="blog-entry-thumb mb-3" href="#"><img class="rounded" src="img/blog/03.jpg" alt="Post"></a>
              <div class="d-flex align-items-center font-size-sm mb-2"><a class="blog-entry-meta-link" href="#">by Rafael Marquez</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Sep 16</a></div>
              <h3 class="h6 blog-entry-title"><a href="#">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h3>
            </article>
            <!-- article-->
            <article><a class="blog-entry-thumb mb-3" href="#"><img class="rounded" src="img/blog/04.jpg" alt="Post"></a>
              <div class="d-flex align-items-center font-size-sm mb-2"><a class="blog-entry-meta-link" href="#">by Emma Gallaher</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Sep 5</a></div>
              <h3 class="h6 blog-entry-title"><a href="#">Payments Made Easy. How New Technology will Affect E-Commerce Industry Worldwide?</a></h3>
            </article>
            <!-- article-->
            <article><a class="blog-entry-thumb mb-3" href="#"><img class="rounded" src="img/blog/02.jpg" alt="Post"></a>
              <div class="d-flex align-items-center font-size-sm mb-2"><a class="blog-entry-meta-link" href="#">by Emma Gallaher</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 28</a></div>
              <h3 class="h6 blog-entry-title"><a href="#">Shopping Tips. Complete Guide of Places Where to Buy Cheap and Get Cashback</a></h3>
            </article>
            <!-- article-->
            <article><a class="blog-entry-thumb mb-3" href="#"><img class="rounded" src="img/blog/01.jpg" alt="Post"></a>
              <div class="d-flex align-items-center font-size-sm mb-2"><a class="blog-entry-meta-link" href="#">by Emma Gallaher</a><span class="blog-entry-meta-divider"></span><a class="blog-entry-meta-link" href="#">Aug 28</a></div>
              <h3 class="h6 blog-entry-title"><a href="#">Top 10 New Trends in Suburban High Fashion</a></h3>
            </article>
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