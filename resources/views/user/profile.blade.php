@extends('user.layout.layout')


@section('css')

@endsection



@section('main')

    <div class="col-fs-12">
        <div class="col-lg-12">
            <div id="utf_add_listing_part">

                <div class="add_utf_listing_section margin-top-45">
                    <div class="utf_add_listing_part_headline_part">
                        <h3>Sell Your Car in a Copart Auction</h3>
                    </div>

                    <div class="row with-forms">

                        <div class="col-md-12">
                            <h5>Image Profile</h5>
                            <input type="file" name="image">
                        </div>
                    </div>

                    <div class="row with-forms">
                        <div class="col-md-6">
                            <h5>First Name</h5>
                            <input type="text" name="first_name">
                        </div>
                        <div class="col-md-6">
                            <h5>Last Name</h5>
                            <input type="text" name="last_name">
                        </div>
                    </div>


                    <div class="row with-forms">
                        <div class="col-md-6">
                            <h5>Email</h5>
                            <input type="email" name="email">
                        </div>
                        <div class="col-md-6">
                            <h5>password</h5>
                            <input type="password" name="password">
                        </div>
                    </div>

                    <div class="row with-forms">
                        <div class="col-md-6">
                            <h5>Phone Number</h5>
                            <input type="number" name="phone_number">
                        </div>
                        <div class="col-md-6">
                            <h5>Address</h5>
                            <input type="password" name="address">
                        </div>
                    </div>

                    <div class="row with-forms">
                        <div class="col-md-6">
                            <h5>Address Two</h5>
                            <input type="password" name="address_two">
                        </div>
                        <div class="col-md-6">
                            <h5>PostCode</h5>
                            <input type="number" name="post_code">
                        </div>

                    </div>

                    <div class="row with-forms">

                        <div class="col-md-6">
                            <h5>BirthDate</h5>
                            <input type="date" name="birth_date">
                        </div>

                        <div class="col-md-6">
                            <h5>Description</h5>
                            <input type="text" name="description">
                        </div>

                    </div>
                    <button class="button">Update</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
