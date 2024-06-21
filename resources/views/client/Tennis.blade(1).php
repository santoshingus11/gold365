<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')

  <style>
    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    .blinking-text {
      font-size: 12px !important;
      animation: blink 1s infinite;
    }
  </style>
  @include('layouts.client-head-style-url')
</head>
<?php $page = 'Home';
?>
@include('layouts.client-header')
<section id="home-pages" class="home_pages">
  <div class="banner">
    <div class="container-fluid  m-0">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12 p-0">
          <div class="All-pages-left-side-bar">
            @include('layouts.client-left-side-bar')
          </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12">

          <div class="Home_pages_main_section">


            <nav class="navbar navbar-expand-lg mt-1">
              <div class="container-fluid p-0 m-0">
                <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
                <!--  <span class="navbar-toggler-icon"></span>-->
                <!--</button>-->
                <div class="" id="navbarSupportedContent" style="max-width: 100%;">
                  <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('football-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('table-tenis-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('darts-frontend')}}" class="nav-link">
                        <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('kabaddi-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('boxing-frontend')}}" class="nav-link"> <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>
                    <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px"><a href="{{route('arts-frontend')}}" class="nav-link">
                        <span class="link-name blinking-text">Dehi Capital V Mumbai Indians</span></a></li>

                  </ul>
                </div>
              </div>
            </nav>

            <nav class="navbar navbar-expand-lg home-nav-2 d-none d-md-block" style="background: #8A2BE2;">
              <div class="container-fluid">
                <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
                <!--  <span class="navbar-toggler-icon"></span>-->
                <!--</button>-->
                <div class="" id="navbarSupportedContent" style="max-width: 100%;">
                  <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name">Inplay</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Cricket</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('table-tenis-frontend')}}" class="nav-link"> <span class="link-name">Footbal</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('darts-frontend')}}" class="nav-link">
                        <span class="link-name">Tennis</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Horse Racing</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Casino</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports Book</span></a></li>
                    <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Others</span></a></li>

                  </ul>
                </div>
              </div>
            </nav>
            <nav class="navbar navbar-expand-lg d-block d-md-none"">
     
       
              <div class="" id=" navbarSupportedContent" style="max-width: 100%;">
              <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                <li class="nav-item col-auto p-2 px-3 text-center" style="min-width: 50%; background: #223577;"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name text-white">IPL 2024</span></a></li>
                <li class="nav-item col-auto p-2 px-3 text-center" style="min-width: 50%; background: #bb1919"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name text-white">LOK SABHA 2024</span></a></li>
              </ul>
          </div>

          </nav>
          <nav class="navbar navbar-expand-lg home-nav-2 d-block d-md-none" style="background: #8A2BE2;">
            <div class="container-fluid">
              <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
              <!--  <span class="navbar-toggler-icon"></span>-->
              <!--</button>-->
              <div class="" id="navbarSupportedContent" style="max-width: 100%;">
                <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                  <li class="nav-item col-auto p-2 px-3"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name">Inplay</span></a></li>
                  <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports</span></a></li>
                  <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Casino</span></a></li>
                  <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Sports Book</span></a></li>
                  <li class="nav-item col-auto p-2 px-3"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Others</span></a></li>

                </ul>
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg d-block d-md-none" style="background: #8A2BE2;">
            <div class="container-fluid">
              <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
              <!--  <span class="navbar-toggler-icon"></span>-->
              <!--</button>-->
              <div class="" id="navbarSupportedContent" style="max-width: 100%;">
                <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                  <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Cricket</span></a></li>
                  <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('table-tenis-frontend')}}" class="nav-link"> <span class="link-name">Footbal</span></a></li>
                  <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('darts-frontend')}}" class="nav-link">
                      <span class="link-name">Tennis</span></a></li>
                  <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Horse Racing</span></a></li>
                  <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-pen text-white mb-1"></i><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">Greyhound racing</span></a></li>

                </ul>
              </div>
            </div>
          </nav>


          <div class="">
            <div class="events mb-5">
              <h1 class="event_Cricket">Tennis
                <span class="starts-in-label"></span>
              </h1>

              <table class="table coupon-table">
                <thead>
                  <tr>
                    <th style="width: 63%;"> Game </th>
                    <th colspan="2">1</th>
                    <th colspan="2">X</th>
                    <th colspan="2">2</th>
                  </tr>
                </thead>
                <tbody><!---->
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="{{route('tenis-details')}}" class="text-dark">ATP Rome / May 08 2024 13:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33249552" class="text-dark">WTA Rome 2024 / May 14 2024 05:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33279522" class="text-dark">Jaime Faria v Roman Andres Burruchaga / May 17 2024 17:48 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><span class="game-icon"><span>S</span></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.77 </span></button></td>
                    <td><button class="lay"><span class="odd">1.81</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">2.22</span></button></td>
                    <td><button class="lay"><span class="odd">2.3</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33278936" class="text-dark">Adam Walton v James Duckworth / May 17 2024 17:50 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><span class="game-icon"><span>S</span></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.25 </span></button></td>
                    <td><button class="lay"><span class="odd">1.26</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">4.8</span></button></td>
                    <td><button class="lay"><span class="odd">5.6</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33279758" class="text-dark">Karolina Schmiedlova v J Niemeier / May 17 2024 17:52 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><span class="game-icon"><span>S</span></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.45 </span></button></td>
                    <td><button class="lay"><span class="odd">1.5</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">3</span></button></td>
                    <td><button class="lay"><span class="odd">3.25</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33280223" class="text-dark">Roberto Bautista Agut v Pedro Martinez / May 17 2024 17:54 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">2 </span></button></td>
                    <td><button class="lay"><span class="odd">2.02</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">1.98</span></button></td>
                    <td><button class="lay"><span class="odd">2</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33279381" class="text-dark">Emm Navarro v Ferro / May 17 2024 17:56 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.05 </span></button></td>
                    <td><button class="lay"><span class="odd">1.06</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">19</span></button></td>
                    <td><button class="lay"><span class="odd">21</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33273730" class="text-dark">Federico Coria v Lorenzo Sonego / May 17 2024 17:56 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">3.9 </span></button></td>
                    <td><button class="lay"><span class="odd">4.3</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">1.31</span></button></td>
                    <td><button class="lay"><span class="odd">1.34</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33279925" class="text-dark">Brandon Nakashima v Mariano Navone / May 17 2024 17:58 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">4.8 </span></button></td>
                    <td><button class="lay"><span class="odd">5.2</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">1.24</span></button></td>
                    <td><button class="lay"><span class="odd">1.26</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33281903" class="text-dark">Yannick Hanfmann v Jeffrey John Wolf / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.4 </span></button></td>
                    <td><button class="lay"><span class="odd">1.45</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">3.25</span></button></td>
                    <td><button class="lay"><span class="odd">3.5</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50143949" class="text-dark">Sakellaridis D / Sakellaridis M vs Basic M / Tadic V / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145405" class="text-dark">Estevez, Juan vs Justo, Guido Ivan / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145409" class="text-dark">Alhussein Abdel Aziz L / Refaat M vs Xu J / Zhang Y / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50143971" class="text-dark">Davis J / Summers M vs Little D / Nesterov A / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965353" class="text-dark">R16P13 vs Passaro, Francesco / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145245" class="text-dark">McDonald E / Neilson-Gatenby T vs Liu L Y / Shebekina E / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50141387" class="text-dark">Bouquier A / Massard L vs Schell N / Wiskandt M / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145429" class="text-dark">Descotte, Matias Franco vs Lingua Lavallen, Alejo Lorenzo / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965185" class="text-dark">Chandrasekar A / Kadhe A vs Wqf2 / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145645" class="text-dark">Merida, Daniel vs Moeller, Marvin / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965441" class="text-dark">Qf1 vs Qf2 / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50143951" class="text-dark">Jong S / Muller R vs Bosio G / Campese C / May 17 2024 18:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33279977" class="text-dark">Matteo Arnaldi v Fabio Fognini / May 17 2024 18:10 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.37 </span></button></td>
                    <td><button class="lay"><span class="odd">1.4</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">3.55</span></button></td>
                    <td><button class="lay"><span class="odd">3.7</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33280004" class="text-dark">Valentin Vacherot v Valentin Royer / May 17 2024 18:10 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><span class="game-icon"><span>S</span></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.45 </span></button></td>
                    <td><button class="lay"><span class="odd">1.46</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">3.15</span></button></td>
                    <td><button class="lay"><span class="odd">3.25</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965445" class="text-dark">Qf5 vs Qf6 / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965349" class="text-dark">Hanfmann, Yannick vs R16P10 / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145567" class="text-dark">Buse, Ignacio vs Jodar, Rafael / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145761" class="text-dark">Alcala Gurri, Max vs Pedrico Kravtsov, Albert / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50140127" class="text-dark">Wallart, Enzo vs Rossi, Leonardo / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145251" class="text-dark">Grevelius E / Heinonen A vs Rosenkranz M / Ruehl T / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50121919" class="text-dark">Svatikova, Laura vs Kovaleva, Anastasia / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50121917" class="text-dark">Juric, Noka vs Gavrila, Oana / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50121913" class="text-dark">Samson, Laura vs Sebestova, Ivana / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965233" class="text-dark">Walton, Adam vs Duckworth, James / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50105277" class="text-dark">Crossley, Mayu vs Hrdinkova, Denise / May 17 2024 18:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50165501" class="text-dark">Paty, Daniel vs Engel, Justin / May 17 2024 18:30 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33277043" class="text-dark">Alejandro Tabilo v Alexander Zverev / May 17 2024 18:30 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><span class="game-icon"><span>S</span></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">4.7 </span></button></td>
                    <td><button class="lay"><span class="odd">4.8</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">1.26</span></button></td>
                    <td><button class="lay"><span class="odd">1.27</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50164285" class="text-dark">Klizan, Martin vs Picchione, Andrea / May 17 2024 19:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33280455" class="text-dark">Zarazua v M Sherif / May 17 2024 19:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><span class="game-icon"><span>S</span></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">3.3 </span></button></td>
                    <td><button class="lay"><span class="odd">3.4</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">1.41</span></button></td>
                    <td><button class="lay"><span class="odd">1.43</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33279924" class="text-dark">Arthur Fils v Thanasi Kokkinakis / May 17 2024 19:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.67 </span></button></td>
                    <td><button class="lay"><span class="odd">1.69</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">2.44</span></button></td>
                    <td><button class="lay"><span class="odd">2.48</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50143943" class="text-dark">Ferrara V / Laki M vs Kuczer D / van de Peer V / May 17 2024 19:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50142475" class="text-dark">Kalashnikova O / Zimmermann K vs Aiava D / Christofi E / May 17 2024 19:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50142315" class="text-dark">Klok, Denys vs Nedic, Andrej / May 17 2024 19:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50142013" class="text-dark">Appleton E / Thombare P G vs Naef C / Pigossi L / May 17 2024 19:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965443" class="text-dark">Qf3 vs Qf4 / May 17 2024 19:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50145269" class="text-dark">Kaukovalta P / Vasa E vs Lehmann N / Parizzia N / May 17 2024 19:25 (IST)</a><!----><!----></div>
                      <div class="game-icons"><span class="game-icon"><span class="active"></span></span><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33279981" class="text-dark">A. Cornet v E Ruse / May 17 2024 19:30 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">2.74 </span></button></td>
                    <td><button class="lay"><span class="odd">2.82</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">1.55</span></button></td>
                    <td><button class="lay"><span class="odd">1.57</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965139" class="text-dark">Mpetshi Perricard, Giovanni vs Barrere, Gregoire / May 17 2024 20:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/50148013" class="text-dark">Basel, Valentin vs Kestelboim, Mariano / May 17 2024 20:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49965341" class="text-dark">Musetti, Lorenzo vs Goffin, David / May 17 2024 21:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/49983509" class="text-dark">Bhambri Y / Olivetti A vs Arribage T / Cornea V V / May 17 2024 21:15 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><!----><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">- </span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33280752" class="text-dark">Nicolas Jarry v Tommy Paul / May 17 2024 23:30 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">2.1 </span></button></td>
                    <td><button class="lay"><span class="odd">2.12</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">1.89</span></button></td>
                    <td><button class="lay"><span class="odd">1.9</span></button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="game-name"><!----><a href="/game-detail/33280496" class="text-dark">I Swiatek v A Sabalenka / May 18 2024 05:00 (IST)</a><!----><!----></div>
                      <div class="game-icons"><!----><span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span><!----><!----><span class="game-icon"><img src="{{asset('/')}}assets/img/ic_bm.webp" class="bookmaker-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                    </td>
                    <td><button class="back"><span class="odd">1.32 </span></button></td>
                    <td><button class="lay"><span class="odd">1.33</span></button></td>
                    <td><button class="back"><span class="odd">-</span></button></td>
                    <td><button class="lay"><span class="odd">-</span></button></td>
                    <td><button class="back"><span class="odd">4</span></button></td>
                    <td><button class="lay"><span class="odd">4.1</span></button></td>
                  </tr><!---->
                </tbody><!---->
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
@include('layouts.client-footer')