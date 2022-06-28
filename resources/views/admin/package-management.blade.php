t@extends('admin.layout.layout')

@section('title')
   Package Management
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
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Booking Date</th>
                <th>Payment Type</th>
                <th>Status</th>
                <th>View Booking</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><img alt="" class="img-fluid rounded-circle shadow-lg"
                         src="{{asset('assets/web/images/thumb-1.jpg')}}" width="50" height="50"></td>
                <td>Kathy Brown</td>
                <td>12 Jan 2019</td>
                <td>Paypal</td>
                <td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
                <td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img alt="" class="img-fluid rounded-circle shadow-lg"
                         src="{{asset('assets/web/images/thumb-2.jpg')}}" width="50" height="50"></td>
                <td>Kathy Brown</td>
                <td>12 Jan 2019</td>
                <td>Credit Card</td>
                <td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
                <td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><img alt="" class="img-fluid rounded-circle shadow-lg"
                         src="{{asset('assets/web/images/thumb-3.jpg')}}" width="50" height="50"></td>
                <td>Kathy Brown</td>
                <td>12 Jan 2019</td>
                <td>Paypal</td>
                <td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
                <td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td><img alt="" class="img-fluid rounded-circle shadow-lg"
                         src="{{asset('assets/web/images/thumb-1.jpg')}}" width="50" height="50"></td>
                <td>Kathy Brown</td>
                <td>12 Jan 2019</td>
                <td>Paypal</td>
                <td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
                <td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td><img alt="" class="img-fluid rounded-circle shadow-lg"
                         src="{{asset('assets/web/images/thumb-2.jpg')}}" width="50" height="50"></td>
                <td>Kathy Brown</td>
                <td>12 Jan 2019</td>
                <td>Paypal</td>
                <td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
                <td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td><img alt="" class="img-fluid rounded-circle shadow-lg"
                         src="{{asset('assets/web/images/thumb-3.jpg')}}" width="50" height="50"></td>
                <td>Kathy Brown</td>
                <td>12 Jan 2019</td>
                <td>Paypal</td>
                <td><span class="badge badge-pill badge-canceled text-uppercase">Canceled</span></td>
                <td><a href="dashboard_bookings.html" class="button gray"><i class="fa fa-eye"></i> View</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('script')

@endsection
