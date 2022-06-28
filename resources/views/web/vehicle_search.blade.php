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

                                <form action="{{route('web.search-car')}}" method="post">
                                    @csrf


                                    <div class="col-lg-12 col-md-12 select_date_box">
                                        <input type="text" id="date-picker" placeholder="Select Date"
                                               readonly="readonly">
                                        <i class="fa fa-calendar"></i>
                                    </div>


                                    <div class="col-md-12">
                                        <h5>Year:</h5>
                                        <select name="year">
                                            @foreach($time as $row)

                                                <option value="{{$row}}">{{$row}}</option>
                                            @endforeach

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
                                        <select id="model_set" name="model_id">

                                            @foreach(\App\Models\ModelCar::all() as $model)
                                                <option value="{{$model->id}}">{{$model->title}}</option>

                                            @endforeach


                                        </select>

                                    </div>

                                    <div class="col-md-12">
                                        <h5>Categories:</h5>
                                        <select name="category">

                                            @foreach(\App\Models\Categories::all() as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>

                                            @endforeach
                                        </select>
                                    </div>

                                    <button class="button submit"> Search
                                    </button>
                                </form>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    @if($search != null)
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
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        @foreach($search as $ads)
                                            <tbody>
                                            <tr>

                                                <td>
                                                    <img src="{{asset($ads->image->image)}}">
                                                </td>

                                                <td> {{$ads->maker->title}}
                                                    {{$ads->model->title}} </td>


                                                <td>
                                                    <p>Odometer</p> {{substr($ads->odometer,0,15)." and......"}}

                                                </td>


                                                <td>{{substr($ads->damage->title,0,10)."......"}}</td>
                                                <td>{{$ads->type_sell}}</td>
                                                <td>
                                                    <a href="{{route('user.add-favorite',$ads->id)}}"> <span
                                                            class="table-action-icon icon-favorite icon-material-outline-favorite text-danger"></span></a>
                                                    <a href="{{route('user.bid-now',$ads->id)}}"><span
                                                            class="table-action-icon fa fa-legal icon-legal table-action-icon"></span></a>
                                                </td>


                                            </tr>

                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif

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
