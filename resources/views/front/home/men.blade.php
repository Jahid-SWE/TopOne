@extends('front.master')

@section('body')
    <div class="index_slider">
        <div class="container">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li><img src="{{ asset('front/images/slider3_1.jpg') }}" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('front/images/5.jpg') }}" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('front/images/6.jpg') }}" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('front/images/7.jpg') }}" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('front/images/slider1_1.PNG') }}" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('front/images/slider3_1.jpg') }}" class="img-responsive" alt=""/></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content_top">
        <div class="container">
            <div class="grid_2">
                <div class="sellers_grid" style="margin-bottom: 8px">
                    <ul class="sellers">
                        <li class="sellers_desc"><h2>Men Clothes</h2></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                @foreach($products as $key => $product)
                    <div class="col-md-3 span_6">
                        <div class="box_inner">
                            <img src="{{ asset($product->image) }}" alt="" height="220"/>
                            <div class="sale-box"> </div>
                            <div class="desc">
                                <h3>{{ $product->name }}</h3>
                                <h4>{{ $product->price }}</h4>
                                <ul class="list2">
                                    <li class="list2_left"><span class="m_1"><a href="{{ route('direct-add-to-cart', ['id' =>  $product->id]) }}" class="link">Add to Cart</a></span></li>
                                    <li class="list2_right"><span class="m_2"><a href="{{ route('product-detail', ['id' =>  $product->id]) }}" class="link1">See More</a></span></li>
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="heart"> </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    {{--<div class="content_middle">
        <div class="container">
            <ul class="promote">
                <i class="promote_icon"> </i>
                <li class="promote_head"><h3>Promotion</h3></li>
            </ul>
             <ul id="flexiselDemo3">
                            <li><img src="{{ asset('/') }}front/images/n1.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                <div class="ticket"> </div>
                            </div></li>
                            <li><img src="{{ asset('/') }}front/images/n2.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                <div class="ticket"> </div>
                            </div></li>
                            <li><img src="{{ asset('/') }}front/images/n3.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                <div class="ticket"> </div>
                            </div></li>
                            <li><img src="{{ asset('/') }}front/images/n4.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                <div class="ticket"> </div>
                            </div></li>
                            <li><img src="{{ asset('/') }}front/images/n5.jpg"  class="img-responsive" /><div class="grid-flex"><h4>Contrary to popular </h4><p>589,90 $</p>
                                <div class="m_3"><a href="#" class="link2">Add to Cart</a></div>
                                <div class="ticket"> </div>
                            </div></li>
                         </ul>
                        <script type="text/javascript">
                         $(window).load(function() {
                            $("#flexiselDemo3").flexisel({
                                visibleItems: 6,
                                animationSpeed: 1000,
                                autoPlay:true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                       </script>
                       <script type="text/javascript" src="{{ asset('/') }}front/js/jquery.flexisel.js"></script>
        </div>
    </div>--}}
    <div class="container">
        <div class="content_bottom">
            <div class="col-md-3 span_1">
                <ul class="spinner">
                    <i class="box_icon"> </i>
                    <li class="spinner_head"><h3>mazim pla</h3></li>
                    <div class="clearfix"> </div>
                </ul>
                <img src="{{ asset('/') }}front/images/t8.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-3 span_1">
                <ul class="spinner">
                    <i class="bubble"> </i>
                    <li class="spinner_head"><h3>About Us</h3></li>
                    <div class="clearfix"> </div>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
            </div>
            <div class="col-md-3 span_1">
                <ul class="spinner">
                    <i class="mail"> </i>
                    <li class="spinner_head"><h3>Contact Us</h3></li>
                    <div class="clearfix"> </div>
                </ul>
                <ul class="social">
                    <li><a href=""> <i class="fb"> </i> </a></li>
                    <li><a href=""><i class="tw"> </i> </a></li>
                    <li><a href=""><i class="google"> </i> </a></li>
                    <li><a href=""><i class="linkedin"> </i> </a></li>
                    <li><a href=""><i class="skype"> </i> </a></li>
                </ul>
            </div>
            <div class="col-md-3 span_1">
                <ul class="spinner">
                    <i class="mail"> </i>
                    <li class="spinner_head"><h3>Contact Us</h3></li>
                    <div class="clearfix"> </div>
                </ul>
                <p>500 Lorem Ipsum Dolor Sit,</p>
                <p>22-56-2-9 Sit Amet, Lorem,</p>
                <p>Phone:(00) 222 666 444</p>
                <p><a href="mailto:info@demo.com"> info(at)gifty.com</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
