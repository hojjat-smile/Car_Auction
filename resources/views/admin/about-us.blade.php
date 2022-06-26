@extends('admin.layout.layout')


@section('css')

@endsection



@section('main')


    <div class="row">
        <div class="col-md-12">
            <div class="utf_dashboard_list_box table-responsive recent_booking">
                <h4>About Us</h4>

                <form action="{{route('admin.about-us-update',$about->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-12 margin-top-25">


                            <img class="image-style" src="{{asset($about->image)}}" alt="">
                            <input name="image" type="file">


                    </div>

                    <div class="col-md-12">


                        <textarea name="message">{{$about->message}}</textarea>

                        @error('message')
                        <p>{{$message}}</p>
                        @enderror

                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="button" style="font-size: 20px;padding: 10px 15px;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
