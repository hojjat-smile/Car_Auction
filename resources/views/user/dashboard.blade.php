@extends('user.layout.layout')



@section('css')

@endsection






@section('main')
    <!-- Dashboard -->

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
                <p>You are currently signed in as <strong>{{\Illuminate\Support\Facades\Auth::user()->username}}</strong> Has Been Approved!</p>
                <a class="close" href="#"></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-md-6">
            <div class="utf_dashboard_stat color-1">
                <div class="utf_dashboard_stat_content">


                    <h4>{{$ads->count()}}</h4>


                    <span>All Ads</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Add-Bag"></i></div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="utf_dashboard_stat color-2">
                <div class="utf_dashboard_stat_content">
                    <h4>{{$auction->count()}}</h4>
                    <span>All Auctions</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Add-UserStar"></i></div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12 mb-4">
            <div class="utf_dashboard_list_box table-responsive recent_booking">
                <h4>Recent Ads</h4>
                <div class="dashboard-list-box table-responsive invoices with-icons">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marker</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($ads as $ad)

                            @if($ad != null)

                            <tr>

                                <td>{{$loop->iteration}}</td>


                                <td>{{$ad->maker->title}}</td>
                                <td>{{$ad->model->title}}</td>
                                <td>{{$ad->year}}</td>
                                <td>{{$ad->country->title}}</td>
                                <td>{{$ad->city->title}}</td>
                                <td>{{$ad->user->username}}</td>
                                <td>{{$ad->user->email}}</td>

                                <td>
                                    <a href="{{route('user.edit-ads',$ad->id)}}" class="button yellow ">Edit</a>
                                    <a href="{{route('user.delete-ads',$ad->id)}}" class="button ">Delete</a>


                                </td>

                            </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 mb-4">
            <div class="utf_dashboard_list_box table-responsive recent_booking">
                <h4>Recent Auction</h4>
                <div class="dashboard-list-box table-responsive invoices with-icons">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>ID</th>
                            <th>Marker</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recentAuction as $auction)

                            @if($auction != null)

                            <tr>
                                <td>{{$loop->iteration}}</td>

                                <td>{{$auction->maker->title}}</td>
                                <td>{{$auction->model->title}}</td>
                                <td>{{$auction->year}}</td>
                                <td>{{$auction->country->title}}</td>
                                <td>{{$auction->city->title}}</td>
                                <td>{{$auction->user->username}}</td>
                                <td>{{$auction->user->email}}</td>

                                <td>
                                    <a href="{{route('user.edit-ads',$auction->id)}}" class="button yellow ">Edit</a>
                                    <a href="{{route('user.delete-ads',$auction->id)}}" class="button ">Delete</a>


                                </td>

                            </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="footer_copyright_part">All Rights Reserved.</div>
        </div>
    </div>


@endsection

@section('script')

@endsection
