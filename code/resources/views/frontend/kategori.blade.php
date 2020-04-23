@extends('frontend.master') 
@section('page')

<!-- tambahan file banner -->
@include('frontend.banner')

<div class="container">
    <div class="row">
        <div id="column-left" class="col-sm-3 hidden-xs column-left">
            <div class="filter left-sidebar-widget">
                <div class="columnblock-title">Refine Search</div>
                <div class="filter-block">
                    <div class="list-group">
                        <p class="list-group-item">Categories</p>
                        <div class="list-group-item">
                            <div id="filter-group1">
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="1" />
                                    MARBLE </label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="2" />
                                    ONYX </label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="3" />
                                    GRANITE </label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="3" />
                                    TRAVERTINE </label>
                            </div>
                        </div>
                        <p class="list-group-item">Color</p>
                        <div class="list-group-item">
                            <div id="filter-group1">
                                @foreach($all_warna as $key => $warna)
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="1" />
                                   {{ $warna['warna'] }} ({{ $count[$key] }})</label>
                                    @endforeach
                            </div>
                        </div>
                        <!-- <p class="list-group-item">Price</p>
                        <div class="list-group-item">
                            <div id="filter-group2">
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="4" />
                                    $100-$300 (6)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="5" />
                                    $301-$1000 (6)</label>
                            </div>
                        </div>
                        <p class="list-group-item">Size</p>
                        <div class="list-group-item">
                            <div id="filter-group3">
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="6" />
                                    Big (3)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="7" />
                                    Medium (3)</label>
                                <label class="checkbox">
                                    <input name="filter[]" type="checkbox" value="8" />
                                    Small (1)</label>
                            </div>
                        </div> -->
                    </div>
                    <div class="panel-footer">
                        <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
                    </div>
                </div>
            </div>
            <div class="banner left-sidebar-widget"><img src="{{asset ('code/storage/app/public/iklan/Adv 2.jpg')}}"
                        alt="Left Banner" class="img-responsive"/> </div>
            <div class="special left-sidebar-widget">
                <div class="columnblock-title">Special Product</div>
                <!-- <ul class="row ">
                    @for($i=1; $i <= 3; $i++)
                    <li class="product-layout">
                        <div class="product-list col-xs-4">
                            <div class="product-thumb">
                                <div class="image product-imageblock">
                                    <a href="#">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="{{asset ('code/frontend_template/image/product/Pro-01.jpg')}}">
                                        <img class="img-responsive" title="iPod Classic" alt="iPod Classic"
                                            src="{{asset ('code/frontend_template/image/product/Pro-01-1.jpg')}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="caption product-detail">
                                <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt
                                        With Ruffle Hem</a></h4>
                                <p class="price product-price"> <span class="price-new">$254.00</span> <span
                                        class="price-old">$272.00</span> </p>
                                <div class="addto-cart"><a href="#">Add to Cart</a></div>
                            </div>
                        </div>
                    </li>
                    @endfor
                </ul> -->
            </div>
        </div>
        <div class=" content col-sm-9">
            <div class="category-page-wrapper">
                <div class="col-md-2 text-right sort-wrapper">
                    <label class="control-label" for="input-sort">Sort By :</label>
                    <!--<div class="sort-inner">
                        <select id="input-sort" class="form-control">
                            <option value="ASC" selected="selected">Default</option>
                             <option value="ASC">Name (A - Z)</option>
                            <option value="DESC">Name (Z - A)</option>
                            <option value="ASC">Price (Low &gt; High)</option>
                            <option value="DESC">Price (High &gt; Low)</option>
                            <option value="DESC">Rating (Highest)</option>
                            <option value="ASC">Rating (Lowest)</option>
                            <option value="ASC">Model (A - Z)</option>
                            <option value="DESC">Model (Z - A)</option> 
                        </select>
                    </div>-->
                </div>
                <!-- <div class="col-md-1 text-right page-wrapper">
                    <label class="control-label" for="input-limit">Show :</label>
                    <div class="limit">
                        <select id="input-limit" class="form-control">
                            <option value="8" selected="selected">08</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="75">75</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div> -->
                <div class="col-md-6 list-grid-wrapper"> 
                    <!-- <a href="#" id="compare-total">Product Compare (0)</a> -->
                    <div class="btn-group btn-list-grid">
                        <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip"
                            title="List"></button>
                        <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip"
                            title="Grid"></button>
                    </div>
                </div> 
            </div>
            <br />
            <div class="grid-list-wrapper">
            @foreach($dt_prd as $prd) 
                <div class="product-layout product-list col-xs-12">
                    <div class="product-thumb">
                        <div class="image product-imageblock">
                            <a href="{{ route('produk_detail', $prd['produkid']) }}">
                                <img src="{{ url('/code/storage/app/public/produk/'.$prd['pic_produk'][0]['gambar'])}}" alt="{{ $prd['nama_lain'] }}" title="{{ $prd['nama_lain'] }}"
                                    class="img-responsive" />
                                <img  src="{{ url('/code/storage/app/public/produk/'.$prd['pic_produk'][0]['gambar'])}}"
                                            alt="{{ $prd['nama_lain'] }}" title="{{ $prd['nama_lain'] }}"
                                    class="img-responsive" />
                            </a>
                            <ul class="button-group grid-btn">
                                <!--<li>
                                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                </li>
                                <li>
                                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                                        title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </li>
                                <li>
                                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                                        title="Quick View"><i class="fa fa-eye"></i></button>
                                </li>-->
                                <li>
                                    <button type="button" class="addtocart-btn" title="Contact Us" onclick="window.location.href='{{ route('kontak') }}'">
                                      Hubungi Kami
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="caption product-detail">
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                        class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                        class="fa fa-star-o fa-stack-2x"></i><i
                                        class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                        class="fa fa-star-o fa-stack-2x"></i><i
                                        class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                        class="fa fa-star-o fa-stack-2x"></i><i
                                        class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                        class="fa fa-star-o fa-stack-2x"></i></span> </div>
                            <h4 class="product-name"><a href="#" title="{{ $prd->nama_lain}}">{{ $prd->nama_lain}}</a></h4>
                            <p class="price product-price">{{ $prd->sat_harga.' '.number_format($prd->harga).'/'.$prd->stok_satuan }}</p>
                            <!-- <p class="product-desc"> More room to move.

                                With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic
                                lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination
                                wherever you go.

                                Cover Flow.

                                Browse through your music collection by flipping..</p> 
                            <ul class="button-group list-btn">
                                <li>
                                    <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top"
                                        title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                </li>
                                <li>
                                    <button type="button" class="compare" data-toggle="tooltip" data-placement="top"
                                        title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                </li> 
                                <li>
                                    <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top"
                                        title="Quick View"><i class="fa fa-eye"></i></button>
                                </li>
                                <li>
                                    Button trigger modal
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                      Launch demo modal
                                    </button>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="category-page-wrapper">
                <div class="result-inner">Showing {{$dt_prd->firstItem()}} to {{$dt_prd->lastItem()}} of {{$dt_prd->lastPage()}} ({{$dt_prd->currentpage()}} Pages)</div>
                <div class="pagination-inner">
                    <ul class="pagination">
                        @if(1 < $dt_prd->currentpage())
                        <li><a href="{{$dt_prd->url(1)}}">|&#9665;</a></li>
                        <li><a href="{{$dt_prd->previousPageUrl()}}">&#9665;</a></li>
                        <li><a href="{{$dt_prd->previousPageUrl()}}">{{$dt_prd->currentpage()-1}}</a></li>
                        @endif
                        <li @if($dt_prd->currentpage()) class="active" @endif><a href="{{$dt_prd->currentpage()}}">{{$dt_prd->currentpage()}}</a></li>
                        @if($dt_prd->currentpage() < $dt_prd->lastPage())
                        <li><a href="{{$dt_prd->nextPageUrl()}}">{{$dt_prd->currentpage()+1}}</a></li>
                        <li><a href="{{$dt_prd->nextPageUrl()}}">&#9655;</a></li>
                        <li><a href="{{$dt_prd->lastPage()}}">&#9655;|</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
    <div class="modal fade" tabindex="-1" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModal">Modal title</h5>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}
                    
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

<script>
    
</script>

@endsection