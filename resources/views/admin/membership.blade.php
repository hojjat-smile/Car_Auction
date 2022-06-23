@extends('admin.layout.layout')



@section('css')

@endsection






@section('main')

    <div class="container">

        <a href="{{route('admin.memberships-add')}}" class="button green">Add Package</a>

        <div class="dashboard-list-box table-responsive invoices with-icons margin-top-50">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Period</th>
                    <th>Price</th>
                    <th>Action</th>

                </tr>
                </thead>
                @foreach($packages as $package)


                    <tbody>

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$package->title}}</td>
                        <td>{{$package->description}}</td>
                        <td>{{$package->period}}</td>
                        <td>{{$package->price}}</td>
                        <td>
                            <a href="{{route('admin.memberships-edit',$package->id)}}" class="button blue">Edit</a>

                            <form onsubmit="return confirm('Are you sure?');"
                                  action="{{route('admin.memberships-delete',$package->id)}}">

                                <button type="submit" class="button red">Delete</button>
                            </form>
                        </td>


                    </tr>

                    </tbody>
                @endforeach


            </table>
        </div>

    </div>

@endsection

@section('script')

@endsection



