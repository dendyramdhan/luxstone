@extends('frontend.master')  
@section('page')

<!-- tambahan file banner -->
@include('frontend.banner')

<div class="container">
    <div class="row">
        <div class="content col-sm-12">
            <div class="row">
                <div class="col-sm-5">
                    <div class="thumbnails">
                        <div><a class="thumbnail fancybox" href="{{ url('/code/storage/app/public/produk/'.$data['pic_produk'][0]['gambar'])}}" data-lightbox="mygallery" data-title="{{ $data['nama_lain'] }}"><img src="{{ url('/code/storage/app/public/produk/'.$data['pic_produk'][0]['gambar'])}}"
                                            alt="{{ $data['nama_lain'] }}" title="{{ $data['nama_lain'] }}" /></a></div>
                        <div id="product-thumbnail" class="owl-carousel">
                            @foreach($data->pic_produk as $i => $dt)
                            <div class="gallery">
                                <div class="item">
                                    <div class="image-additional">
                                    <a class="thumbnail fancybox" href="{{ url('/code/storage/app/public/produk/'.$dt['gambar'])}}" data-lightbox="mygallery" data-title="{{ $data['nama_lain'] }}">
                                        <img src="{{ url('/code/storage/app/public/produk/'.$dt['gambar'])}}"
                                            alt="{{ $data['nama_lain'] }}" title="{{ $data['nama_lain'] }}" /></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 prodetail">
                    <h1 class="productpage-title">{{ $data['nama_lain'] }}</h1>
                    <div class="rating"> 
                    <span class="fa fa-stack"><i
                        class="fa fa-star-o fa-stack-2x"></i><i
                        class="fa fa-star fa-stack-2x"></i>
                    </span> <span class="fa fa-stack"><i
                        class="fa fa-star-o fa-stack-2x"></i><i
                        class="fa fa-star fa-stack-2x"></i>
                    </span> <span class="fa fa-stack"><i
                        class="fa fa-star-o fa-stack-2x"></i><i
                        class="fa fa-star fa-stack-2x"></i>
                    </span> <span class="fa fa-stack"><i
                        class="fa fa-star-o fa-stack-2x"></i><i
                        class="fa fa-star fa-stack-2x"></i>
                    </span> 
                    <span class="fa fa-stack"><i
                        class="fa fa-star-o fa-stack-2x"></i>
                    </span>
                            <!-- <span class="riview"><a href="#">1 reviews</a> / <a href="#">Write a review</a></span>  -->
                        </div>
                    <ul class="list-unstyled productinfo-details-top">
                        <li>
                            <h2 class="productpage-price">{{ $data->sat_harga.' '.number_format($data->harga).'/'.$data->stok_satuan }}</h2>
                        </li>
                        <!--<li><span class="productinfo-tax">Ex Tax: $100.00</span></li>-->
                    </ul>
                    <hr>
                    <ul class="list-unstyled product_info">
                        <!-- <li>
                            <label>Brand:</label>
                            <span> <a href="#">Apple</a></span></li> -->
                        <!-- <li>
                            <label>Product Code:</label>
                            <span> {{$data['produkid']}}</span></li> -->
                        <li>
                            <label>Availability:</label>
                            <span> {{ $data['stok'].' '.$data['stok_satuan'] }}</span></li>
                    </ul>
                    <hr>
                    <button type="button" class="btn" title="Contact Us" onclick="window.location.href='{{ route('kontak') }}'">Hubungi Kami</button>
                    <!--<p class="product-desc"> Deskripsi Produk.
                        With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you
                        enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.
                        Cover Flow.
                        Browse through your music collection by flipping..</p>-->
                    <div id="product">
                        <div class="form-group">
                            <!-- <div class="row">
                                <div class="Sort-by col-md-6">
                                    <label>Sort by</label>
                                    <select id="select-by-size" class="selectpicker form-control">
                                        <option value="#" selected="selected">Small</option>
                                        <option value="#">Medium</option>
                                        <option value="#">Large</option>
                                    </select>
                                </div>
                                <div class="Color col-md-6">
                                    <label>Color</label>
                                    <select id="select-by-color" class="selectpicker form-control">
                                        <option value="#" selected="selected">Blue</option>
                                        <option value="#">Green</option>
                                        <option value="#">Orange</option>
                                        <option value="#">White</option>
                                    </select>
                                </div>
                            </div> -->
                            
                                    <!--<div class="qty">
                                <label>Qty</label>
                                <input id="qty" placeholder="1" type="number">
                                <ul class="button-group list-btn">
                                    <li>
                                        <button type="button" class="wishlist" data-toggle="tooltip"
                                            data-placement="top" title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="addtocart-btn" data-toggle="tooltip"
                                            data-placement="top" title="Add to Cart"> <i
                                                class="fa fa-shopping-bag"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                                            title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" class="quick-view" data-toggle="tooltip"
                                            data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
                                    </li>
                                </ul>
                            </div>
                                    -->
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <!--
            <div class="productinfo-tab">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                    <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-description">
                        <div class="cpt_product_description ">
                            <div>
                                <p> <strong>More room to move.</strong></p>
                                <p> With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod
                                    classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any
                                    combination wherever you go.</p>
                                <p> <strong>Cover Flow.</strong></p>
                                <p> Browse through your music collection by flipping through album art. Select an album
                                    to turn it over and see the track list.</p>
                                <p> <strong>Enhanced interface.</strong></p>
                                <p> Experience a whole new way to browse and view your music and video.</p>
                                <p> <strong>Sleeker design.</strong></p>
                                <p> Beautiful, durable, and sleeker than ever, iPod classic now features an anodized
                                    aluminum and polished stainless steel enclosure with rounded edges.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-review">
                        <form class="form-horizontal">
                            <div id="review"></div>
                            <h2>Write a review</h2>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-name">Your Name</label>
                                    <input type="text" name="name" value="" id="input-name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-review">Your Review</label>
                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                        translated!</div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label">Rating</label>
                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                    <input type="radio" name="rating" value="1" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="2" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="3" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="4" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="5" />
                                    &nbsp;Good</div>
                            </div>
                            <div class="buttons clearfix">
                                <div class="pull-right">
                                    <button type="button" id="button-review" data-loading-text="Loading..."
                                        class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            -->

            <h3 class="productblock-title">Related Products</h3>
            <h4 class="title-subline">What’s so special? Check it out!</h4>
            <div class="box">
                <div id="related-slidertab" class="row owl-carousel product-slider">   
                @foreach($slide_prd as $slide_val)
                    <div class="item">
                        <div class="product-thumb transition">
                            <div class="image product-imageblock">  <a href="{{ route('produk_detail', $slide_val['produkid']) }}"> 
                                    <img src="{{ url('/code/storage/app/public/produk/'.$slide_val['pic_produk'][0]['gambar'])}}" alt="{{ $data['nama_lain'] }}"
                                        class="img-responsive" />
                                    <img src="{{ url('/code/storage/app/public/produk/'.$slide_val['pic_produk'][0]['gambar'])}}" alt="{{ $data['nama_lain'] }}"
                                        class="img-responsive" />
                                </a>
                                <ul class="button-group">
                                    <!--<li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="wishlist"
                                            type="button" data-original-title="Add to Wish List"><i
                                                class="fa fa-heart-o"></i></button>
                                    </li>
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="compare"
                                            type="button" data-original-title="Compare this Product"><i
                                                class="fa fa-exchange"></i></button>
                                    </li> 
                                    <li>
                                        <button title="" data-placement="top" data-toggle="tooltip" class="quick-view"
                                            type="button" data-original-title="Quick View"><i
                                                class="fa fa-eye"></i></button>
                                    </li>-->
                                    <li>
                                        <button type="button" class="addtocart-btn" title="Contact Us" onclick="window.location.href='{{ route('kontak') }}'">
                                      Hubungi Kami
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
                                            class="fa fa-star-o fa-stack-2x"></i></span> 
                                </div>
                                <h4 class="product-name"><a href="#" title="{{$slide_val['nama_lain']}}">{{$slide_val['nama_lain']}}</a></h4>
                                <p class="price product-price">{{ $slide_val->sat_harga.' '.number_format($slide_val->harga).'/'.$slide_val->stok_satuan }}<span class="price-tax">Ex Tax: $100.00</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-top-cms parallax-container" style="margin-top:50px">
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
                    <li class="instagram"><a href="https://www.instagram.com/luxstone_marmer/"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
    <div class="modal fade" tabindex="-1" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
        <form name="contactform" method="POST" action="#">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="main-form">
                    <h3 class="contactus-title">Leave Message</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" required name="name" placeholder="Name">
                            </div>
                            <div class="col-sm-6 ">
                                <input type="email" required name="email" placeholder="Email">
                            </div>
                            <div class="col-sm-6 ">
                                <input type="text" required name="phone" placeholder="Phone Number">
                            </div>
                            <div class="col-sm-6 ">
                                <input type="text" required name="subject" placeholder="Subject">
                            </div>
                            <div class="col-xs-12 ">
                                <textarea required name="message" placeholder="Message" rows="3" cols="30"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="submit" class="btn">Save changes</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<!-- <div class="container">
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
</div> -->
@endsection