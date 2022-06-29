@extends('web.layout.layout')

@section('title')
    AboutUs
@endsection

@section('css')

@endsection


@section('main')






<div class="container">
    <div class="row margin-top-50">
    <img style="width: 100%;border-radius: 15px;margin: 0 0 15px;" src="{{asset($about->image)}}" alt="">
    </div>
    <section style="margin: 75px auto;padding: 25px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        {!! $about->message  !!}
    </section>

    <div class="row">
        <div class="col-md-3 text-center">
            <label>Phone</label>
            <p>{{$infoAbout->phone}}</p>
        </div>

        <div class="col-md-3 text-center">
            <label>Email</label>
            <p>{{$infoAbout->email}}</p>
        </div>

        <div class="col-md-3 text-center">
            <label>Address</label>
            <p>{{$infoAbout->address}}</p>
        </div>

        <div class="col-md-3 text-center">
            <label>Website</label>
            <p>{{$infoAbout->web}}</p>
        </div>
    </div>
</div>








@endsection

@section('script')

@endsection
