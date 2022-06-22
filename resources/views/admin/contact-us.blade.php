@extends('admin.layout.layout')


@section('css')

@endsection



@section('main')



    <div class="row">
        <div class="col-md-8">

            <h4>Rules</h4>

                <div class="utf_dashboard_list_box table-responsive recent_booking">
                    <h4>Recent Messages</h4>
                    <div class="dashboard-list-box table-responsive invoices with-icons">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach(\App\Models\ContactUs::all() as $contact)
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->firstname . ' ' . $contact->last_name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->message}}</td>





                                    <td>                <a href="{{route('admin.contact-us-reply',$contact->id)}}" type="submit" class="button">Edit</a>
                                    </td>

                                @endforeach

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>




        </div>


    </div>

@endsection
