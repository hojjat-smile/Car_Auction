@extends('admin.layout.layout')


@section('css')

@endsection

@section('main')
<div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Profle</h1>
                    <p>Edit and update the information of client</p>

                    <hr>

                    <form  action="{{route('admin.updated',$user->id)}}" method="POST">
                        @csrf
                        <!-- <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                        
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" class="form-control" name="firstname"
                                       placeholder="Enter first name" value="{{$user->firstname}}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="lastname">Lastname</label>
                                <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Enter last name" value="{{$user->lastname}}"
                                           required>
                            </div>
                            <div class="control-group col-12">
                                <label for="email">Email</label>
                                <input type= "text" id="email" class="form-control" name="email" placeholder="Enter Email " value= "{{$user->email}}"
                                           required></textarea>
                            </div>
                            <div class="control-group col-12">
                                <label for="mobile">Mobile</label>
                                <input type="text" id="mobile" class="form-control" name="mobile" placeholder="Enter phone number " value ="{{$user->mobile}}"
                                           required>
                            </div>
                            <div class="control-group col-12">
                                <label for="companyname">Company Name</label>
                                <input type= "text" id="companyname" class="form-control" name="companyname" placeholder="Enter company name " value = "{{$user->companyname}}"
                                           required>
                            </div>
                            
                        </div>




                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




@endsection

@section('script')

@endsection