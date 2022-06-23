@extends('user.layout.layout')



@section('css')

@endsection






@section('main')
    <div class="col-lg-12 col-md-12 mb-4">
        <div class="utf_dashboard_list_box table-responsive recent_booking">
            <h4>Recent Ads</h4>
            <div class="dashboard-list-box table-responsive invoices with-icons">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Price</th>
                        <th>card_id</th>
                        <th>card_type</th>
                        <th>Authority</th>
                        <th>Pay</th>
                        <th>Code</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($transactions as $transaction)


                            <tr>

                                <td>{{$loop->iteration}}</td>


                                <td>{{$transaction->price}}</td>
                                <td>{{$transaction->card_id}}</td>
                                <td>{{$transaction->card_type}}</td>
                                <td>{{$transaction->Authority}}</td>
                                <td>{{$transaction->pay}}</td>
                                <td>{{$transaction->code}}</td>
                                <td>{{$transaction->status}}</td>

                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <section class="fullwidth_block margin-top-0 padding-top-75 padding-bottom-65" data-background-color="#f9f9f9">
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
                            <span class="value">${{$package->price}}<span>/{{$package->period}} Month</span></span> <span class="period">Business User Membership</span>
                        </div>
                        <div class="utf_price_plan_features">
                            <ul>
                                <li>Description: {{$package->description}}</li>

                            </ul>
                            <a class="button" href="{{route('user.order-new',$package->id)}}"><i class="sl sl-icon-basket"></i> Order Now</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection



