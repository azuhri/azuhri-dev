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
@endsection