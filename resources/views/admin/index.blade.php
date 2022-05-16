@extends('admin.layout.layout')


@section('css')

@endsection


@section('main')

    <div id="titlebar" class="dashboard_gradient">
        <div class="row">
            <div class="col-md-12">
                <h2>Dashboard</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index_1.html">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="notification success closeable margin-bottom-30">
                <p>You are currently signed in as <strong>Jonathon Cristy</strong> Has Been Approved!</p>
                <a class="close" href="#"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-6">
            <div class="utf_dashboard_stat color-1">
                <div class="utf_dashboard_stat_content">
                    <h4>{{\App\Models\Ads::all()->count()}}</h4>
                    <span>All Ads</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Map2"></i></div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="utf_dashboard_stat color-2">
                <div class="utf_dashboard_stat_content">
                    <h4>{{$auction->count()}}</h4>
                    <span>Auctions Sell</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Add-UserStar"></i></div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="utf_dashboard_stat color-3">
                <div class="utf_dashboard_stat_content">
                    <h4>{{$normal->count()}}</h4>
                    <span>Normal Sell</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Align-JustifyRight"></i></div>
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-lg-12 col-md-12 mb-4">
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
                        @foreach($ads as $ad)
                            <tr>

                                <td><img width="70px" height="70px" src="{{asset($ad->image->image)}}" alt=""></td>

                                <td>{{$ad->maker->title}}</td>
                                <td>{{$ad->model->title}}</td>
                                <td>{{$ad->year}}</td>
                                <td>{{$ad->country->title}}</td>
                                <td>{{$ad->city->title}}</td>
                                <td>{{$ad->user->username}}</td>
                                <td>{{$ad->user->email}}</td>
                                <td>{{$ad->mileage}}</td>



                                <td>
                                    <a href="{{route('admin.edit-ads',$ad->id)}}" class="button ">Edit</a>
                                    <a href="{{route('admin.delete-ads',$ad->id)}}" class="button ">Delete</a>
                                    <a href="{{route('admin.view-ads',$ad->id)}}" class="button  ">View</a>
                                    <a href="{{route('admin.publish-ads',$ad->id)}}" class="button ">Publish</a>
                                    <a href="{{route('admin.add-ads')}}" class="button ">Add</a>
                                </td>



                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
        </div>
    </div>

@endsection

@section('script')

@endsection
