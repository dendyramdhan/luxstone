<nav id="menu" class="navbar">
    <div class="nav-inner">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
            <ul class="main-navigation">
                <li><a href="{{ route('home') }}" class="parent">Home</a> </li>
                <li><a href="{{ route('kategori') }}" class="parent">Product</a> </li>
                <li><a href="{{ route('blog') }}" class="parent">Blog</a> </li>
                <li><a href="{{ route('kontak') }}" class="parent">Contact Us</a> </li>
                <!-- <li><a href="{{ route('tentang_kami') }}" class="parent">About Us</a> </li> -->
            </ul>
        </div>
    </div>
</nav>