@extends('admin.layout.layout')


@section('css')

@endsection


@section('main')


    <div class="row">
        <div class="col-lg-4">
            <div class="utf_dashboard_stat color-1">
                <div class="utf_dashboard_stat_content">
                    <h4>{{\App\Models\Ads::all()->count()}}</h4>
                    <span>All Ads</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Map2"></i></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="utf_dashboard_stat color-2">
                <div class="utf_dashboard_stat_content">
                    <h4>{{$auction->count()}}</h4>
                    <span>All Acutions</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Add-UserStar"></i></div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="utf_dashboard_stat color-3">
                <div class="utf_dashboard_stat_content">
                    <h4>{{\App\Models\User::where("usertype","user")->count()}}</h4>
                    <span>All Users</span>
                </div>
                <div class="utf_dashboard_stat_icon"><i class="im im-icon-Align-JustifyRight"></i></div>
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
                            <th>Image</th>
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
                                    @if($ad->image != null)
                                        <td><img style="width: 70px;height: 70px;border-radius: 5px;" src="{{asset($ad->image->image)}}"
                                                 alt=""></td>
                                    @endif
                                    <td>{{$ad->maker->title}}</td>
                                    <td>{{$ad->model->title}}</td>
                                    <td>{{$ad->year}}</td>
                                    <td>{{$ad->country->title}}</td>
                                    <td>{{$ad->city->title}}</td>
                                    <td>{{$ad->user->username}}</td>
                                    <td>{{$ad->user->email}}</td>


                                    <td>
                                        <a href="{{route('admin.edit-ads',$ad->id)}}" class="button yellow">Edit</a>
                                        <a href="{{route('admin.delete-ads',$ad->id)}}" class="button ">Delete</a>
                                        <a href="{{route('admin.view-ads',$ad->id)}}" class="button green">View</a>
                                        @if($ad->is_published)
                                            <a href="{{route('admin.publish-ads',$ad->id)}}" class="button red">
                                                Is Publish
                                            </a>
                                        @elseif(!$ad->is_published)
                                            <a href="{{route('admin.publish-ads',$ad->id)}}" class="button blue">
                                                Publish
                                            </a>
                                        @endif
                                    </td>

                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
