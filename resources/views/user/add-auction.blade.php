@extends('user.layout.layout')

@section('title')
    Add Auction
@endsection


@section('css')

@endsection


@section('main')

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Car</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index_1.html">Home</a></li>
                            <li>Add Car</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container margin-bottom-75 ">

        <div class="col-fs-12">
            <div class="col-lg-12">
                <div id="utf_add_listing_part">

                    <div class="add_utf_listing_sectio-top-45">
                        <div>
                            <h3> Sell Vehicles with Copart's patented auction platform</h3>
                        </div>

                        <div class="row with-forms">
                            <p>Copart are global experts in vehicle remarketing, handling more than 400,000 vehicles per
                                year through our online auctions in the UK alone.

                                We provide a dedicated service to the motor industry across the UK, from franchised
                                garages to independent traders.

                                We sell vehicles on behalf of motor traders via our online vehicle auctions, giving them
                                access to thousands of potential buyers every day. </p>
                        </div>
                    </div>
                    <div class="add_utf_listing_sectio-top-45">
                        <div>
                            <h3>We specialise in selling:</h3>
                        </div>

                        <div class="row with-forms">
                            <p>Used vehicles
                                High mileage vehicles
                                Classics
                                Ageing stock
                                Accident damaged vehicles
                                Vehicles with mechanical issues / non-runners </p>
                        </div>
                    </div>
                    <div class="add_utf_listing_sectio-top-45">
                        <div>
                            <h3>We specialise in selling:</h3>
                        </div>

                        <div>
                            <p>Used vehicles
                                High mileage vehicles
                                Classics
                                Ageing stock
                                Accident damaged vehicles
                                Vehicles with mechanical issues / non-runners
                                We market your vehicle to the right audiences within our global buyer base to ensure a
                                competitive auction, with 96% of vehicles viewed within 24 hours of being added to our
                                website.

                            </p>
                        </div>
                    </div>
                    <div class="add_utf_listing_sectio-top-45">
                        <div>
                            <h3>Benefits of Selling at a Copart auction</h3>
                        </div>

                        <div>
                            <p>Quick turnaround times
                                Sell to global buyers in over 110 countries
                                30+ years industry experience
                                We average over 2,000 attendees per auction lane
                                Over 2 million website visits each month
                                Conveniently sell online through our daily online auctions
                                415 acres of secure nationwide facilities to store your vehicles
                                300+ transporters in our owned transport fleet able to collect any kind of vehicle
                                within 2 days of assignment
                                Our continual investment in our people and our technology is focused on providing the
                                highest level of customer service to both you and your vehicles, so you can enjoy
                                maximum returns.

                                How do I start selling?
                                Simply complete our online consignment form and enter your vehicle into an auction
                                (terms and conditions apply).

                                Once you have submitted your form, you will be assigned a dedicated Copart contact who
                                will be able to support you with the process of selling your vehicle at auction.

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-fs-12">
            <div class="col-lg-12">
                <div id="utf_add_listing_part">

                    <div class="add_utf_listing_section margin-top-45">
                        <div class="utf_add_listing_part_headline_part">
                            <h3>Sell Your Car in a Copart Auction</h3>
                        </div>


                        <div class="row with-forms">

                            <form id="addCarForm" action="{{route('user.add-auction-post')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <lable>Car Type:</lable>
                                    <select id="car_type_id" name="car_type_id">

                                        @foreach(\App\Models\CarType::all() as $carType)
                                            <option value="{{$carType->id}}">{{$carType->title}}</option>
                                        @endforeach

                                    </select>

                                    @error('car_type_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Make:</lable>
                                    <select id="makerChange" name="maker_id">

                                        @foreach(\App\Models\Maker::all() as $maker)
                                            <option value="{{$maker->id}}">{{$maker->title}}</option>
                                        @endforeach

                                    </select>

                                    @error('maker_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Model:</lable>
                                    <select id="model_set" name="model_id">
                                        @foreach(\App\Models\ModelCar::all() as $model)
                                            <option value="{{$model->id}}">{{$model->title}}</option>

                                        @endforeach
                                    </select>

                                    @error('model_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Colour</lable>
                                    <select name="colour_id">

                                        @foreach(\App\Models\Colour::all() as $color)
                                            <option value="{{$color->id}}">{{{$color->title}}}</option>
                                        @endforeach
                                    </select>

                                    @error('colour_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Category:</lable>
                                    <select name="category_id">

                                        @foreach(\App\Models\Categories::all() as $category)

                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Condition:</lable>
                                    <select name="condition_id">

                                        <option value="{{1}}">All</option>
                                        <option value="{{2}}">Used</option>
                                        <option value="{{3}}">Salvage</option>

                                    </select>

                                    @error('condition_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Engine type</lable>
                                    <input type="text" name="engine_type" value="{{old('engine_type')}}">

                                    @error('engine_type')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Year:</lable>
                                    <select name="year">

                                        @foreach($time as $row)

                                            <option value="{{$row}}">{{$row}}</option>

                                        @endforeach

                                    </select>

                                    @error('year')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Country:</lable>
                                    <select name="country_id">

                                        @foreach(\App\Models\Country::all() as $country)
                                            <option value="{{$country->id}}">{{$country->title}}</option>

                                        @endforeach
                                    </select>

                                    @error('country_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>City Name:</lable>
                                    <select type="text" name="city_id">

                                        @foreach(\App\Models\City::all() as $city)

                                            <option value="{{$city->id}}">{{$city->title}}</option>

                                        @endforeach
                                    </select>

                                    @error('city_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Damage :</lable>
                                    <select name="damage_id">

                                        @foreach(\App\Models\DamageType::all() as $damage)
                                            <option value="{{$damage->id}}">{{$damage->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('damage_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Odometer</lable>
                                    <input type="number" name="odometer" value="{{old('odometer')}}">
                                    @error('odometer')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Primary Damage</lable>
                                    <select name="primary_damage_id">

                                        @foreach(\App\Models\PrimaryDamage::all() as $damage)

                                            <option value="{{$damage->id}}">{{$damage->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('primary_damage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Body Style</lable>
                                    <input type="text" name="body_style" value="{{old('body_style')}}">

                                    @error('body_style')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Transmission</lable>
                                    <input type="text" name="transmission" value="{{old('transmission')}}">

                                    @error('transmission')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Fuel</lable>
                                    <input type="text" name="fuel" value="{{old('fuel')}}">

                                    @error('fuel')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Keys</lable>
                                    <input type="text" name="keys" value="{{old('keys')}}">

                                    @error('keys')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>V5 Notes</lable>
                                    <input type="text" name="v_five_notes" value="{{old('v_five_notes')}}">

                                    @error('v_five_notes')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Additional Info</lable>
                                    <input type="text" name="additional_info" value="{{old('additional_info')}}">

                                    @error('additional_info')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Current Bid:</lable>
                                    <input type="text" name="current_bid" value="{{old('current_bid')}}">

                                    @error('current_bid')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Base Price:</lable>
                                    <input type="text" name="base_price" value="{{old('base_price')}}">

                                    @error('base_price')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Rough Price:</lable>
                                    <input type="text" name="rough_price" value="{{old('rough_price')}}">

                                    @error('rough_price')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <lable>Image One (Required)</lable>
                                    <input type="file" name="mainImage" />
                                    @error('mainImage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Image Two (Optional)</lable>
                                    <input type="file" name="ImageTwo" />
                                    @error('ImageTwo')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <lable>Image Three (Optional)</lable>
                                    <input type="file" name="ImageThree" />
                                    @error('ImageThree')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <lable>Image Four (Optional)</lable>
                                    <input type="file" name="ImageFour" />
                                    @error('ImageFour')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <lable>Image Five (Optional)</lable>
                                    <input type="file" name="ImageFive" />
                                    @error('ImageFive')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="button preview"> Submit</button>
                                </div>


                            </form>

                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection


@section('script')

    <script src="{{asset('assets//web/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/additional-methods.min.js')}}"></script>

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

    <script>

        $("#addCarForm").validate({

            errorClass: "error-message",

            rules: {

                category: {
                    required: true,
                },
                base_price: {
                    required: true,
                },
                rough_price: {
                    required: true,
                },
                car_type_id: {
                    required: true,
                },
                maker_id: {
                    required: true,
                },
                model_id: {
                    required: true,
                },
                colour_id: {
                    required: true,
                },
                category_id: {
                    required: true,
                },
                condition_id: {
                    required: true,
                },
                engine_type: {
                    required: true,
                },
                year: {
                    required: true,
                },
                country_id: {
                    required: true,
                },
                city_id: {
                    required: true,
                },
                damage_id: {
                    required: true,
                },
                odometer: {
                    required: true,
                },
                primary_damage_id: {
                    required: true,
                },
                body_style: {
                    required: true,
                },
                transmission: {
                    required: true,
                },
                fuel: {
                    required: true,
                },
                keys: {
                    required: true,
                },
                v_five_notes: {
                    required: true,
                },
                additional_info: {
                    required: true,
                },
                current_bid: {
                    required: true,
                },
            }
        });
    </script>

@endsection






