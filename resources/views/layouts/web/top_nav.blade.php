<app-topnav>
            <header class="header">
              <div class="container-fluid">
                <div class="row">
                  <div class="header-top col-md-12">
                    <div class="float-left"><a href="{{url('/')}}/home"
                        class="logo router-link-exact-active router-link-active"><img class="logo-icon"
                          src="{{asset('/assets')}}/logo.png"></a></div>
                    <ul class="float-right d-flex align-items-center"><!---->
                      <li class="btns__deposit_withdrawal"><a target="_blank" class="btn_deposit"
                          href="https://wa.link/gold365logindemo"><img
                            src="{{asset('/assets')}}/deposit-icon.webp" class="img-fluid">
                          deposit </a><a target="_blank" class="btn_withdrawal"
                          href="https://wa.link/gold365logindemo"><img
                            src="{{asset('/assets')}}/withdrawal-icon.webp" class="img-fluid"> withdrawal </a>
                      </li><!---->
                      <li class="search float-left"><input name="game_keyword" placeholder="All Events"
                          autocomplete="off" type="text" typeaheadoptionfield="name"
                          class="ng-untouched ng-pristine ng-valid" aria-expanded="false"
                          aria-autocomplete="list"><!----><!----><a href="javascript:void(0)"><i
                            class="fas fa-search-plus"></i></a></li>
                      <li class="float-left download-apklink">
                        <div><a href="{{url('/')}}/rules" class="rules-link m-r-5"><b>Rules</b></a></div>
                      </li>
                      <li class="ballance float-left">
                        <div><span>Balance: </span><b><span>0.00</span></b></div>
                        <div><a href="javascript:void(0)"><span class="t-underline">Exposure: </span><b><span
                                class="t-underline">0</span></b></a></div>
                      </li><!---->
                      <li class="account float-left"><span> demo123 <i class="fas fa-chevron-down"></i></span>
                        <ul><!----><!---->
                          <li><a href="{{url('/')}}/reports/account-statement">Account Statement</a></li>
                          <li><a href="{{url('/')}}/reports/profit-loss">Profit Loss Report</a></li>
                          <li><a href="{{url('/')}}/reports/bet-history">Bet History</a></li>
                          <li><a href="{{url('/')}}/reports/unsettled-bets">Unsetteled Bet</a></li>
                          <li><a href="{{url('/')}}/change-btn-value">Set Button Values</a></li>
                          <li><a href="{{url('/')}}/change-password">Change Password</a></li><!---->
                          <li>
                            <hr>
                          </li>
                          <li><a href="javascript:void(0)">signout</a></li>
                        </ul>
                      </li><!----><!---->
                    </ul><app-upcoming _nghost-acd-c79="">
                      <marquee _ngcontent-acd-c79="" scrollamount="3">𝐆𝐎𝐎𝐃 𝐍𝐄𝐖𝐒 𝐏𝐑𝐄𝐌𝐈𝐔𝐌 𝐌𝐀𝐑𝐊𝐄𝐓 𝐈𝐒
                        𝐍𝐎𝐖 𝐀𝐕𝐀𝐈𝐋𝐀𝐁𝐋𝐄 (𝟐𝟒*𝟕) 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 (𝐏) , 𝐎𝐔𝐑
                        𝐄𝐗𝐂𝐋𝐔𝐒𝐈𝐕𝐄 𝐏𝐑𝐄𝐌𝐈𝐔𝐌 𝐌𝐀𝐑𝐊𝐄𝐓 𝐅𝐎𝐑 (𝐒𝐑𝐋) 𝐈𝐒 𝐍𝐎𝐖 𝐒𝐓𝐀𝐑𝐓𝐄𝐃 𝐈𝐍
                        𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 , 𝐃𝐑𝐄𝐀𝐌 𝐁𝐈𝐆 𝐖𝐈𝐍 𝐁𝐈𝐆 💰</marquee>
                    </app-upcoming>
                  </div>
                  <div class="header-bottom m-t-10 col-md-12">
                    <nav class="navbar navbar-expand-md btco-hover-menu"><button type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation" class="navbar-toggler"><span
                          class="navbar-toggler-icon"></span></button>
                      <div class="collapse navbar-collapse">
                        <ul class="list-unstyled navbar-nav">
                          <li class="nav-item active"><a href="{{url('/')}}/home"
                              routerlinkactive="router-link-exact-active router-link-active" class=""><b>Home</b></a>
                          </li>
                          <li class="nav-item new-launch-text"><a href="{{route('cricket-frontend')}}"
                              routerlinkactive="router-link-exact-active router-link-active"><b>IPL 2024</b></a></li>
                          <li class="nav-item new-launch-text"><a href="{{route('cricket-frontend')}}"
                              routerlinkactive="router-link-exact-active router-link-active"><b>LOK SABHA 2024</b></a>
                          </li>
                          <li class="nav-item"><a href="{{route('cricket-frontend')}}"
                              routerlinkactive="router-link-exact-active router-link-active"><b>Cricket</b><em>New</em></a><!----><!---->
                          </li>
                          <li class="nav-item"><a href="{{route('football-frontend')}}"
                              routerlinkactive="router-link-exact-active router-link-active"><b>Football</b><em>New</em></a><!----><!---->
                          </li>
                          <li class="nav-item"><a href="{{route('tennis-frontend')}}"
                              routerlinkactive="router-link-exact-active router-link-active"><b>Tennis</b><em>New</em></a><!----><!---->
                          </li>
                          <li class="nav-item"><a href="{{route('horse')}}"
                              routerlinkactive="router-link-exact-active router-link-active" class=""><b>Horse
                                Racing</b><em>New</em></a><!----><!----></li>
                          <li class="nav-item"><a href="{{route('greyhound')}}"
                              routerlinkactive="router-link-exact-active router-link-active" class=""><b>Greyhound
                                Racing</b><em>New</em></a><!----><!----></li>
                          <li class="nav-item"><a href="{{url('/')}}/game-list/99994"
                              routerlinkactive="router-link-exact-active router-link-active"><b>Kabaddi</b><em>New</em></a><!----><!---->
                          </li>
                          <li class="nav-item"><a href="{{url('/')}}/game-list/2378961"
                              routerlinkactive="router-link-exact-active router-link-active"><b>Politics</b><em>New</em></a><!----><!---->
                          </li>
                          <li class="nav-item"><!----><a href="javascript:void(0)"
                              routerlinkactive="router-link-exact-active router-link-active"
                              class="new-tag-menus"><b>Sports book</b><em>New</em></a><!----></li>
                          <li class="nav-item"><a href="{{url('/')}}/casino/99999"
                              routerlinkactive="router-link-exact-active router-link-active"><b>Casino</b><em>New</em></a><!----><!---->
                          </li>
                          <li class="nav-item"><a href="{{url('/')}}/casino/99998"
                              routerlinkactive="router-link-exact-active router-link-active"><b>Int
                                Casino</b><em>New</em></a><!----><!---->
                          </li>
                          <li class="nav-item"><a href="{{url('/')}}/game-list/99990"
                              routerlinkactive="router-link-exact-active router-link-active"
                              class="new-tag-menus"><b>Binary</b><em>New</em></a><!----><!---->
                          </li><!---->
                        </ul>
                      </div>
                    </nav>
                  </div>
                </div>
              </div>
              <div></div>
              <div class="modal-market"></div>
            </header><!----><!----><!----><!----><!---->
            <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby=""
              class="modal fade force-change-password-popup">
              <div class="modal-dialog bookModal app_version">
                <div class="modal-content modal-content-padding-custom">
                  <div class="modal-body p-0"><button type="button" data-bs-dismiss="modal" aria-label="Close"
                      class="close"
                      style="position: absolute; left: 5px; top: 0; color: #fff; font-size: 21px; opacity: 1;"><span
                        aria-hidden="true">×</span></button><a><img style="width: 100%;"
                        src="{{url('/')}}/"></a></div>
                </div>
              </div>
            </div><!---->
          </app-topnav>
