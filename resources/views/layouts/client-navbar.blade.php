<nav class="navbar navbar-expand-lg mt-1">
    <div class="container-fluid p-0 m-0">
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
            <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                
                @if(!empty($allGames))
                @foreach($allGames['crickets'] as $c)
                <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px">
                    <a href="{{route('Cricket-details',$c['id'])}}" class="nav-link"> <span class="link-name blinking-text">{{$c['game_title']}}</span></a>
                </li>
                @endforeach
                
                @foreach($allGames['footballs'] as $c)
                <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px">
                    <a href="{{route('Football-Details',$c['id'])}}" class="nav-link"> <span class="link-name blinking-text">{{$c['game_title']}}</span></a>
                </li>
                @endforeach
                
                @foreach($allGames['tennises'] as $c)
                <li class="nav-item col-auto homeNav" style="background: #8A2BE2;border-radius:5px">
                    <a href="{{route('tenis_detail',$c['id'])}}" class="nav-link"> <span class="link-name blinking-text">{{$c['game_title']}}</span></a>
                </li>
                @endforeach
                @endif

            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg home-nav-2 d-none d-md-block" style="background: #8A2BE2;">
    <div class="container-fluid">
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
            <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Inplay</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Cricket</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('football-frontend')}}" class="nav-link"> <span class="link-name">Footbal</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('tennis-frontend')}}" class="nav-link">
                        <span class="link-name">Tennis</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('horse')}}" class="nav-link"> <span class="link-name">Horse Racing</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Sports</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('client.casino')}}" class="nav-link"> <span class="link-name">Casino</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Sports Book</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('greyhound')}}" class="nav-link"> <span class="link-name">Others</span></a></li>

            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg d-block d-md-none">
    <div class="">
        <!--<button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
            <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                <li class="nav-item col-auto p-2 px-3 text-center" style="min-width: 50%; background: #223577;"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name text-white">IPL 2024</span></a></li>
                <li class="nav-item col-auto p-2 px-3 text-center" style="min-width: 50%; background: #bb1919"><a href="{{route('client.casino')}}" class="nav-link"> <span class="link-name text-white">LOK SABHA 2024</span></a></li>

            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg home-nav-2 d-block d-md-none" style="background: #8A2BE2;">
    <div class="container-fluid">
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
            <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Inplay</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Sports</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Casino</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Sports Book</span></a></li>
                <li class="nav-item col-auto p-2 px-3"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Others</span></a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- <nav class="navbar navbar-expand-lg d-block d-md-none" style="background: #8A2BE2;">
    <div class="container-fluid">
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
            <ul class="d-flex justify-content-around navb" style="overflow-x: auto;">
                <li class="nav-item col-auto p-2 px-3 text-center"><i class="fas fa-baseball-ball text-white mb-1"></i><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">Cricket</span></a></li>
                <li class="nav-item col-auto p-2 px-3 text-center"><i class="fa fa-football text-white mb-1"></i><a href="{{route('football-frontend')}}" class="nav-link"> <span class="link-name">Footbal</span></a></li>
                <li class="nav-item col-auto p-2 px-3 text-center"><i class="fas fa-table-tennis text-white mb-1"></i><a href="{{route('tennis-frontend')}}" class="nav-link">
                        <span class="link-name">Tennis</span></a></li>
                <li class="nav-item col-auto p-2 px-3 text-center"><i class="fas fa-horse-head text-white mb-1"></i><a href="{{route('horse')}}" class="nav-link"> <span class="link-name">Horse Racing</span></a></li>
                <li class="nav-item col-auto p-2 px-3 text-center"><i class="fas fa-dog text-white mb-1"></i><a href="{{route('greyhound')}}" class="nav-link"> <span class="link-name">Greyhound racing</span></a></li>

            </ul>
        </div>
    </div>
</nav> -->