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
  <?php
  if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>
    @include('layouts.mobile_cric_head')
  <?php }  ?>
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

            <?php
            if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>

              <div class="">
                <div class="events mb-5">
                  <h1 class="event_Cricket">Cricket
                    <span class="starts-in-label">Betting from 30 mins before start</span>
                  </h1>
                  <div class="table-responsive">
                    <tab heading="Inplay" role="tabpanel" aria-labelledby="" class="tab-pane active">
                      <div id="home" class="tab-pane sports scrollHeight">
                        <tabset type="tabs game-nav-bar" class="tab-container">
                          <ul role="tablist" class="nav nav-tabs game-nav-bar" aria-label="Tabs">
                            <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/4.png"></div>
                                <div>Cricket<em>new</em></div><!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/2.png"></div>
                                <div>Tennis<em>new</em></div><!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/1.png"></div>
                                <div>Football<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/7.png"></div>
                                <div>Horse Racing<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/2378961.png"></div>
                                <div>Politics<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/4339.png"></div>
                                <div>Greyhound Racing<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/99994.png"></div>
                                <div>Kabaddi<em>new</em></div><!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/99990.png"></div>
                                <div class="new-tag-menus">Binary<em>new</em></div><!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/26420387.png"></div>
                                <div>Mixed Martial Arts<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/998917.png"></div>
                                <div>Volleyball<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/7524.png"></div>
                                <div>Ice Hockey<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/7522.png"></div>
                                <div>Basketball<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/7511.png"></div>
                                <div>Baseball<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/3503.png"></div>
                                <div>Darts<em>new</em></div><!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/29.png"></div>
                                <div>Futsal<em>new</em></div><!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/20.png"></div>
                                <div>Table Tennis<em>new</em></div>
                                <!----><!---->
                              </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                <div><img alt="" src="{{asset('/new_assets')}}/5.png"></div>
                                <div>Rugby<em>new</em></div><!----><!---->
                              </a></li><!---->
                          </ul>
                          <div class="tab-content">
                            <tab role="tabpanel" aria-labelledby="" class="tab-pane active">
                              <app-m-sport-list>
                                <div>
                                  <div class="game-listing-container">
                                    <div><!---->
                                      <div class="game-list pt-1 pb-1 container-fluid"><a href="https://gold365.site/m/game-detail/28529194">
                                          <div class="row row5">
                                            <div class="col-8">
                                              <p class="mb-0 game-name"><strong>ICC World Twenty20</strong></p>
                                              <p class="mb-0">May 26 2024 07:00 (IST)</p>
                                              <!----><!---->
                                            </div>
                                            <div class="col-4 text-right">
                                              <div class="game-icons"><span class="game-icon"><span class="active-icon" style="vertical-align: bottom;"></span></span><!----><!----><!----><span class="game-icon"><img src="{{asset('/new_assets')}}/ic_bm.webp" class="bm-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                                            </div>
                                          </div>
                                        </a>
                                        <div class="row row5">
                                          <div class="col-12">
                                            <div class="text-center game-col game-home"><b>1</b></div>
                                            <div class="text-center game-col game-home"><b>X</b></div>
                                            <div class="text-center game-col game-home"><b>2</b></div>
                                          </div>
                                        </div>
                                        <div class="row row5">
                                          <div class="col-12">
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-
                                              </a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-</a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-</a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="game-list pt-1 pb-1 container-fluid"><a href="https://gold365.site/m/game-detail/33310335">
                                          <div class="row row5">
                                            <div class="col-8">
                                              <p class="mb-0 game-name"><strong>Scotland v Afghanistan</strong></p>
                                              <p class="mb-0">May 31 2024 07:30 (IST)</p>
                                              <!----><!---->
                                            </div>
                                            <div class="col-4 text-right">
                                              <div class="game-icons"><span class="game-icon"><span class="active-icon" style="vertical-align: bottom;"></span></span><!----><!----><!----><span class="game-icon"><img src="{{asset('/new_assets')}}/ic_bm.webp" class="bm-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
                                            </div>
                                          </div>
                                        </a>
                                        <div class="row row5">
                                          <div class="col-12">
                                            <div class="text-center game-col game-home"><b>1</b></div>
                                            <div class="text-center game-col game-home"><b>X</b></div>
                                            <div class="text-center game-col game-home"><b>2</b></div>
                                          </div>
                                        </div>
                                        <div class="row row5">
                                          <div class="col-12">
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">7.2
                                              </a><a href="javascript:void(0);" class="btn-lay">7.6</a></div>
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-</a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">1.15</a><a href="javascript:void(0);" class="btn-lay">1.16</a></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="game-list pt-1 pb-1 container-fluid"><a href="https://gold365.site/m/game-detail/6995">
                                          <div class="row row5">
                                            <div class="col-8">
                                              <p class="mb-0 game-name"><strong>Delhi V Mumbai</strong></p>
                                              <p class="mb-0">May 31 2024 08:26 (IST)</p>
                                              <!----><!---->
                                            </div>
                                            <div class="col-4 text-right">
                                              <div class="game-icons"><span class="game-icon"><span class="active-icon" style="vertical-align: bottom;"></span></span><!----><!----><!----><!----><!----><span class="game-icon"><!----><!----></span><!---->
                                              </div>
                                            </div>
                                          </div>
                                        </a>
                                        <div class="row row5">
                                          <div class="col-12">
                                            <div class="text-center game-col game-home"><b>1</b></div>
                                            <div class="text-center game-col game-home"><b>X</b></div>
                                            <div class="text-center game-col game-home"><b>2</b></div>
                                          </div>
                                        </div>
                                        <div class="row row5">
                                          <div class="col-12">
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-
                                              </a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-</a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                            <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-</a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                          </div>
                                        </div>
                                      </div>

                                    </div><!---->
                                  </div><!----><!----><!---->
                                </div><!---->
                              </app-m-sport-list><!----><!---->
                            </tab>

                          </div>
                        </tabset>
                      </div>
                    </tab>
                  </div>
                </div>
              </div>
            <?php } else {  ?>
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
                          <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') === false)) { ?>
                            <th style="width: 63%;">Game</th>
                            <th colspan="2">1</th>
                            <th colspan="2">X</th>
                            <th colspan="2">2</th>
                          <?php } ?>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($response as $r)
                        <tr>
                          <td>
                            @if($r['status']==1)
                            <div class="game-name">
                              <a href="{{route('Cricket-details',$r['id'])}}" class="text-dark">{{$r['game_title']}} / {{date('M d Y h:i A', strtotime($r['created_at']))}} (IST)</a>
                            </div>
                            @else
                            <div class="game-name">
                              <p class="text-dark">{{$r['game_title']}} / {{date('M d Y h:i A', strtotime($r['created_at']))}} (IST)</p>
                            </div>
                            @endif

                            <div class="game-icons">
                              <span class="game-icon"><span @if($r['status']==1) class="active" @endif></span></span>
                              <span class="game-icon"><i class="fas fa-tv v-m icon-tv"></i></span>
                              <span class="game-icon"><img src="{{asset('/')}}assets/img/sports-provider.webp" class="bookmaker-icon"></span>
                            </div>
                          </td>
                          <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') === false)) { ?>
                            @if($r['status']==1)
                            <td><a href="{{ route('Cricket-details',$r['id']) }}"><button class="back"><span class="odd">2.4</span></button></a></td>
                            <td><a href="{{ route('Cricket-details',$r['id']) }}"><button class="lay"><span class="odd">1.8</span></button></a></td>
                            <td><a href="{{ route('Cricket-details',$r['id']) }}"><button class="back"><span class="odd">3.5</span></button></a></td>
                            <td><a href="{{ route('Cricket-details',$r['id']) }}"><button class="lay"><span class="odd">1.9</span></button></a></td>
                            <td><a href="{{ route('Cricket-details',$r['id']) }}"><button class="back"><span class="odd">4.6</span></button></a></td>
                            <td><a href="{{ route('Cricket-details',$r['id']) }}"><button class="lay"><span class="odd">3.4</span></button></a></td>
                            @else
                            <td><button class="back"><span class="odd">2.4</span></button></td>
                            <td><button class="lay"><span class="odd">1.8</span></button></td>
                            <td><button class="back"><span class="odd">3.5</span></button></td>
                            <td><button class="lay"><span class="odd">1.9</span></button></td>
                            <td><button class="back"><span class="odd">4.6</span></button></td>
                            <td><button class="lay"><span class="odd">3.4</span></button></td>
                            @endif
                          <?php } ?>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>



                  <div class="row mt-5">
                    @foreach($data['liveGames'] as $d)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3" tabindex="0">
                      <a href="/slot/game/lounch/{{$d->id}}">
                        <div class="casinoicons text-center">
                          <img class="img-fluid" style="height: 110px;" src="{{$d->img}}">
                          <div class="casino-name mt-2">{{$d->name}}</div>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>



                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.client-footer')