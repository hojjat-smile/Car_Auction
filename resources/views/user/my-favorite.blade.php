@extends('user.layout.layout')



@section('css')

@endsection



@section('main')


    <div class="container">

        <div class="dashboard-list-box table-responsive invoices with-icons">
            <table class="table table-hover">
                <thead>
                <tr>

                    <th>Image</th>
                    <th>Lot Info</th>
                    <th>Price</th>


                </tr>
                </thead>
                @foreach($favorites as $favorite)
                    @if($favorite->ads != null)
                        @foreach($favorite->ads as $ads)

                            <tbody>

                            <tr>
                                <td>
                                    <img width="160" height="100" src="{{asset($ads->image->image)}}">
                                </td>
                                <td><p>Model Name:</p> {{$ads->maker->title}} {{$ads->model->title}} {{$ads->year}}
                                </td>

                                <td>{{$ads->current_bid}}
                                </td>
                            </tr>

                            </tbody>
                        @endforeach

                    @endif
                @endforeach
            </table>
        </div>

    </div>




@endsection

@section('script')

@endsection



