<?php include_once "header.php"; ?>

<main class="main">
  <div class="container mb-30">
      <div class="breadcrumb mt-4">
          <a href="/" class="text-muted"><i class="fi-rs-home mr-5"></i>Home</a>
          <span class="mx-2">></span>
          <a href="/shop" class="text-muted">Shop</a>
          <span class="mx-2">></span>
          <span>Search</span>
      </div>
      
      <div class="row mt-4">
          <div class="col-lg-9">
              <div class="shop-product-filter mb-4">
                  <div class="found-items">
                      <p>We found <strong class="text-primary count-results">0</strong> items for you!</p>
                  </div>
              </div>
              <div class="row g-4" id="search-results">
                  <!-- Products will be loaded here -->
              </div>
              
              <div class="pagination-area mt-4">
                  <nav>
                      <ul class="pagination justify-content-start" id="pagination">
                          <!-- Pagination will be loaded here -->
                      </ul>
                  </nav>
              </div>
          </div>
          
          <div class="col-lg-3">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title mb-4">Category</h5>
                      <ul class="categories-list list-unstyled">
                          <li><a href="#" class="d-block py-2 text-muted category-filter">MILK</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">NOODLES</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">SEASONING</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">TOMATO PASTE</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">SPICES</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">CHOCO</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">MAYONAISE</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">BISCUIT</a></li>
                          <li><a href="#" class="d-block py-2 text-muted category-filter">SWEET</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

<?php include_once "footer.php"; ?>

