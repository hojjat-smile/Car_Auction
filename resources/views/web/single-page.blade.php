@extends('web.layout.layout')

@section('title')
    {{$ads->maker->title . '  '.$ads->model->title}}
@endsection

@section('css')

@endsection

@section('main')

    <div class="singleAd">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    @if($ads->images()->where('main',1)->first() != null)
                      <img style="width: 100%;border-radius: 15px;margin: 0 0 15px;"  src="{{asset($ads->images()->where('main',1)->first()->image  ?? null)}}" alt="">
                    @else
                    <img style="width: 100%;border-radius: 15px;margin: 0 0 15px;" src="{{asset($ads->images()->first()->image ?? null)}}" alt="">
                    @endif
                </div>

                <div class="col-lg-12 margin-bottom-20 margin-top-20">
                    <h3>Images</h3>
                    <div class="row">
                        @foreach($ads->images as $image)
                            <div class="col-md-3">
                                <img src="{{asset($image->image)}}" alt="" width="100%"/>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-8">
                    <p style="padding: 10px; background-color: #0b7bb5; color: white; font-weight: bold">Lot #
                        31140712:</p>
                    <table class="table table-hover">

                        <tr>
                            <th>Maker:</th>
                            <td>{{$ads->maker->title}}</td>
                        </tr>

                        <tr>
                            <th>Model:</th>
                            <td>{{$ads->model->title}}</td>
                        </tr>

                        <tr>
                            <th>Category:</th>
                            <td>{{$ads->category->title}}</td>
                        </tr>

                        <tr>
                            <th>Odometer:</th>
                            <td>{{$ads->odometer}}</td>

                        </tr>

                        <tr>
                            <th>Body Style:</th>
                            <td>{{$ads->body_style}}</td>

                        </tr>

                        <tr>
                            <th>Colour:</th>
                            <td>{{$ads->colour->title}}</td>

                        </tr>

                        <tr>
                            <th>Engine Type:</th>
                            <td>{{$ads->engine_type}}</td>

                        </tr>

                        <tr>
                            <th>Transmission:</th>
                            <td>{{$ads->transmission}}</td>

                        </tr>


                        <tr>
                            <th>Fuel:</th>
                            <td>{{$ads->fuel}}</td>

                        </tr>

                        <tr>
                            <th>Keys:</th>
                            <td>{{$ads->keys}}</td>

                        </tr>


                        <tr>
                            <th>Car Type:</th>
                            <td>{{$ads->carType->title}}</td>

                        </tr>


                        <tr>
                            <th>V5 Notes:</th>
                            <td>{{$ads->v_five_notes}}</td>

                        </tr>


                        <tr>
                            <th>Additional Info:</th>
                            <td>{{$ads->additional_info}}</td>

                        </tr>

                    </table>
                </div>
                @if($ads->type_sell == 'auction')
                    <div class="col-lg-4">
                        @if($ads->type_sell=="auction")
                        <p style="padding: 10px; background-color: #0b7bb5; color: white; font-weight: bold">Bid
                            Information</p>
                        <table class="table table-hover">


                            <tr>
                                <th>Bid Status:</th>
                                <td>{{$ads->base_price}}</td>
                            </tr>

                            <tr>
                                <th>Current Bid:</th>
                                <td>{{$bid}}</td>
                            </tr>

                            @if(\Illuminate\Support\Facades\Auth::check())
                                @if($user->id != $userAds->id)
                                @if($nowDate < $user->membership)

                                    <form method="post" action="{{route('user.bid-now-submit',$ads->id)}}">
                                        @csrf
                                        <tr>
                                            <th>
                                                <input type="text" name="price">
                                                @error('price')
                                                <p>{{$message}}</p>
                                                @enderror
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>
                                                <button class="button submit form-control">Bid Now</button>
                                            </th>
                                        </tr>
                                    </form>

                                @elseif($nowDate > $user->membership)
                                    <form action="{{route('user.membership')}}">
                                        @csrf

                                        <tr>
                                            <th><input type="text" name="price">
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>
                                                <button class="button submit form-control">Bid Now</button>
                                            </th>
                                        </tr>

                                    </form>
                                @endif
                            @endif
                            @else
                                @if($ads->type_sell=="auction")
                                    <a href="{{ url("/login") }}" class="button submit form-control">Bid Now</a>
                                @endif
                            @endif

                        </table>
                        @endif
                        <a href="{{route('user.add-favorite',$ads->id)}}" class="button red">Add to favorite</a>
                    </div>
                @endif

            </div>

        </div>

    </div>


@endsection

@section('script')

@endsection
