@extends('user.layout.layout')



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

                            <form id="addCarForm" action="{{route('user.add-ads-post')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <h5>Car Type:</h5>
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
                                    <h5>Make:</h5>
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
                                    <h5>Model:</h5>
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

                                    <div>
                                        <lable>Colour</lable>
                                        <select  name="colour_id" >

                                            @foreach(\App\Models\Colour::all() as $color)
                                            <option value="{{$color->id}}">{{{$color->title}}}</option>
                                            @endforeach
                                        </select>

                                        @error('colour_id')
                                        <small class="text-danger"> {{$message}}</small>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <lable>Engine type</lable>
                                        <input type="text" name="engine_type" value="{{old('engine_type')}}">

                                        @error('engine_type')
                                        <small class="text-danger"> {{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h5>Year:</h5>
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
                                    <h5>Country:</h5>
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
                                    <h5>City Name:</h5>
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
                                    <h5>Damage :</h5>
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
                                    <h5>Drive</h5>
                                    <input type="text" name="drive" value="{{old('drive')}}">

                                    @error('drive')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Odometer</h5>
                                    <input type="number" name="odometer" value="{{old('odometer')}}">
                                    @error('odometer')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>VRN</h5>
                                    <input type="text" name="vrn" value="{{old('vrn')}}">
                                    @error('vrn')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <h5>Primary Damage</h5>
                                    <select  name="primary_damage_id" >

                                        @foreach(\App\Models\PrimaryDamage::all() as $damage)

                                            <option value="{{$damage->id}}">{{$damage->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('primary_damage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Secondary Damage</h5>
                                    <select  name="secondary_damage_id" >
                                        @foreach(\App\Models\SecondaryDamage::all() as $damage)

                                            <option value="{{$damage->id}}">{{$damage->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('secondary_damage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Additional Damage</h5>
                                    <select  name="additional_damage_id" >
                                        @foreach(\App\Models\AdditionalDamage::all() as $damage)

                                            <option value="{{$damage->id}}">{{$damage->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('additional_damage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <h5>VIN</h5>
                                    <input type="text" name="vin" value="{{old('vin')}}">

                                    @error('vin')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Body Style</h5>
                                    <input type="text" name="body_style" value="{{old('body_style')}}">

                                    @error('body_style')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div>
                                        <lable>Type Sell</lable>
                                        <select  name="type_sell">

                                            <option value="normal">Normal</option>
                                            <option value="auction">Auction</option>

                                        </select>

                                        @error('type_sell')
                                        <small class="text-danger"> {{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h5>Transmission</h5>
                                    <input type="text" name="transmission" value="{{old('transmission')}}">

                                    @error('transmission')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Fuel</h5>
                                    <input type="text" name="fuel" value="{{old('fuel')}}">

                                    @error('fuel')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Keys</h5>
                                    <input type="text" name="keys" value="{{old('keys')}}">

                                    @error('keys')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>V5 Notes</h5>
                                    <input type="text" name="v_five_notes" value="{{old('v_five_notes')}}">

                                    @error('v_five_notes')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>VAT</h5>
                                    <input type="text" name="vat" value="{{old('vat')}}">

                                    @error('vat')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Additional Info</h5>
                                    <input type="text" name="additional_info" value="{{old('additional_info')}}">

                                    @error('additional_info')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Bid Status:</h5>
                                    <input type="text" name="bid_status" value="{{old('bid_status')}}">

                                    @error('bid_status')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Sale Status:</h5>
                                    <input type="text" name="sale_status" value="{{old('sale_status')}}">

                                    @error('sale_status')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Current Bid:</h5>
                                    <input type="text" name="current_bid" value="{{old('current_bid')}}">

                                    @error('current_bid')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Category:</h5>
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
                                    <h5>Condition:</h5>
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
                                    <h5>Base Price:</h5>
                                    <input type="text" name="base_price" value="{{old('base_price')}}">

                                    @error('base_price')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Rough Price:</h5>
                                    <input type="text" name="rough_price" value="{{old('rough_price')}}">

                                    @error('rough_price')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Buy Now:</h5>
                                    <input type="text" name="buy_now" value="{{old('buy_now')}}">

                                    @error('buy_now')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <h5>Sale Date:</h5>
                                    <input type="date" name="sale_date" value="{{old('sale_date')}}">

                                    @error('sale_date')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>



                                <div class="col-md-6">
                                    <h5>Image</h5>
                                    <input type="file" name="image" value="{{old('image')}}">

                                    @error('image')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                                <button type="submit" class="button preview"> Submit</button>
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

                    odometer: {
                        required: true,
                    },

                    vrn: {
                        required: true,
                    },



                    primary_damage: {
                        required: true,
                    },

                    secondary_damage: {
                        required: true,
                    },

                    additional_damage: {
                        required: true,
                    },


                    vin: {
                        required: true,
                    },

                    body_style: {
                        required: true,
                    },

                    colour_id: {
                        required: true,
                    },

                    type_sell: {
                        required: true,
                    },

                    engine_type: {
                        required: true,
                    },

                    transmission: {
                        required: true,
                    },

                    drive: {
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

                    vat: {
                        required: true,
                    },
                    // image: {
                    //     required: true,
                    // },

                }
            });
        </script>
@endsection






