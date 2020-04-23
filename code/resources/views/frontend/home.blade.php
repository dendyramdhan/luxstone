@extends('frontend.master')
@section('page')

<!-- tambahan file main_banner -->
@include('frontend.main_banner')
<div class="container-fluid">
    <div class="cms_banner">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="banner sub-hover">
                    <a><img src="{{asset ('code/frontend_template/image/banners/Marble.jpg')}}"
                            alt="Sub Banner1" class="img-responsive"></a>
                    <div class="bannertext">
                        <h2>Marble</h2>
                        <a href="{{ route('kategori') }}" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="banner sub-hover">
                    <a><img src="{{asset ('code/frontend_template/image/banners/Granite.jpg')}}"
                            alt="Sub Banner3" class="img-responsive"></a>
                    <div class="bannertext">
                        <h2>Granite</h2>
                        <a href="{{ route('kategori') }}" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="banner sub-hover">
                    <a><img src="{{asset ('code/frontend_template/image/banners/Onyx.jpg')}}" alt="Sub Banner2"
                            class="img-responsive"></a>
                    <div class="bannertext">
                        <h2>Onyx</h2>
                        <a class="btn">Coming Soon</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="banner sub-hover">
                    <a><img src="{{asset ('code/frontend_template/image/banners/Travertine.jpg')}}"
                            alt="Sub Banner4" class="img-responsive"></a>
                    <div class="bannertext">
                        <h2>Travertine</h2>
                        <a class="btn">Coming Soon</a>
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
                </div>
                <!-- tab-furniture-->
                <div id="tab-furnitur" class="tab-content">
                    <!-- loop product-->
                    @foreach($dt_prds as $prd)
                    <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="{{ route('produk_detail', $prd['produkid']) }}"> <img
                                            src="{{ url('/code/storage/app/public/produk/'.$prd['pic_produk'][0]['gambar'])}}"
                                            alt="{{ $prd['nama_lain'] }}" title="{{ $prd['nama_lain'] }}"
                                            class="img-responsive" /> <img
                                            src="{{ url('/code/storage/app/public/produk/'.$prd['pic_produk'][0]['gambar'])}}"
                                            alt="{{ $prd['nama_lain'] }}" title="{{ $prd['nama_lain'] }}"
                                            class="img-responsive" /> </a>
                                    <ul class="button-group">
                                        <!--<li>
                                            <button type="button" class="wishlist" data-toggle="tooltip"
                                                data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" class="quick-view" data-toggle="tooltip"
                                                data-placement="top" title="Quick View"><i
                                                    class="fa fa-eye"></i></button>
                                        </li>-->
                                        <li>
                                        <button type="button" class="addtocart-btn" title="Contact Us" onclick="window.location.href='{{ route('kontak') }}'">Hubungi
                                                Kami </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="product-name"><a href="{{ route('produk_detail', $prd['produkid']) }}"
                                            title="{{ $prd->nama_lain}}">{{ $prd->nama_lain}}</a></h4>
                                    <p class="price product-price">
                                        {{ $prd->sat_harga.' '.number_format($prd->harga).'/'.$prd->stok_satuan }}<span
                                            class="price-tax">Ex Tax:
                                            $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="viewmore" style="margin-bottom: 50px;">
                        <div class="btn"><a href="{{ route('kategori') }}"> View More All Products</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
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
                    <div class="testimonial-image"><img src="{{asset ('code/frontend_template/image/t2.png')}}" alt="#">
                    </div>
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
                    <div class="testimonial-image"><img src="{{asset ('code/frontend_template/image/t3.png')}}" alt="#">
                    </div>
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
                @for($i = 1; $i <= 8; $i++)
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
                                        <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                                            title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
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
                    @endfor
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
</div> -->
<div class="footer-top-cms parallax-container">
    <div class="parallax"><img src="{{asset ('code/frontend_template/image/prlx.jpg')}}" alt="Instagram"></div>
    <div class="container">
        <div class="row">
            <div class="newslatter">
                <form>
                    <h5>Follow Me On Instagram!</h5>
                    <!-- <h4 class="title-subline">Follow Me</h4> -->
                    <!-- <div class="input-group">
                        <input type="text" class=" form-control" placeholder="Your-email@website.com">
                        <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
                    </div> -->
                </form>
            </div>
            <div class="footer-social">
                <ul>
                    <li class="instagram"><a target="_blank" href="https://www.instagram.com/luxstone_marmer/"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="content">
            <div class="blog">
                <div class="blog-heading">
                    <h3>The Latest Blogs</h3>
                    <!-- <h4 class="title-subline">Get amazing fashion inspiration, ideas and news in a click.</h4> -->
                </div>
                <div class="blog-inner">
                    <ul class="list-unstyled blog-wrapper" id="latest-blog">
                    @foreach($blogs as $blog)
                        <li class="item blog-slider-item">
                            <div class="blog1 blog">
                                <div class="blog-image"> <a href="{{ url('single_blog/'.$blog['blogid']) }}" class="blog-imagelink"><img
                                            src="{{ url('code/storage/app/public/blogs/'.$blog['gambar']) }}"
                                            alt="{{ url('single_blog/'.$blog['blogid']) }}"></a> <span class="blog-hover"></span> <span
                                        class="blog-readmore-outer"></span> </div>
                                <div class="blog-content">
                                    <h2 class="blog-name"><a href="{{ url('single_blog/'.$blog['blogid']) }}">{{ $blog['title'] }}</a></h2>
                                    <span class="blog-author">Posted by : {{ $blog['created_by'] }}</span><span
                                        class="blog-date">15/01/2020</span> <a href="{{ url('single_blog/'.$blog['blogid']) }}" class="blog-readmore">Read
                                        more</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection