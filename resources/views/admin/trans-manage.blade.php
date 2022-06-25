@extends('admin.layout.layout')



@section('css')

@endsection






@section('main')

    <div class="container">


        <div class="dashboard-list-box table-responsive invoices with-icons margin-top-50">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Price</th>
                    <th>Card</th>
                    <th>StartDate</th>
                    <th>EndDate</th>
                    <th>card_type</th>
                    <th>Authority</th>
                    <th>Pay</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                @foreach($transactions as $transaction)


                    <tr>

                        <td>{{$loop->iteration}}</td>


                        <td>{{$transaction->price}}</td>
                        <td>{{$transaction->package->period}} Month</td>
                        @php
                            $date =\Carbon\Carbon::parse($transaction->created_at);
                            $membership =\Carbon\Carbon::parse($transaction->user->membership);
                        @endphp
                        <td>{{$date->isoFormat('MMM Do YY')}}</td>
                        <td>{{$membership->isoFormat('MMM Do YY')}}</td>
                        <td>{{$transaction->card_type}}</td>
                        <td>{{$transaction->Authority}}</td>
                        <td>{{$transaction->pay}}</td>
                        <td>{{$transaction->code}}</td>
                        <td>{{$transaction->status}}</td>

                    </tr>
                @endforeach


            </table>
        </div>

    </div>
@endsection

@section('script')

@endsection



