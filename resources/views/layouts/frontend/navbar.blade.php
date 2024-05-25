 <!--// Header \\-->
 <header id="sportsmagazine-header" class="sportsmagazine-header-one">

     <!--// TopStrip \\-->
     <div class="sportsmagazine-topstrip">
         <div class="container">
             <div class="row">
                 <aside class="col-md-4">
                     <ul class="sportsmagazine-social-network">
                         <li><a href="https://www.facebook.com/" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>
                         <li><a href="https://twitter.com/login" class="sportsmagazine-colorhover fa fa-twitter-square"></a></li>
                         <li><a href="https://pk.linkedin.com/" class="sportsmagazine-colorhover fa fa-linkedin-square"></a></li>
                         <li><a href="https://plus.google.com/" class="sportsmagazine-colorhover fa fa-google-plus-square"></a></li>
                     </ul>
                 </aside>
                 <aside class="col-md-8">
                     <ul class="sportsmagazine-user-section">
                         <li><i class="fa fa-globe"></i> <a href="404.html">Support</a></li>
                         <li><i class="fa fa-dollar"></i> <a href="404.html">Currency : USD</a></li>
                         <li><i class="fa fa-shopping-cart"></i> <a href="#" class="sportsmagazine-open-cart">Cart (0)</a>
                             <div class="sportsmagazine-cart-box">
                                 <h2>You have 2 items in the cart</h2>
                                 <ul>
                                     <li>
                                         <figure>
                                             <a href="checkout.html"><img src="{{asset('frontend/extra-images/cartbox-1.png')}}" alt=""></a>
                                         </figure>
                                         <div class="sportsmagazine-cartbox-text">
                                             <h6><a href="checkout.html">Key Management Model The 60+ Models</a></h6>
                                             <div class="sportsmagazine-rating"><span class="sportsmagazine-rating-box" style="width:80%"></span></div>
                                             <span class="sportsmagazine-cartbox-price sportsmagazine-color">$35.99 <small>$43.00</small></span>
                                         </div>
                                     </li>
                                     <li>
                                         <figure>
                                             <a href="checkout.html"><img src="{{asset('frontend/extra-images/cartbox-2.png')}}" alt=""></a>
                                         </figure>
                                         <div class="sportsmagazine-cartbox-text">
                                             <h6><a href="checkout.html">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>
                                             <div class="sportsmagazine-rating"><span class="sportsmagazine-rating-box" style="width:100%"></span></div>
                                             <span class="sportsmagazine-cartbox-price sportsmagazine-color">$21.00</span>
                                         </div>
                                     </li>
                                 </ul>
                                 <h5>Subtotal <span class="sportsmagazine-color">$1343</span></h5>
                                 <div class="sportsmagazine-cart-link"><a href="checkout.html" class="sportsmagazine-cartbox-btn sportsmagazine-bgcolorhover"><i class="flaticon-tool"></i> Go to Checkout</a></div>
                             </div>
                         </li>
                         @if (Route::has('login'))

                         @auth
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="{{ url('/dashboard') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fa fa-user"></i> {{Auth::user()->name}}
                             </a>
                             <div class="dropdown-menu text-black pl-3" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('profile.edit') }}"> {{ __('Profile') }} </a>
                                 <div class="dropdown-divider"></div>

                                 <!-- Authentication -->
                                 <form method="POST" action="{{ route('logout') }}">
                                     @csrf

                                     <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                         <i class="icon-key"></i>
                                         <span class="ml-2">Logout </span>
                                     </a>
                                 </form>
                             </div>
                         </li>

                         @else
                         <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->
                         <li><i class="fa fa-user"></i> <a href="{{ route('login') }}">Login</a></li>
                         @if (Route::has('register'))
                         <li><i class="fa fa-sign-in"></i> <a href="{{ route('register') }}">Sign Up</a></li>
                         <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> -->
                         @endif
                         @endauth

                         @endif
                         <!-- <li><i class="fa fa-user"></i> <a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li> -->
                         <!-- <li><i class="fa fa-sign-in"></i> <a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li> -->

                     </ul>
                 </aside>
             </div>
         </div>
     </div>
     <!--// TopStrip \\-->

     <!--// MainSection \\-->
     <div class="sportsmagazine-main-header">
         <div class="container">
             <div class="row">
                 <aside class="col-md-2"><a href="index-2.html" class="sportsmagazine-logo"><img src="{{asset('frontend/images/logo-1.png')}}" alt=""></a></aside>
                 <div class="col-md-10">
                     <div class="sportsmagazine-right-section">
                         <nav class="navbar navbar-default">
                             <div class="navbar-header">
                                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                     <span class="sr-only">Toggle navigation</span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                     <span class="icon-bar"></span>
                                 </button>
                             </div>
                             <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                 <ul class="nav navbar-nav">
                                     <li class="active"><a href="#">Home</a>
                                         <!-- <ul class="sportsmagazine-dropdown-menu">
                                                    <li><a href="index-2.html">Home One</a></li>
                                                    <li><a href="index-two.html">Home Two</a></li>

                                                </ul> -->
                                     </li>
                                     <li class="sportsmagazine-megamenu-li"><a href="#">FEATURES</a>
                                         <!-- <ul class="sportsmagazine-megamenu">
                                                    <li class="row">
                                                        <div class="col-md-2">
                                                            <h4>Link 1</h4>
                                                            <ul class="sportsmagazine-megalist">
                                                                <li><a href="fixture.html">Fixture List</a></li>
                                                                <li><a href="fixture-wls.html">Fixture List W/L/S</a></li>
                                                                <li><a href="fixture-wrs.html">Fixture List W/R/S</a></li>
                                                                <li><a href="fixtures-dark1.html">Fixtures Classic</a></li>
                                                                <li><a href="fixtures-dark2.html">Fixtures Modren</a></li>
                                                                <li><a href="fixture-detail.html">Fixture Detail</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <h4>Link 2</h4>
                                                            <ul class="sportsmagazine-megalist">
                                                                <li><a href="fixture-detail-wls.html">Fixture Detail W/L/S</a></li>
                                                                <li><a href="gallery.html">Gallery Classic</a></li>
                                                                <li><a href="gallery-wls.html">Gallery Classic W/L/S</a></li>
                                                                <li><a href="gallery-wrs.html">Gallery Classic W/R/S</a></li>
                                                                <li><a href="gallery-modren.html">Gallery Modren</a></li>
                                                                <li><a href="gallery-modren-wls.html">Gallery Modren W/L/S</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <h4>Link 3</h4>
                                                            <ul class="sportsmagazine-megalist">
                                                                <li><a href="gallery-modren-wrs.html">Gallery Modren W/R/S</a></li>
                                                                <li><a href="login-register.html">Login Register</a></li>
                                                                <li><a href="search-result.html">No Search Result</a></li>
                                                                <li><a href="404.html">404 Error Page</a></li>
                                                                <li><a href="faq.html">Faq</a></li>
                                                                <li><a href="contact-us.html">Csontact Us</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="sportsmagazine-thumbnail">
                                                                <img src="extra-images/megamenu-frame.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                     </li>
                                     <li><a href="#">PLAYERS</a>
                                         <!-- <ul class="sportsmagazine-dropdown-menu">
                                                    <li><a href="player-grid.html">Player Grid</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="player-grid.html">Player Grid W/O/S</a></li>
                                                            <li><a href="player-grid-wls.html">Player Grid W/L/S</a></li>
                                                            <li><a href="player-grid-wrs.html">Player Grid W/R/S</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="player-modren.html">Player Modren</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="player-modren.html">Player Modren W/O/S</a></li>
                                                            <li><a href="player-modren-wls.html">Player Modren W/L/S</a></li>
                                                            <li><a href="player-modren-wrs.html">Player Modren W/R/S</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="player-list.html">Player List</a></li>
                                                    <li><a href="fullstanding.html">Full Standing</a></li>
                                                    <li><a href="overview.html">Overview</a></li>
                                                    <li><a href="roster.html">Roster</a></li>
                                                    <li><a href="player-detail.html">Player Detail</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="player-detail.html">Player Detail W/L/S</a></li>
                                                            <li><a href="player-detail-wls.html">Player Detail W/R/S</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> -->
                                     </li>
                                     <li><a href="#">OUR NEWS</a>
                                         <!-- <ul class="sportsmagazine-dropdown-menu">
                                                    <li><a href="blog-grid.html">Blog Grid</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="blog-grid.html">Blog Grid W/O/S</a></li>
                                                            <li><a href="blog-grid-wls.html">Blog Grid W/L/S</a></li>
                                                            <li><a href="blog-grid-wrs.html">Blog Grid W/R/S</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog-large.html">Blog Large</a></li>
                                                    <li><a href="blog-large-wls.html">Blog Large W/L/S</a></li>
                                                    <li><a href="blog-medium.html">Blog Medium</a></li>
                                                    <li><a href="blog-modren.html">Blog Modren</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="blog-modren.html">Blog Modren W/O/S</a></li>
                                                            <li><a href="blog-modren-wls.html">Blog Modren W/L/S</a></li>
                                                            <li><a href="blog-modren-wrs.html">Blog Modren W/R/S</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="blog-detail.html">Blog Detail</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="blog-detail.html">Blog Detail W/R/S</a></li>
                                                            <li><a href="blog-detail-wls.html">Blog Detail W/L/S</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> -->
                                     </li>
                                     <li><a href="#">OUR SHOP</a>
                                         <!-- <ul class="sportsmagazine-dropdown-menu">
                                                    <li><a href="shop-grid.html">Shop Grid</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="shop-grid.html">Shop Grid W/O/S</a></li>
                                                            <li><a href="shop-grid-wls.html">Shop Grid W/L/S</a></li>
                                                            <li><a href="shop-grid-wrs.html">Shop Grid W/R/S</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-list-wls.html">Shop List W/L/S</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">WishList</a></li>
                                                    <li><a href="account.html">Account</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="shop-detail.html">Shop Detail</a>
                                                        <ul class="sportsmagazine-dropdown-menu">
                                                            <li><a href="shop-detail.html">Shop Detail W/R/S</a></li>
                                                            <li><a href="shop-detail-wls.html">Shop Detail W/L/S</a></li>
                                                        </ul>
                                                    </li>
                                                </ul> -->
                                     </li>
                                     <li class="sportsmagazine-megamenu-li"><a href="#">Contact us</a>
                                         <!-- <ul class="sportsmagazine-megamenu">
                                                    <li class="row">
                                                        <div class="col-md-2">
                                                            <h4>Links 1</h4>
                                                            <ul class="sportsmagazine-megalist">
                                                                <li><a href="404.html">404 Error Page</a></li>
                                                                <li><a href="faq.html">Faq</a></li>
                                                                <li><a href="login-register.html">Login Register</a></li>
                                                                <li><a href="search-result.html">Search Result</a></li>
                                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <h4>Player text</h4>
                                                            <div class="sportsmagazine-mega-text">
                                                                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                                <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <h4>sub category widget</h4>
                                                            <a href="#" class="sportsmagazine-thumbnail">
                                                                <img src="{{asset('/extra-images/mega-menuadd.jpg')}}" alt="" />
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                     </li>
                                 </ul>
                             </div>
                         </nav>
                         <a data-toggle="modal" data-target="#searchModal" href="#" class="sportsmagazine-search-btn sportsmagazine-colorhover"><i class="fa fa-search"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--// MainSection \\-->

 </header>
 <!--// Header \\-->
