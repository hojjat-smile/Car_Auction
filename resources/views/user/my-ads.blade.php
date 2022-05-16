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
                    <th>Marker</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Mileage</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\Ads::all() as $ad)
                    <tr>

                        <td><img  src="{{asset($ad->image->image)}}" alt=""></td>

                        <td>{{$ad->maker->title}}</td>
                        <td>{{$ad->model->title}}</td>
                        <td>{{$ad->year}}</td>
                        <td>{{$ad->country->title}}</td>
                        <td>{{$ad->city->title}}</td>
                        <td>{{$ad->user->username}}</td>
                        <td>{{$ad->user->email}}</td>
                        <td>{{$ad->mileage}}</td>

                        <td>
                            <a href="{{route('user.edit-ads',$ad->id)}}" class="button ">Edit</a>
                            <a href="{{route('user.delete-ads',$ad->id)}}" class="button ">Delete</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>

                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('script')

@endsection







