@extends('admin.layout.layout')


@section('css')

@endsection



@section('main')


    <div class="row">

        <form action="{{route('admin.about-us-update',$about->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="col-md-12">
                <div class="col-md-6">

                    <img class="image-style" src="{{asset($about->image)}}" alt="">
                    <input name="image" type="file">

                </div>
            </div>

            <div class="col-md-6">


                    <textarea name="message">{{$about->message}}</textarea>

                @error('message')
                <p>{{$message}}</p>
                @enderror

            </div>

            <div class="col-md-12">
                <button type="submit" class="button ">Update</button>
            </div>
        </form>
    </div>


@endsection
