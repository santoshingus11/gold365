<!DOCTYPE html>
<!-- saved from url=(0027)https://gold365.art/m/home -->
<html lang="en">

@include('layouts.mobile.head')

<body style="background: none !important;">
    <app-root ng-version="12.1.5">
        <router-outlet></router-outlet>
        <app-layout><!---->
            <div id="app">

                @include('layouts.mobile.top_nav')

                <router-outlet></router-outlet>
                <app-dashboard>
                    <app-m-dashboard>
                        <div class="main-content">
                            <div class="position-relative">



                                <tabset type="tabs game-nav-bar"="" class="tab-container">
                                    @include('layouts.mobile.ul')
                                    <div class="tab-content">
                                        <tab heading="Inplay" role="tabpanel" aria-labelledby="" class="tab-pane active">
                                            <div id="home" class="tab-pane sports scrollHeight">
                                                <tabset type="tabs game-nav-bar"="" class="tab-container">
                                                    @include('layouts.mobile.ul_main')
                                                    <div class="tab-content">
                                                        <tab role="tabpanel" aria-labelledby="" class="tab-pane active">
                                                            <div style="display: flex; align-items: center; width: 100%; position: relative;">
                                                                <ul class="live_virtual">
                                                                    <li><input type="checkbox" value="Order one" id="checkboxOne4-inplay" class="ng-untouched ng-pristine ng-valid"><label for="checkboxOne4-inplay">LIVE</label></li>
                                                                    <li><input type="checkbox" value="Order Two" id="checkboxTwo4-inplay" class="ng-untouched ng-pristine ng-valid"><label for="checkboxTwo4-inplay">VIRTUAL</label></li>
                                                                </ul><!---->
                                                                <div class="filter-ct"><label>View
                                                                        by:</label><select class="form-control-sm ng-untouched ng-pristine ng-valid" fdprocessedid="5ywaqa">
                                                                        <option value="c">Competitions</option>
                                                                        <option value="t">Time</option>
                                                                    </select></div><!---->
                                                            </div><!---->
                                                            <app-m-sport-list>
                                                                <div>
                                                                    <div class="game-listing-container">
                                                                        <div><!---->

                                                                            <!-- Game Content -->
                                                                            @foreach($allGames['footballs'] as $r)
                                                                            <div class="game-list pt-1 pb-1 container-fluid"><a href="https://gold365.art/m/game-detail/28529194">
                                                                                    <div class="row row5">
                                                                                        @if($r['status']==1)
                                                                                        <div class="col-8">
                                                                                            <a href="{{route('Football-Details',$r['id'])}}" class="mb-0 game-name"><strong>{{$r['game_title']}} / {{date('M d Y h:i A', strtotime($r['created_at']))}} (IST)</strong></a>

                                                                                            <!----><!---->
                                                                                        </div>
                                                                                        @else
                                                                                        <div class="col-8">
                                                                                            <a href="" class="mb-0 game-name"><strong>{{$r['game_title']}} / {{date('M d Y h:i A', strtotime($r['created_at']))}} (IST)</strong></a>
                                                                                            <!----><!---->
                                                                                        </div>
                                                                                        @endif
                                                                                        <div class="col-4 text-right">
                                                                                            <div class="game-icons"><span class="game-icon"><span @if($r['status']==1) class="active-icon" @endif style="vertical-align: bottom;"></span></span><!----><!----><!----><span class="game-icon"><img src="{{asset('/assets_new')}}/ic_bm.webp" class="bm-icon"></span><!----><!----><span class="game-icon"><!----><!----></span><!----></div>
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
                                                                                        @if($r['status']==1)
                                                                                        <div class="text-center game-col game-home"><a href="{{ route('Football-Details',$r['id']) }}" class="btn-back">-
                                                                                            </a><a href="{{ route('Football-Details',$r['id']) }}" class="btn-lay">-</a></div>
                                                                                        <div class="text-center game-col game-home"><a href="{{ route('Football-Details',$r['id']) }}" class="btn-back">-</a><a href="{{ route('Football-Details',$r['id']) }}" class="btn-lay">-</a></div>
                                                                                        <div class="text-center game-col game-home"><a href="{{ route('Football-Details',$r['id']) }}" class="btn-back">-</a><a href="{{ route('Football-Details',$r['id']) }}" class="btn-lay">-</a></div>
                                                                                        @else
                                                                                        <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-
                                                                                            </a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                                                                        <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-</a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                                                                        <div class="text-center game-col game-home"><a href="javascript:void(0);" class="btn-back">-</a><a href="javascript:void(0);" class="btn-lay">-</a></div>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                         
                                                                            <!-- Game Content -->
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
                                </tabset>




                                <div class="row row5 mx-0">
                                    <div class="col-12">
                                        <h5 class="text-uppercase mt-3"><b>Our Casino</b></h5>
                                    </div>
                                </div><!---->
                                <div class="row mx-0">
                                    <div class="col-6 px-1 position-relative" tabindex="0"><img src="{{asset('/assets_new')}}/aviator-730_280.webp" class="img-fluid">
                                    </div>
                                    <div class="col-6 px-1 position-relative" tabindex="0"><img src="{{asset('/assets_new')}}/jetx-730_280.webp" class="img-fluid"></div>
                                </div><!---->
                                <div class="row mx-0 mt-1">
                                    <div class="col-12 px-1 position-relative popularDiv" tabindex="0"><img src="{{asset('/assets_new')}}/betradar-730_280-normal.webp" class="img-fluid"></div>
                                </div><!---->
                                <div class="row mx-0 mt-1">
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/dragontiger.webp">
                                        <div class="casino-name">Dragon Tiger</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/bollywoodcasino.webp">
                                        <div class="casino-name">Bollywood Casino</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/poker.webp">
                                        <div class="casino-name">Poker 1-Day</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/superover.webp">
                                        <div class="casino-name">Super Over</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/fivecricket.webp">
                                        <div class="casino-name">Five Cricket</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/lucky7.webp">
                                        <div class="casino-name">Lucky 7</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/2020teenpatti.webp">
                                        <div class="casino-name">Teenpatti 20-20</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/2cardonedayteenpatti.webp">
                                        <div class="casino-name">2 Cards One Teenpatti</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/muflisteenpatti.webp">
                                        <div class="casino-name">Muflis Teen Patti</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/teenpattitest.webp">
                                        <div class="casino-name">Test Teen Patti</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/32cards.webp">
                                        <div class="casino-name">32 Cards</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/queenrace.webp">
                                        <div class="casino-name">Queen Race</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/worlimatka.webp">
                                        <div class="casino-name">Worli Matka</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/race20.webp">
                                        <div class="casino-name">Race 20-20</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/dragontigerlion.webp">
                                        <div class="casino-name">Dragon Tiger lion</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/amarakbaranthony.webp">
                                        <div class="casino-name">Amar Akbar Anthony</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/dragontigeroneday.webp">
                                        <div class="casino-name">Dragon One Tiger</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/baccarat.webp">
                                        <div class="casino-name">Baccarat</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/sicbo.webp">
                                        <div class="casino-name">Sicbo</div>
                                    </div>
                                    <div class="col-3 px-1 casinoicons" tabindex="0"><img class="img-fluid" src="{{asset('/assets_new')}}/andarbahar.webp">
                                        <div class="casino-name">Andar Bahar</div>
                                    </div><!---->
                                </div><!---->
                                <div class="tab-content">
                                    <div class="tab-pane active casino-tables">
                                        <div class="container-fluid">
                                            <div class="row row5">
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900001"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_7up_7down.webp">
                                                            <div class="casino-name">7 UP DOWN</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900002"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_roulette.webp">
                                                            <div class="casino-name">AUTO ROULETTE</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900005"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_cricket_war.webp">
                                                            <div class="casino-name">CRICKET WAR</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900006"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/baccarat(1).webp">
                                                            <div class="casino-name">BACCARAT</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900008"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_3cards_judgement.webp">
                                                            <div class="casino-name">3 CARDS JUDGEMENT</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900009"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_casino_war.webp">
                                                            <div class="casino-name">CASINO WAR</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900012"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_live_lobby.webp">
                                                            <div class="casino-name">ROYAL GAMING LOBBY</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900013"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_book_cricket.webp">
                                                            <div class="casino-name">BOOK CRICKET</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900014"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_high_low.webp">
                                                            <div class="casino-name">HI LOW</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900019"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/teen_patti_one_day.webp">
                                                            <div class="casino-name">ONE DAY TEENPATTI</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900023"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_arw.webp">
                                                            <div class="casino-name">AKBAR ROMEO WALTER</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900027"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/dragon_tiger_one_day.webp">
                                                            <div class="casino-name">DRAGON TIGER ONE DAY</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900037"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/trio.webp">
                                                            <div class="casino-name">TRIO</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900039"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/2_card_teen_patti_one day.webp">
                                                            <div class="casino-name">2 CARD TP ONEDAY</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900046"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/center_card.webp">
                                                            <div class="casino-name">CENTER CARD</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900075"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/roulette.webp">
                                                            <div class="casino-name">ROULETTE </div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901012"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_vr_roulette.jpg">
                                                            <div class="casino-name">VR ROULETTE</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901013"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_dus_kadum_vr.webp">
                                                            <div class="casino-name">VR DUS KA DUM</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901018"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/29_card_baccarat_vr.webp">
                                                            <div class="casino-name">VR 29 CARD BACCARAT</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901023"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_casino_meter_vr.webp">
                                                            <div class="casino-name">VR CASINO METER</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901027"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_fb_studio_vr.webp">
                                                            <div class="casino-name">VR FOOTBALL STUDIO</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901029"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_movie_casino_vr.webp">
                                                            <div class="casino-name">VR MOVIE CASINO</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901032"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_king_race_vr.webp">
                                                            <div class="casino-name">VR KING RACE</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901033"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_sb_city_vr.webp">
                                                            <div class="casino-name">VR SIDE BET CITY</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901036"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_trio_vr.webp">
                                                            <div class="casino-name">VR TRIO</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901037"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_the_trap_vr.webp">
                                                            <div class="casino-name">VR THE TRAP</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901045"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/center_card_vr.webp">
                                                            <div class="casino-name">VR CENTER CARD</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901046"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/high_card_vr.webp">
                                                            <div class="casino-name">VR HIGH CARD</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/900000"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_live_lobby.webp">
                                                            <div class="casino-name">VR ROYAL GAMING LOBBY</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99995/901030"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/rg_poker_vr.webp">
                                                            <div class="casino-name">VR POKER</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99998/464"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/evo_livespeedroulette.jpg">
                                                            <div class="casino-name">SPEED ROULETTE</div>
                                                        </a></div>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <div class="casinoicons"><a href="https://gold365.art/m/casino-detail/99998/812"><img class="img-fluid" style="height: 89px;" src="{{asset('/assets_new')}}/bty_Mines.jpg">
                                                            <div class="casino-name">MINES</div>
                                                        </a></div>
                                                </div><!---->
                                            </div>
                                        </div>
                                    </div>
                                </div><!---->
                            </div>
                        </div>
                    </app-m-dashboard><!----><!----></app-dashboard><!---->
                <app-footer></app-footer>
            </div><!---->
        </app-layout><!---->
    </app-root>

    <script src="{{asset('/assets_new')}}/jquery.js.download"></script>
    <script src="{{asset('/assets_new')}}/protobuf.min.js.download" type=""></script>
    <script src="{{asset('/assets_new')}}/manifest.js.download"></script>
    <script src="{{asset('/assets_new')}}/vendor.js.download"></script>
    <!-- <script src="assets/js/app.js"></script> -->
    <script src="{{asset('/assets_new')}}/flipclock.js.download"></script>
    <script src="{{asset('/assets_new')}}/customjs.js.download"></script>
    <script src="{{asset('/assets_new')}}/custom.js.download"></script>
    <script src="{{asset('/assets_new')}}/messages.js.download"></script>
    <script src="{{asset('/assets_new')}}/socket.io.js.download"></script>
    <!-- <script src="assets/js/rocket-loader.min.js"></script> -->

</body>

</html>