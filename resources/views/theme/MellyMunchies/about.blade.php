@extends('theme.MellyMunchies.website') @section('content')
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
            <h1>about <span>us</span></h1>
            <ul>
              <li><a href="{{url('/')}}">home</a></li>
              /
              <li><a href="#" class="active">about us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about-main">
    <div class="container">
      <div class="about-content-main">
        <div class="row">
          <div class="col-12 col-lg-6 p-0">
            <div class="about-content">
              <h4>
                <span>Welcome </span>
                to
              </h4>
              <h2>melly's munchies</h2>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aspernatur, optio ducimus neque eaque facilis, laudantium eius
                perspiciatis debitis dolorem quam id velit quasi ex
                reprehenderit a non veniam facere? Suscipit?
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                laudantium obcaecati quia sapiente libero cum voluptate enim
                odit repellat pariatur, dolores perferendis error nostrum in
                dicta tempora quae inventore quibusdam. Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Beatae, laudantium obcaecati
                quia sapiente libero cum voluptate enim odit repellat pariatur,
                dolores perferendis error nostrum in dicta tempora quae
                inventore quibusdam. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Beatae, laudantium obcaecati quia sapiente
                libero cum voluptate enim odit repellat pariatur, dolores
                perferendis error nostrum in dicta tempora quae inventore
                quibusdam.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                laudantium obcaecati quia sapiente libero cum voluptate enim
                odit repellat pariatur, dolores perferendis error nostrum in
                dicta tempora quae inventore quibusdam. Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Beatae, laudantium obcaecati
                quia sapiente libero cum voluptate enim odit repellat pariatur,
              </p>
            </div>
          </div>
          <div class="col-12 col-lg-6 p-0 text-right">
            <div class="about-content-img">
              <img src="{{ asset('public/theme/myweb/assets/images/img03.png')}}" class="img-fluid" alt="image" />
            </div>
          </div>
          <div class="col-12 col-lg-12 p-0">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
              laudantium obcaecati quia sapiente libero cum voluptate enim odit
              repellat pariatur, dolores perferendis error nostrum in dicta
              tempora quae inventore quibusdam. Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Beatae, laudantium obcaecati quia
              sapiente libero cum voluptate enim odit repellat pariatur, dolores
              perferendis error nostrum in dicta tempora quae inventore
              quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Beatae, laudantium obcaecati quia sapiente libero cum
              voluptate enim odit repellat pariatur, dolores perferendis error
              nostrum in dicta tempora quae inventore quibusdam. Lorem ipsum
              dolor sit amet consectetur adipisicing elit. Beatae, laudantium
              obcaecati quia sapiente libero cum voluptate enim odit repellat
              pariatur, dolores perferendis error nostrum in dicta tempora quae
              inventore quibusdam. dolores perferendis error nostrum in dicta
              tempora quae inventore quibusdam. Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Beatae, laudantium obcaecati quia
              sapiente libero cum voluptate enim odit repellat pariatur, dolores
              perferendis error nostrum in dicta tempora quae inventore
              quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Beatae, laudantium obcaecati quia sapiente libero cum
              voluptate enim odit repellat pariatur, dolores perferendis error
              nostrum in dicta tempora quae inventore quibusdam. Lorem ipsum
              dolor sit amet consectetur adipisicing elit. Beatae, laudantium
              obcaecati quia sapiente libero cum voluptate enim odit repellat
              pariatur, dolores perferendis error nostrum in dicta tempora quae
              inventore quibusdam. Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Beatae, laudantium obcaecati quia sapiente
              libero cum voluptate enim odit repellat pariatur, dolores
              perferendis error nostrum in dicta tempora quae inventore
              quibusdam.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection
