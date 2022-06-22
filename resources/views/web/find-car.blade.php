@extends('web.layout.layout')

@section('css')

@endsection


@section('main')

    <div class="findCar">
        <div class="container">
            @if($maker !=null)
                <div class="col-md-12">
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

                                @foreach($maker as $row)
                                    @foreach($row->ads as $ads)
                                        @if($ads->is_published == 1)

                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img class="image-style"
                                                         src="{{asset($ads->image->image)}}">
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

                                        @endif
                                    @endforeach
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                @if($maker ==null)
                    <div class="col-lg-3 col-md-4 margin-top-75 sidebar-search">
                        <div class="utf_box_widget booking_widget_box margin-bottom-50">
                            <h3>Filter</h3>
                            <div class="row with-forms margin-top-0">

                                <form action="{{route('web.search-car')}}" method="post">
                                    @csrf

                                    <div class="col-md-12 margin-bottom-15">

                                        <h5>Condition</h5>

                                        <ul style="display: flex;padding: 0">
                                            <li>
                                                <button type="button" name="all" class="button">All</button>
                                            </li>
                                            <li>
                                                <button type="button" name="used" class="button">Used</button>
                                            </li>
                                            <li>
                                                <button type="button" name="salvage" class="button">Salvage</button>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">
                                        <h5>Years</h5>

                                        <label>From</label>
                                        <select name="year">
                                            @foreach($time as $row)

                                                <option value="{{$row}}">{{$row}}</option>
                                            @endforeach
                                        </select>

                                        <label>To</label>

                                        <select name="year">
                                            @foreach($time as $row)
                                                <option value="{{$row}}">{{$row}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="com-md-12 margin-bottom-15">
                                        <h5>Country</h5>


                                        <select name="country">

                                            @foreach(\App\Models\Country::all() as $country)
                                                <option value="{{$country->id}}">{{$country->title}}</option>

                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>City</h5>

                                        <select name="city_id">

                                            @foreach(\App\Models\City::all() as $city)

                                                <option value="{{$city->id}}">{{$city->title}}</option>

                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>Damage</h5>

                                        <select name="damage_id">

                                            @foreach(\App\Models\DamageType::all() as $damage)
                                                <option value="{{$damage->id}}">{{$damage->title}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>Make</h5>

                                        <select id="makerChange" name="maker_id">

                                            @foreach(\App\Models\Maker::all() as $maker)
                                                <option value="{{$maker->id}}">{{$maker->title}}</option>

                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>Model</h5>

                                        <select id="model_set" name="model_id">

                                            @foreach(\App\Models\ModelCar::all() as $model)
                                                <option value="{{$model->id}}">{{$model->title}}</option>

                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>Categories</h5>

                                        <select name="category">

                                            @foreach(\App\Models\Categories::all() as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>

                                            @endforeach
                                        </select>

                                    </div>

                                    <button class="button submit"> Search</button>
                                </form>

                            </div>


                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8  margin-top-75">
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
                                    @foreach(\App\Models\Ads::all() as $ads)

                                        @if($ads->is_published == 1)

                                            <tbody>
                                            <tr>

                                                <td>
                                                    <img src="{{asset($ads->image->image)}}"
                                                         style="width: 100px;border-radius: 5px;"/>
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
                                        @endif
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script src="{{asset('assets//web/scripts/jquery.min.js')}}"></script>
    <script>

        $(document).ready(function () {
            // for order to persons

            $('#makerChange').on('change', function () {

                var make_id = $(this).val();

                var models = @json(\App\Models\ModelCar::all());

                var modelsForSelect = [];

                models.forEach(model => {

                    if (model.make_id == make_id) {
                        modelsForSelect.push(model);
                    }
                });

                $("#model_set").find("option").remove();

                modelsForSelect.forEach(model => {

                    var option = $("<option />", {
                        value: model.id,
                        text: model.title,
                    })

                    $("#model_set").append(option);
                });

            });
        });
    </script>
@endsection
