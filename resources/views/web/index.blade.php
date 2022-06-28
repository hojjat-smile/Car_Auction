@extends('web.layout.layout')

@section('title')
    Car Auction
@endsection

@section('css')

@endsection

@section('main')

    <div class="main_slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="utf_rev_slider_block" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            @foreach($ads as $row)

                                <li data-transition="fade" data-slotamount="default"
                                    data-easein="Power4.easeInOut"
                                    data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0"
                                    data-fstransition="fade"
                                    data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

                                    @if($row->images()->where('main',1)->first() != null)
                                        <img src="{{asset($row->images()->where('main',1)->first()->image  ?? null)}}"
                                             alt="" data-bgposition="center center"
                                             data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                             class="rev-slidebg"
                                             data-no-retina data-kenburns="on" data-duration="12000"
                                             data-ease="Linear.easeNone"
                                             data-scalestart="100" data-scaleend="112" data-rotatestart="0"
                                             data-rotateend="0"
                                             data-offsetstart="0 0" data-offsetend="0 0">
                                    @else
                                        <img src="{{asset($row->images()->first()->image ?? null)}}" alt=""
                                             data-bgposition="center center"
                                             data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                                             class="rev-slidebg"
                                             data-no-retina data-kenburns="on" data-duration="12000"
                                             data-ease="Linear.easeNone"
                                             data-scalestart="100" data-scaleend="112" data-rotatestart="0"
                                             data-rotateend="0"
                                             data-offsetstart="0 0" data-offsetend="0 0">
                                    @endif

                                    <div
                                        class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                        id="utf_slide_layer_item_one"
                                        data-x="['center','center','center','center']" data-hoffset="['0']"
                                        data-y="['70','30','20','0']" data-voffset="['0']"
                                        data-width="['900','620', 640','420','320']"
                                        data-height="auto"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo"
                                        data-transform_out=""
                                        data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;"
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                        data-start="1000"
                                        data-responsive_offset="on">
                                        <div class="utf_item_title margin-bottom-15"
                                             id="utf_slide_layer_detail_one"
                                             data-x="['center','center','center','center']"
                                             data-hoffset="['0','0','0','0']"
                                             data-y="['20','20','20','20']"
                                             data-voffset="['-40','-40','-20','-80']"
                                             data-fontsize="['56','46','30','34','22']"
                                             data-lineheight="['70','60','34','30','25']"
                                             data-width="['960','620', 640','420','320']"
                                             data-height="none" data-whitespace="normal"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
                                             data-transform_out="opacity:0;s:300;"
                                             data-start="600"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-basealign="slide"
                                             data-responsive_offset="off"
                                             data-responsive="off"
                                             style="z-index:6;color:#fff;letter-spacing:0px;font-weight:600;">{{$row->maker->title . '   ' . $row->model->title}}
                                        </div>
                                        <div
                                            class="utf_rev_description_text">{{$row->country->title . '   ' . $row->city->title}}
                                        </div>
                                        <a href="{{route('web.single-page',$row->id)}}" class="button medium">View
                                            More</a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <div class="tp-static-layers"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="fullwidth_block">
        <div class="container">
            <div class="row slick_carousel_slider">

                <div class="row">
                    <div class="col-md-12">
                        <header class="headerSection">
                            <h2>
                                Latest Ads
                            </h2>
                        </header>
                        <div class="simple_slick_carousel_block utf_dots_nav">


                            @foreach($ads as $row)
                                @if($row->is_published == 1 && $row->type_sell=="normal")
                                    <div class="utf_carousel_item"><a
                                            href="{{route('web.single-page',$row->id)}}"
                                            class="utf_listing_item-container compact">
                                            <div class="utf_listing_item">
                                                @if($row->images()->where('main',1)->first() != null)
                                                    <img width="120px" height="70"
                                                         src="{{asset($row->images()->where('main',1)->first()->image  ?? null)}}"
                                                         alt="">
                                                @else
                                                    <img width="120px" height="70"
                                                         src="{{asset($row->images()->first()->image ?? null)}}" alt="">
                                                @endif
                                                <div class="utf_listing_item_content">

                                                    <h3>{{$row->maker->title . $row->model->title }}</h3>
                                                    <span><i class="sl sl-icon-location"></i> {{$row->country->title . '  ' . $row->city->title}}</span>
                                                    <span><i class="sl sl-icon-phone"></i>${{$row->base_price}}</span>
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fullwidth_block">
        <div class="container">
            <div class="row slick_carousel_slider">

                <div class="row">
                    <div class="col-md-12">
                        <header class="headerSection">
                            <h2>
                                Latest Auctions
                            </h2>
                        </header>
                        <div class="simple_slick_carousel_block utf_dots_nav">


                            @foreach($auction as $row)
                                @if($row->is_published == 1  && $row->type_sell=="auction")
                                    <div class="utf_carousel_item"><a
                                            href="{{route('web.single-page',$row->id)}}"
                                            class="utf_listing_item-container compact">
                                            <div class="utf_listing_item">
                                                @if($row->images()->where('main',1)->first() != null)
                                                    <img width="120px" height="70"
                                                         src="{{asset($row->images()->where('main',1)->first()->image  ?? null)}}"
                                                         alt="">
                                                @else
                                                    <img width="120px" height="70"
                                                         src="{{asset($row->images()->first()->image ?? null)}}"
                                                         alt="">
                                                @endif
                                                <div class="utf_listing_item_content">

                                                    <h3>{{$row->maker->title . $row->model->title }}</h3>
                                                    <span><i class="sl sl-icon-location"></i> {{$row->country->title . '  ' . $row->city->title}}</span>
                                                    <span><i class="sl sl-icon-phone"></i>${{$row->base_price}}</span>
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(\Illuminate\Support\Facades\Auth::check())
        <section class="fullwidth_block">
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
                                    <span
                                        class="value">${{$package->price}}<span>/{{$package->period}} Month</span></span>
                                    <span class="period">Business User Membership</span>
                                </div>
                                <div class="utf_price_plan_features">
                                    <ul>
                                        <li>Description: {{$package->description}}</li>
                                    </ul>
                                    <a class="button" href="{{route('user.membership')}}"><i class="sl sl-icon-basket"></i> Order Now</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection


@section('script')

@endsection
