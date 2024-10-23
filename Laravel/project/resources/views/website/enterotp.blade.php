<?php
if (session()->has('ses_otp')) {
  
}
else{
  echo "<script>window.location='/';</script>";
}
?>

@extends('website.layout.main_structure')
@section('main_code')

<!-- contact section -->

<section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Enter OTP
      </h2>
    </div>
    <div class="row">

      <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{url('/insert_enterotp')}}" method="post">
          @csrf
          <div>
            <input class="form-control mb-3" type="number" name="otp" value="{{old('otp')}}" placeholder="Enter Forgor Password OTP" />
          </div>
          <div class="d-flex mb-3">
            <button type="submit" name="submit">
              Submit
            </button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div class="map_container">
          <div class="map">
            <div id="googleMap" style="width:100%;height:100%;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->

@endsection