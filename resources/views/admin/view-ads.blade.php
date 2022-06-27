@extends('admin.layout.layout')



@section('title')
    View Ads
@endsection

@section('css')

@endsection


@section('main')


    <div class="container margin-bottom-75 ">


        <div class="add_utf_listing_section margin-top-45">
            <div class="utf_add_listing_part_headline_part">
                <h3>View Ads</h3>
            </div>


            <div class="row with-forms">
                <form id="addCarForm" action="{{route('user.ads-update',$ads->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-6">
                        <lable>Car Type:</lable>
                        <select disabled id="car_type_id" name="car_type_id">

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
                        <select disabled id="makerChange" name="maker_id">

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
                        <select disabled id="model_set" name="model_id">
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
                        <select disabled name="colour_id">

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
                        <select disabled name="category_id">

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

                        <select disabled name="condition_id">
                            @if($ads->condition_id ==1)
                                <option value="{{1}}">All</option>
                            @elseif($ads->condition_id ==2)
                                <option value="{{2}}">Used</option>
                            @elseif($ads->condition_id ==3)
                                <option value="{{3}}">Salvage</option>
                            @endif
                        </select>

                        @error('condition_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </div>

                    <div class="col-md-6">

                        <lable>Engine type</lable>

                        <input disabled type="text" name="engine_type" value="{{$ads->engine_type}}">

                        @error('engine_type')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </div>

                    <div class="col-md-6">
                        <lable>Year:</lable>
                        <select disabled name="year">

                            @foreach($time as $row)
                                <option value="{{$row}}" {{$ads->year == $row ? 'selected' : '' }}>{{ $row }}</option>
                            @endforeach

                        </select>

                        @error('year')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <lable>Country:</lable>
                        <select disabled name="country_id">
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
                        <select disabled type="text" name="city_id">

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
                        <select disabled name="damage_id">

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
                        <input disabled type="number" name="odometer" value="{{$ads->odometer}}">
                        @error('odometer')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <lable>Primary Damage</lable>
                        <select disabled name="primary_damage_id">

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
                        <input disabled type="text" name="body_style" value="{{$ads->body_style}}">

                        @error('body_style')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <lable>Transmission</lable>
                        <input disabled type="text" name="transmission" value="{{$ads->transmission}}">

                        @error('transmission')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <lable>Fuel</lable>
                        <input disabled type="text" name="fuel" value="{{$ads->fuel}}">

                        @error('fuel')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <lable>Keys</lable>
                        <input disabled type="text" name="keys" value="{{$ads->keys}}">

                        @error('keys')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <lable>V5 Notes</lable>
                        <input disabled type="text" name="v_five_notes" value="{{$ads->v_five_notes}}">

                        @error('v_five_notes')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <lable>Additional Info</lable>
                        <input disabled type="text" name="additional_info" value="{{$ads->additional_info}}">

                        @error('additional_info')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <lable>Images</lable>
                        <div class="row">
                            @foreach($ads->images as $image)
                                <div class="col-md-3">
                                    <img src="{{asset($image->image)}}" alt="" width="100%"/>
                                    <form action="{{route('admin.')}}">
                                        <button type="submit">Delete</button>
                                    </form>
                                    <form action="">
                                        <button type="submit">Set as Default</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="button preview"> Submit</button>
                    </div>


                </form>
            </div>

        </div>


    </div>






@endsection


@section('script')

@endsection
