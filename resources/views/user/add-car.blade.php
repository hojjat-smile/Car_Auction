@extends('web.layout.layout')



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
        <div class="col-fs-6">
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
        <div class="col-fs-6">
            <div class="col-lg-12">
                <div id="utf_add_listing_part">

                    <div class="add_utf_listing_section margin-top-45">
                        <div class="utf_add_listing_part_headline_part">
                            <h3>Sell Your Car in a Copart Auction</h3>
                        </div>

                        <div class="row with-forms">
                            <form id="addCarForm" action="{{route('user.add-car-post')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12">
                                    <h5>Seller Type</h5>
                                    <input type="number" name="sellertype">
                                    @error('sellertype')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Seller First Name</h5>
                                    <input type="text" name="firstname">
                                    @error('firstname')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Seller Last Name</h5>
                                    <input type="text" name="lastname">
                                    @error('lastname')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <h5>Seller Address Line 1</h5>
                                    <input type="text" name="addressone">
                                    @error('addressone')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Seller Address Line 2 (optional)</h5>
                                    <input type="text" name="addresstwo">

                                    @error('addresstwo')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Seller Town/City</h5>
                                    <input type="text" name="city">

                                    @error('city')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Seller Postcode</h5>
                                    <input type="number" name="postcode">

                                    @error('postcode')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Seller Telephone</h5>
                                    <input type="number" name="telephone">

                                    @error('telephone')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Email Address</h5>
                                    <input type="email" name="email">

                                    @error('email')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <h5>Member Number</h5>
                                    <input type="number" name="membernumber">

                                    @error('membernumber')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Collection Address*</h5>
                                    <div>
                                        <lable>Seller Code</lable>
                                        <input type="number" name="sellercode">

                                        @error('sellercode')
                                        <small class="text-danger"> {{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div>
                                        <lable>Collection Address</lable>
                                        <input type="text" name="collectionaddress">

                                        @error('collectionaddress')
                                        <small class="text-danger"> {{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div>
                                        <lable>Collection City</lable>
                                        <input type="text" name="collection-city">

                                        @error('collection-city')
                                        <small class="text-danger"> {{$message}}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <h5>Mileage</h5>
                                    <input type="number" name="mileage">

                                    @error('mileage')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <h5>Collection Telephone</h5>
                                    <input type="text" name="collection-telephone">

                                    @error('collection-telephone')
                                    <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <h5>Collection Telephone</h5>
                                    <input type="file" name="image">

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

                image: {
                    required: true,
                },

            }
        });
    </script>
@endsection
