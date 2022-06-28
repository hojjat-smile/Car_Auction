@extends('admin.layout.layout')


@section('title')
    ContactUs Reply
@endsection

@section('css')

@endsection



@section('main')



    <div class="row">
        <div class="col-md-8">

            <h4>Answer the question</h4>
            <form action="{{route('admin.contact-us-reply',$contact->id)}}" method="post">
                @csrf


                <div class="col-md-12">
                    <lable>Subject</lable>
                    <input disabled type="text" value="{{$contact->subject}}">

                </div>

                <div class="col-md-12">
                    <lable>Message</lable>
                    <input disabled type="text" value="{{$contact->message}}">

                </div>

                <div class="col-md-12">
                    <lable>Reply</lable>
                    <input name="reply" id="comments" placeholder="Reply"
                           required>


                </div>

                <div class="col-md-12">
                    <lable>Previous Responses</lable>

                    <textarea disabled n id="comments" placeholder="Reply"
                              required>@foreach($contact->reply as $contact){{$contact->reply . "\n"}}@endforeach</textarea>


                </div>


                <div class="col-md-12">

                    <input type="submit" class="submit button" id="submit" value="Submit"/>
                </div>
            </form>

        </div>


    </div>

@endsection
