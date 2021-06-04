
<!DOCTYPE HTML>
<html>
<head>
    @include('front.partials.head')
</head>
<body>
  @include('front.partials.header')
{{--<div class="menu">--}}
{{--    <div class="container">--}}
{{--        <div class="menu_box">--}}
{{--            <ul class="megamenu skyblue">--}}
{{--                <li class="active grid"><a class="color2" href="{{route('home')}}">Home</a></li>--}}
{{--                <li class="active grid"><a class="color2" href="{{route('men')}}">Men</a></li>--}}
{{--                <li class="active grid"><a class="color2" href="{{route('women')}}">Women</a></li>--}}
{{--                <li class="active grid"><a class="color2" href="{{route('kids')}}">Kids</a></li>--}}
{{--                --}}{{--                @foreach($categories as $key => $category)--}}
{{--                --}}{{--                <li><a class="color4" href="{{ route('category-product', ['id' => $category->id]) }}">{{ $category->name }}</a></li>--}}
{{--                --}}{{--                @endforeach--}}
{{--                <div class="clearfix"> </div>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="main-menu">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/')?'active':'' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li  class="{{ Request::is('shop')?'active':'' }}"><a href="{{ route('shop') }}">Shop</a></li>
                    <li  class="{{ Request::is('men')?'active':'' }}"><a href="{{ route('men') }}">Men</a></li>
                    <li  class="{{ Request::is('women')?'active':'' }}"><a href="{{ route('women') }}">Women</a></li>
                    <li  class="{{ Request::is('kids')?'active':'' }}"><a href="{{ route('kids') }}">Kids</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>


@yield('body')


<div class="footer">
    <div class="container">
        <img src="{{ asset('/') }}front/images/pay.png" class="img-responsive" alt=""/>
        <ul class="footer_nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <p class="copy">Copyright &copy;{{ date('Y') }}  <a href="" target="_blank"> </a></p>
    </div>
</div>
@include('front.partials.script')
</body>
</html>
