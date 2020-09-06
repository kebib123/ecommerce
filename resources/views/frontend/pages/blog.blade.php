@extends('frontend.include.master')
@section('content')
    <!-- Page Title (Light)-->
    <div class="bg-secondary py-4">
      <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="czi-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">Blog</a>
              </li>
             
            </ol>
          </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
          <h1 class="h3 mb-0">Blog</h1>
        </div>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
      <!-- Featured posts carousel-->
      <div class="featured-posts-carousel cz-carousel pt-5">
        <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;750&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;991&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 30}}}">
          <article><a class="blog-entry-thumb mb-3" href="blog-single.php"><span class="blog-entry-meta-label font-size-sm"><i class="czi-time"></i>Sep 10</span><img src="img/blog/featured/01.jpg" alt="Featured post"></a>
            <div class="d-flex justify-content-between mb-2 pt-1">
              <h2 class="h5 blog-entry-title mb-0"><a href="blog-single.php">Healthy Food - New Way of Living</a></h2><a class="blog-entry-meta-link font-size-sm text-nowrap ml-3 pt-1" href="blog-single.php#comments"><i class="czi-message"></i>13</a>
            </div>
            <div class="d-flex align-items-center font-size-sm"><a class="blog-entry-meta-link" href="#">
                <div class="blog-entry-author-ava"><img src="img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes</a><span class="blog-entry-meta-divider"></span>
              <div class="font-size-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Lifestyle</a>, <a href='#' class='blog-entry-meta-link'>Nutrition</a></div>
            </div>
          </article>
          <article><a class="blog-entry-thumb mb-3" href="blog-single.php"><span class="blog-entry-meta-label font-size-sm"><i class="czi-time"></i>Aug 27</span><img src="img/blog/featured/02.jpg" alt="Featured post"></a>
            <div class="d-flex justify-content-between mb-2 pt-1">
              <h2 class="h5 blog-entry-title mb-0"><a href="blog-single.php">Online Payment Security Tips for Shoppers</a></h2><a class="blog-entry-meta-link font-size-sm text-nowrap ml-3 pt-1" href="blog-single.php#comments"><i class="czi-message"></i>9</a>
            </div>
            <div class="d-flex align-items-center font-size-sm"><a class="blog-entry-meta-link" href="#">
                <div class="blog-entry-author-ava"><img src="img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez</a><span class="blog-entry-meta-divider"></span>
              <div class="font-size-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Online shpopping</a></div>
            </div>
          </article>
          <article><a class="blog-entry-thumb mb-3" href="blog-single.php"><span class="blog-entry-meta-label font-size-sm"><i class="czi-time"></i>Aug 16</span><img src="img/blog/featured/03.jpg" alt="Featured post"></a>
            <div class="d-flex justify-content-between mb-2 pt-1">
              <h2 class="h5 blog-entry-title mb-0"><a href="blog-single.php">We Launched New Store in San Francisco!</a></h2><a class="blog-entry-meta-link font-size-sm text-nowrap ml-3 pt-1" href="blog-single.php#comments"><i class="czi-message"></i>23</a>
            </div>
            <div class="d-flex align-items-center font-size-sm"><a class="blog-entry-meta-link" href="#">
                <div class="blog-entry-author-ava"><img src="img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred</a><span class="blog-entry-meta-divider"></span>
              <div class="font-size-sm text-muted">in <a href='#' class='blog-entry-meta-link'>Cartzilla news</a></div>
            </div>
          </article>
        </div>
      </div>
      <hr class="mt-5">
      <div class="pt-5 mt-md-2">
        <!-- Entries grid-->
        <div class="cz-masonry-grid" data-columns="3">
          <!-- Entry-->
          <article class="grid-item">
            <div class="card">
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">Global Travel and Vacations on a Tight Budget</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p><a class="btn-tag mr-2 mb-2" href="#">Travel</a><a class="btn-tag mr-2 mb-2" href="#">Personal finance</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/01.jpg" alt="Emma Gallaher"></div>Emma Gallaher</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Aug 15</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>8</a></div>
              </div>
            </div>
          </article>
          <!-- Entry-->
          <article class="grid-item">
            <div class="card"><a class="blog-entry-thumb" href="blog-single.php"><img class="card-img-top" src="img/blog/01.jpg" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">Top New Trends in Suburban High Fashion</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p><a class="btn-tag mr-2 mb-2" href="#">Shopping</a><a class="btn-tag mr-2 mb-2" href="#">Fashion</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/02.jpg" alt="Cynthia Gomez"></div>Cynthia Gomez</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Jul 23</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>19</a></div>
              </div>
            </div>
          </article>
          <!-- Entry-->
          <article class="grid-item">
            <div class="card">
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">Google Pay is Now Available in All Outlets</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p><a class="btn-tag mr-2 mb-2" href="#">Cartzilla news</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Jul 6</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>7</a></div>
              </div>
            </div>
          </article>
          <!-- Entry-->
          <article class="grid-item">
            <div class="card cz-gallery"><a class="blog-entry-thumb gallery-item video-item" href="https://www.youtube.com/watch?v=TedKIlo0c04"><span class="blog-entry-meta-label font-size-sm"><i class="czi-video"></i><span class="font-size-ms">Watch video</span></span><img class="card-img-top" src="img/blog/03.jpg" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">We Launched Regular Drone Delivery in California. Watch Demo Video</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p><a class="btn-tag mr-2 mb-2" href="#">Cartzilla news</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/05.jpg" alt="Rafael Marquez"></div>Rafael Marquez</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Jun 12</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>31</a></div>
              </div>
            </div>
          </article>
          <!-- Entry-->
          <article class="grid-item">
            <div class="card"><a class="blog-entry-thumb" href="blog-single.php"><img class="card-img-top" src="img/blog/02.jpg" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">Shopping Tips. Places Where to Buy Cheap</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p><a class="btn-tag mr-2 mb-2" href="#">Shopping</a><a class="btn-tag mr-2 mb-2" href="#">Personal finance</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">May 29</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>15</a></div>
              </div>
            </div>
          </article>
          <!-- Entry-->
          <article class="grid-item">
            <div class="card"><a class="blog-entry-thumb" href="blog-single.php"><img class="card-img-top" src="img/blog/04.jpg" alt="Post"></a>
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">Payments Made Easy. How New Technology will Affect E-Commerce Industry Worldwide?</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</p><a class="btn-tag mr-2 mb-2" href="#">Shopping</a><a class="btn-tag mr-2 mb-2" href="#">Technology</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/01.jpg" alt="Emma Gallaher"></div>Emma Gallaher</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">May 13</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>28</a></div>
              </div>
            </div>
          </article>
          <!-- Entry-->
          <article class="grid-item">
            <div class="card">
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">Different Ways E-commerce Companies Can Capitalize on Apps</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p><a class="btn-tag mr-2 mb-2" href="#">E-commerce</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/03.jpg" alt="Paul Woodred"></div>Paul Woodred</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Apr 15</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>22</a></div>
              </div>
            </div>
          </article>
          <!-- Entry-->
          <article class="grid-item">
            <div class="card">
              <div class="card-body">
                <h2 class="h6 blog-entry-title"><a href="blog-single.php">Must Have Clothing On Your Next Trip</a></h2>
                <p class="font-size-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt...</p><a class="btn-tag mr-2 mb-2" href="#">Travel</a><a class="btn-tag mr-2 mb-2" href="#">Fashion</a>
              </div>
              <div class="card-footer d-flex align-items-center font-size-xs"><a class="blog-entry-meta-link" href="#">
                  <div class="blog-entry-author-ava"><img src="img/blog/meta/04.jpg" alt="Olivia Reyes"></div>Olivia Reyes</a>
                <div class="ml-auto text-nowrap"><a class="blog-entry-meta-link text-nowrap" href="#">Apr 10</a><span class="blog-entry-meta-divider mx-2"></span><a class="blog-entry-meta-link text-nowrap" href="blog-single.php#comments"><i class="czi-message"></i>7</a></div>
              </div>
            </div>
          </article>
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
      </div>
    </div>
     
      <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.php"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.php"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
  @endsection