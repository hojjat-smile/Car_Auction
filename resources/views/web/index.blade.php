@extends('web.layout.layout')


@section('title')

@endsection




@section('main')

    <div class="clearfix">

        <div id="utf_rev_slider_block" class="rev_slider home fullwidthabanner" style="display:none;"
             data-version="5.0.7">
            <ul>
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade"
                    data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">
                    <img src="{{asset('assets/web/images/kia.jpg')}}" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                         data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone"
                         data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0"
                         data-offsetstart="0 0" data-offsetend="0 0">

                    <div
                        class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                        id="utf_slide_layer_item_one"
                        data-x="['center','center','center','center']" data-hoffset="['0']"
                        data-y="['70','30','20','0']" data-voffset="['0']"
                        data-width="['900','620', 640','420','320']"
                        data-height="auto"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo"
                        data-transform_out=""
                        data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1000"
                        data-responsive_offset="on">
                        <div class="utf_item_title margin-bottom-15"
                             id="utf_slide_layer_detail_one"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['20','20','20','20']"
                             data-voffset="['-40','-40','-20','-80']"
                             data-fontsize="['56','46','30','34','22']"
                             data-lineheight="['70','60','34','30','25']"
                             data-width="['960','620', 640','420','320']"
                             data-height="none" data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="600"
                             data-splitin="none"
                             data-splitout="none"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             style="z-index:6;color:#fff;letter-spacing:0px;font-weight:600;">Find & Explore Top City
                        </div>
                        <div class="utf_rev_description_text">Business owners - over a million people view these
                            listings every month - we highly recommend you ensure your business is properly listed.
                        </div>
                        <a href="#" class="button medium">View More</a>
                    </div>
                </li>

                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade"
                    data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">
                    <img src="{{asset('assets/web/images/hyundai.jpg')}}" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                         data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone"
                         data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0"
                         data-offsetstart="0 0" data-offsetend="0 0">
                    <div class="container main_inner_search_block margin-top-100">
                        <div class="main_input_search_part">
                            <div class="main_input_search_part_item">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>
                            <div class="main_input_search_part_item location">
                                <input type="text" placeholder="Search Location..." value=""/>
                                <a href="#"><i class="sl sl-icon-location"></i></a>
                            </div>
                            <div class="main_input_search_part_item intro-search-field">
                                <select data-placeholder="All Categories" class="selectpicker default"
                                        title="All Categories" data-selected-text-format="count" data-size="4">
                                    <option>Food & Restaurants</option>
                                    <option>Shop & Education</option>
                                    <option>Education</option>
                                    <option>Business</option>
                                    <option>Events</option>
                                </select>
                            </div>
                            <button class="button" onclick="window.location.">Search</button>
                        </div>
                    </div>
                    <div
                        class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                        id="utf_slide_layer_item_two"
                        data-x="['center','center','center','center']" data-hoffset="['0']"
                        data-y="['70','30','20','0']" data-voffset="['0']"
                        data-width="['900','620', 640','420','320']"
                        data-height="auto"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo"
                        data-transform_out=""
                        data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1000"
                        data-responsive_offset="on">
                        <div class="utf_item_title margin-bottom-15"
                             id="utf_slide_layer_detail_two"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['20','20','20','20']"
                             data-voffset="['-40','-40','-20','-80']"
                             data-fontsize="['56','42','30','27','22']"
                             data-lineheight="['70','60','34','30','25']"
                             data-width="['960','620', 640','420','320']"
                             data-height="none" data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="600"
                             data-splitin="none"
                             data-splitout="none"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             style="z-index:6;color:#fff;letter-spacing:0px;font-weight:600;">Find & Explore Top
                            Restaurants
                        </div>
                        <div class="utf_rev_description_text">Business owners - over a million people view these
                            listings every month - we highly recommend you ensure your business is properly listed.
                        </div>
                        <a href="#" class="button medium">View More</a>
                    </div>
                </li>

                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade"
                    data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">
                    <img src="{{asset('assets/web/images/bmw2.jpg')}}" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                         data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone"
                         data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0"
                         data-offsetstart="0 0" data-offsetend="0 0">
                    <div class="container main_inner_search_block margin-top-100">
                        <div class="main_input_search_part">
                            <div class="main_input_search_part_item">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>
                            <div class="main_input_search_part_item location">
                                <input type="text" placeholder="Search Location..." value=""/>
                                <a href="#"><i class="sl sl-icon-location"></i></a>
                            </div>
                            <div class="main_input_search_part_item intro-search-field">
                                <select data-placeholder="All Categories" class="selectpicker default"
                                        title="All Categories" data-selected-text-format="count" data-size="4">
                                    <option>Food & Restaurants</option>
                                    <option>Shop & Education</option>
                                    <option>Education</option>
                                    <option>Business</option>
                                    <option>Events</option>
                                </select>
                            </div>
                            <button class="button" onclick="window.location.">Search</button>
                        </div>
                    </div>
                    <div
                        class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                        id="utf_slide_layer_item_three"
                        data-x="['center','center','center','center']" data-hoffset="['0']"
                        data-y="['70','30','20','0']" data-voffset="['0']"
                        data-width="['900','620', 640','420','320']"
                        data-height="auto"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo"
                        data-transform_out=""
                        data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1000"
                        data-responsive_offset="on">
                        <div class="utf_item_title margin-bottom-15"
                             id="utf_slide_layer_detail_three"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['20','20','20','20']"
                             data-voffset="['-40','-40','-20','-80']"
                             data-fontsize="['56','46','30','30','22']"
                             data-lineheight="['70','60','34','30','25']"
                             data-width="['960','620', 640','420','320']"
                             data-height="none" data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="600"
                             data-splitin="none"
                             data-splitout="none"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             style="z-index:6;color:#fff;letter-spacing:0px;font-weight:600;">Find & Explore Nearest
                            Bars
                        </div>
                        <div class="utf_rev_description_text">Business owners - over a million people view these
                            listings every month - we highly recommend you ensure your business is properly listed.
                        </div>
                        <a href="#" class="button medium">View More</a>
                    </div>
                </li>
            </ul>
            <div class="tp-static-layers"></div>
        </div>

        <section class="fullwidth_block margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
            <div class="container">
                <div class="row slick_carousel_slider">
                    <div class="col-md-12">
                        <h3 class="headline_part centered margin-bottom-45"> Most Visited Places <span>Explore the greates places in the city</span>
                        </h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="simple_slick_carousel_block utf_dots_nav">
                                <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                                  class="utf_listing_item-container compact">
                                        <div class="utf_listing_item"><img
                                                src="{{asset('assets/web/images/lamborghini.jpg')}}" alt="">
                                            <span class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span>
                                            <span class="featured_tag">Featured</span>
                                            <span class="utf_open_now">Open Now</span>
                                            <div class="utf_listing_item_content">
                                                <div class="utf_listing_prige_block">
                                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                                    <span class="utp_approve_item"><i
                                                            class="utf_approve_listing"></i></span>
                                                </div>
                                                <h3>Chontaduro Barcelona</h3>
                                                <span><i
                                                        class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            </div>
                                        </div>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                            <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                            <span class="like-icon"></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                                  class="utf_listing_item-container compact">
                                        <div class="utf_listing_item"><img src="{{asset('assets/web/images/hyundai.jpg')}}"
                                                                           alt="">
                                            <span class="tag"><i class="im im-icon-Electric-Guitar"></i> Events</span>
                                            <div class="utf_listing_item_content">
                                                <div class="utf_listing_prige_block">
                                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                                </div>
                                                <h3>The Lounge & Bar</h3>
                                                <span><i
                                                        class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            </div>
                                        </div>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                            <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                            <span class="like-icon"></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                                  class="utf_listing_item-container compact">
                                        <div class="utf_listing_item"><img src="{{asset('assets/web/images/kia.jpg')}}"
                                                                           alt="">
                                            <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                            <span class="utf_closed">Closed</span>
                                            <div class="utf_listing_item_content">
                                                <div class="utf_listing_prige_block">
                                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                                </div>
                                                <h3>Westfield Sydney</h3>
                                                <span><i
                                                        class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            </div>
                                        </div>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                            <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                            <span class="like-icon"></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                                  class="utf_listing_item-container compact">
                                        <div class="utf_listing_item"><img src="{{asset('assets/web/images/bmw.jpg')}}"
                                                                           alt="">
                                            <span class="tag"><i class="im im-icon-Dumbbell"></i> Fitness</span>
                                            <div class="utf_listing_item_content">
                                                <div class="utf_listing_prige_block">
                                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                                    <span class="utp_approve_item"><i
                                                            class="utf_approve_listing"></i></span>
                                                </div>
                                                <h3>Ruby Beauty Center</h3>
                                                <span><i
                                                        class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            </div>
                                        </div>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                            <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                            <span class="like-icon"></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                                  class="utf_listing_item-container compact">
                                        <div class="utf_listing_item"><img
                                                src="{{asset('assets/web/images/lamborghini.jpg')}}" alt="">
                                            <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span
                                                class="featured_tag">Featured</span>
                                            <span class="utf_closed">Closed</span>
                                            <div class="utf_listing_item_content">
                                                <div class="utf_listing_prige_block">
                                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                                </div>
                                                <h3>UK Fitness Club</h3>
                                                <span><i
                                                        class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            </div>
                                        </div>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                            <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                            <span class="like-icon"></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="utf_carousel_item"><a href="listings_single_page_1.html"
                                                                  class="utf_listing_item-container compact">
                                        <div class="utf_listing_item"><img src="{{asset('assets/web/images/bmw2.jpg')}}"
                                                                           alt="">
                                            <span class="tag"><i class="im im-icon-Chef-Hat"></i> Restaurant</span>
                                            <span class="utf_open_now">Open Now</span>
                                            <div class="utf_listing_item_content">
                                                <div class="utf_listing_prige_block">
                                                    <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $45</span>
                                                    <span class="utp_approve_item"><i
                                                            class="utf_approve_listing"></i></span>
                                                </div>
                                                <h3>Fairmont Pacific Rim</h3>
                                                <span><i
                                                        class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                                <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            </div>
                                        </div>
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                            <span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
                                            <span class="like-icon"></span>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fullwidth_block margin-top-0 padding-top-75 padding-bottom-65" data-background-color="#f9f9f9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="headline_part centered margin-bottom-20">Choose Your Plan<span>Discover & connect with top-rated local businesses</span>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="utf_pricing_container_block margin-top-30 margin-bottom-20">
                        <div class="plan featured col-md-3 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Basic</h3>
                                <span class="value">$29<span>/Par Month</span></span> <span class="period">Basic User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-3 col-sm-6 col-xs-12 active">
                            <div class="utf_price_plan">
                                <h3>Business</h3>
                                <span class="value">$49<span>/Par Month</span></span> <span class="period">Business User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-3 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Premium</h3>
                                <span class="value">$69<span>/Par Month</span></span> <span class="period">Premium User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>

                        <div class="plan featured col-md-3 col-sm-6 col-xs-12">
                            <div class="utf_price_plan">
                                <h3>Platinum</h3>
                                <span class="value">$99<span>/Par Month</span></span> <span class="period">Platinum User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>One Time Fee</li>
                                    <li>One Listing</li>
                                    <li>90 Days Availability</li>
                                    <li>Featured In Search Results</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a class="button border" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fullwidth_block padding-top-75 padding-bottom-75">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="headline_part centered margin-bottom-50"> Letest Tips & Blog<span>Discover & connect with top-rated local businesses</span>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12"><a href="blog_detail_post.html"
                                                                class="blog_compact_part-container">
                            <div class="blog_compact_part"><img src="{{asset('assets/web/images/hyundai.jpg')}}" alt="">
                                <div class="blog_compact_part_content">
                                    <h3>The Most Popular New top Places Listing</h3>
                                    <ul class="blog_post_tag_part">
                                        <li>22 January 2019</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12"><a href="blog_detail_post.html"
                                                                class="blog_compact_part-container">
                            <div class="blog_compact_part"><img src="{{asset('assets/web/images/kia.jpg')}}" alt="">
                                <div class="blog_compact_part_content">
                                    <h3>Greatest Event Places in Listing</h3>
                                    <ul class="blog_post_tag_part">
                                        <li>18 January 2019</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12"><a href="blog_detail_post.html"
                                                                class="blog_compact_part-container">
                            <div class="blog_compact_part"><img src="{{asset('assets/web/images/lamborghini.jpg')}}"
                                                                alt="">
                                <div class="blog_compact_part_content">
                                    <h3>Top 15 Greatest Ideas for Health & Body</h3>
                                    <ul class="blog_post_tag_part">
                                        <li>10 January 2019</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12"><a href="blog_detail_post.html"
                                                                class="blog_compact_part-container">
                            <div class="blog_compact_part"><img src="{{asset('assets/web/images/bmw2.jpg')}}" alt="">
                                <div class="blog_compact_part_content">
                                    <h3>Top 10 Best Clothing Shops in Sydney</h3>
                                    <ul class="blog_post_tag_part">
                                        <li>18 January 2019</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 centered_content"><a href="blog_page.html"
                                                               class="button border margin-top-20">View More Blog</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection


@section('script')

@endsection
