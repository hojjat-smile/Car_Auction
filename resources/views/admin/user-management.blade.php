@extends('admin.layout.layout')


@section('css')

@endsection



@section('main')



    <div class="utf_dashboard_list_box table-responsive recent_booking">
        <h4>Users Info</h4>
        <div class="dashboard-list-box table-responsive invoices with-icons">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Company Name</th>
                    <th>Activity</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>

                        @if($user->usertype != 'admin')

                            @if($user->deleted == 'alive')

                                @if($user->image != null)

                                    <td><img width="100" height="100" src="{{asset($user->image)}}" alt=""></td>
                                @else
                                    <td>not found image</td>
                                @endif


                                <td>{{ $user->firstname }}</td>
                                <td> {{ $user->lastname }}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->companyname}}</td>

                                <td>
                                    @if($user->activity == 'active')
                                        <a href="{{route('admin.user-active',$user->id )}}" class="button green">

                                            Deactivate</a>

                                    @elseif($user->activity == 'deactivate')
                                        <a href="{{route('admin.user-active',$user->id )}}" class="button ">

                                            Active</a>
                                </td>
                            @endif
                            <td>

                                <form onsubmit="return confirm('Do you really want to Delete the user?');"
                                      action="{{route('admin.user-deleted',$user->id )}}">

                                    <button class="button submit">Delete</button>

                                </form>

                            </td>
                            <td><a href="{{route('admin.user-edit',$user->id )}}" class="button yellow ">Edit</a>
                            </td>
                        @endif
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection

@section('script')

@endsection
