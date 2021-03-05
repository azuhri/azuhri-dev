<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>azuhri-dev.com</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="{{asset('favicon.png')}}"/>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS Local -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gfont.css')}}">

  </head>
  <style>

    .header {
      display: flex;
      flex-direction: column;
      /* justify-content: center; */
      align-items: center;
      background-position: center;
      background-size: cover;
      height: 100vh;
    }

    .coverHeader {
      width: 50%;
    }

    .header .layer1 {
      display: flex;
      flex-direction: column
    }

    .logo {
      display: flex;
      width: 100%
    }

    .navs {
      width: 75%;
      display: flex;
      justify-content: flex-start;
    }

    .navs ul {
      display: flex;
      align-items: center
    }

    .navs ul li {
      margin: 0 1.2rem;
      list-style-type: none;
    }

    .navs a {
      /* font-weight: bold; */
      font-family: 'Quicksand';
      color: gray;
      font-size: 0.5rem;
      font-weight: 400;
      font-size: 0.7rem;
      transition: 1s;
      cursor: pointer;
      text-decoration: none;
      display: flex;
      position: relative!important;
      padding-bottom: 0.2rem
    }

    .navs a:after {
      content: "";
      position: absolute;
      width: 0%;
      transition: 0.5s;
      height: 2px;
      background-color: #3f3d56;
      bottom: 0;
    }

    .navs a:hover::after {
      width: 100%;
      transition: 0.5s
    }

    .navs a:hover {
      color: #3f3d56;
      font-weight: bold;
      transition: 0.5s;
    }


    .img {
      display: flex;
      padding: 2rem;
      position: relative;
      width: 25%
    }

    .img span {
      position: absolute;
      top: 50px;
      right: 50px;
      font-weight: bold;
      font-family: 'Quicksand';
      font-size: 1rem;
      background: -webkit-linear-gradient(#f49900, #f20071);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .img img {
      width: 50%
    }

    .layer2 {
      display: flex;
      /* position: relative */
    }

    .desc {
      display: flex;
      flex-direction: column;
      padding-top: 10rem;
      width: 50%
    }

    .photo {
      width: 50%
    }

    .photo img {
      width: 50%
    }

    .desc span {
      margin: 0.5rem 0
    }

    .desc span:nth-child(1) {
      font-size: 1.5rem;
      color: gray
    }
    

    .desc span:nth-child(2) {
      font-size: 2.5rem;
      color: #F46716;
      font-weight: bold;
      
    }

    .desc span:nth-child(3) {
      font-size: 2rem;
      color: #4b4dda;
      font-weight: lighter;
      font-family: 'Roboto';
      text-shadow: -3px 3px 3px #4b4dda;
    }

    .icon-banner {
      display: flex;
      position: absolute;
      right: 0;
    }

    .icon-banner img {
      width: 75%;
      box-shadow: 25px 0 100px 17px #771086ba;
      border-radius: 2.5rem;
    }

    .layer2 {
      border-bottom: 5px solid #3f3d56;
    }

    .iconing {
      display: flex;
      margin-bottom: 3rem ;
      margin-bottom: 1rem ;
    }

    .iconing a {
      width: 15%;
      cursor: pointer
    }

    .iconing i {
      font-size: 2.2rem;
      color: #3f3d56;
      transition: 1s
      
    }

    .iconing i:hover {
      color: #4b4dda;
      transition: 0.5s
    }

    .btnStart {
      margin: 1rem 0;
      display: flex
    }

    .btnStart button {
      width: 50%;
      border-radius: 0.3rem;
      padding: 0.8rem 0;
      border: none;
      font-size: 1.2rem;
      color: white;
      text-transform: uppercase;
      font-family: 'Quicksand';
      font-weight: bold;
      transition: 0.5s!important;
      opacity: 0.5!important;
      background: linear-gradient(to right, #f49900 0%, #f46716 51%, #ed239f 100%);
    }

    .btnStart button:hover {
      transition: 0.5s!important;
      opacity: 1!important;
      background: linear-gradient(to right, #ed239f 0%, #ed239f 51%, #f49900 100%);
    }

    

    




  </style>
  <body>

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
            <span>HEY THERE!</span>
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




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
