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


                        <div class="pb-4">
                            <tabset class="tab-container">
                                <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                    <li class="active nav-item ng-star-inserted"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>Horse Racing</span><!----><!----></a></li><!---->
                                </ul>
                                <div class="tab-content">
                                    <div style="position: relative;"><!----><!----></div>
                                    <tab role="tabpanel" aria-labelledby="" class="tab-pane active ng-star-inserted"><app-d-sport-list _nghost-acd-c98="" class="ng-star-inserted">
                                            <div class="coupon-card coupon-card-first ng-star-inserted">
                                                <div class="card-content"><!---->
                                                    <tabset class="tab-container ng-star-inserted">
                                                        <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                                            <li class="active nav-item ng-star-inserted"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>AU</span><!----><!----></a></li><!---->
                                                        </ul>
                                                        <div class="tab-content">
                                                            <tab role="tabpanel" aria-labelledby="" class="tab-pane active ng-star-inserted">
                                                                <div class="bet-table position-relative horse-table">
                                                                    <div class="bet-table-body">
                                                                        
                                                                        @if(isset($response))
                                                                        @foreach($response as $r)
                                                                        <div class="bet-table-row ng-star-inserted">
                                                                            <div class="bet-nation-name">
                                                                                <div class="game-icon"><i class="fas fa-tv icon-tv"></i></div>
                                                                                <div class="bet-nation-game-name"><span>{{$r['game_title']}} {{date('d M',strtotime($r['created_at']))}}</span></div>
                                                                            </div>
                                                                            <div class="horse-time-detail">
                                                                                 @foreach($r['time_slots'] as $time)
                                                                                <a href="{{route('horse_detail',$time['id'])}}" class="ng-star-inserted"><span>{{$time['time_slot']}}</span></a>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                        @endif
                                                                        
                                                                    </div>
                                                                </div>
                                                            </tab><!---->
                                                        </div>
                                                    </tabset><!----><!---->
                                                </div>
                                            </div><!---->
                                        </app-d-sport-list><!----><!----><!----></tab><!---->
                                </div>
                            </tabset>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.client-footer')