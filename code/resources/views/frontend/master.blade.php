<!DOCTYPE html>
<html lang="en">

<!-- tambahan file head_script -->
@include('frontend.head_script')

<!-- tambahan componen css -->
@section('css')
@show

<body class="index">
    <div class="preloader loader" style="display: block;"> 
        <img src="{{asset ('code/frontend_template/image/loader.gif')}}" alt="#"/>
    </div>

<!-- tambahan file top_menu -->
@include('frontend.top_menu')

<!-- tambahan file navbar -->
@include('frontend.navbar')

<!-- tambahan file page selector -->
@yield('page')

<!-- tambahan file fav_brand -->
@include('frontend.fav_brand')

<!-- tambahan file footer -->
@include('frontend.footer')

<!-- tambahan file footer_script -->
@include('frontend.footer_script')

@section('js')
@show
</body>

</html>