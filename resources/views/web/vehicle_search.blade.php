@extends('web.layout.layout')

@section('css')

@endsection


@section('main')


    <!-- Dashboard -->
    <div>
        <div>
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->

                        <div class="col-lg-12 col-md-12 mb-4">
                            <div class="utf_dashboard_list_box table-responsive recent_booking">
                                <h4>Recent Booking</h4>
                                <div class="dashboard-list-box table-responsive invoices with-icons">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>

                                            <th>Image</th>
                                            <th>Lot Info</th>
                                            <th>Vehicle Info</th>
                                            <th>Condition</th>
                                            <th>Sale Info</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        @foreach($ads as $ad)
                                            <tbody>
                                            <tr>

                                                <td>
                                                    <a href="{{route('web.single-page',$ad->id)}}">
                                                        @if($ad->images()->where('main',1)->first() != null)
                                                            <img style="width: 250px; height: 150px"  src="{{asset($ad->images()->where('main',1)->first()->image  ?? null)}}" alt="">
                                                        @else
                                                            <img style="width: 250px; height: 150px" src="{{asset($ad->images()->first()->image ?? null)}}" alt="">
                                                        @endif
                                                    </a>
                                                </td>

                                                <td> {{$ad->maker->title}}{{$ad->model->title}} </td>

                                                <td><p>Odometer</p> {{substr($ad->odometer,0,15)." and......"}}</td>

                                                <td>{{substr($ad->damage->title,0,10)."......"}}</td>

                                                <td>{{$ad->type_sell}}</td>

                                                <td>
                                                    <a href="{{route('user.add-favorite',$ad->id)}}"> <span
                                                            class="table-action-icon icon-favorite icon-material-outline-favorite text-danger"></span></a>
                                                    <a href="{{route('user.bid-now-submit',$ad->id)}}"><span
                                                            class="table-action-icon fa fa-legal icon-legal table-action-icon"></span></a>
                                                </td>


                                            </tr>

                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-12">
                        <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>








@endsection


@section('script')

@endsection
