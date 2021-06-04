<div class="header_top">
    <div class="container">
        <div class="header_top-box">
            <div class="header-top-left">
                <div class="box">
                    <select tabindex="4" class="dropdown drop">
                        <option value="" class="label" value="">Taka :</option>
                        <option value="1">Taka</option>
                        <option value="2">Dollar</option>
                    </select>
                </div>
                <div class="box1">
                    <select tabindex="4" class="dropdown">
                        <option value="" class="label" value="">English :</option>
                        <option value="1">English</option>
                        <option value="2">French</option>
                        <option value="3">German</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="cssmenu">
                <ul>
                    @if(Session::get('customer_id'))
                        <li><a href="" onclick="event.preventDefault(); document.getElementById('customerLogoutForm').submit()">Logout</a></li>
                        <form action="{{ route('customer-logout')}}" method="POST" id="customerLogoutForm">
                            @csrf
                        </form>
                    @else
                        <li><a href="login.html">Log In</a></li>
                        <li><a href="register.html">Sign Up</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="header_bottom">
    <div class="container">
        <div class="header_bottom-box">
            <div class="header_bottom_left">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('/') }}front/images/TopOnelogo1.PNG" alt=""/></a>
                </div>
                <ul class="clock">
                    <i class="clock_icon"> </i>
                    <li class="clock_desc">Justo 24/h</li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="header_bottom_right">
                <div class="search">
                    <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
                    <input type="submit" value="">
                </div>
                <ul class="bag">
                    <a href="{{ route('show-cart') }}"><i class="bag_left"> </i></a>
                    <a href="#">
                        <li class="bag_right">
                            <p>TK.
                                @if($grand_total = Session::get('grand_total'))
                                    {{ number_format($grand_total) }}
                                @else
                                    0
                                @endif
                            </p>
                        </li>
                    </a>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
