<?php
if (session()->has('ses_userid')) {
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
        Edit Profile
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

        <form action="{{url('updateprofile/'.$data->id)}}" enctype="multipart/form-data" method="post">
          @csrf
          <div>
            <input class="form-control mb-3" type="text" name="name" value="{{$data->name}}" placeholder="Name" />
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
       
          <div class="mb-3">
            <p>Choose Gender</p>
            <?php
            $gender=$data->gender;
            ?>   
            Male :<input type="radio" name="gender" value="Male" <?php 
            if($gender=="Male"){ echo "checked";}?>/>
            Female :<input type="radio" name="gender" value="Female" <?php 
            if($gender=="Female"){ echo "checked";}?>/>
          </div>
          <div class="mb-3">
            <p>Choose Lag</p>
            <?php
            $lag=$data->lag;
            $lag_arr=explode(",",$lag);
            ?>   
            Hindi :<input type="checkbox" name="lag[]" value="Hindi"
            <?php if(in_array("Hindi",$lag_arr)) { echo "checked";}?>/>
            English :<input type="checkbox" name="lag[]" value="English"
            <?php if(in_array("English",$lag_arr)) { echo "checked";}?>/>
            Gujarati :<input type="checkbox" name="lag[]" value="Gujarati"
            <?php if(in_array("Gujarati",$lag_arr)) { echo "checked";}?>/>
          </div>
          <div>
            <input class="form-control mb-3" type="file" name="img" placeholder="File" />
            <img src="../website/images/users/{{$data->img}}" width="50px" alt="">
            @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <p>Choose Country</p>
            <select class="form-control mb-3" name="cid" placeholder="Password">
                <option>Select Country</option>
                @foreach($country_arr as $d)
                  @if($d->id == $data->cid)
                  <option value="{{$d->id}}" selected>{{$d->cname}}</option>
                  @else
                  <option value="{{$d->id}}">{{$d->cname}}</option>
                  @endif
                @endforeach
            </select>
            @error('cid')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="d-flex mb-3">
            <button type="submit" name="submit">
              Save
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