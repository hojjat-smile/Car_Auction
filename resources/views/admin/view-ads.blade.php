@extends('admin.layout.layout')



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


        <div class="add_utf_listing_section margin-top-45">
            <div class="utf_add_listing_part_headline_part">
                <h3>Sell Your Car in a Copart Auction</h3>
            </div>


            <div class="row with-forms">
                <form id="addCarForm" action="{{route('admin.ads-update',$ads->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf


                    <div class="col-md-6">
                        <h5>Odometer</h5>
                        <input  disabled  type="number" name="odometer" value="{{$ads->odometer}}">
                        @error('odometer')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>VRN</h5>
                        <input   disabled  type="text" name="vrn" value="{{$ads->vrn}}">
                        @error('vrn')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <h5>Highlights</h5>
                        <input   disabled type="text" name="highlights" value="{{$ads->highlights}}">
                        @error('highlights')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Primary Damage</h5>
                        <input disabled name="primary_damage_id"  value="{{$ads->primaryDamage->title}}">


                        @error('primary_damage_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Secondary Damage</h5>
                        <input disabled name="secondary_damage_id"  value="{{$ads->secondaryDamage->title}}">


                        @error('secondary_damage_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Additional Damage</h5>
                        <input disabled type="text" name="additional_damage_id"  value="{{$ads->additionalDamage->title}}">



                        @error('additional_damage_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Est Retail Value</h5>
                        <input   disabled type="text" name="est_retail_value" value="{{$ads->est_retail_value}}">

                        @error('est_retail_value')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>VIN</h5>
                        <input  disabled  type="text" name="vin" value="{{$ads->vin}}">

                        @error('vin')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Body Style</h5>
                        <input  disabled  type="text" name="body_style" value="{{$ads->body_style}}">

                        @error('body_style')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <div>
                            <lable>Colour</lable>
                            <input disabled name="colour_id"   value="{{$ads->colour->title}}">



                            @error('colour_id')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <lable>TypeSell</lable>
                            <input   disabled type="text" name="type_sell" value="{{$ads->type_sell}}">

                            @error('type_sell')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <lable>Engine type</lable>
                            <input  disabled  type="text" name="engine_type" value="{{$ads->engine_type}}">

                            @error('engine_type')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <h5>Transmission</h5>
                        <input  disabled  type="text" name="transmission" value="{{$ads->transmission}}">

                        @error('transmission')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Drive</h5>
                        <input  disabled  type="text" name="drive" value="{{$ads->drive}}">

                        @error('drive')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Fuel</h5>
                        <input  disabled  type="text" name="fuel" value="{{$ads->fuel}}">

                        @error('fuel')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Keys</h5>
                        <input   disabled type="text" name="keys" value="{{$ads->keys}}">

                        @error('keys')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>V5 Notes</h5>
                        <input   disabled type="text" name="v_five_notes" value="{{$ads->v_five_notes}}">

                        @error('v_five_notes')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>VAT</h5>
                        <input   disabled type="text" name="vat" value="{{$ads->vat}}">

                        @error('vat')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Additional Info</h5>
                        <input  disabled  type="text" name="additional_info" value="{{$ads->additional_info}}">

                        @error('additional_info')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <h5>Bid Status:</h5>
                        <input  disabled  type="text" name="bid_status" value="{{$ads->bid_status}}">

                        @error('bid_status')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Sale Status:</h5>
                        <input  disabled  type="text" name="sale_status" value="{{$ads->sale_status}}">

                        @error('sale_status')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Current Bid:</h5>
                        <input  disabled  type="text" name="current_bid" value="{{$ads->current_bid}}">

                        @error('current_bid')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Year:</h5>
                        <input  disabled name="year"  value="{{$ads->year}}">



                        @error('year')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Country:</h5>
                        <input disabled name="country_id" value="{{$ads->country->title}}">



                        @error('country_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>City Name:</h5>
                        <input disabled type="text" name="city_id" value="{{$ads->city->title}}">



                        @error('city_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Damage :</h5>
                        <input disabled name="damage_id"  value="{{$ads->damage->title}}">



                        @error('damage_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Make:</h5>
                        <input disabled id="makerChange" name="maker_id" value="{{$ads->maker->title}}">



                        @error('maker_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Model:</h5>
                        <input disabled name="model_id" value="{{$ads->model->title}}">


                        @error('model_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Condition:</h5>
                        <input  disabled name="condition_id" value="{{$ads->condition->title}}" >

                        @error('condition_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Category:</h5>
                        <input disabled  name="category_id" value="{{$ads->category->title}}">



                        @error('category_id')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Image</h5>
                        <img width="40%" height="40%" src="{{asset($ads->image->image)}}" alt="">

                        @error('image')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                </form>
            </div>

        </div>


    </div>






@endsection


@section('script')

    <script src="{{asset('assets//web/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/additional-methods.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/messages_fa.min.js')}}"></script>

    <script>

        $("#addCarForm").validate({

            errorClass: "error-message",

            rules: {
                sellertype: {
                    required: true,
                },

                firstname: {
                    required: true,
                },

                lastname: {
                    required: true,
                },

                addressone: {
                    required: true,
                },

                addresstwo: {
                    required: true,
                },

                city: {
                    required: true,
                },

                postcode: {
                    required: true,
                },

                telephone: {
                    required: true,
                },

                email: {
                    required: true,
                },

                membernumber: {
                    required: true,
                },

                sellercode: {
                    required: true,
                },

                collectionaddress: {
                    required: true,
                },

                'collection-city': {
                    required: true,
                },

                mileage: {
                    required: true,
                },

                'collection-telephone': {
                    required: true,
                },

                // image: {
                //     required: true,
                // },

            }
        });
    </script>
@endsection
