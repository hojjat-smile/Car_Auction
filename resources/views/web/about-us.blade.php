@extends('web.layout.layout')



@section('css')

@endsection


@section('main')




  <div class="clearfix"></div>

  <div id="titlebar" class="gradient margin-bottom-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>About Us</h2>
        </div>
      </div>
    </div>
  </div>


<div class="container">
    <section style="margin: 75px auto;padding: 25px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        {!! $about->message  !!}
    </section>
</div>








@endsection

@section('script')

@endsection
