@extends('admin.layout.layout')
@section('title')
    Info About
@endsection

@section('css')

@endsection



@section('main')



        <div class="row">
            <div class="col-md-12">

                <div class="utf_dashboard_list_box table-responsive recent_booking">

                    <h4>Info About Us</h4>
                    <form  action="{{route('admin.info-about-us-post',$info->id)}}" method="post">
                        @csrf


                        <div class="col-md-12 margin-top-25">
                            <input name="phone" type="text" placeholder="title" value="{{$info->phone}}"/>

                            @error('phone')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                      <div class="col-md-12">
                            <input name="email" type="email" placeholder="title" value="{{$info->email}}"/>

                            @error('email')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                       <div class="col-md-12">
                            <input name="address" type="text" placeholder="title" value="{{$info->address}}"/>

                            @error('address')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                       <div class="col-md-12">
                            <input name="web" type="text" placeholder="title" value="{{$info->web}}"/>

                            @error('web')
                            <p>{{$message}}</p>
                            @enderror
                        </div>


                        <div class="col-md-12">

                            <input type="submit" class="submit button margin-bottom-15" style="font-size: 20px;padding: 10px 15px;" id="submit" value="Submit"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>

@endsection
