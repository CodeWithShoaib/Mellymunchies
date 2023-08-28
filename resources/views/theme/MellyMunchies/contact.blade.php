@extends('theme.MellyMunchies.website')
@section('content')
<main>
  <!-- inner banner  -->
  <div class="inner-banner">
    <div class="inner-banner_img">
      <img src="{{ asset('public/theme/myweb/assets/images/inner-banner.png')}}" alt="" />
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-4 text-center">
          <div class="inner-banner_content">
            <h1>contact <span>us</span></h1>
            <ul>
              <li><a href="{{url('/')}}">home</a></li>
              /
              <li><a href="#" class="active">contact us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us__main">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6 text-center">
          <h1>GET <span> IN TOUCH</span></h1>
        </div>
        <div class="col-12 col-lg-10 mt-3">
          <div class="row">
            <div class="col-12 col-lg-6 py-3">
              <input type="text" placeholder="First Name" />
            </div>
            <div class="col-12 col-lg-6 py-3">
              <input type="text" placeholder="Last Name" />
            </div>
            <div class="col-12 col-lg-12 py-3">
              <input type="text" placeholder="Email" />
            </div>
            <div class="col-12 col-lg-12 py-3 textarea">
              <textarea rows="6" placeholder="Comment"></textarea>
            </div>
            <div class="col-12 col-lg-12 py-3 mt-3 text-center">
              <a href="#" class="theme-btn_red">SEND </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
