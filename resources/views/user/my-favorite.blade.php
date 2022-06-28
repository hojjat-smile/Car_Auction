@extends('user.layout.layout')

@section('title')
    My Favorites
@endsection

@section('css')

@endsection


@section('main')


    <div class="row">
        <div class="col-md-12">
            <div class="utf_dashboard_list_box table-responsive recent_booking">
                <h4>
                    Favorites
                </h4>
                <div class="dashboard-list-box table-responsive invoices with-icons margin-top-15">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Lot Info</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($favorites as $favorite)

                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><p>Model Name:</p> {{$favorite->ads->maker->title}}
                                    {{$favorite->ads->model->title}} {{$favorite->ads->year}}</td>

                                <td>{{$favorite->ads->current_bid}}</td>

                                <td><a href="{{route('user.delete-favorite',$favorite->id)}}"
                                       class="button red">Delete</a></td>

                            </tr>
                            </tbody>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection



