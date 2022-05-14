@extends('user.layout.layout')


@section('title')
    My Ads
@endsection
@section('css')

@endsection



@section('main')

    <div class="utf_dashboard_list_box table-responsive recent_booking">
        <h4>Recent Booking</h4>
        <div class="dashboard-list-box table-responsive invoices with-icons">
            <table class="table table-hover">
                <thead>
                <tr>

                    <th>Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address One</th>
                    <th>Address Two</th>
                    <th>City</th>
                    <th>Post Code</th>
                    <th>Tele Phone</th>
                    <th>Email</th>
                    <th>Member Number</th>
                    <th>Seller Code</th>
                    <th>Collection Address</th>
                    <th>Collection City</th>
                    <th>Collection Telephone</th>
                    <th>Mileage</th>

                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\Ads::all() as $ad)
                <tr>

                    <td><img style="width: 500% ;height: 500%" src="{{asset($ad->image->image)}}" alt=""></td>
                    <td>{{$ad->firstname}}</td>
                    <td>{{$ad->lastname}}</td>
                    <td>{{$ad->addressone}}</td>
                    <td>{{$ad->addresstwo}}</td>
                    <td>{{$ad->city}}</td>
                    <td>{{$ad->postcode}}</td>
                    <td>{{$ad->telephone}}</td>
                    <td>{{$ad->email}}</td>
                    <td>{{$ad->membernumber}}</td>
                    <td>{{$ad->sellercode}}</td>
                    <td>{{$ad->collectionaddress}}</td>
                    <td>{{$ad->collection_city}}</td>
                    <td>{{$ad->collection_telephone}}</td>
                    <td>{{$ad->mileage}}</td>
                    <td><a href="{{route('user.edit-ads',$ad->id)}}" class="button gray"><i class="fa fa-eye"></i>Edit</a>


                </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('script')

@endsection
