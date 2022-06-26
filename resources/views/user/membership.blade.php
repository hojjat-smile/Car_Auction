@extends('user.layout.layout')



@section('css')

@endsection






@section('main')

    <section class="fullwidth_block margin-top-0 padding-top-0 padding-bottom-15" data-background-color="#f9f9f9">
        <div class="container">
            @if(session()->has('successfully'))
                <p class=>{{session('successfully')}}</p>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline_part centered margin-bottom-20">Choose Your Plan<span>Discover & connect with top-rated local businesses</span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="utf_pricing_container_block margin-top-30 margin-bottom-20">
                    @foreach($packages as $package)
                        <div class="plan featured col-md-3 col-sm-6 col-xs-12 active">
                            <div class="utf_price_plan">
                                <h3>{{$package->title}}</h3>
                                <span class="value">${{$package->price}}<span>/{{$package->period}} Month</span></span>
                                <span class="period">Business User Membership</span>
                            </div>
                            <div class="utf_price_plan_features">
                                <ul>
                                    <li>Description: {{$package->description}}</li>

                                </ul>
                                <a class="button" href="{{route('user.order-new',$package->id)}}"><i
                                        class="sl sl-icon-basket"></i> Order Now</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <div class="col-lg-12 col-md-12 mb-4">
        <div class="utf_dashboard_list_box table-responsive recent_booking">
            <h4>Recent Ads</h4>
            <div class="dashboard-list-box table-responsive invoices with-icons">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Price</th>
                        <th>Card</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>Pay</th>

                    </tr>
                    </thead>
                    <tbody>

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

                            <td>@if($transaction->pay == 'pay')
                                    Successful
                                @else
                                    Unsuccessful
                                @endif
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection



