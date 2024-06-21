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



            <router-outlet></router-outlet>
            <app-sport-detail><!---->
              <app-d-sport-detail>
                <div class="row row5 mt-2">
                <?php
            if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
              // If the user agent indicates a mobile device, use mobile styles
              echo ' <div class="col-md-9">';
            } else {
              // Otherwise, use desktop styles
              echo ' <div class="col-md-9 featured-box-detail sports-wrapper m-b-10">';
            }
            ?>
                    <div>
                      <div class="game-heading"><span class="card-header-title">Essex v Warwickshire</span><span class="float-right"><!----><span>17/05/2024 15:00:00</span><!----></span></div><!---->

                      <div class="sr-widget-1"></div>
                      <div class="markets">
                        <div class="main-market"><app-market-detail _nghost-sxb-c101="">
                            <div>
                              <div class="market-title mt-1"> Match Odds <!----><a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a></div>
                              <div class="table-header">
                                <div class="float-left country-name box-4 text-info"><b>Min: <span>-</span> Max: <span>1</span></b></div>
                                <div class="box-1 float-left"></div>
                                <div class="box-1 float-left"></div>
                                <div class="back box-1 float-left text-center"><b>BACK</b></div>
                                <div class="lay box-1 float-left text-center"><b>LAY</b></div>
                                <div class="box-1 float-left"></div>
                                <div class="box-1 float-left"></div>
                              </div>
                              <div class="table-body">
                                <div class="table-row " data-title="">
                                  <div class="float-left country-name box-4"><span class="team-name"><b>Essex</b></span>
                                    <p><!----><!----></p>
                                  </div>
                                  <div class="back-2 back2 box-1 float-left text-center"><span class="odd d-block bet_text">1.25</span><span class="d-block bet_text">4.74</span></div>
                                  <div class="back-1 back1 box-1 float-left text-center"><span class="odd d-block bet_text">1.28</span><span class="d-block bet_text">4.23</span></div>
                                  <div class="back box-1 float-left lock text-center"><span class="odd d-block">1.3</span><span class="d-block">3.95</span></div>
                                  <div class="box-1 float-left lay text-center"><span class="odd d-block bet_text">1.5</span><span class="d-block bet_text">32.22</span></div>
                                  <div class="box-1 float-left lay1 text-center"><span class="odd d-block">1.68</span><span class="d-block">5.41</span></div>
                                  <div class="box-1 float-left lay2 text-center"><span class="odd d-block">2.1</span><span class="d-block">9.48</span></div>
                                </div>
                                <div class="table-row " data-title="">
                                  <div class="float-left country-name box-4"><span class="team-name"><b>Warwickshire</b></span>
                                    <p><!----><!----></p>
                                  </div>
                                  <div class="back-2 back2 box-1 float-left text-center"><span class="odd d-block">3.4</span><span class="d-block">1.47</span></div>
                                  <div class="back-1 back1 box-1 float-left text-center"><span class="odd d-block">3.5</span><span class="d-block">3.08</span></div>
                                  <div class="back box-1 float-left lock text-center"><span class="odd d-block">4.8</span><span class="d-block">1.06</span></div>
                                  <div class="box-1 float-left lay text-center"><span class="odd d-block">14</span><span class="d-block">4.43</span></div>
                                  <div class="box-1 float-left lay1 text-center"><span class="odd d-block">85</span><span class="d-block">3.35</span></div>
                                  <div class="box-1 float-left lay2 text-center"><span class="odd d-block">95</span><span class="d-block">5</span></div>
                                </div>
                                <div class="table-row " data-title="">
                                  <div class="float-left country-name box-4"><span class="team-name"><b>The Draw</b></span>
                                    <p><!----><!----></p>
                                  </div>
                                  <div class="back-2 back2 box-1 float-left text-center"><span class="odd d-block">3.8</span><span class="d-block">11.22</span></div>
                                  <div class="back-1 back1 box-1 float-left text-center"><span class="odd d-block">3.85</span><span class="d-block">1.46</span></div>
                                  <div class="back box-1 float-left lock text-center"><span class="odd d-block">5.1</span><span class="d-block">5.2</span></div>
                                  <div class="box-1 float-left lay text-center"><span class="odd d-block">26</span><span class="d-block">1.31</span></div>
                                  <div class="box-1 float-left lay1 text-center"><span class="odd d-block">75</span><span class="d-block">1.59</span></div>
                                  <div class="box-1 float-left lay2 text-center"><span class="odd d-block">95</span><span class="d-block">5.34</span></div>
                                </div><!---->
                              </div>
                              <div class="table-remark text-right remark">
                                <marquee>GOOD NEWS PREMIUM MARKET'S ARE NOW AVAILABLE IN OUR EXCHANGE (P)</marquee>
                              </div><!----><!---->
                            </div><!----><!---->
                          </app-market-detail></div><!----><!---->
                      </div>
                      <div class="fancy-market row row5"><!----></div><!---->

                      <div>
                        <div class="markets"><!----></div><!---->
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

              <div class="card m-b-10 place-bet show_bet">
                <div class="card-header">
                  <h6 class="card-title d-inline-block">Place Bet</h6>
                </div>
                <div><app-d-bet-slip>
                    <div class="table-responsive position-relative back">
                      <form novalidate="" class="ng-untouched ng-pristine ng-valid">
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
                              <td> 45 Over Runs WAR </td>
                              <td class="bet-odds">
                                <div class="form-group"><input placeholder="0" type="text" id="bet_input" required="" name="" min="1.01" max="999.99" readonly="readonly" class="amountint ng-untouched ng-pristine ng-valid" style="width: 45px; vertical-align: middle;">

                                </div>
                              </td>
                              <td class="bet-stakes">
                                <div class="form-group bet-stake"><input maxlength="10" id="add_input" required="" type="text" min="0" class="ng-untouched ng-pristine ng-valid"></div>
                              </td>
                              <td class="text-right bet-profit">0</td>
                            </tr>
                            <tr>
                              <td colspan="5" class="value-buttons"><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 100 </button><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 200 </button><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 1000 </button><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 2000 </button><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 5000 </button><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 10000 </button><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 20000 </button><button type="button" class="btn btn-secondary m-l-5 m-b-5 btn-place-bet"> 300 </button><!----><button type="button" class="btn btn-secondary m-l-5 m-b-5 min-stake">min stake</button><button type="button" class="btn btn-secondary m-l-5 m-b-5 max-stake">max stake</button><button class="btn btn-secondary m-l-5 m-b-5 min-stake" style="background: green !important; color: #fff;">Edit Stake</button><button class="btn btn-secondary m-l-5 m-b-5 min-stake" style="background: red !important; color: #fff;">clear</button></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="col-md-12"><button type="button" class="btn btn-sm btn-danger float-left"> Reset </button><button type="button" class="btn btn-sm btn-success float-right m-b-5" disabled=""> Submit </button></div>
                      </form><!---->
                    </div><!---->
                  </app-d-bet-slip></div>
              </div>
              <div class="card m-b-10 my-bet">
                <div class="card-header">
                  <h6 class="card-title d-inline-block">My Bet</h6>
                </div>
                <div class="card-body">
                  <app-d-bet-list _nghost-sxb-c65="">
                    <table class="coupon-table table table-borderedless">
                      <thead>
                        <tr>
                          <th style="width: 60%;"> Nation </th>
                          <th class="text-right"> Odds </th>
                          <th class="text-center"> Stake </th>
                        </tr>
                      </thead><!---->
                      <tr>
                        <td colspan="3" class="text-center">No records Found</td>
                      </tr><!---->
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
              </app-d-sport-detail><!----></app-sport-detail><!---->

          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    @if(empty(Session::get('myBets')))
    $(".show_bet").hide();
    @endif
    $(".bet_text").click(function() {
      $(".show_bet").show();

      // $elem = $(this).parent("div");
      $elem = $(this).parents('.mainScore').first();

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
    $(".btn-place-bet").click(function() {
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
</section>

@include('layouts.client-footer')