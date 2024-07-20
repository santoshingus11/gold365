<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="">
  @include('layouts.header-url')
  <script>
    // Wait for the DOM to be ready
    document.addEventListener("DOMContentLoaded", function() {
      var startDateInput = document.getElementById("start-date");
      var endDateInput = document.getElementById("end-date");

      // Get today's date in the format "YYYY-MM-DD"
      var today = new Date().toISOString().split('T')[0];

      // Set initial values for date inputs
      startDateInput.value = today;
      endDateInput.value = today;

      // Initialize date picker for start date
      flatpickr(startDateInput, {
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr) {
          endDatePicker.set("minDate", dateStr);
        }
      });

      // Initialize date picker for end date
      var endDatePicker = flatpickr(endDateInput, {
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr) {
          startDatePicker.set("maxDate", dateStr);
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Click event for the "Current" tab
      $("#currentTab").click(function() {
        $("#dateRangeSection").hide();
        $("#currentTab").addClass("active");
        $("#pastTab").removeClass("active");
      });

      // Click event for the "Past" tab
      $("#pastTab").click(function() {
        $("#dateRangeSection").show();
        $("#pastTab").addClass("active");
        $("#currentTab").removeClass("active");
      });
    });
  </script>

</head>

<body>


  <div class="main-wrapper Dashboard-bg customResponsive">

    <!-- partial:partials/_sidebar.html -->
    <div class="left-side-bar">@include('layouts.left-side-bar')</div>


    <div class="page-wrapper bg-none">

      <!-- partial:partials/_navbar.html -->
      <div class="top-header-section">@include('layouts.header')</div>
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
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3 pb-2 border-bottom">
                  <h4 class=" mb-0">Message Report</h4>
                </div>

                <div class="d-flex justify-content-between align-items-baseline mobile_port_change-new">
                  <form class="forms-sample d-flex">

                    <div class="d-flex mobile_port_change-new">
                      <div class="mb-3 mobile_port_change-new">
                        <label for="start-date" class="form-label">From</label>
                        <input type="text" class="form-select" id="start-date" name="start-date" readonly>
                      </div>
                      <div class="mb-3 mx-2 mobile_port_change-new">
                        <label for="end-date" class="form-label">To</label>
                        <input type="text" class="form-select" id="end-date" name="end-date" readonly>
                      </div>
                    </div>

                    <div class="align-items-center mt-4">
                      <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <a href="#"><button type="button" class="btn btn-primary New-Agent btn-icon-text mb-2 mb-md-0">
                            Load
                          </button></a>
                      </div>
                    </div>

                  </form>
                </div>


                <div class="Agent_-Listing height30vh mt-3">
                  <div class="serch-bx-and-dropdown mb-3">
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
                          <th class="">file</th>
                          <th class="">User Name</th>
                          <th class="">Event Name</th>
                          <th class="">Event Date</th>
                          <th class="">Remark</th>
                          <th class="right">Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="6" class="text-center no-data-table-bg">no records found</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-12 col-md-5">
                      <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7 ">
                      <div class="dataTables_paginate paging_simple_numbers right" id="dataTableExample_paginate">
                        <ul class="pagination">
                          <li class="paginate_button page-item previous disabled" id="dataTableExample_previous"><a href="#" aria-controls="dataTableExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                          <li class="paginate_button page-item active"><a href="#" aria-controls="dataTableExample" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                          <li class="paginate_button page-item next" id="dataTableExample_next"><a href="#" aria-controls="dataTableExample" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="border-bottom mt-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>


    </div>
  </div>
  @include('layouts.footer')