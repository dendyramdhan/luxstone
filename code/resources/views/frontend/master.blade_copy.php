<!DOCTYPE html>
<html lang="en">

<head>
    <title>MoonStore</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="e-commerce site well design with responsive view." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset ('code/frontend_template/template/image/favicon.png')}}" rel="icon" type="image/png">
    <link href="{{asset ('code/frontend_template/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset ('code/frontend_template/javascript/font-awesome/css/font-awesome.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet" />
    <link href="{{asset ('code/frontend_template/css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{asset ('code/frontend_template/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset ('code/frontend_template/javascript/owl-carousel/owl.carousel.css')}}" type="text/css"
        rel="stylesheet" media="screen" />
    <link href="{{asset ('code/frontend_template/javascript/owl-carousel/owl.transitions.css')}}" type="text/css"
        rel="stylesheet" media="screen" />
    <script type="text/javascript" src="{{asset ('code/frontend_template/javascript/jquery-2.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset ('code/frontend_template/javascript/bootstrap/js/bootstrap.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset ('code/frontend_template/javascript/template_js/jstree.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset ('code/frontend_template/javascript/template_js/template.js')}}">
    </script>
    <script type="text/javascript" src="{{asset ('code/frontend_template/javascript/common.js')}}"></script>
    <script type="text/javascript" src="{{asset ('code/frontend_template/javascript/global.js')}}"></script>
    <script type="text/javascript"
        src="{{asset ('code/frontend_template/javascript/owl-carousel/owl.carousel.min.js')}}"></script>
</head>

<body class="index">
    <div class="preloader loader" style="display: block;"> <img
            src="{{asset ('code/frontend_template/image/loader.gif')}}" alt="#" /></div>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="top-left pull-left">
                            <div class="language">
                                <form action="#" method="post" enctype="multipart/form-data" id="language">
                                    <div class="btn-group">
                                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"> English <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Arabic</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="currency">
                                <form action="#" method="post" enctype="multipart/form-data" id="currency">
                                    <div class="btn-group">
                                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <strong>USD</strong> <span class="caret"></span> </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Euro</a></li>
                                            <li><a href="#">Pound</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="wel-come-msg"> Welcome to our online store! </div>
                        </div>
                        <div class="top-right pull-right">
                            <div id="top-links" class="nav pull-right">
                                <ul class="list-inline">
                                    <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle"
                                            data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My
                                                Account</span> <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Register</a></li>
                                            <li><a href="#">Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"
                                                aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-inner">
                <div class="col-sm-3 col-xs-3 header-left">
                    <div id="logo"> <a href="#"><img src="{{asset ('code/frontend_template/image/logo.png')}}"
                                title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
                </div>
                <div class="col-sm-9 col-xs-9 header-right">
                    <div id="search" class="input-group">
                        <input type="text" name="search" value="" placeholder="Enter your keyword ..."
                            class="form-control input-lg" />
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-lg"><span>Search</span></button>
                        </span> </div>
                    <div id="cart" class="btn-group btn-block">
                        <button type="button"
                            class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span
                                id="cart-total"> <span>Shopping Cart</span><br>
                                3 item(s) - $254.00</span></button>
                        <ul class="dropdown-menu pull-right cart-dropdown-menu">
                            <li>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><a href="#"><img class="img-thumbnail"
                                                        title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy"
                                                        src="{{asset ('code/frontend_template/image/product/7product56x72.jpg')}}"></a>
                                            </td>
                                            <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">$254.00</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove"
                                                    type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><a href="#"><img class="img-thumbnail"
                                                        title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy"
                                                        src="{{asset ('code/frontend_template/image/product/7product56x72.jpg')}}"></a>
                                            </td>
                                            <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">$254.00</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove"
                                                    type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><a href="#"><img class="img-thumbnail"
                                                        title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy"
                                                        src="{{asset ('code/frontend_template/image/product/7product56x72.jpg')}}"></a>
                                            </td>
                                            <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">$254.00</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove"
                                                    type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Sub-Total</strong></td>
                                                <td class="text-right">$210.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                <td class="text-right">$2.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>VAT (20%)</strong></td>
                                                <td class="text-right">$42.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right">$254.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="text-right"> <span class="btn-viewcart"><a href="#"><strong><i
                                                        class="fa fa-shopping-cart"></i> View Cart</strong></a></span>
                                        <span class="btn-checkout"><a href="#"><strong><i class="fa fa-share"></i>
                                                    Checkout</strong></a></span> </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav id="menu" class="navbar">
        <div class="nav-inner">
            <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
                <button type="button" class="btn btn-navbar navbar-toggle"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse">
                <ul class="main-navigation">
                    <li><a href="#" class="parent">Home</a> </li>
                    <li><a href="#" class="parent">Collection</a> </li>
                    <li><a href="#" class="parent">Women</a> </li>
                    <li><a href="#" class="parent">Men</a> </li>
                    <li class="level-top"><a href="#" class="active parent">Page</a>
                        <ul>
                            <li><a href="#">Category Page</a></li>
                            <li><a href="#">Cart Page</a></li>
                            <li><a href="#">Checkout Page</a></li>
                            <li><a href="#">Blog Page</a></li>
                            <li><a href="#">Singale Blog Page</a></li>
                            <li><a href="#">Register Page</a></li>
                            <li><a href="#">Contact Page</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">Forget Password</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="parent">Blog</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact Us</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mainbanner">
        <div id="main-banner" class="owl-carousel home-slider">
            <div class="item"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/banners/Main-Banner1.jpg')}}" alt="main-banner1"
                        class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/banners/Main-Banner2.jpg')}}" alt="main-banner2"
                        class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/banners/Main-Banner3.jpg')}}" alt="main-banner3"
                        class="img-responsive" /></a> </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="cms_banner">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="banner sub-hover">
                        <a href="#"><img src="{{asset ('code/frontend_template/image/banners/subbanner1.jpg')}}"
                                alt="Sub Banner1" class="img-responsive"></a>
                        <div class="bannertext">
                            <h2>Plastic Grater</h2>
                            <p>From Top Brands</p>
                            <button class="btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="banner sub-hover">
                        <a href="#"><img src="{{asset ('code/frontend_template/image/banners/subbanner2.jpg')}}"
                                alt="Sub Banner2" class="img-responsive"></a>
                        <div class="bannertext">
                            <h2>coffee makers</h2>
                            <p>Discover Moulinex</p>
                            <button class="btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="banner sub-hover">
                        <a href="#"><img src="{{asset ('code/frontend_template/image/banners/subbanner3.jpg')}}"
                                alt="Sub Banner3" class="img-responsive"></a>
                        <div class="bannertext">
                            <h2>kitchen utensils</h2>
                            <p>Measuring Tools & Scales</p>
                            <button class="btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="banner sub-hover">
                        <a href="#"><img src="{{asset ('code/frontend_template/image/banners/subbanner4.jpg')}}"
                                alt="Sub Banner4" class="img-responsive"></a>
                        <div class="bannertext">
                            <h2>juicer Mixer</h2>
                            <p>From Popular Brands</p>
                            <button class="btn">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="center">
        <div class="container">
            <div class="row">
                <div class="content col-sm-12">
                    <div class="customtab">
                        <h3 class="productblock-title">Our Collection </h3>
                        <div id="tabs" class="customtab-wrapper">
                            <ul class='customtab-inner'>
                                <li class='tab'><a href="#tab-furnitur">Popular</a></li>
                                <li class='tab'><a href="#tab-livin">Best Sellers</a></li>
                                <li class='tab'><a href="#tab-kitche">Specials</a></li>
                                <li class='tab'><a href="#tab-outdoo">New product</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- tab-furniture-->
                    <div id="tab-furnitur" class="tab-content">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product1.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product1-1.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product2.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product2-2.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add to
                                                    Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product3-3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product4-4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product5-5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product6-6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product7-7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product8-8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                    <!-- tab-living-->
                    <div id="tab-livin" class="tab-content">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product10.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product10-10.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="image/product/product9.jpg" alt="iPod Classic" title="iPod Classic"
                                                class="img-responsive" /> <img src="image/product/product9-9.jpg"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add to
                                                    Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="image/product/product3-3.jpg" alt="iPod Classic"
                                                title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product4-4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product5-5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product6-6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product7-7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product8-8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                    <!-- tab-living-->
                    <div id="tab-kitche" class="tab-content">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product1.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product1-1.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product2.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product2-2.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add to
                                                    Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product3-3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/produc4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product4-4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product5-5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product6-6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product7-7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product8-8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                    <!-- tab-decor-->
                    <div id="tab-outdoo" class="tab-content">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product1.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/image/product/product1-1.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product2.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product2-2.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart">Add to
                                                    Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span
                                                class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product3-3.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product4-4.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product5-5.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product6-6.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product7-7.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="#"> <img
                                                src="{{asset ('code/frontend_template/image/product/product8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                                src="{{asset ('code/frontend_template/image/product/product8-8.jpg')}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <button type="button" class="wishlist" data-toggle="tooltip"
                                                    data-placement="top" title="Add to Wish List"><i
                                                        class="fa fa-heart-o"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="compare" data-toggle="tooltip"
                                                    data-placement="top" title="Compare this Product"><i
                                                        class="fa fa-exchange"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="quick-view" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View"><i
                                                        class="fa fa-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to
                                                    Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                                Shirt With Ruffle Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax:
                                                $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="{{asset ('code/frontend_template/image/prlx.jpg')}}" alt="#"></div>
        <div class="container">
            <ul id="testimonial" class="row owl-carousel product-slider">
                <li class="item">
                    <div class="panel-default">
                        <div class="testimonial-image z-depth-5"><img
                                src="{{asset ('code/frontend_template/image/t1.png')}}" alt="#"></div>
                        <div class="testimonial-name">
                            <h2>Janet Wilson</h2>
                        </div>
                        <div class="testimonial-designation">
                            <p>Web Designer</p>
                        </div>
                        <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut
                            labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore
                            mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet,
                            consectetur adipisicing.</div>
                    </div>
                </li>
                <li class="item">
                    <div class="panel-default">
                        <div class="testimonial-image"><img src="{{asset ('code/frontend_template/image/t2.png')}}"
                                alt="#"></div>
                        <div class="testimonial-name">
                            <h2>Linda Howard</h2>
                        </div>
                        <div class="testimonial-designation">
                            <p>Web Deweloper</p>
                        </div>
                        <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut
                            labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore
                            mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet,
                            consectetur adipisicing.</div>
                    </div>
                </li>
                <li class="item">
                    <div class="panel-default">
                        <div class="testimonial-image"><img src="{{asset ('code/frontend_template/image/t3.png')}}"
                                alt="#"></div>
                        <div class="testimonial-name">
                            <h2>Janet Wilson</h2>
                        </div>
                        <div class="testimonial-designation">
                            <p>Web Designer</p>
                        </div>
                        <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum ut
                            labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore
                            mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet,
                            consectetur adipisicing.</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">Featured Products</h3>
                    <h4 class="title-subline">What’s so special? Check it out!</h4>
                </div>
                <div id="tab-furniture" class="tab-content">
                    <div id="special-slidertab" class="row owl-carousel product-slider">
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="#"> <img
                                            src="{{asset ('code/frontend_template/image/product/product1.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                            src="{{asset ('code/frontend_template/image/product/product1-1.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                data-placement="top" title="Compare this Product"><i
                                                    class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="#"> <img
                                            src="{{asset ('code/frontend_template/image/product/product2.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                            src="{{asset ('code/frontend_template/image/product/product2-2.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                data-placement="top" title="Compare this Product"><i
                                                    class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="#"> <img
                                            src="{{asset ('code/frontend_template/image/product/product3.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                            src="{{asset ('code/frontend_template/image/product/product3-3.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                data-placement="top" title="Compare this Product"><i
                                                    class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="#"> <img
                                            src="{{asset ('code/frontend_template/image/product/product4.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                            src="{{asset ('code/frontend_template/image/product/product4-4.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                data-placement="top" title="Compare this Product"><i
                                                    class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="#"> <img
                                            src="{{asset ('code/frontend_template/image/product/product5.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                            src="{{asset ('code/frontend_template/image/product/product5-5.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                data-placement="top" title="Compare this Product"><i
                                                    class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="#"> <img
                                            src="{{asset ('code/frontend_template/image/product/product6.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img
                                            src="{{asset ('code/frontend_template/image/product/product6-6.jpg')}}"
                                            alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="compare" data-toggle="tooltip"
                                                data-placement="top" title="Compare this Product"><i
                                                    class="fa fa-exchange"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual
                                            Shirt With Ruffle Hem</a></h4>
                                    <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="blog">
                    <div class="blog-heading">
                        <h3>The Latest News</h3>
                        <h4 class="title-subline">Get amazing fashion inspiration, ideas and news in a click.</h4>
                    </div>
                    <div class="blog-inner">
                        <ul class="list-unstyled blog-wrapper" id="latest-blog">
                            <li class="item blog-slider-item">
                                <div class="blog1 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="{{asset ('code/frontend_template/image/blog/blog_1.jpg')}}"
                                                alt="#"></a> <span class="blog-hover"></span> <span
                                            class="blog-readmore-outer"></span> </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of
                                                model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span
                                            class="blog-date">Jun 29, 2017</span> <a href="#" class="blog-readmore">Read
                                            more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog2 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="{{asset ('code/frontend_template/image/blog/blog_2.jpg')}}"
                                                alt="#"></a> <span class="blog-hover"></span> <span
                                            class="blog-readmore-outer"></span> </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of
                                                model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span
                                            class="blog-date">Jun 29, 2017</span> <a href="#" class="blog-readmore">Read
                                            more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog3 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="{{asset ('code/frontend_template/image/blog/blog_3.jpg')}}"
                                                alt="#"></a> <span class="blog-hover"></span> <span
                                            class="blog-readmore-outer"></span> </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of
                                                model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode Themes</a> </span><span
                                            class="blog-date">Jun 29, 2017</span> <a href="#" class="blog-readmore">Read
                                            more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog4 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="{{asset ('code/frontend_template/image/blog/blog_4.jpg')}}"
                                                alt="#"></a> <span class="blog-hover"></span> <span
                                            class="blog-readmore-outer"></span> </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of
                                                model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span
                                            class="blog-date">Jun 29, 2017</span> <a href="#" class="blog-readmore">Read
                                            more</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="blog5 blog">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img
                                                src="{{asset ('code/frontend_template/image/blog/blog_5.jpg')}}"
                                                alt="#"></a> <span class="blog-hover"></span> <span
                                            class="blog-readmore-outer"></span> </div>
                                    <div class="blog-content">
                                        <h2 class="blog-name"><a href="#">Putamus parum claram, anteposuerit the new of
                                                model litterarum formas ...</a></h2>
                                        <span class="blog-author">Poted by: <a href="#">Lionode Themes</a></span><span
                                            class="blog-date">Jun 29, 2017</span> <a href="#" class="blog-readmore">Read
                                            more</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top-cms parallax-container">
        <div class="parallax"><img src="{{asset ('code/frontend_template/image/news.jpg')}}" alt="#"></div>
        <div class="container">
            <div class="row">
                <div class="newslatter">
                    <form>
                        <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
                        <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!
                        </h4>
                        <div class="input-group">
                            <input type="text" class=" form-control" placeholder="Your-email@website.com">
                            <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="footer-social">
                    <ul>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="client-title">Favourite Brands</h3>
        <h4 class="title-subline">The High Quality Products</h4>
        <div id="brand_carouse" class="owl-carousel brand-logo">
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand1.png')}}" alt="Disney"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand2.png')}}" alt="Dell"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand3.png')}}" alt="Harley"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand4.png')}}" alt="Canon"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand5.png')}}" alt="Canon"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand6.png')}}" alt="Canon"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand7.png')}}" alt="Canon"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand8.png')}}" alt="Canon"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand9.png')}}" alt="Canon"
                        class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img
                        src="{{asset ('code/frontend_template/image/brand/brand5.png')}}" alt="Canon"
                        class="img-responsive" /></a> </div>
        </div>
    </div>
    <footer>
        <div class="cms_searvice">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="cms-block1 z-depth-5">
                            <h4>Free Shipping</h4>
                            <p>All order over $150</p>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="cms-block2">
                            <h4>30 Days Returns</h4>
                            <p>Money Back Guarantee</p>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="cms-block3">
                            <h4>24/7 Support</h4>
                            <p>Feel free to Contact us</p>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="cms-block4">
                            <h4>Online Shopping </h4>
                            <p>Save Up to 70% on Store</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 footer-block">
                    <h5 class="footer-title">INFORMATION</h5>
                    <ul class="list-unstyled ul-wrapper">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Gift Certificates</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-block">
                    <h5 class="footer-title">MY ACCOUNT</h5>
                    <ul class="list-unstyled ul-wrapper">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">Gift Certificates</a></li>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Specials</a></li>
                        <li><a href="#">Affiliates</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-block">
                    <h5 class="footer-title">Extras</h5>
                    <ul class="list-unstyled ul-wrapper">
                        <li><a href="#">Delivery information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Product Recall</a></li>
                        <li><a href="#">Gift Vouchers</a></li>
                        <li><a href="#">Help & FAQs</a></li>
                        <li><a href="#">Sale Only Today</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 footer-block">
                    <div class="content_footercms_right">
                        <div class="footer-contact">
                            <h5 class="contact-title footer-title">Contact Us</h5>
                            <ul class="ul-wrapper">
                                <li><i class="fa fa-map-marker"></i><span class="location2">Offices Addresss:<br>
                                        218,Drimlend Building<br>
                                        Sarthana jakatnaka, Surat City <br>
                                        Gujarat-395013 INDIA</span></li>
                                <li><i class="fa fa-envelope"></i><span class="mail2"><a
                                            href="#">info@localhost.com</a><br>
                                        <a href="#">your@domain.com</a></span></li>
                                <li><i class="fa fa-mobile"></i><span class="phone2">+91 0987-654-321<br>
                                        +91 0987-654-321</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div id="bottom-footer">
                <ul class="footer-link">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="copyright"> Copyright - <a class="yourstore" href="http://www.lionode.com/"> Created by
                        Lionode &copy; 2017 </a></div>
                <div class="footer-bottom-cms">
                    <div class="footer-payment">
                        <ul>
                            <li class="mastero"><a href="#"><img alt=""
                                        src="{{asset ('code/frontend_template/image/payment/mastero.jpg')}}"></a></li>
                            <li class="visa"><a href="#"><img alt=""
                                        src="{{asset ('code/frontend_template/image/payment/visa.jpg')}}"></a></li>
                            <li class="currus"><a href="#"><img alt=""
                                        src="{{asset ('code/frontend_template/image/payment/currus.jpg')}}"></a></li>
                            <li class="discover"><a href="#"><img alt=""
                                        src="{{asset ('code/frontend_template/image/payment/discover.jpg')}}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a id="scrollup">Scroll</a>
    </footer>
    <script src="{{asset ('code/frontend_template/javascript/jquery.parallax.js')}}"></script>
    <script>
    jQuery(document).ready(function($) {
        $('.parallax').parallax();
    });
    </script>
</body>

</html>