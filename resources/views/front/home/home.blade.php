@extends('front.master')

@section('body')
    <div class="index_slider">
        <div class="container">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li><img src="{{ asset('front/images/test-banner.jpg') }}" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('/') }}front/images/slider1_1.PNG" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('/') }}front/images/slider3_1.jpg" class="img-responsive" alt=""/></li>
                    <li><img src="{{ asset('/') }}front/images/slider3_1.jpg" class="img-responsive" alt=""/></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="best-selling-product">
        <div class="container">
            <div class="grid_1">
                <div class="col-md-3">
                    <div class="box2">
                        <ul class="list1">
                            <i class="lock"> </i>
                            <li class="list1_right"><p>Upto 5% Reward on your shipping</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box3">
                        <ul class="list1">
                            <i class="clock1"> </i>
                            <li class="list1_right"><p>Easy Extended Returned</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box4">
                        <ul class="list1">
                            <i class="vehicle"> </i>
                            <li class="list1_right"><p>Free Shipping on order over 99 $</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box5">
                        <ul class="list1">
                            <i class="dollar"> </i>
                            <li class="list1_right"><p>Delivery Schedule Spread Cheer Time</p></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="sellers_grid">
                <ul class="sellers">
                    <li class="sellers_desc"><h2>Best Sellers</h2></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="grid_2">
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

    <div class="popular-product">
        <div class="container">
            <div class="sellers_grid">
                <ul class="sellers">
                    <li class="sellers_desc"><h2>Popular Products</h2></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="grid_2">
                @foreach($popular_products as $key => $product)
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

    <div class="container">
        <div class="content_middle_bottom">
            <div class="col-md-4">
                <ul class="spinner">
                    <i class="spinner_icon"> </i>
                    <li class="spinner_head"><h3>But I must explain</h3></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="timer_box">
                    <div class="thumb"> </div>
                    <div class="timer_grid">
                        <ul id="countdown">
                        </ul>
                        <ul class="navigation">
                            <li>
                                <p class="timeRefDays">DAYS</p>
                            </li>
                            <li>
                                <p class="timeRefHours">HOURS</p>
                            </li>
                            <li>
                                <p class="timeRefMinutes">MINUTES</p>
                            </li>
                            <li>
                                <p class="timeRefSeconds">SECONDS</p>
                            </li>
                        </ul>
                    </div>
                    <div class="thumb_desc">
                        <h3> totam rem aperiam</h3>
                        <div class="price">
                            <span class="reducedfrom">$140.00</span>
                            <span class="actual">$120.00</span>
                        </div>
                    </div>
                    <a href="#"><div class="m_3 deal"><div class="link3">Buy this deal</div></div></a>
                </div>
            </div>
            <div class="col-md-8">
                <ul class="spinner">
                    <i class="paperclip"> </i>
                    <li class="spinner_head"><h3>From the Blog</h3></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="a-top">
                    <div class="left-grid">
                        <img src="{{ asset('/') }}front/images/t4.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="right-grid">
                        <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                    </div>
                    <div class="but">
                        <a class="arrow" href="#"> </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="a-top">
                    <div class="left-grid">
                        <img src="{{ asset('/') }}front/images/t5.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="right-grid">
                        <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                    </div>
                    <div class="but">
                        <a class="arrow" href="#"> </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="a-top">
                    <div class="left-grid">
                        <img src="{{ asset('/') }}front/images/t6.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="right-grid">
                        <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                    </div>
                    <div class="but">
                        <a class="arrow" href="#"> </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="a-top">
                    <div class="left-grid">
                        <img src="{{ asset('/') }}front/images/t7.jpg" class="img-responsive" alt=""/>
                    </div>
                    <div class="right-grid">
                        <h4><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                    </div>
                    <div class="but">
                        <a class="arrow" href="#"> </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
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
