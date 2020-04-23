@extends('frontend.master')
@section('page')

<div class="breadcrumb parallax-container">
    <div class="parallax"><img src="{{asset ('code/frontend_template/image/prlx.jpg')}}" alt="#"></div>
    <h1>Single Blog</h1>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
    </ul>
</div>

<div class="container">
    <div class="row">
        <div class="content col-sm-12">
            <div class="blog1 blog">
                <div class="blog-image"> <a href="{{ url('code/storage/app/public/blogs/'.$blog['gambar']) }}"
                        class="blog-imagelink"><img src="{{ url('code/storage/app/public/blogs/'.$blog['gambar']) }}"
                            alt="{{$blog->blogid}}"></a> <span class="blog-hover"></span>
                </div>

                <div class="blog-content"> <span class="blog-date">15/01/2020</span>
                <h1 class="blog-name">{{ $blog['title'] }}</h1>
                    <span class="blog-author">Posted by : {{ $blog['created_by'] }}</span>
                    <div class="blog-desc">{!!$blog['isi']!!}</div>
                    <blockquote>{{ $blog['highlight'] }}</blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection