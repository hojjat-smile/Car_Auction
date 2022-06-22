@extends('web.layout.layout')



@section('css')

@endsection


@section('main')

    <div id="titlebar" class="gradient margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Rules and Regulations
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div  style="margin: 75px auto;padding: 25px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <h3 class="utf_listing_headline_part" style="margin: 0 0 30px">{{$rules->title}}</h3>
            {{$rules->text_rules}}
        </div>

    </div>

@endsection

@section('script')

@endsection
