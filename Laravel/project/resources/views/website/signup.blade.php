<?php
if (session()->has('ses_userid')) {
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
        Signup Hare
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

        <form action="{{url('/insert_signup')}}" enctype="multipart/form-data" method="post">
          @csrf
          <div>
            <input class="form-control mb-3" type="text" name="name" value="{{old('name')}}" placeholder="Name" />
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <input class="form-control mb-3" type="email" name="email" value="{{old('email')}}" placeholder="Email" />
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <input class="form-control mb-3" type="text" name="password" value="{{old('password')}}" placeholder="Password" />
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <p>Choose Gender</p>
            Male :<input type="radio" name="gender" value="Male"/>
            Female :<input type="radio" name="gender" value="Male"/>
          </div>
          <div class="mb-3">
            <p>Choose Lag</p>
            Hindi :<input type="checkbox" name="lag[]" value="Hindi"/>
            English :<input type="checkbox" name="lag[]" value="English"/>
            Gujarati :<input type="checkbox" name="lag[]" value="Gujarati"/>
          </div>
          <div>
            <input class="form-control mb-3" type="file" name="img" placeholder="Password" />
            @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <p>Choose Country</p>
            <select class="form-control mb-3" name="cid" placeholder="Password">
                <option>Select Country</option>
                @foreach($country_arr as $d)
                  <option value="{{$d->id}}">{{$d->cname}}</option>
                @endforeach
            </select>
            @error('cid')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="d-flex mb-3">
            <button type="submit" name="submit">
              Signup
            </button>
          </div>
          <a href="login">If you already regisrted then Login Here</a>
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