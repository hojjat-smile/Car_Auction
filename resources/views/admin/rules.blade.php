@extends('admin.layout.layout')


@section('css')

@endsection



@section('main')

    <div class="row">
        <div class="col-md-8">

            <h4>Rules</h4>
            <form action="{{route('admin.rules-post',$rules->id)}}" method="post">
                @csrf

                <div class="col-md-12">
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

                    <input type="submit" class="submit button" id="submit" value="Submit"/>
                </div>

            </form>

        </div>
    </div>

@endsection
