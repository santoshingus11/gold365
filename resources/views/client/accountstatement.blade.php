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
            <h1 class="event_Cricket">Account Statement</h1>
            <div class="row mb-4">
              <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="mybets-date-picker">
                  <div class="row">
                    <div class="col-lg-5">
                      <label for="fromDate" class="col-1 col-form-label">From:</label>
                      <input name="fromDate" type="date" id="fromDatepicker" autocomplete="off" class="mx-input w-100">
                    </div>
                    <div class="col-lg-5">
                      <label for="toDate" class="col-1 col-form-label">To:</label>
                      <input name="toDate" type="date" id="toDatepicker" autocomplete="off" class="mx-input w-100">
                    </div>
                    <div class="col-lg-2">
                      <label for="toDate" class="col-1 col-form-label w-100 height-24"></label>
                      <button class="btn btn-primary" style="height: 35px;"><i class="fa fa-search m-r-5"></i>Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="mybets_table-design">
              <div class="cuttent_table">
                <div class="games-profit-loss">
                  <ul class="d-inline-block">
                    <li class="total-pnl">
                      <p class="m-b-0"><span>Total P&amp;L : </span> <span class="positive">0</span></p>
                    </li>
                  </ul>
                </div>
                <div class="table-responsive">
                  <table class="table profit-loss-table">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th class="text-right">P&amp;L</th>
                        <th class="text-right">Credit Limit</th>
                        <th class="text-right">Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($bankingHistories as $b)
                       <tr>
                           <td class="text-center">{{$b->created_at}}</td>
                           @if($b->type=='W')
                           <td class="text-right green">{{$b->amount ?? 0}}</td>
                           @else
                           <td class="text-right green">0</td>
                           @endif
                           
                           @if($b->type=='D')
                           <td class="red text-right">{{$b->amount ?? 0}}</td>
                           @else
                           <td class="red text-right">0</td>
                           @endif
                           <td class="text-right green"> {{$b->balance ?? 0}}</td>
                           <td class="text-center">
                               <!--<a href="/reports/account-statement-details/1.69329085.662a9d87b950fbe569b638d5.plain">Live Teenpatti Virtual</a>-->
                           </td><!----><!---->
                       </tr><!---->
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="card-body">
                                <div class="card-header">Deposit Request</div>
                                <table id="" class="table dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Person Name</th>
                                            <th>Person Email</th>
                                            <th>Username</th>
                                            <th>Balance</th>
                                            <!-- <th>Image</th> -->
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($deposits))
                                        @foreach ($deposits as $dataa)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dataa['user']['username'] ?? "" }}</td>
                                            <td>{{ $dataa['email'] ?? "" }}</td>
                                            <td>{{ $dataa['username'] ?? "" }}</td>
                                            <td>{{ $dataa['amount'] ?? "" }}</td>
                                            <!-- <td>{{ url('/assets/images/Deposit/').$dataa['image_name'] ?? "" }}</td> -->
                                            <!-- /assets/images/Deposit/ -->
                                            <td>{{ $dataa['created_at'] ?? "" }}</td>

                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="card-body">
                                <div class="card-header">Withdraw Request</div>
                                <table id="" class="table dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>username</th>
                                            <!-- <th>email</th> -->
                                            <th>bank_name</th>
                                            <th>account_holder_name</th>
                                            <th>account_number</th>
                                            <th>account_type</th>
                                            <th>branch</th>
                                            <th>Balance</th>
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($withdraw))
                                        @foreach ($withdraw as $dataa)

                                        <tr>
                                            <td>{{ $dataa['user_id'] }}</td>
                                            <td>{{ $dataa['username'] ?? "" }}</td>
                                            <!-- <td>{{ $dataa['email'] ?? "" }}</td> -->
                                            <td>{{ $dataa['bank_name'] ?? "" }}</td>
                                            <td>{{ $dataa['account_holder_name'] ?? "" }}</td>
                                            <td>{{ $dataa['account_number'] ?? "" }}</td>
                                            <td>{{ $dataa['account_type'] ?? "" }}</td>
                                            <td>{{ $dataa['branch'] ?? "" }}</td>
                                            <td>{{ $dataa['amount'] ?? "" }}</td>
                                            <td>{{ $dataa['created_at'] ?? "" }}</td>

                                        </tr>
                                        @endforeach
                                        @endif
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

  </script>
 @include('layouts.client-footer')