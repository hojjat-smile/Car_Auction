@extends('user.layout.layout')



@section('css')

@endsection



@section('main')


    <div class="container">
        <div class="dashboard-list-box table-responsive invoices with-icons margin-top-50">
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


                        <td><p>Model
                                Name:</p> {{$favorite->ads->maker->title}} {{$favorite->ads->model->title}} {{$favorite->ads->year}}
                        </td>

                        <td>{{$favorite->ads->current_bid}}</td>

                        <td><a href="{{route('user.delete-favorite',$favorite->id)}}" class="button red">Delete</a></td>

                    </tr>

                    </tbody>
                @endforeach


            </table>
        </div>

    </div>




@endsection

@section('script')

@endsection



