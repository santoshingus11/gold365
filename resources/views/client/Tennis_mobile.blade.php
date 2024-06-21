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
                                                                            @foreach($allGames['tennises'] as $r)
                                                                            <div class="game-list pt-1 pb-1 container-fluid"><a href="https://gold365.art/m/game-detail/28529194">
                                                                                    <div class="row row5">
                                                                                        @if($r['status']==1)
                                                                                        <div class="col-8">
                                                                                            <a href="{{route('tenis_detail',$r['id'])}}" class="mb-0 game-name"><strong>{{$r['game_title']}} / {{date('M d Y h:i A', strtotime($r['created_at']))}} (IST)</strong></a>

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
                                                                                        <div class="text-center game-col game-home"><a href="{{ route('tenis_detail',$r['id']) }}" class="btn-back">-
                                                                                            </a><a href="{{ route('tenis_detail',$r['id']) }}" class="btn-lay">-</a></div>
                                                                                        <div class="text-center game-col game-home"><a href="{{ route('tenis_detail',$r['id']) }}" class="btn-back">-</a><a href="{{ route('tenis_detail',$r['id']) }}" class="btn-lay">-</a></div>
                                                                                        <div class="text-center game-col game-home"><a href="{{ route('tenis_detail',$r['id']) }}" class="btn-back">-</a><a href="{{ route('tenis_detail',$r['id']) }}" class="btn-lay">-</a></div>
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