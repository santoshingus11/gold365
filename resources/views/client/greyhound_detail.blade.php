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
                    @include('layouts.client-header_down')
                    <div class="Home_pages_main_section">


                        <div class="row row5">




                            <?php
                            if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
                                // If the user agent indicates a mobile device, use mobile styles
                                echo ' <div class="col-md-9">';
                            } else {
                                // Otherwise, use desktop styles
                                echo ' <div class="col-md-9 featured-box-detail sports-wrapper m-b-10">';
                            }
                            ?>
                            <div class="ng-star-inserted">
                                <div class="game-heading"><span class="card-header-title">{{isset($game_single) ? $game_single['game_title'] : ''}} </span><span class="float-right"><span class="ng-star-inserted">{{isset($game_single) ? date('d/m/Y H:i:s',strtotime($game_single['created_at'])) : ''}}</span><!----><!----></span></div>
                                <!----><!---->
                                <div class="sr-widget-1"></div>
                                <div class="markets"><!----><!----></div>
                                <div class="fancy-market row row5 ng-star-inserted"><!----></div>
                                <!---->
                                <tabset class="newtab_collect tab-container">
                                    <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                        <li class="active nav-item ng-star-inserted"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span></span><span class="ng-star-inserted">Fancy</span><!----><!----></a>
                                        </li>
                                        <li class="nav-item ng-star-inserted"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span><span class="ng-star-inserted">Premium</span><em class="blink-soft ng-star-inserted">new</em><!----><!----></a></li><!---->
                                    </ul>
                                    <div class="tab-content">
                                        <tab role="tabpanel" aria-labelledby="" class="tab-pane active ng-star-inserted"><!----><!----></tab><!---->
                                        <tab class="ng-star-inserted tab-pane" role="tabpanel" aria-labelledby=""><!----><iframe class="premium-iframe" src="{{asset('/assets')}}/saved_resource.html"></iframe></tab><!---->
                                    </div>
                                </tabset>
                                <div class="ng-star-inserted">
                                    <div class="markets ng-star-inserted">
                                        <div class="main-market ng-star-inserted"><!---->
                                            <div class="market-title mt-1 ng-star-inserted"> Greyhound Racing
                                                <span><!----><button class="btn-cashout ng-star-inserted">Betting Open</button><!----><!----></span>
                                            </div><!----><app-race-detail _nghost-acd-c104="" class="ng-star-inserted">
                                                <div class="ng-star-inserted">
                                                    <div class="table-header">
                                                        <div class="float-left country-name box-4 min-max"><span class="market-nation-name">Max: 5000</span></div>
                                                        <div class="box-1 float-left"></div>
                                                        <div class="box-1 float-left"></div>
                                                        <div class="back box-1 float-left text-center"><b>BACK</b></div>
                                                        <div class="lay box-1 float-left text-center"><b>LAY</b></div>
                                                        <div class="box-1 float-left"></div>
                                                        <div class="box-1 float-left"></div>
                                                    </div>
                                                    <div data-title="OPEN" class="table-body">
                                                        
                                                         @foreach($response['match_odds'] as $r)
                                                        <div class="table-row ng-star-inserted " data-title="LOSER">
                                                            <div class="float-left country-name box-4">
                                                                <div>
                                                                    <div class="icon-expo"><!----><!----></div>
                                                                    <div><span class="market-nation-name team_name">{{$r['team_name']}}</span><!----><span class="tooltip_jta"><i class="fa fa-info-circle"></i></span><!----><!----></div>
                                                                </div>
                                                            </div>
                                                            <div class="back-2 back2 box-1 float-left text-center">
                                                                <span class="odd d-block">0</span><span class="d-block">0</span>
                                                            </div>
                                                            <div class="back-1 back1 box-1 float-left text-center">
                                                                <span class="odd d-block">0</span><span class="d-block">0</span>
                                                            </div>
                                                            
                                                            @if($r['back_status']==1)
                                                            <div class="back box-1 float-left lock text-center">
                                                                <span class="odd d-block bet_text" data-back-lay="back" data-match-id="{{$r['id']}}" data-team-name="{{$r['team_name']}}">{{$r['back_value']}}</span><span class="d-block">0</span>
                                                            </div>
                                                            @else
                                                            <div class="back box-1 float-left lock text-center" style="background:white !important;">
                                                                
                                                            </div>
                                                            @endif
                                                            
                                                            @if($r['lay_status']==1)
                                                            <div class="box-1 float-left lay text-center"><span class="odd d-block bet_text" data-back-lay="lay" data-match-id="{{$r['id']}}" data-team-name="{{$r['team_name']}}">{{$r['lay_value']}}</span><span class="d-block">0</span></div>
                                                            @else
                                                            <div class="box-1 float-left lay text-center" style="background:white !important;"></div>
                                                            @endif
                                                            
                                                            <div class="box-1 float-left lay1 text-center"><span class="odd d-block">0</span><span class="d-block">0</span></div>
                                                            <div class="box-1 float-left lay2 text-center"><span class="odd d-block">0</span><span class="d-block">0</span></div>
                                                        </div>
                                                        @endforeach
                                                        
                                                    </div>
                                                </div><!----><!---->
                                            </app-race-detail><!---->
                                        </div><!---->
                                    </div>
                                    <div class="markets ng-star-inserted"><!----></div>
                                    <div class="markets ng-star-inserted"><!----></div>
                                    <div class="markets ng-star-inserted"><!----></div>
                                    <div class="markets ng-star-inserted"><!----></div>
                                    <div class="markets ng-star-inserted"><!----></div>
                                    <div class="markets ng-star-inserted"><!----></div><!---->
                                </div><!---->
                            </div><!----><!---->
                        </div>

                        <?php
                        if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
                            // If the user agent indicates a mobile device, use mobile styles
                            echo '<div class="col-md-3">';
                        } else {
                            // Otherwise, use desktop styles
                            echo ' <div class="col-md-3 sidebar-right">';
                        }
                        ?>

                        <div class="ps ">
            <div class="sidebar-right-inner ">
            <?php if (!empty($game_single['channel_id'])) { ?>
                                <div class="betting-table lay-bt" style="position: relative;">
                                    <p class="mrkname" id="liveMatchLink"> Live Match </p>
                                </div>
                                <div id="liveTvMatch"><iframe src="{{$game_single['channel_id'] ?? ''}}" height="200" width="300" title="Iframe Example"></iframe></div>
                            <?php } ?>
            @if(Session::has('message'))
                <p class="alert alert-success"><strong>{{Session::get('message')}}</strong></p>
            @endif
            @if(Session::has('error'))
                <p class="alert alert-danger"><strong>{{Session::get('error')}}</strong></p>
            @endif
                      
              <div class="card m-b-10 place-bet show_bet">
                <div class="card-header">
                  <h6 class="card-title d-inline-block">Place Bet</h6>
                </div>
                <div><app-d-bet-slip>
                    <div class="table-responsive position-relative back">
                      <form  action="{{route('cricket-bet-place')}}" method="POST" novalidate="" class="ng-untouched ng-pristine ng-valid">
                        @csrf
                        <table class="coupon-table table table-borderedless">
                          <thead>
                            <tr>
                              <th></th>
                              <th style="width: 35%; text-align: left;">(Bet for)</th>
                              <th style="width: 25%; text-align: left;">Odds</th>
                              <th style="width: 15%; text-align: left;">Stake</th>
                              <th style="width: 15%; text-align: right;">Profit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center"><a href="javascript:void(0);" class="text-danger"><i class="fa fa-times"></i></a></td>
                              <td class="team_name bat_team_place"> 45 Over Runs WAR </td>
                              <td class="bet-odds">
                                <div class="form-group">
                                    <input placeholder="0" type="text"  name="bet_odds" id="bet_input" required="" min="1.01" max="999.99" readonly="readonly" class="amountint ng-untouched ng-pristine ng-valid" style="width: 45px; vertical-align: middle;">

                                </div>
                              </td>
                              <td class="bet-stakes">
                                <div class="form-group bet-stake">
                                    <input  name="bet_stake" id="add_input" required="" type="text" min="0" class="ng-untouched ng-pristine ng-valid" placeholder="Amount">
                                </div>
                              </td>
                              <td class="text-right profit_div">0</td>
                              
                                <input type="hidden" name="back_lay" id="back_lay">
                                <input type="hidden" name="match_id" id="match_id">
                                <input type="hidden" name="bet_profit" id="bet_profit">
                                <input type="hidden" name="bet_team_name" id="bet_team_name">
                            </tr>
                            <tr>
                                <td colspan="5" class="value-buttons">
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 100 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 200 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 300 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 1000 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 2000 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 5000 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 10000 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 add_bet"> 20000 </button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 min-stake">min stake</button>
                                  <button type="button" class="btn btn-secondary m-l-5 m-b-5 max-stake">max stake</button>
                                  <button class="btn btn-secondary m-l-5 m-b-5 min-stake" style="background: green !important; color: #fff;">Edit Stake</button>
                                  <button class="btn btn-secondary m-l-5 m-b-5 min-stake" style="background: red !important; color: #fff;">clear</button>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-sm btn-danger float-left  cancel-btn"  id="reset_btn"> Reset </button>
                            <button class="btn btn-sm btn-success float-right m-b-5 betplace-btn" disabled=""> Submit </button>
                        </div>
                      </form><!---->
                    </div><!---->
                  </app-d-bet-slip></div>
              </div>
              <div class="card m-b-10 my-bet">
                <div class="card-header">
                  <h6 class="card-title d-inline-block">My Bet</h6>
                </div>
                <div class="card-body table-responsive">
                  <app-d-bet-list _nghost-sxb-c65="">
                    <table class="coupon-table table table-borderedless">
                      <thead>
                        <tr>
                          <th style="width: 60%;"> Nation </th>
                          <th class="text-right"> Odds </th>
                          <th class="text-center"> Stake </th>
                        </tr>
                      </thead><!---->
                      
                      <tbody class="my-bet-table">
                         @if(!empty(Session::get('myBets')))
                         @foreach(Session::get('myBets') as $m)
                         <tr>
                           <td class="text-left">{{$m->team_name}};
                           <td class="text-left">{{$m->bet_odds}};
                           <td colspan="3" class="text-left">{{$m->bet_stake}};
                         </tr>
                         @endforeach
                         @else
                         <tr>
                           <td colspan="3" class="text-left text-center">No data Found</td>
                         </tr>
                         @endif

                       </tbody><!---->
                                    
                    </table>
                  </app-d-bet-list><!----></div>
              </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div tabindex="0" class="ps__thumb-x" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div tabindex="0" class="ps__thumb-y" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


  
  <script>
    @if(empty(Session::get('myBets')))
    $(".show_bet").hide();
    @endif
    $(".bet_text").click(function() {
      $(".show_bet").show();

      // $elem = $(this).parent("div");
      $elem = $(this).parents('.table-row').first();

      // $elem.parents('.event-names').length // id = $div.attr("id");

      text = $elem.find(".team_name").text();

      $('#back_lay').val($(this).data("back-lay"));
      $('#match_id').val($(this).data("match-id"));
      $('#bet_team_name').val($(this).data("team-name"));


      console.log($(this).data("match-id"));

      // alert( text  );
      $('.bat_team_place').text(text);
      $("#bet_input").val($(this).text());
    });
  </script>


  <script>
    $(".add_bet").click(function() {
      // alert($("#bet_input").val());
      // alert($(this).text());
      var amnt = $(this).text();
      var odds = $("#bet_input").val();
      var profit = amnt * odds;

      $(".profit_div").text(profit);
      $("#add_input").val($(this).text());
      $("#bet_profit").val(profit);
      $('.betplace-btn').prop("disabled", false);
    });
    $("#reset_btn").click(function() {
      $("#add_input").val("");
      $("#bet_input").val("");
      $(".profit_div").text("");
    });
  </script>

  <script>
    setTimeout(function() {
      if ($(".alert").is(":visible")) {
        //you may add animate.css class for fancy fadeout
        $(".alert").fadeOut("slow");
      }
    }, 4000)
  </script>

    <script>
    $(".remove_bet").click(function() {
      $(".show_bet").hide();
    });
  </script>
  
</section>
<script>
      function updateProfit(amnt) {
        var odds = parseFloat($("#bet_input_stake").val()) || 1;
        var profit = amnt * odds;
        $(".profit_div").text(profit.toFixed(2)); // Format profit to 2 decimal places
        $("#bet_profit").val(profit);
        $('.betplace-btn').prop("disabled", false);
    }
    $("#add_input").on('input', function() {
     
        var amnt = parseFloat($(this).val()) || 0;
        updateProfit(amnt);
    });
</script>
@include('layouts.client-footer')