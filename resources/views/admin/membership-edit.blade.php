@extends('admin.layout.layout')

@section('title')
    Memberships Edit
@endsection

@section('css')

@endsection






@section('main')




    <div class="col-fs-12">
        <div class="col-lg-12">
            <div id="utf_add_listing_part">

                <div class="add_utf_listing_section margin-top-45">
                    <div class="utf_add_listing_part_headline_part">
                        <h3>Add Package</h3>
                    </div>
                    <form action="{{route('admin.memberships-edit-post',$membership->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row with-forms">

                            <div class="col-md-12">
                                <h5>Title</h5>
                                <input type="text" name="title" value="{{$membership->title}}">
                                @error('title')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <h5>Description</h5>
                                <input type="text" name="description"  value="{{$membership->description}}">
                                @error('description')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <h5>Period</h5>
                                <input type="text" name="period"  value="{{$membership->period}}">
                                @error('period')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <h5>Price</h5>
                                <input type="text" name="price"  value="{{$membership->price}}">
                                @error('price')
                                <p>{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="button">Update</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection



