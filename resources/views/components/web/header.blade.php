<header id="header_part">
    <div id="header">
    
        <div class="container">
        <div>
             <a href="#"><img src="C:\xampp\htdocs\Car_Auction\public\assets\web\images\blog-post-02.jpg" alt="logo"></a>
        </div>
        

            
                <div style = "float: right">

                    <a href="{{route('web.register')}}"
                       class="button border sign-in "><i
                            class="fa fa-sign-in"></i>Register</a>
                </div>
                    <div style = "float: right">

                    <a href="{{route('web.login')}}"
                       class="button border sign-in "><i
                            class="fa fa-sign-in"></i> Log In</a>
                </div>
                <div style = "float: right">


                    <a href="{{route('user.add-car')}}"
                       class="button border with-icon"><i
                            class="sl sl-icon-user"></i> Add Car</a>
                </div>
                
            
            

            <div class="main_input_search_part utf_coupon_top">
                <div class="main_input_search_part_item">
                    <input type="text" placeholder="What are you looking for?" value=""/>
                </div>

                <button class="button" onclick="window.location.">Search</button>


            </div>

            <div class="utf_left_side">


                <div id="logo"><a href="index_1.html"><img src="images/logo.png" alt=""></a></div>


                <nav id="navigation" class="style_one">
                    <ul id="responsive">


                    
                        
                        <li><a href="{{route('web.roles')}}">How It Works</a>
                        </li>

                        <li><a href="{{route('web.vehicle_search')}}">Find Vehicles</a>

                        </li>
                        <li><a href="{{route('user.ad-list')}}">Ad List</a>
                        </li>

                        
                        
                        <li><a href="{{route('web.contact')}}">Contact us</a>
                        </li>

                        
                        <li><a href="{{route('web.about-us')}}">About Us</a>

                        </li>
                        <li><a href="{{route('web.roles')}}">Rules and Regulations</a>

                        </li>


                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>


        </div>
    </div>
</header>



