@extends('admin.layout.layout')

@section('title')
    Rules
@endsection

@section('css')

@endsection



@section('main')

    <div class="row">
        <div class="col-md-12">
            <div class="utf_dashboard_list_box table-responsive recent_booking">
            <h4>Rules</h4>
            <form action="{{route('admin.rules-post',$rules->id)}}" method="post">
                @csrf

                <div class="col-md-12 margin-top-25">
                    <input name="title" type="text" placeholder="title" value="{{$rules->title}}"/>

                    @error('title')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                <div class="col-md-12">
                            <textarea name="text_rules" cols="40" rows="2" id="comments" placeholder="Your Message"
                                      required>{{$rules->text_rules}}</textarea>

                    @error('text_rules')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                <div class="col-md-12">

                    <input type="submit" class="button margin-bottom-25" style="font-size: 20px;padding: 10px 15px;" id="submit" value="Submit"/>
                </div>

            </form>
            </div>
        </div>
    </div>

@endsection
