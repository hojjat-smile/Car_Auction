@extends('web.layout.layout')



@section('css')

@endsection






@section('main')
    <!-- Content -->



    <div class="clearfix"></div>

    <div class="container" style="margin-top: 75px;">
        <div class="row">
            <div class="col-md-8">
                <section id="contact" class="margin-bottom-70">
                    <h4><i class="sl sl-icon-phone"></i> Contact Form</h4>
                    <form  action="{{route('web.contact-send-message')}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <input name="first_name" type="text" placeholder="Frist Name" required />

                                @error('first_name')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="last_name" type="text" placeholder="Last Name" required />

                                @error('first_name')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Email" required />

                                @error('first_name')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="subject" type="text" placeholder="Subject" required />

                                @error('first_name')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>

                                @error('first_name')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" class="submit button" id="submit" value="Submit" />
                    </form>
                </section>
            </div>

            <div class="col-md-4">
                <div class="utf_box_widget margin-bottom-70">
                    <h3><i class="sl sl-icon-map"></i> Office Address</h3>
                    <div class="utf_sidebar_textbox">
                        <ul class="utf_contact_detail">

                            <li><strong>Phone:-</strong> <span>{{$info->phone}}</span></li>
                            <li><strong>Web:-</strong> <span><a href="#">{{$info->web}}</a></span></li>
                            <li><strong>E-Mail:-</strong> <span><a href="mailto:info@example.com">{{$info->email}}</a></span></li>
                            <li><strong>Address:-</strong> <span>{{$info->address}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>


@endsection

@section('script')

@endsection
