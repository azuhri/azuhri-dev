@extends('component.template')
@section('title')
    azuhri-dev | Home
@endsection
@section('content')
<section class="header" style="background: url('{{asset('home-banner.png')}}'); background-position: center;
background-size: cover;">
  <div class="coverHeader">
        <div class="layer1">
          <div class="logo">
            <div class="img">
              <img src="{{asset('icon.png')}}" alt="">
              <span>Azuhri Dev.</span>
            </div>
            <div class="navs">
              <ul>
                <li><a class="homes">HOME</a></li>
                <li><a class="abouts">ABOUT</a></li>
                <li><a class="portops">PORTOFOLIO</a></li>
                <li><a class="pages">PAGES</a></li>
                <li><a class="blog">BLOG</a></li>
                <li><a class="kontak">CONTACT</a></li>
              </ul>
            </div>
        </div>
    <div class="layer2">
      <div class="desc">
        <span>HELLO GUYS!</span>
        <span>I AM AZIS ZUHRI PRATOMO</span>
        <span>FULLSTACK WEB DEVELOPER</span>
        <div class="iconing">
          <a class="twitters">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="linkedin">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <div class="btnStart">
          <button>See My Website</button>
        </div>
        <div class="icon-banner">
          <img src="{{asset('icon-banner.svg')}}" alt="">
        </div>
      </div>
      <div class="photo">
        {{-- <img src="{{asset('azuhri.png')}}" alt=""> --}}
      </div>
    </div>
</section>
<section class="about" id="about">
  <div class="coverAbout">
    <h1>ABOUT ME</h1>
    <div class="dataAbout">
      <div class="imgMain">
        <img src="{{asset('azuhri.png')}}" alt="">
        <div class="descAbout">
          <h4>
            I'm Azis Zuhri Pratomo, Software Engineer
          </h4>
          <span>
            I like all about of computer since i was a child. For me, computer can give anything when i playing with them. More of that, what I think before. 
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="biodata">
    <div class="bio1" style="background-image: url({{asset('common-banner.png')}})">
      <div class="edu">
        <h5>
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <span>Education</span>
        </h5>
        <div class="contents">
          <div>
              <div class="icons">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <div class="lines">&nbsp;</div>
              </div>
              <div class="year">
                <span> 2007</span>
              </div>
              <div class="school">
                <span>Primary School</span>
                <span>(SDN 03 BAMBU APUS)</span>
              </div>
          </div>
          <div>
            <div class="icons">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <div class="lines">&nbsp;</div>
            </div>
            <div class="year">
              <span> 2007</span>
            </div>
            <div class="school">
              <span>Primary School</span>
              <span>(SDN 03 BAMBU APUS)</span>
            </div>
        </div>
        <div>
          <div class="icons">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <div class="lines">&nbsp;</div>
          </div>
          <div class="year">
            <span> 2007</span>
          </div>
          <div class="school">
            <span>Primary School</span>
            <span>(SDN 03 BAMBU APUS)</span>
          </div>
      </div>
        </div>
      </div>
      <div class="skills">
        <h5>
          <i class="fa fa-code" aria-hidden="true"></i>
          <span>Skills</span>
        </h5>
        <div class="contents">
          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo odio doloremque illo nam mollitia tempore voluptate fugiat ducimus, nesciunt nihil asperiores reprehenderit quasi eos, perferendis architecto libero ab enim! Alias.</span>
        </div>
      </div>
    </div>
    <div class="bio2"></div>
  </div>
</section>
@endsection