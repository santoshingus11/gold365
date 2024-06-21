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


            @include('layouts.client-navbar')

            <div class="">
              <div class="events mb-5">
                <h1 class="event_Cricket">Cricket
                  <span class="starts-in-label">Betting from 30 mins before start</span>
                </h1>
                <div class="table-responsive">
                  <table class="table coupon-table">
                    <thead>
                      <tr>
                       
                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <td>
                         
                         
                    
                        <td><button class="back"><span class="odd">2.4</span></button></td>
                        <td><button class="lay"><span class="odd">1.8</span></button></td>
                        <td><button class="back"><span class="odd">3.5</span></button></td>
                        <td><button class="lay"><span class="odd">1.9</span></button></td>
                        <td><button class="back"><span class="odd">4.6</span></button></td>
                        <td><button class="lay"><span class="odd">3.4</span></button></td>
                     
                    </tbody>
                  </table>
                </div>



                <div class="row mt-5">
                
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3" tabindex="0">
                    <a href="/slot/game/lounch/">
                      <div class="casinoicons text-center">
                        <img class="img-fluid" style="height: 110px;" src="">
                        <div class="casino-name mt-2">ipl</div>
                      </div>
                    </a>
                  </div>
                
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.client-footer')