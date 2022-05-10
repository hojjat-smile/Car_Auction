@extends('web.layout.layout')



@section('css')

@endsection


@section('main')


    <div class="clearfix"></div>
    <div id="titlebar" class="gradient margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Layout Grid Full Width Maps</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index_1.html">Home</a></li>
                            <li>Layout Grid Full Width Maps</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div id="utf_map_container" class="fullwidth_block-home-map margin-bottom-30">
        <div id="map" data-map-zoom="9"></div>
        <div class="main_inner_search_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_input_search_part">
                            <div class="main_input_search_part_item">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>
                            <div class="main_input_search_part_item intro-search-field">
                                <select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="7" title="Select Location">
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Brazil</option>
                                    <option>Burundi</option>
                                    <option>Bulgaria</option>
                                    <option>Germany</option>
                                    <option>Grenada</option>
                                    <option>Guatemala</option>
                                    <option>Iceland</option>
                                </select>
                            </div>
                            <div class="main_input_search_part_item intro-search-field">
                                <select data-placeholder="All Categories" class="selectpicker default" title="All Categories" data-live-search="true" data-selected-text-format="count" data-size="7">
                                    <option>Food & Restaurants </option>
                                    <option>Shop & Education</option>
                                    <option>Education</option>
                                    <option>Business</option>
                                    <option>Events</option>
                                </select>
                            </div>
                            <button class="button">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="scrollEnabling" title="Enable or disable scrolling on map">Scrolling Enable</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 listing_grid_item">
                <div class="listing_filter_block margin-top-30">
                    <div class="col-md-3 col-xs-3">
                        <div class="utf_layout_nav"> <a href="#" class="grid active"><i class="fa fa-th"></i></a> <a href="listings_list_full_width.html" class="list"><i class="fa fa-align-justify"></i></a> </div>
                    </div>
                    <div class="col-md-9 col-xs-9">
                        <div class="sort-by utf_panel_dropdown sort_by_margin float-right"> <a href="#">Destination</a>
                            <div class="utf_panel_dropdown-content">
                                <input class="distance-radius" type="range" min="1" max="999" step="1" value="1" data-title="Select Range">
                                <div class="panel-buttons">
                                    <button class="panel-apply">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item sort_by_margin">
                                <select data-placeholder="Sort by Listing" class="utf_chosen_select_single">
                                    <option>Sort by Listing</option>
                                    <option>Latest Listings</option>
                                    <option>Popular Listings</option>
                                    <option>Price (Low to High)</option>
                                    <option>Price (High to Low)</option>
                                    <option>Highest Reviewe</option>
                                    <option>Lowest Reviewe</option>
                                    <option>Newest Listing</option>
                                    <option>Oldest Listing</option>
                                    <option>Random Listings</option>
                                </select>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item sort_by_margin">
                                <select data-placeholder="Categories:" class="utf_chosen_select_single">
                                    <option>Categories</option>
                                    <option>Restaurant</option>
                                    <option>Health</option>
                                    <option>Hotels</option>
                                    <option>Real Estate</option>
                                    <option>Fitness</option>
                                    <option>Shopping</option>
                                    <option>Travel</option>
                                    <option>Shops</option>
                                    <option>Nightlife</option>
                                    <option>Events</option>
                                </select>
                            </div>
                        </div>
                        <div class="sort-by">
                            <div class="utf_sort_by_select_item utf_search_map_section">
                                <ul>
                                    <li><a class="utf_common_button" href="#"><i class="fa fa-dot-circle-o"></i>Near Me</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="1">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
                                <span class="utf_closed">Closed</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>Chontaduro Barcelona</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="2">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-02.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                    </div>
                                    <h3>The Lounge & Bar</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="3">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-03.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <span class="utf_open_now">Open Now</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>Westfield Sydney</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="4">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-04.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                    </div>
                                    <h3>Ruby Beauty Center</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="5">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-05.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>UK Fitness Club</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="6">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-06.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <span class="utf_closed">Closed</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>Fairmont Pacific Rim</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="1">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-01.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
                                <span class="utf_closed">Closed</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>Chontaduro Barcelona</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="2">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-02.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                    </div>
                                    <h3>The Lounge & Bar</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="3">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-03.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <span class="utf_open_now">Open Now</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>Westfield Sydney</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="4">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-04.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                    </div>
                                    <h3>Ruby Beauty Center</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="5">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-05.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span> <span class="featured_tag">Featured</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $25 - $55</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>UK Fitness Club</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                    <div class="col-md-4 col-lg-4 col-md-12"> <a href="listings_single_page_1.html" class="utf_listing_item-container" data-marker-id="6">
                            <div class="utf_listing_item"> <img src="images/utf_listing_item-06.jpg" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Hotels</span>
                                <span class="utf_closed">Closed</span>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_prige_block">
                                        <span class="utf_meta_listing_price"><i class="fa fa-tag"></i> $45 - $70</span>
                                        <span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
                                    </div>
                                    <h3>Fairmont Pacific Rim</h3>
                                    <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
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
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_pagination_container_part margin-top-20 margin-bottom-75">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('script')

@endsection
