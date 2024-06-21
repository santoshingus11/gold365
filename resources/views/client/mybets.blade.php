<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
</head>
<?php $page = 'Home';
?>
@include('layouts.client-header')


<section id="home-pages" class="home_pages">
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="All-pages-left-side-bar">
            @include('layouts.client-left-side-bar')
          </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12">
          <div class="Home_pages_main_section mybets">
            <h1 class="event_Cricket">My Bets</h1>
            <div class="row mb-4">
              <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="mybets-tabs">
                  <div class="column">
                    <div class="selection">
                      <div class="item selected" id="currentItem">
                        Current
                      </div>
                    
                    </div>
                 
                  </div>
                </div>
              </div>
              <div class="col-lg-10 col-md-12 col-sm-12">
                  <div class="mybets-date-picker">
                  <div class="row">
                    <!--<div class="col-lg-5">-->
                    <!--  <label for="fromDate" class="col-1 col-form-label">From:</label>-->
                    <!--  <input name="fromDate" type="date" id="fromDatepicker" autocomplete="off" class="mx-input w-100">-->
                    <!--</div>-->
                    <!--<div class="col-lg-5">-->
                    <!--  <label for="toDate" class="col-1 col-form-label">To:</label>-->
                    <!--  <input name="toDate" type="date" id="toDatepicker" autocomplete="off" class="mx-input w-100">-->
                    <!--</div>-->
                     <div class="col-lg-2">
                          <label for="toDate" class="col-1 col-form-label">Select:</label>
                     <select name="reportType" id="bet_select_box" class="mx-input w-100">
                                <option value="casino">Casino</option>
                                <option value="cricket">Cricket</option>
                                <option value="football">Football</option>
                                <option value="tennis">Tennis</option>
                                <option value="horse">Horse Racing</option>
                                <option value="greyhound">Greyhound Racing</option>
                            </select>
                    </div>
                    <div class="col-lg-2">
                      <label for="toDate" class="col-1 col-form-label w-100 height-24"></label>
                      <button class="btn btn-primary"  id="bet_select_btn" style="height: 35px;"><i class="fa fa-search m-r-5"></i>Search</button>
                    </div>
                  </div>

                </div>
                <!--   <div class="filter m-2">-->
                <!--    <div class="form-row align-items-center">-->
                <!--        <div class="col-md-12"><input type="text" name="from" placeholder="Datepicker" bsdatepicker="" class="mx-input w-100"></div>-->
                <!--        <div class="col-md-12"><input type="text" name="to" placeholder="Datepicker" bsdatepicker="" class="mx-input w-100"></div>-->
                <!--        <div class="col-md-12">-->
                <!--            <select name="reportType" id="bet_select_box" class="mx-input w-100">-->
                <!--                <option value="casino">Casino</option>-->
                <!--                <option value="cricket">Cricket</option>-->
                <!--                <option value="football">Football</option>-->
                <!--                <option value="tennis">Tennis</option>-->
                <!--                <option value="horse">Horse Racing</option>-->
                <!--                <option value="greyhound">Greyhound Racing</option>-->
                <!--            </select></div>-->
                <!--        <div class="col-md-12"><button type="button" id="bet_select_btn" class="btn btn-primary btn-block">submit</button></div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="mybets-date-picker">-->
                <!--  <div class="row">-->
                <!--    <div class="col-lg-5">-->
                <!--      <label for="fromDate" class="col-1 col-form-label">From:</label>-->
                <!--      <input name="fromDate" type="date" id="fromDatepicker" autocomplete="off" class="mx-input w-100">-->
                <!--    </div>-->
                <!--    <div class="col-lg-5">-->
                <!--      <label for="toDate" class="col-1 col-form-label">To:</label>-->
                <!--      <input name="toDate" type="date" id="toDatepicker" autocomplete="off" class="mx-input w-100">-->
                <!--    </div>-->
                <!--    <div class="col-lg-2">-->
                <!--      <label for="toDate" class="col-1 col-form-label w-100 height-24"></label>-->
                <!--      <button class="btn btn-primary" style="height: 35px;"><i class="fa fa-search m-r-5"></i>Search</button>-->
                <!--    </div>-->
                <!--  </div>-->

                <!--</div>-->
              </div>
            </div>

             <div class="mybets_table-design">
              <div class="cuttent_table">
                <div class="table-responsive">
                  <table class="table profit-loss-table">
                     <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Market Type</th>
                                <th class="text-center">Selection</th>
                                <th class="text-center">Bet Type</th>
                                <th class="text-center">Odds</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($betRecords as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->tradeId}}</td>
                                <td class="text-center">{{$bet->gameId}}</td>
                                <td class="text-center">Exchange Games</td>
                                <td class="text-center">MATCH_ODDS</td>
                                <td class="text-center">{{$bet->action}}</td>
                                <td class="text-center">Back</td>
                                <td class="text-center">{{$bet->bet}}</td>
                                <td class="text-center">{{$bet->bet}}</td>
                                <td class="text-center green"> {{$bet->win}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                  </table>
                 <div class="table-responsive cricketTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Bet stake</th>
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($cricketBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">CRICKET</td>
                                <td class="text-center">{{$bet->bet_stake}}</td>
                                <!--@if($bet->bet_result != NULL)-->
                                <!--<td class="text-center green">{{$bet->bet_stake}}</td>-->
                                <!--@else-->
                                <!--<td class="text-center red">{{$bet->bet_stake}}</td>-->
                                <!--@endif-->
                                @if($bet->bet_result == 1)
                                <td class="text-center " style="color:green;">{{$bet->bet_profit}}</td>
                                @elseif($bet->bet_result == 2)
                                 <td class="text-center" style="color:red;"> {{$bet->bet_stake}}</td>
                                 @else
                                  <td class="text-center black"> - </td>
                                @endif
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    <div class="table-responsive footballTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Market Type</th>
                                <th class="text-center">Selection</th>
                                <th class="text-center">Bet Type</th>
                                <th class="text-center">Odds</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($footballBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Football</td>
                                <td class="text-center">MATCH_ODDS</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->bet_odds}}</td>
                                <td class="text-center">{{$bet->bet_stake}}</td>
                                <td class="text-center green"> {{ ($bet->bet_result==1 ? 'WIN' : $bet->bet_result==2) ? 'LOSE' : 'Not Published' }}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive tennisTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Market Type</th>
                                <th class="text-center">Selection</th>
                                <th class="text-center">Bet Type</th>
                                <th class="text-center">Odds</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($tennisBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Tennis</td>
                                <td class="text-center">MATCH_ODDS</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->bet_odds}}</td>
                                <td class="text-center">{{$bet->bet_stake}}</td>
                                <td class="text-center green"> {{ ($bet->bet_result==1 ? 'WIN' : $bet->bet_result==2) ? 'LOSE' : 'Not Published' }}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive horseTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Market Type</th>
                                <th class="text-center">Selection</th>
                                <th class="text-center">Bet Type</th>
                                <th class="text-center">Odds</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($horseBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Horse Race</td>
                                <td class="text-center">MATCH_ODDS</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->bet_odds}}</td>
                                <td class="text-center">{{$bet->bet_stake}}</td>
                                <td class="text-center green"> {{ ($bet->bet_result==1 ? 'WIN' : $bet->bet_result==2) ? 'LOSE' : 'Not Published' }}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive greyhoundTable" style="display:none;">
                    <table id="" class="table table-bordered btDataTable table-striped table-bordered" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">Bet ID</th>
                                <th class="text-center">Event Name</th>
                                <th class="text-center">Event Type</th>
                                <th class="text-center">Market Type</th>
                                <th class="text-center">Selection</th>
                                <th class="text-center">Bet Type</th>
                                <th class="text-center">Odds</th>
                                <th class="text-center">Stake</th>
                                <th class="text-center">Win/Loss</th>
                                <th class="text-center">Placed Time</th>
                                <th class="text-center">Settled Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($greyhoundBets as $bet)
                            <tr class="back">
                                <td class="text-center">{{$bet->id}}</td>
                                <td class="text-center">{{$bet->team_name}}</td>
                                <td class="text-center">Greyhound Race</td>
                                <td class="text-center">MATCH_ODDS</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->back_lay}}</td>
                                <td class="text-center">{{$bet->bet_odds}}</td>
                                <td class="text-center">{{$bet->bet_stake}}</td>
                                <td class="text-center green"> {{ ($bet->bet_result==1 ? 'WIN' : $bet->bet_result==2) ? 'LOSE' : 'Not Published' }}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                                <td class="text-center">{{$bet->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                </div>
              </div>

            </div>




          </div>
        </div>

      </div>

    </div>
  </div>
<script>
    $(function(){
        $('#bet_select_btn').click(function(){
             var selectText = $("#bet_select_box option:selected").val();
             if(selectText=='casino'){
                 $('.casinoTable').show();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='cricket'){
                 $('.casinoTable').hide();
                 $('.cricketTable').show();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='football'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').show();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='tennis'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').show();
                 $('.horseTable').hide();
                 $('.greyhoundTable').hide();
             }else if(selectText=='horse'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').show();
                 $('.greyhoundTable').hide();
             }else if(selectText=='greyhound'){
                 $('.casinoTable').hide();
                 $('.cricketTable').hide();
                 $('.footballTable').hide();
                 $('.tennisTable').hide();
                 $('.horseTable').hide();
                 $('.greyhoundTable').show();
             }
        });
    });
</script>
  @include('layouts.client-footer')