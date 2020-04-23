@extends('frontend.master')
@section('page')

<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="{{asset ('code/frontend_template/image/prlx.jpg')}}" alt="#"></div>
    <h1>Blog</h1>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
    </ul>
</div>

<div class="container">
    <div class="row">
        <div class="content col-sm-12">
            @foreach($blog as $b)
            <div class="blog1 blog">
                <div class="blog-image"> <a href="{{ url('single_blog/'.$b['blogid']) }}" class="blog-imagelink"><img
                            src="{{ url('code/storage/app/public/blogs/'.$b['gambar']) }}" alt="#"></a> <span
                        class="blog-hover"></span> 
                </div>
                <div class="blog-content"> <span class="blog-date">15/01/2020</span>
                    <h2 class="blog-name"> <a href="{{ url('single_blog/'.$b['blogid']) }}">{{ $b['title'] }}</a> </h2>
                    <span class="blog-author">by {{ $b['created_by'] }}<a href="{{ url('single_blog/'.$b['blogid']) }}"></a> </span> 
                    <!--<span class="blog-comment">3 comments</span>-->
                    <div class="blog-desc"><span style="color: rgb(34, 34, 34);">{{ $b['kilasan'] }}...</span></div>
                    <a href="{{ url('single_blog/'.$b['blogid']) }}" class="blog-readmore">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection