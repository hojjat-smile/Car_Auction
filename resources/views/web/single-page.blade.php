@extends('web.layout.layout')

@section('css')

@endsection

@section('main')

    <div class="singleAd">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <img src="{{asset($ads->image->image)}}" style="width: 100%;border-radius: 15px;margin: 0 0 15px;" alt="">
                </div>

                <div class="col-lg-8">
                    <p style="padding: 10px; background-color: #0b7bb5; color: white; font-weight: bold">Lot # 31140712:</p>
                    <table class="table table-hover">

                        <tr>
                            <th>Category:</th>
                            <td>{{$ads->category->title}}</td>
                        </tr>

                        <tr>
                            <th>Odometer:</th>
                            <td>{{$ads->odometer}}</td>

                        </tr>

                        <tr>
                            <th>VRN:</th>
                            <td>{{$ads->vrn}}</td>

                        </tr>




                        <tr>
                            <th>Secondary Damage::</th>
                            <td>{{$ads->secondaryDamage->title}}</td>

                        </tr>


                        <tr>
                            <th>Additional Damage::</th>
                            <td>{{$ads->additionalDamage->title}}</td>

                        </tr>




                        <tr>
                            <th>VIN:</th>
                            <td>{{$ads->vin}}</td>

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
                            <th>Drive:</th>
                            <td>{{$ads->drive}}</td>

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
                            <th>VAT to be added to final sale price:</th>
                            <td>{{$ads->vat}}</td>

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

                <div class="col-lg-4">
                    <p style="padding: 10px; background-color: #0b7bb5; color: white; font-weight: bold">Bid Information</p>
                    <table class="table table-hover">


                        <tr>
                            <th>Bid Status::</th>
                            <td>{{$ads->category->title}}</td>
                        </tr>

                        <tr>
                            <th>Sale Status:</th>
                            <td>{{$ads->category->title}}</td>

                        </tr>

                        <tr>
                            <th>Current Bid:</th>
                            <td>{{$ads->category->title}}</td>

                        </tr>


                        @if($userAds->id != $user->id)
                            <form method="post" action="{{route('user.bid-now-submit',$ads)}}">
                                @csrf
                                <tr>
                                    <th><input type="text" name="price"></th>
                                </tr>

                                <tr>
                                    <th>
                                        <button class="button submit form-control">Bid Now</button>
                                    </th>
                                </tr>
                            </form>
                        @endif


                    </table>

                </div>

                <a href="{{route('user.add-favorite',$ads->id)}}" class="button red">Add to favorite</a>

            </div>

        </div>

    </div>


@endsection

@section('script')

@endsection
