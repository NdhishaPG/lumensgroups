        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/products-title.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Products</li>
                    </ul>
                    <h2>Products</h2>
                </div>
            </div>
        </section>
        
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="product__sidebar">
                            <div class="shop-search product__sidebar-single">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                </form>
                            </div>
                            <div class="product__price-ranger product__sidebar-single">
                                <h3 class="product__sidebar-title">Price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly class="min">
                                        <span>-</span>
                                        <input type="text" readonly class="max">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                            <div class="shop-category product__sidebar-single">
                                <h3 class="product__sidebar-title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Gift</a></li>
                                    <li><a href="#">Hotel Uniforms</a></li>
                                    <li><a href="#">Educational Uniforms</a></li>
                                    <li><a href="#">Health Uniforms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="product__items">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__showing-result">
                                        <div class="product__showing-text-box">
                                            <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                                        </div>
                                        <div class="product__showing-sort">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Sort by popular">Sort by Popular</option>
                                                    <option value="1">Sort by popular</option>
                                                    <option value="2">Sort by Price</option>
                                                    <option value="3">Sort by Ratings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__all">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img">
                                                <img src="assets/images/shop/product-1.jpg" alt="">
                                                <div class="product__all-btn-box">
                                                    <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <h4 class="product__all-title"><a href="product-details.html">Classy
                                                        chair</a></h4>
                                                <p class="product__all-price">$33.00</p>
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img">
                                                <img src="assets/images/shop/product-2.jpg" alt="">
                                                <div class="product__all-btn-box">
                                                    <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <h4 class="product__all-title"><a href="product-details.html">Comfy
                                                        Chair</a></h4>
                                                <p class="product__all-price">$68.00</p>
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img">
                                                <img src="assets/images/shop/product-3.jpg" alt="">
                                                <div class="product__all-btn-box">
                                                    <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <h4 class="product__all-title"><a href="product-details.html">Boss
                                                        Chair</a></h4>
                                                <p class="product__all-price">$28.00</p>
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img">
                                                <img src="assets/images/shop/product-4.jpg" alt="">
                                                <div class="product__all-btn-box">
                                                    <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <h4 class="product__all-title"><a href="product-details.html">Sofa
                                                        Chair</a></h4>
                                                <p class="product__all-price">$80.00</p>
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img">
                                                <img src="assets/images/shop/product-5.jpg" alt="">
                                                <div class="product__all-btn-box">
                                                    <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <h4 class="product__all-title"><a href="product-details.html">Wooden
                                                        Stool</a></h4>
                                                <p class="product__all-price">$18.00</p>
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img">
                                                <img src="assets/images/shop/product-6.jpg" alt="">
                                                <div class="product__all-btn-box">
                                                    <a href="cart.html" class="thm-btn product__all-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <h4 class="product__all-title"><a href="product-details.html">Big
                                                        Sofa</a></h4>
                                                <p class="product__all-price">$44.00</p>
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>
        