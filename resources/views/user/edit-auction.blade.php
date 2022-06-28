@extends('user.layout.layout')

@section('title')
    Edit Auction
@endsection


@section('css')

@endsection


@section('main')

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Edit Auctuion</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index_1.html">Home</a></li>
                            <li>Edit Auctuion</li>
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

                    <div class="add_utf_listing_section margin-top-45">
                        <div class="utf_add_listing_part_headline_part">
                            <h3>Sell Your Car in a Copart Auction</h3>
                        </div>


                        <div class="row with-forms">

                            <form id="addCarForm" action="{{route('user.edit-auction-post',$ads->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <lable>Car Type:</lable>
                                    <select id="car_type_id" name="car_type_id">

                                        @foreach(\App\Models\CarType::all() as $carType)
                                            <option
                                                value="{{$carType->id}}" {{$ads->car_type_id == $carType->id ? 'selected' : '' }}>{{ $carType->title }}</option>
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
                                            <option
                                                value="{{$maker->id}}" {{$ads->maker_id == $maker->id ? 'selected' : '' }}>{{ $maker->title }}</option>
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
                                            <option
                                                value="{{$model->id}}" {{$ads->model_id == $model->id ? 'selected' : '' }}>{{ $model->title }}</option>
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
                                            <option
                                                value="{{$color->id}}" {{$ads->colour_id == $color->id ? 'selected' : '' }}>{{ $color->title }}</option>
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
                                            <option
                                                value="{{$category->id}}" {{$ads->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
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

                                    <input type="text" name="engine_type" value="{{$ads->engine_type}}">

                                    @error('engine_type')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <lable>Year:</lable>
                                    <select name="year">

                                        @foreach($time as $row)
                                            <option
                                                value="{{$row}}" {{$ads->year == $row ? 'selected' : '' }}>{{ $row }}</option>
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
                                            <option
                                                value="{{$country->id}}" {{$ads->country->id == $country->id ? 'selected' : '' }}>{{ $country->title }}</option>
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
                                            <option
                                                value="{{$city->id}}" {{$ads->city->id == $city->id ? 'selected' : '' }}>{{ $city->title }}</option>
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
                                            <option
                                                value="{{$damage->id}}" {{$ads->damage->id == $damage->id ? 'selected' : '' }}>{{ $damage->title }}</option>


                                        @endforeach
                                    </select>

                                    @error('damage_id')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Odometer</lable>
                                    <input type="number" name="odometer" value="{{$ads->odometer}}">
                                    @error('odometer')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Primary Damage</lable>
                                    <select name="primary_damage_id">

                                        @foreach(\App\Models\PrimaryDamage::all() as $damage)
                                            <option
                                                value="{{$damage->id}}" {{$ads->damage->id == $damage->id ? 'selected' : '' }}>{{ $damage->title }}</option>
                                        @endforeach
                                    </select>

                                    @error('primary_damage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Body Style</lable>
                                    <input type="text" name="body_style" value="{{$ads->body_style}}">

                                    @error('body_style')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Transmission</lable>
                                    <input type="text" name="transmission" value="{{$ads->transmission}}">

                                    @error('transmission')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Fuel</lable>
                                    <input type="text" name="fuel" value="{{$ads->fuel}}">

                                    @error('fuel')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Keys</lable>
                                    <input type="text" name="keys" value="{{$ads->keys}}">

                                    @error('keys')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>V5 Notes</lable>
                                    <input type="text" name="v_five_notes" value="{{$ads->v_five_notes}}">

                                    @error('v_five_notes')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Additional Info</lable>
                                    <input type="text" name="additional_info" value="{{$ads->additional_info}}">

                                    @error('additional_info')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>



                                <div class="col-md-6">
                                    <lable>Base Price:</lable>
                                    <input type="text" name="base_price" value="{{$ads->base_price}}">

                                    @error('base_price')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Rough Price:</lable>
                                    <input type="text" name="rough_price" value="{{$ads->rough_price}}">

                                    @error('rough_price')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <lable>Image One(Required)</lable>
                                    <input type="file" name="mainImage"/>
                                    @error('mainImage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <lable>Image Two (Optional)</lable>
                                    <input type="file" name="ImageTwo"/>
                                    @error('ImageTwo')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <lable>Image Three (Optional)</lable>
                                    <input type="file" name="ImageThree"/>
                                    @error('ImageThree')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <lable>Image Four (Optional)</lable>
                                    <input type="file" name="ImageFour"/>
                                    @error('ImageFour')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <lable>Image Five (Optional)</lable>
                                    <input type="file" name="ImageFive"/>
                                    @error('ImageFive')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="button preview">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <h3>Images</h3>
                <div class="row">
                    @foreach($ads->images as $image)
                        <div class="col-md-3">
                            <img src="{{asset($image->image)}}" alt="" width="100%"/>
                            <form
                                action="{{route('user.auction-image-delete',['imageId'=>$image->id,'adsId'=>$ads->id])}}">
                                <button class="button yellow" type="submit">Delete</button>
                            </form>
                            @if($image->main != 1)
                                <form
                                    action="{{route('user.auction-image-set-default',['imageId'=>$image->id,'adsId'=>$ads->id])}}">
                                    <button class="button green" type="submit">Set as Default</button>
                                </form>
                            @endif
                        </div>
                    @endforeach
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

                category_id: {
                    required: true,
                },

                odometer: {
                    required: true,
                },

                primary_damage: {
                    required: true,
                },
                year: {
                    required: true,
                },

                body_style: {
                    required: true,
                },

                colour_id: {
                    required: true,
                },

                type: {
                    required: true,
                },

                engine_type: {
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

                mainImage: {
                    required: true,
                },

                base_price: {
                    required: true,
                },
                rough_price: {
                    required: true,
                },
            }
        });
    </script>

@endsection






