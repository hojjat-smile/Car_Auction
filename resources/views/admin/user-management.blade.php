@extends('admin.layout.layout')


@section('css')

@endsection



@section('main')

            <div class="utf_dashboard_list_box table-responsive recent_booking">
                <h4>Member Info</h4>
                <div class="dashboard-list-box table-responsive invoices with-icons">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Company Name</th>
                            <th>Profile</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                           @foreach($persons as $person)
                            <td>{{$person->id}}</td>
            
                            <td>{{ $person->firstname }}</td>
                            <td> {{ $person->lastname }}</td>
                            <td>{{$person->email}}</td>
                            <td>{{$person->mobile}}</td>
                            <td>{{$person->companyname}}</td>
                            <td><a href="{{url('admin-panel/user-management/'.$person->id . '/user-edit')}}" class="button gray"><i class="fa fa-eye"></i>Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


@endsection

@section('script')

@endsection
