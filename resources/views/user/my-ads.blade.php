@extends('user.layout.layout')


@section('title')
    My Ads
@endsection
@section('css')

@endsection



@section('main')

    <div class="utf_dashboard_list_box table-responsive recent_booking">
        <h4>Ads List</h4>
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
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>

                @foreach($ads as $ad)
                    @if($ad != null)

                    <tr>

                        @if($ad->image != null)
                            <td><img width="70px" height="70px" src="{{asset($ad->image->image)}}" alt=""></td>
                        @endif
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

                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('script')

@endsection







