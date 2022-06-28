@extends('web.layout.layout')

@section('title')
    Find Vehicles
@endsection

@section('css')
    <style>
        label.button{
            background-color: #ff2222;
            top: 0;
            padding: 10px 20px;
            color: #fff;
            position: relative;
            font-size: 16px;
            font-weight: 500;
            display: inline-block;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            margin-right: 6px;
            overflow: hidden;
            border: none;
            border-radius: 4px;
        }
        input[name="condition_type"]:checked + label{
            background-color:#b02c2c;
        }
    </style>
@endsection


@section('main')

    <div class="findCar">
        <div class="container">
            <div class="row">

                    <div class="col-lg-3 col-md-4 margin-top-75 sidebar-search">
                        <div class="utf_box_widget booking_widget_box margin-bottom-50">
                            <h3>Filter</h3>
                            <div class="row with-forms margin-top-0">

                                <form action="{{route('web.find-car')}}" method="post">
                                    @csrf

                                    <div class="col-md-12 margin-bottom-15">

                                        <h5>Condition</h5>

                                        <ul style="display: flex;padding: 0">
                                            <li>
                                                <input type="radio" style="display: none;" checked name="condition_type" value="1" id="AllItem" />
                                                <label class="button" for="AllItem">All</label>
                                            </li>
                                            <li>
                                                <input type="radio" style="display: none;" name="condition_type" value="2" id="UsedItem" />
                                                <label class="button" for="UsedItem">Used</label>
                                            </li>
                                            <li>
                                                <input type="radio" style="display: none;" name="condition_type" value="3" id="SalvageItem" />
                                                <label class="button" for="SalvageItem">Salvage</label>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">
                                        <h5>Years</h5>

                                        <label>From</label>
                                        <select name="fromYear">
                                            <option value="0">From</option>
                                            @foreach($time as $row)

                                                <option value="{{$row}}">{{$row}}</option>
                                            @endforeach
                                        </select>

                                        <label>To</label>

                                        <select name="toYear">
                                            <option value="0">To</option>
                                            @foreach($time as $row)
                                                <option value="{{$row}}">{{$row}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="com-md-12 margin-bottom-15">
                                        <h5>Country</h5>


                                        <select name="country">
                                            <option value="0">Select Country</option>
                                            @foreach(\App\Models\Country::all() as $country)
                                                <option value="{{$country->id}}">{{$country->title}}</option>

                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>City</h5>

                                        <select name="city">
                                            <option value="0"> Select City </option>
                                            @foreach(\App\Models\City::all() as $city)

                                                <option value="{{$city->id}}">{{$city->title}}</option>

                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>Damage</h5>

                                        <select name="damage">
                                            <option value="0">Damage Type</option>
                                            @foreach(\App\Models\DamageType::all() as $damage)
                                                <option value="{{$damage->id}}">{{$damage->title}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>Make</h5>

                                        <select id="makerChange" name="maker">
                                            <option value="0">Maker</option>
                                            @foreach(\App\Models\Maker::all() as $row)
                                                <option value="{{$row->id}}">{{$row->title}}</option>

                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="com-md-12 margin-bottom-15">

                                        <h5>Categories</h5>

                                        <select name="category">

                                            <option value="0">Select Category</option>
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

                @if($maker != null)
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
                                    @foreach($search as $ads)
                                        @if($ads->is_published == 1)

                                            <tbody>
                                            <tr>

                                                <td>

                                                    <a href="{{route('web.single-page',$ads->id)}}">

                                                        @if($ads->images()->where('main',1)->first() != null)
                                                            <img style="width: 250px; height: 150px"  src="{{asset($ads->images()->where('main',1)->first()->image  ?? null)}}" alt="">
                                                        @else
                                                            <img style="width: 250px; height: 150px" src="{{asset($ads->images()->first()->image ?? null)}}" alt="">
                                                        @endif
                                                    </a>



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
{{--                                                    <a href="{{route('user.bid-now',$ads->id)}}"><span--}}
{{--                                                            class="table-action-icon fa fa-legal icon-legal table-action-icon"></span></a>--}}
                                                </td>


                                            </tr>

                                            </tbody>
                                        @endif
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            {!! $search->render() !!}
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
