@extends('user.layout.layout')



@section('css')

@endsection






@section('main')

    <section class="fullwidth_block margin-top-0 padding-top-75 padding-bottom-65" data-background-color="#f9f9f9">
        <div class="container">
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
                            <a class="button" href="#"><i class="sl sl-icon-basket"></i> Order Now</a>
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



