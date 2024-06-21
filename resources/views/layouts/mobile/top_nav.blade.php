<app-topnav><!---->
    <header class="header">
        <div class="container-fluid">
            <div class="row row5 pt-1 pb-1">
                <div class="logo col-6"><a href="{{route('cricket-frontend')}}" class="router-link-exact-active router-link-active"><i class="fas fa-home mr-1"></i><img alt="Exchange" class="img-fluid logo" src="{{asset('/assets_new')}}/logo.png"></a></div>
                <div class="col-6 text-right bal-expo">
                    <p class="mb-0"><img src="{{asset('/assets_new')}}/landmark-icon.webp" alt="Exchange" class="img-fluid pr-1"><b>Balance @if(Auth::guard('client')->check()) {{Auth::guard('client')->user()->balance }} @endif</b></p>
                    <div><span class="mr-1"><u>Exp:
                                0</u></span>
                        <div class="dropdown d-inline-block"><a href="javascript:void(0)" id="dropdownToggle" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><u data-v-3f4cf84d=""> @if(Auth::guard('client')->check()) {{Auth::guard('client')->user()->username }} @endif</u></a>
                            <div class="dropdown-menu" id="dropdownMenu">
                                <a href="{{route('my-bets')}}" class="dropdown-item router-link-exact-active router-link-active">My Bets</a>
                                <a href="{{route('profit_loss')}}" class="dropdown-item">Betting Profit and Loss</a>
                                <a href="{{route('account_statement')}}" class="dropdown-item">Account Statement</a>
                                <a href="{{route('transferstatement')}}" class="dropdown-item">Transfer Statement</a>
                                <a href="{{route('changepassword')}}" class="dropdown-item">Change Password</a>
                                <a href="{{route('secureauth')}}" class="dropdown-item">Secure Auth</a>
                                <a href="{{route('message')}}" class="dropdown-item">Message</a>
                                <a href="{{route('client-logout')}}" class="dropdown-item mt-2 text-danger"><b>Logout</b></a>
                            </div>
                        </div>
                    </div>
                </div><!----><!---->
            </div><!---->
            <li class="btns__deposit_withdrawal"><a target="_blank" class="btn_deposit" href="https://wa.link/gold365logindemo"><img src="{{asset('/assets_new')}}/deposit-icon.webp" class="img-fluid"> deposit </a><a target="_blank" class="btn_withdrawal" href="https://wa.link/gold365logindemo"><img src="{{asset('/assets_new')}}/withdrawal-icon.webp" class="img-fluid"> withdrawal </a></li><!---->
            <div class="row row5 header-bottom">
                <div class="col-12">
                    <div class="search-box-container">
                        <div class="search-box float-left"><input type="text" typeaheadoptionfield="name" class="search_input ng-untouched ng-pristine ng-valid" aria-expanded="false" aria-autocomplete="list" fdprocessedid="ueprx"><!----><!----><a href="javascript:void(0)" class="search_icon"><i class="fas fa-search"></i></a></div>
                        <div class="search-col d-none">
                            <form novalidate="" action="https://gold365.art/" class="ng-untouched ng-pristine ng-valid"><input text="search"><i class="fa fa-search"></i></form>
                        </div>
                    </div><app-upcoming _nghost-tci-c79="">
                        <marquee _ngcontent-tci-c79="" scrollamount="3" class="searchClose">𝐆𝐎𝐎𝐃 𝐍𝐄𝐖𝐒 𝐏𝐑𝐄𝐌𝐈𝐔𝐌
                            𝐌𝐀𝐑𝐊𝐄𝐓 𝐈𝐒 𝐍𝐎𝐖 𝐀𝐕𝐀𝐈𝐋𝐀𝐁𝐋𝐄 (𝟐𝟒*𝟕) 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 (𝐏) , 𝐎𝐔𝐑
                            𝐄𝐗𝐂𝐋𝐔𝐒𝐈𝐕𝐄 𝐏𝐑𝐄𝐌𝐈𝐔𝐌 𝐌𝐀𝐑𝐊𝐄𝐓 𝐅𝐎𝐑 (𝐒𝐑𝐋) 𝐈𝐒 𝐍𝐎𝐖 𝐒𝐓𝐀𝐑𝐓𝐄𝐃 𝐈𝐍
                            𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 , 𝐃𝐑𝐄𝐀𝐌 𝐁𝐈𝐆 𝐖𝐈𝐍 𝐁𝐈𝐆 💰🏆𝐈𝐂𝐂 𝐌𝐄𝐍𝐒 𝐓𝟐𝟎 𝐖𝐎𝐑𝐋𝐃
                            𝐂𝐔𝐏 𝟐𝟎𝟐𝟒 𝐂𝐔𝐏 𝐖𝐈𝐍𝐍𝐄𝐑 𝐁𝐄𝐓𝐒 𝐒𝐓𝐀𝐑𝐓𝐄𝐃 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 🏆
                        </marquee>
                    </app-upcoming>
                </div>
            </div>
            <app-featured-events _nghost-tci-c80=""><!---->
                <div class="latest-event row">
                     @foreach($allGames['crickets'] as $c)
                    <div class="latest-event-item"><a href="https://gold365.art/m/game-detail/33315098" class="new-launch-text"><img alt="" src="{{asset('/assets_new')}}/4.png"><span>{{$c['game_title']}}</span></a></div>
                   @endforeach
                     @foreach($allGames['footballs'] as $c)
                    <div class="latest-event-item"><a href="https://gold365.art/m/game-detail/33315098" class="new-launch-text"><img alt="" src="{{asset('/assets_new')}}/4.png"><span>{{$c['game_title']}}</span></a></div>
                   @endforeach
                     @foreach($allGames['tennises'] as $c)
                    <div class="latest-event-item"><a href="https://gold365.art/m/game-detail/33315098" class="new-launch-text"><img alt="" src="{{asset('/assets_new')}}/4.png"><span>{{$c['game_title']}}</span></a></div>
                   @endforeach
                  
                </div><!---->
            </app-featured-events><!---->
            <div class="row header-b-menu">
                <div class="col ipl"><a href="https://gold365.art/m/game-detail/28529194" routerlink="/m/game-detail/28529194" class="text-link">ICC WORLD TWENTY20</a></div>
                <div class="col election"><a href="https://gold365.art/m/game-detail/1704972513" routerlink="/m/game-detail/1704972513" class="text-link">LOK SABHA 2024</a></div>
            </div>
        </div>
    </header><!----><!----><a target="_blank" class="whatsapp_link" href="https://wa.link/mahadev6262236690"><img src="{{asset('/assets_new')}}/wp_support.webp"></a><!----><!---->
    <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="" class="modal fade force-change-password-popup">
        <div class="modal-dialog bookModal app_version">
            <div class="modal-content modal-content-padding-custom">
                <div class="modal-body p-0"><button type="button" data-bs-dismiss="modal" aria-label="Close" class="close" style="position: absolute; left: 5px; top: 0; color: #fff; font-size: 21px; opacity: 1;"><span aria-hidden="true">×</span></button><a><img src="{{asset('/assets_new')}}/poster-login-popup2.gif" style="width: 100%;"></a></div>
            </div>
        </div>
    </div><!---->
</app-topnav>

<script>
    document.getElementById('dropdownToggle').addEventListener('click', function() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('show');
    });
</script>