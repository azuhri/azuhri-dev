@extends('component.template')
@section('title')
   Home
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
        <div class="typed-text2">
          <span class="typed-text"></span><p class="cursor">&nbsp;</p>
        </div>
        <div class="iconing">
          <a class="twitters">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="instagram">
            <i class="fab fa-instagram"></i>
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
          <img src="{{asset('icon-banner2.png')}}" alt="">
        </div>
      </div>
      <div class="photo">
        {{-- <img src="{{asset('azuhri.png')}}" alt=""> --}}
      </div>
    </div>
</section>
<section class="about" id="about">
  <div class="coverAbout">
    <div class="dataAbout">
      <div class="imgMain">
        <img src="{{asset('azuhri2.png')}}" alt="">
        <div class="descAbout">
          <span class="aboutme">ABOUT ME</span>
          <h4>
           Azis Zuhri Pratomo
           <span class="sf">as Software Engineer</span>
          </h4>
          <span>
            I like all about of computer since i was a child. For me, computer can give anything when i playing with them. More of that, what I think before. 
          </span>
          <div class="btnStart">
            <button>DOWNLOAD CV</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="portofolio">
  <div class="cover1">
    <div class="titleLayer1">
      <span>MY PORTOFOLIO</span>
      <h3>Some Information Biography of Me</h3>
    </div>
    <div class="navPortof">
      <h5>
        <i class="fas fa-id-card"></i>
        <span>all </span>
      </h5>
      <h5>
        <i class="fa fa-graduation-cap icon-main" aria-hidden="true"></i>
        <span>education</span>
      </h5>
      <h5>
        <i class="fas fa-laptop-code"></i>
        <span>skills</span>
      </h5>
      <h5>
        <i class="fa fa-trophy" aria-hidden="true"></i>
        <span>achievements</span>
      </h5>
      <h5>
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <span>experinces</span>
      </h5>
    </div>
  </div>
  <div class="cover2">
    <div class="eduContent">
            <div class="titleEdu">
              <span>Track Record Education</span>
            </div>
            <div class="eduCovers">
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
          <div class="eduCovers">
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
          <div class="eduCovers">
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
    <div class="skillContent">
      <div class="titleSkill">
        <span>My Skills</span>
      </div>
      <div class="navSkill">
        <a href="">
          <i class="fa fa-code icon-main" aria-hidden="true"></i>
          <span>Programming</span>
        </a>
        <a href="">
          <i class="fas fa-network-wired"></i>
          <span>Networkings</span>
        </a>
        <a href="">
          <i class="fas fa-server"></i>
          <span>Sysadmins/Server</span>
        </a>
        <a href="">
          <i class="fas fa-photo-video"></i>
          <span>Desain</span>
        </a>
      </div>
      <div class="coverSkillContent">
        <div class="coverSkill">
          <div class="imgSkill">
            <img src="{{asset('assets/js.png')}}" alt="">
          </div>
          <div class="Desc">
            <h5>Javascript</h5>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo molestiae, quae cumque est eos delectus porro repellat necessitatibus laborum magnam excepturi similique nesciunt aliquid aliquam quia earum, alias eveniet sint.</span>
          </div>
          <div class="Ability">
            <span>Ability</span>
            <div class="abilIcon">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="coverSkill">
          <div class="imgSkill">
            <img src="{{asset('assets/laravel.jpg')}}" alt="">
          </div>
          <div class="Desc">
            <h5>Laravel</h5>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo molestiae, quae cumque est eos delectus porro repellat necessitatibus laborum magnam excepturi similique nesciunt aliquid aliquam quia earum, alias eveniet sint.</span>
          </div>
          <div class="Ability">
            <span>Ability</span>
            <div class="abilIcon">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="coverSkill">
          <div class="imgSkill">
            <img src="{{asset('assets/python.png')}}" alt="">
          </div>
          <div class="Desc">
            <h5>Python</h5>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo molestiae, quae cumque est eos delectus porro repellat necessitatibus laborum magnam excepturi similique nesciunt aliquid aliquam quia earum, alias eveniet sint.</span>
          </div>
          <div class="Ability">
            <span>Ability</span>
            <div class="abilIcon">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="coverSkill">
          <div class="imgSkill">
            <img src="{{asset('assets/python.png')}}" alt="">
          </div>
          <div class="Desc">
            <h5>Python</h5>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo molestiae, quae cumque est eos delectus porro repellat necessitatibus laborum magnam excepturi similique nesciunt aliquid aliquam quia earum, alias eveniet sint.</span>
          </div>
          <div class="Ability">
            <span>Ability</span>
            <div class="abilIcon">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="achieveContent">
      <div class="ach1">
          <span>My Achievements</span>
      </div>
      <div class="ach2">
          <div class="coverAch">
            <div class="coverAch1">
              <div class="imgAch">
                <img src="{{asset('assets/seacc.jpg')}}" alt="">
              </div>
              <div class="descAch">
                <h5>
                  <span>Competition </span>
                  <span>:  SEACC</span>
                </h5>
                <h5>
                  <span>Level </span>
                  <span>:  Internasional </span>
                </h5>
                <span class="textDecs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id facere nam cupiditate. Quos omnis dolorum soluta autem! Doloribus vero rerum, distinctio voluptatem officiis velit provident est quo alias beatae nostrum.</span>
              </div>
              <div class="btnAchiev">
                <button>view details</button>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="expContent">
      <div class="ach1">
        <span>My Experinces</span>
    </div>
    <div class="ach2">
        <div class="coverAch">
          <div class="coverAch1">
            <div class="imgAch">
              <img src="{{asset('assets/seacc.jpg')}}" alt="">
            </div>
            <div class="descAch">
              <h5>
                <span>Project </span>
                <span>:  SEACC</span>
              </h5>
              <h5>
                <span>Institution</span>
                <span>:  VHS 26 Jakarta  </span>
              </h5>
              <span class="textDecs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id facere nam cupiditate. Quos omnis dolorum soluta autem! Doloribus vero rerum, distinctio voluptatem officiis velit provident est quo alias beatae nostrum.</span>
            </div>
            <div class="btnAchiev">
              <button>view details</button>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</section>
<footer>
  <div class="foot">
    <div class="footIcon">
      <img src="{{asset('favicon.png')}}" alt="">
      <span>AZUHRI DEV</span>
    </div>
    <div class="footNav">
      <ul>
        <li><a href="">HOME</a></li>
        <li><a href="">ABOUT</a></li>
        <li><a href="">PORTOFOLIO</a></li>
        <li><a href="">PAGES</a></li>
        <li><a href="">BLOG</a></li>
        <li><a href="">CONTACT</a></li>
      </ul>
    </div>
    <div class="footSosmed">
      <a class="twitters2">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="instagram2">
        <i class="fab fa-instagram"></i>
      <a class="facebook2">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="linkedin2">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <div class="footNote">
      <span>Copyright &copy;2020 azuhri-dev All right reserved</span>
    </div>
  </div>
</footer>
    
@endsection