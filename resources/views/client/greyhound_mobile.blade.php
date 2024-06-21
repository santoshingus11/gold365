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
                                                                            @if(isset($response))
                                                                            @foreach($response as $r)
                                                                            <div class="bet-table-row">
                                                                                <div class="bet-nation-name">
                                                                                    <div class="game-icon"><i class="fas fa-tv icon-tv"></i></div>
                                                                                    <div class="bet-nation-game-name"><span>{{$r['game_title']}} {{date('d M',strtotime($r['created_at']))}}</span></div>
                                                                                </div>
                                                                                <div class="horse-time-detail">
                                                                                @foreach($r['time_slots'] as $time)
                                                                                    <a href="{{route('greyhound_detail',$time['id'])}}"><span>{{$time['time_slot']}}</span></a>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @endif
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