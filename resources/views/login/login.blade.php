<!DOCTYPE html>
<html lang="en">

@include('front.head')

<body>
    <div class="tap-top">
        <div><i class="fa-solid fa-angle-up"></i></div>
    </div><span class="cursor"><span class="cursor-move-inner"><span class="cursor-inner"></span></span><span
            class="cursor-move-outer"><span class="cursor-outer"></span></span></span>
    @include('front.header')
    <section class="section-b-space pt-0">
        <div class="heading-banner">
            <div class="custom-container container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4>Login</h4>
                    </div>
                    <div class="col-sm-6">
                        <ul class="breadcrumb float-end">
                            <li class="breadcrumb-item"> <a href="index.html">Home </a></li>
                            <li class="breadcrumb-item active"> <a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space pt-0 login-bg-img">
        <div class="custom-container container login-page">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-6 d-none d-lg-block">
                    <div class="login-img"> <img class="img-fluid" src="/front/assets/images/login/1.svg" alt=""></div>
                </div>
                <div class="col-xxl-4 col-lg-6 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h4>Welcome To katie</h4>
                            <p>Register Your Account</p>
                        </div>
                        <div class="login-box">
                            <form class="row g-3" method="post" action="{{route('front.loginHandle')}}">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating"><input class="form-control" id="floatingInputValue"
                                            type="email" placeholder="name@example.com" value="" name="email"><label
                                            for="floatingInputValue">Enter Your Email</label></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating"><input class="form-control" id="floatingInputValue1"
                                            type="password" name="password" placeholder="Password" value=""><label
                                            for="floatingInputValue1">Enter Your Password</label></div>
                                </div>
                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div><input class="custom-checkbox me-2" id="category1" type="checkbox"
                                                name="text"><label for="category1">Remember me</label></div><a
                                            href="{{route('front.forgot.password')}}">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="col-12"> <button class="btn login btn_black sm" type="submit"
                                        data-bs-dismiss="modal" aria-label="Close">Log In</button></div>
                            </form>
                        </div>
                        <div class="other-log-in">
                            <h6>OR</h6>
                        </div>
                        <div class="log-in-button">
                            <ul>
                                <li> <a href="https://www.google.com/" target="_blank"> <i
                                            class="fa-brands fa-google me-2"> </i>Google</a></li>
                                <li> <a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f me-2"></i>Facebook </a></li>
                            </ul>
                        </div>
                        <div class="other-log-in"></div>
                        <div class="sign-up-box">
                            <p>Don't have an account?</p><a href="{{route('front.register')}}">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.footer')
    <div class="offcanvas offcanvas-end shopping-details" id="offcanvasRight" tabindex="-1"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasRightLabel">Shopping Cart</h4><button class="btn-close"
                type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body theme-scrollbar">
            <ul class="offcanvas-cart">
                <li> <a href="#"> <img src="/front/assets/images/cart/1.jpg" alt=""></a>
                    <div>
                        <h6 class="mb-0">Shirts Men's Clothing</h6>
                        <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                    id="total">105</span></span></p>
                        <div class="btn-containter">
                            <div class="btn-control"><button class="btn-control__remove"
                                    id="btn-remove">&minus;</button>
                                <div class="btn-control__quantity">
                                    <div id="quantity-previous">2</div>
                                    <div id="quantity-current">3</div>
                                    <div id="quantity-next">4</div>
                                </div><button class="btn-control__add" id="btn-add">+</button>
                            </div>
                        </div>
                    </div><i class="iconsax delete-icon" data-icon="trash"></i>
                </li>
                <li> <a href="#"> <img src="/front/assets/images/cart/2.jpg" alt=""></a>
                    <div>
                        <h6 class="mb-0">Shirts Men's Clothing</h6>
                        <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                    id="total1">105</span></span></p>
                        <div class="btn-containter">
                            <div class="btn-control"><button class="btn-control__remove"
                                    id="btn-remove1">&minus;</button>
                                <div class="btn-control__quantity">
                                    <div id="quantity1-previous">2</div>
                                    <div id="quantity1-current">3</div>
                                    <div id="quantity1-next">4</div>
                                </div><button class="btn-control__add" id="btn-add1">+</button>
                            </div>
                        </div>
                    </div><i class="iconsax delete-icon" data-icon="trash"></i>
                </li>
                <li> <a href="#"> <img src="/front/assets/images/cart/3.jpg" alt=""></a>
                    <div>
                        <h6 class="mb-0">Shirts Men's Clothing</h6>
                        <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                    id="total2">105</span></span></p>
                        <div class="btn-containter">
                            <div class="btn-control"><button class="btn-control__remove"
                                    id="btn-remove2">&minus;</button>
                                <div class="btn-control__quantity">
                                    <div id="quantity2-previous">2</div>
                                    <div id="quantity2-current">3</div>
                                    <div id="quantity2-next">4</div>
                                </div><button class="btn-control__add" id="btn-add2">+</button>
                            </div>
                        </div>
                    </div><i class="iconsax delete-icon" data-icon="trash"></i>
                </li>
                <li> <a href="#"> <img src="/front/assets/images/cart/4.jpg" alt=""></a>
                    <div>
                        <h6 class="mb-0">Shirts Men's Clothing</h6>
                        <p>$35<del>$40</del><span class="btn-cart">$<span class="btn-cart__total"
                                    id="total3">105</span></span></p>
                        <div class="btn-containter">
                            <div class="btn-control"><button class="btn-control__remove"
                                    id="btn-remove3">&minus;</button>
                                <div class="btn-control__quantity">
                                    <div id="quantity3-previous">2</div>
                                    <div id="quantity3-current">3</div>
                                    <div id="quantity3-next">4</div>
                                </div><button class="btn-control__add" id="btn-add3">+</button>
                            </div>
                        </div>
                    </div><i class="iconsax delete-icon" data-icon="trash"></i>
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <p>Spend <span>$ 14.81 </span>more and enjoy <span>FREE SHIPPING!</span></p>
            <div class="footer-range-slider">
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="46"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated theme-default"
                        style="width: 46%"></div>
                </div>
            </div>
            <div class="price-box">
                <h6>Total :</h6>
                <p>$ 49.59 USD</p>
            </div>
            <div class="cart-button"> <a class="btn btn_outline" href="cart.html"> View Cart</a><a class="btn btn_black"
                    href="check-out.html"> Checkout</a></div>
        </div>
    </div>
    <div class="offcanvas offcanvas-top search-details" id="offcanvasTop" tabindex="-1"
        aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header"><button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div>
        <div class="offcanvas-body theme-scrollbar">
            <div class="container">
                <h3>What are you trying to find?</h3>
                <div class="search-box"> <input type="search" name="text" placeholder="I'm looking for…"><i
                        class="iconsax" data-icon="search-normal-2"></i></div>
                <h4>Popular Searches</h4>
                <ul class="rapid-search">
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax" data-icon="search-normal-2"></i>Jeans
                            Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Blazer Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax" data-icon="search-normal-2"></i>Jeans
                            Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Blazer Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>T-Shirts Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax" data-icon="search-normal-2"></i>Shoes
                            Men</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>T-Shirts Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Bags</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Sneakers Women</a></li>
                    <li> <a href="collection-left-sidebar.html"><i class="iconsax"
                                data-icon="search-normal-2"></i>Dresses</a></li>
                </ul>
                <h4>You Might Like</h4>
                <div class="row gy-4 ratio_square-2 preemptive-search">
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="/front/assets/images/product/product-2/blazers/1.jpg"
                                            alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$50.00 </p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="/front/assets/images/product/product-2/blazers/2.jpg"
                                            alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$95.00 <del>$140.00</del></p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>3+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="/front/assets/images/product/product-2/blazers/3.jpg"
                                            alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$80.00 <del>$140.00</del></p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="/front/assets/images/product/product-2/blazers/4.jpg"
                                            alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$90.00 </p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>2+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="/front/assets/images/product/product-2/blazers/5.jpg"
                                            alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div><a href="product.html">
                                        <h6> Women's Stylish Top</h6>
                                    </a>
                                    <p>$180.00 <del>$140.00</del></p>
                                    <ul class="rating">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                        <li>4+</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-4 col-6">
                        <div class="product-box-6">
                            <div class="img-wrapper">
                                <div class="product-image"><a href="product.html"> <img class="bg-img"
                                            src="/front/assets/images/product/product-2/blazers/6.jpg"
                                            alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail"><a href="product.html">
                                    <h6> Women's Stylish Top</h6>
                                </a>
                                <p>$120.00 </p>
                                <ul class="rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li>4+</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="title-box"> <img src="/front/assets/images/other-img/cookie.png" alt="">
            <h3>Cookies Consent</h3>
        </div>
        <div class="info">
            <p>We use cookies to improve our site and your shopping experience. By continuing to browse our site you
                accept our cookie policy.</p>
        </div>
        <div class="buttons"><button class="button btn btn_outline sm" id="acceptBtn">Accept</button><button
                class="button btn btn_black sm">Decline</button></div>
    </div>
    <div class="theme-btns"><button class="btntheme" id="dark-btn"><i class="fa-regular fa-moon"></i>
            <div class="text">Dark</div>
        </button><button class="btntheme rtlBtnEl" id="rtl-btn"><i class="fa-solid fa-repeat"></i>
            <div class="rtl">Rtl</div>
        </button></div><!-- Bootstrap js-->
    <script src="/front/assets/js/bootstrap/bootstrap.bundle.min.js"></script><!-- iconsax js -->
    <script src="/front/assets/js/iconsax.js"> </script><!-- cursor js-->
    <script src="/front/assets/js/stats.min.js"> </script>
    <script src="/front/assets/js/cursor.js"> </script><!-- touchspin-->
    <script src="/front/assets/js/touchspin.js"></script><!-- cookie js-->
    <script src="/front/assets/js/cookie.js"></script><!-- tost js -->
    <script src="/front/assets/js/toastify.js"></script>
    <script src="/front/assets/js/theme-setting.js"></script><!-- Theme js-->
    <script src="/front/assets/js/script.js"></script>
</body>

</html>