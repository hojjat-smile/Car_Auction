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
                        <h5>Seller Type</h5>
                        <input type="number" name="sellertype" value="{{$ads->sellertype}}">
                        @error('sellertype')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Seller First Name</h5>
                        <input type="text" name="firstname"   value="{{$ads->firstname}}">
                        @error('firstname')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Seller Last Name</h5>
                        <input type="text" name="lastname"  value="{{$ads->lastname}}">
                        @error('lastname')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <h5>Seller Address Line 1</h5>
                        <input type="text" name="addressone"  value="{{$ads->addressone}}">
                        @error('addressone')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Seller Address Line 2 (optional)</h5>
                        <input type="text" name="addresstwo"  value="{{$ads->addresstwo}}">

                        @error('addresstwo')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Seller Town/City</h5>
                        <input type="text" name="city"  value="{{$ads->city}}">

                        @error('city')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Seller Postcode</h5>
                        <input type="number" name="postcode"  value="{{$ads->postcode}}">

                        @error('postcode')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Seller Telephone</h5>
                        <input type="number" name="telephone"  value="{{$ads->telephone}}">

                        @error('telephone')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Email Address</h5>
                        <input type="email" name="email"  value="{{$ads->email}}">

                        @error('email')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Member Number</h5>
                        <input type="number" name="membernumber"  value="{{$ads->membernumber}}">

                        @error('membernumber')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">

                        <h5>Seller Code</h5>
                        <input type="number" name="sellercode"  value="{{$ads->sellercode}}">

                        @error('sellercode')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </div>

                    <div class="col-md-6">
                        <div>
                            <h5>Collection Address</h5>
                            <input type="text" name="collectionaddress"  value="{{$ads->collectionaddress}}">

                            @error('collectionaddress')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <h5>Collection City</h5>
                            <input type="text" name="collection_city"  value="{{$ads->collection_city}}">

                            @error('collection-city')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <h5>Mileage</h5>
                        <input type="number" name="mileage"  value="{{$ads->mileage}}">

                        @error('mileage')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <h5>Collection Telephone</h5>
                        <input type="text" name="collection_telephone"  value="{{$ads->collection_telephone}}">

                        @error('collection-telephone')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <h5>Select Image</h5>
                        <input type="file" name="image">

                        @error('image')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="button preview"> Update</button>
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
