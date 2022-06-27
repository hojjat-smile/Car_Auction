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
                    <th>Action</th>
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
                                        <a href="{{route('admin.user-active',$user->id )}}" class="button green  d-inline-block">
                                            Deactivate</a>

                                    @elseif($user->activity == 'deactivate')
                                        <a href="{{route('admin.user-active',$user->id )}}" class="button  d-inline-block">
                                            Active</a>
                                    @endif
                                        <form class="d-inline-block" onsubmit="return confirm('Do you really want to Delete the user?');"
                                              action="{{route('admin.user-deleted',$user->id )}}">
                                            <button style="display: inline-block" type="submit" class="button submit ">Delete</button>

                                        </form>
                                            <a href="{{route('admin.user-edit',$user->id )}}"  class="button yellow d-inline-block ">Edit</a>

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
