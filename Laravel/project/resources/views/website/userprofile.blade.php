
@extends('website.layout.main_structure')

@section('main_code')

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              User Profile
            </h2>
            <h3>Id : {{$data->id}}</h3>
            <h3>Name : {{$data->name}}</h3>
            <h3>Email : {{$data->email}}</h3>
            <h5>Gender : {{$data->gender}}</h5>
            <h5>Lag : {{$data->lag}}</h5>
            <h5>Country : {{$data->cid}}</h5>

            <a href="editprofile/{{$data->id}}">
              Edit Profile
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="website/images/users/{{$data->img}}" width="100%" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
  @endsection