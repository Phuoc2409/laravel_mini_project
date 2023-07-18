<div class="header_top">
    <!--header_top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contactinfo">
                    <ul class="nav nav-pills">
                        <li><a href="#">
                                <i class="fa fa-phone"></i>{{ getConfigValueFromSettingTable('phone_contact') }}
                            </a>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-envelope"></i> {{ getConfigValueFromSettingTable('email') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="social-icons pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ getConfigValueFromSettingTable('facebook_link') }}"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ getConfigValueFromSettingTable('twitter_link') }}"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header_top-->

<div class="header-middle">
    <!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{ route('home') }}"><img src="/Eshopper/images/home/logo.png" alt="" /></a>
                </div>
                <div class="btn-group pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            USA
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">UK</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                            DOLLAR
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Canadian Dollar</a></li>
                            <li><a href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('user_info') }}"><i class="fa fa-user"></i> Account</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        @auth
                            <li><a href="{{ route('showCart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        @else
                            <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        @endauth
                        @auth
                            <li><a href="{{ route('logout') }}"><i class="fa fa-lock"></i> Logout</a></li>
                        @else
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header-middle-->
