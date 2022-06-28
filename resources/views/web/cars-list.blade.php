@extends('web.layout.layout')

@section('title')
    Card List
@endsection

@section('css')

@endsection


@section('main')

    <div>
        <div>
            <div class="container">
                <div class="row">

                    <div class=" col-md-12 ">
                        <div class="utf_dashboard_list_box table-responsive recent_booking">
                            @if($name != null)
                                <h4>List {{$name}}</h4>
                            @else
                                <h4>List null</h4>
                            @endif

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
                                    @if($ads != null)
                                        @foreach($ads as $row)
                                            @if($row->is_published == 1)
                                                <tbody>
                                                <tr>

                                                    <td>
                                                        <img class="image-style" src="{{asset($row->image->image)}}">
                                                    </td>

                                                    <td> {{$row->maker->title}}
                                                        {{$row->model->title}} </td>


                                                    <td>
                                                        <p>Odometer</p> {{substr($row->odometer,0,15)." and......"}}

                                                    </td>


                                                    <td>{{substr($row->damage->title,0,10)."......"}}</td>
                                                    <td>{{$row->type_sell}}</td>
                                                    <td>
                                                        <a href="{{route('user.add-favorite',$row->id)}}"> <span
                                                                class="table-action-icon icon-favorite icon-material-outline-favorite text-danger"></span></a>
                                                        <a href="{{route('user.bid-now',$row->id)}}"><span
                                                                class="table-action-icon fa fa-legal icon-legal table-action-icon"></span></a>
                                                    </td>


                                                </tr>

                                                </tbody>
                                            @endif
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>














@endsection


@section('script')

@endsection
