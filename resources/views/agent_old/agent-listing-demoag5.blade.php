<!DOCTYPE html>
@php 
$netexposure=QueryHelper::total_netexposure($user_data->id,$user_data->role_id);
$total_balancedown=QueryHelper::total_balancedown($user_data->id,$user_data->role_id);
$total_balanceup=QueryHelper::total_balanceup($user_data->id,$user_data->role_id);
$available_credit=QueryHelper::total_availablecredit($user_data->id,$user_data->role_id);
@endphp
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="">
  @include('layouts.header-url')
</head>

<body>


  <div class="main-wrapper Dashboard-bg customResponsive">
    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar"> @include('layouts.left-side-bar')</div>
    <div class="page-wrapper bg-none">
      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section"> @include('layouts.header')</div>
      <!-- partial -->
      <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin top-bg px-4">
          <div class="Welcome-to Dashboard">
            <ul class="d-flex justify-content-between Balance_Down">
              <li>Balance Down: <span class="red">0.00</span></li>
              <li>Balance Up: <span class="red">0.00</span></li>
              <li>Net Exposure: <span class="red">0.00</span></li>
              <li>Available Credit: <span class="">0.00</span></li>
            </ul>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
              Refresh
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h4 class="mb-0 font-14"><em><span class="text-info">Downline Listing ></span> demoag5</em></h4>
                  <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0">
                      Download CSV
                    </button>
                  </div>
                </div>
                <nav class="Account-Statement-nav mb-3">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Activity</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">Balance</button>
                    <button class="nav-link" id="Betlist-tab" data-bs-toggle="tab" data-bs-target="#Betlist" type="button" role="tab" aria-controls="Betlist" aria-selected="false" tabindex="-1">Betlist</button>
                    <button class="nav-link" id="Betting-tab" data-bs-toggle="tab" data-bs-target="#Betting" type="button" role="tab" aria-controls="Betting" aria-selected="false" tabindex="-1">Betting P&L</button>
                    <button class="nav-link" id="Statement-tab" data-bs-toggle="tab" data-bs-target="#Statement" type="button" role="tab" aria-controls="Statement" aria-selected="false" tabindex="-1">Statement</button>
                    <button class="nav-link" id="TransferStatement-tab" data-bs-toggle="tab" data-bs-target="#TransferStatement" type="button" role="tab" aria-controls="TransferStatement" aria-selected="false" tabindex="-1">Transfer Statement</button>
                    <button class="nav-link" id="NetExposure-tab" data-bs-toggle="tab" data-bs-target="#NetExposure" type="button" role="tab" aria-controls="NetExposure" aria-selected="false" tabindex="-1">Net Exposure</button>
                    <button class="nav-link" id="ClientsAccount-tab" data-bs-toggle="tab" data-bs-target="#ClientsAccount" type="button" role="tab" aria-controls="ClientsAccount" aria-selected="false" tabindex="-1">Clients Account Statement</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="activity-report">
                      <div class="main-panel d-flex justify-content-start align-items-baseline">
                        <div class="left-panel">
                          <table class="table m-t-30 ">
                            <thead>
                              <tr>
                                <th class="text-center"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-right">Win</td>
                              </tr>
                              <tr>
                                <td class="text-right">P&amp;L</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="mid-panel w-100">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="text-center">Today</th>
                                <th class="text-center">3 Days</th>
                                <th class="text-center">7 Days</th>
                                <th class="text-center">30 Days</th>
                                <th class="text-center">Lifetime</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                                <td class="text-center"><span class="positive">0.00</span></td>
                              </tr>
                              <tr>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                                <td class="text-center"><span class="positive">
                                    0.00
                                  </span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="">
                        <table class="w-auto table table-striped table-balance displayunblock">
                          <tbody>
                            <tr>
                              <th>Net Exposure</th>
                              <td class=" text-right negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Balance Down</th>
                              <td class=" text-right  negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Balance Up</th>
                              <td class=" text-right negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Credit Limit</th>
                              <td class="text-right negative red">0.00</td>
                            </tr>
                            <tr>
                              <th>Available Credit</th>
                              <td class="text-right ">0.00</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="Betlist" role="Betlist" aria-labelledby="Betlist-tab" tabindex="0">
                    <div class="Pand-l-Statement">
                      <div class="d-flex justify-content-between align-items-baseline">
                        <form class="forms-sample d-flex align-items-center">
                          <div class="d-flex mobile_port_change-new">
                            <div class="mb-3">
                              <label for="start-date" class="form-label">From</label>
                              <input type="text" class="form-select flatpickr-input" id="start-date" name="start-date" readonly="readonly">
                            </div>
                            <div class="mb-3 mx-2 mobile_port_change-new">
                              <label for="end-date" class="form-label">To</label>
                              <input type="text" class="form-select flatpickr-input" id="end-date" name="end-date" readonly="readonly">
                            </div>
                          </div>
                          <div class="align-items-center">
                            <label for="end-date" class="form-label w-100"></label>
                            <button type="button" class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2">
                              Apply
                            </button>
                            <button type="button" class="btn btn-danger btn-icon-text mb-2 mb-md-0" style="border: none;border-radius: 0px;font-size: 13px;">
                              Cancel
                            </button>
                          </div>

                        </form>
                      </div>
                      <div class="tab-start-date-show-and-hide my-2">
                        <ul role="tablist" class="nav nav-tabs">
                          <li role="presentation" class="nav-item"><a class="nav-link active" id="currentTab">Current</a></li>
                          <li role="presentation" class="nav-item"><a class="nav-link" id="pastTab">Past</a></li>
                        </ul>
                      </div>

                      <div class="Agent_-Listing height30vh">
                        <div class="mb-4 mt-3">
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radioInlineSelected" id="radioInlineSelected" checked="">
                            <label class="form-check-label" for="radioInlineSelected">
                              Matched
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                              Unmatched
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                              Deleted
                            </label>
                          </div>
                        </div>
                        <div class="serch-bx-and-dropdown">
                          <div class="row">
                            <div class="col-sm-12 col-md-9">
                              <div class="dataTables_length" id="dataTableExample_length">
                                <label class="d-flex justify-content-between align-items-baseline fit-content"> Show <select name="dataTableExample_length" aria-controls="dataTableExample" class="form-select form-select-sm">
                                    <option value="10">10</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="-1">All</option>
                                  </select> entries </label>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                              <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search mail...">
                                <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                  </svg></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="">Place Date</th>
                                <th class="">Description</th>
                                <th class="">User name</th>
                                <th class="">Bet Type</th>
                                <th class="">User Rate</th>
                                <th class="">Win/Loss</th>
                                <th class="">IP</th>
                                <th class="">Browser Details</th>
                                <th class="">Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td colspan="9" class="text-center no-data-table-bg">no records found</td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="row mt-3">
                            <div class="col-sm-12 col-md-5">
                              <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7 ">
                              <div class="dataTables_paginate paging_simple_numbers right" id="dataTableExample_paginate">
                                <ul class="pagination">
                                  <li class="paginate_button page-item previous disabled" id="dataTableExample_previous"><a href="#" aria-controls="dataTableExample" data-dt-idx="0" tabindex="0" cl