@extends('web.layout.layout')

@section('css')

@endsection


@section('main')




    <!-- Dashboard -->
    <div>

        <div>

            <div class="container">
                <div class="row">

                    <!-- Sidebar -->
                    <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search">

                        <div class="utf_box_widget booking_widget_box">
                            <h3><i class="fa fa-calendar"></i> Booking
                                <div class="price">
                                    <span>185$<small>person</small></span>
                                </div>
                            </h3>
                            <div class="row with-forms margin-top-0">
                                <div class="col-lg-12 col-md-12 select_date_box">
                                    <input type="text" id="date-picker" placeholder="Select Date" readonly="readonly">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="col-lg-12">
                                    <div class="panel-dropdown time-slots-dropdown">
                                        <a href="#">Choose Time Slot...</a>
                                        <div class="panel-dropdown-content padding-reset">
                                            <div class="panel-dropdown-scrollable">
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-1">
                                                    <label for="time-slot-1">
                                                        <strong><span>1</span> : 8:00 AM - 8:30 AM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-2">
                                                    <label for="time-slot-2">
                                                        <strong><span>2</span> : 8:30 AM - 9:00 AM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-3">
                                                    <label for="time-slot-3">
                                                        <strong><span>3</span> : 9:00 AM - 9:30 AM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-4">
                                                    <label for="time-slot-4">
                                                        <strong><span>4</span> : 9:30 AM - 10:00 AM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-5">
                                                    <label for="time-slot-5">
                                                        <strong><span>5</span> : 10:00 AM - 10:30 AM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-6">
                                                    <label for="time-slot-6">
                                                        <strong><span>6</span> : 13:00 PM - 13:30 PM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-7">
                                                    <label for="time-slot-7">
                                                        <strong><span>7</span> : 13:30 PM - 14:00 PM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-8">
                                                    <label for="time-slot-8">
                                                        <strong><span>8</span> : 14:00 PM - 14:30 PM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-9">
                                                    <label for="time-slot-9">
                                                        <strong><span>9</span> : 15:00 PM - 15:30 PM</strong>
                                                    </label>
                                                </div>

                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-10">
                                                    <label for="time-slot-10">
                                                        <strong><span>10</span> : 16:00 PM - 16:30 PM</strong>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="panel-dropdown">
                                        <a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
                                        <div class="panel-dropdown-content">
                                            <div class="qtyButtons">
                                                <div class="qtyTitle">Adults</div>
                                                <input type="text" name="qtyInput" value="1">
                                            </div>
                                            <div class="qtyButtons">
                                                <div class="qtyTitle">Childrens</div>
                                                <input type="text" name="qtyInput" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h5>Country:</h5>
                                    <select name="country">

                                        <option value="{{2013}}">2013</option>
                                        <option value="{{2014}}">2014</option>
                                        <option value="{{2015}}">2015</option>
                                        <option value="{{2016}}">2016</option>
                                        <option value="{{2017}}">2017</option>
                                        <option value="{{2018}}">2018</option>
                                        <option value="{{2019}}">2019</option>
                                        <option value="{{2020}}">2020</option>
                                        <option value="{{2021}}">2021</option>
                                        <option value="{{2022}}">2022</option>
                                    </select>


                                </div>

                                <div class="col-md-12">
                                    <h5>Country:</h5>
                                    <select name="country">

                                        @foreach(\App\Models\Country::all() as $country)
                                            <option value="{{$country->id}}">{{$country->title}}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <h5>City Name:</h5>
                                    <select name="city_id">

                                        @foreach(\App\Models\City::all() as $city)

                                            <option value="{{$city->id}}">{{$city->title}}</option>

                                        @endforeach
                                    </select>


                                </div>

                                <div class="col-md-12">
                                    <h5>Damage :</h5>
                                    <select name="damage_id">

                                        @foreach(\App\Models\DamageType::all() as $damage)
                                            <option value="{{$damage->id}}">{{$damage->title}}</option>
                                        @endforeach
                                    </select>


                                </div>

                                <div class="col-md-12">
                                    <h5>Make:</h5>
                                    <select id="makerChange" name="maker_id">

                                        @foreach(\App\Models\Maker::all() as $maker)
                                            <option value="{{$maker->id}}">{{$maker->title}}</option>

                                        @endforeach
                                    </select>


                                </div>

                                <div class="col-md-12">
                                    <h5>Model:</h5>
                                    <select id="model_set" name="country">

                                        @foreach(\App\Models\ModelCar::all() as $model)
                                            <option value="{{$model->id}}">{{$model->title}}</option>

                                        @endforeach


                                    </select>

                                </div>

                                <div class="col-md-12">
                                    <h5>Categories:</h5>
                                    <select name="country">

                                        @foreach(\App\Models\Categories::all() as $country)
                                            <option value="{{$country->id}}">{{$country->title}}</option>

                                        @endforeach
                                    </select>
                                </div>


                            </div>
                            <a href="listing_booking.html"
                               class="utf_progress_button button fullwidth_block margin-top-5">Request
                                Booking</a>
                            <button class="like-button add_to_wishlist"><span class="like-icon"></span> Add to Wishlist
                            </button>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 mb-4">
                        <div class="utf_dashboard_list_box table-responsive recent_booking">
                            <h4>Recent Booking</h4>
                            <div class="dashboard-list-box table-responsive invoices with-icons">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>

                                        <th>Image</th>
                                        <th>Lot Info</th>
                                        <th>Vehicle Info</th>
                                        <th>Condition</th>
                                        <th>Sale Info</th>
                                        <th>Bids</th>

                                    </tr>
                                    </thead>
                                    @foreach(\App\Models\Ads::all() as $ads)
                                        <tbody>
                                        <tr>

                                            <td>
                                                <img src="{{asset($ads->image->image)}}">
                                            </td>

                                            <td><p>Model Name:</p> {{$ads->maker->title}} {{$ads->model->title}} {{$ads->year}}</td>


                                            <td>
                                                <li>
                                                    <p>Odometer</p> : {{$ads->odometer}}
                                                    <p>Estimated Retail Value:</p> {{$ads->est_retail_value}}
                                                </li>
                                            </td>


                                            <td>{{$ads->category->title}} , {{$ads->condition->title}}
                                                , {{$ads->damage->title}}</td>
                                            <td>{{$ads->type_sell}}</td>
                                            <td>{{$ads->type_sell}}</td>

                                        </tr>

                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>








@endsection


@section('script')

@endsection
