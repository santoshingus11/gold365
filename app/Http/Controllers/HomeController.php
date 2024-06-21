<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\CricketPlaceBet;
use App\Models\FootballPlaceBet;
use App\Models\TennisPlaceBet;
use App\Models\HorseRacingPlaceBet;
use App\Models\GreyhoundRacingPlaceBet;
use App\Models\Admin;
use App\Models\BetRecord;
use App\Models\BankingHistory;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home');
    }
    public function home()
    {
        return view('client.home');
    }

    public function client_casino()
    {
        //Casino games api
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tbs2api.aslot.net/API/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{
        "cmd": "gamesList",
        "hall": "3203740",
        "key": "ArT657OIY809TyyuFD",
        "cdnUrl": ""
        }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                'Cookie: PHPSESSID=ab4edemrk4d7edk2mc057vgfeq'
            ),
        ));

        $responseCas = curl_exec($curl);

        curl_close($curl);
        $gameData = json_decode($responseCas);

        // $liveEvolutionLobbyGames = [];
        // for($i=0; $i<=50; $i++){
        //     if ($gameData->content->gameList[$i]->label === 'evolution_lobby') {
        //         $liveEvolutionLobbyGames[] = $gameData->content->gameList[$i];
        //     }
        // }

        $casino = $gameData->content->gameList;
        $liveEvolutionLobbyGames = [];
        foreach ($casino as $game) {
            if ($game->label === 'evolution_lobby') {
                if (($game->id >= 9325 && $game->id <= 9630) || ($game->id >= 9281 && $game->id <= 9286) || ($game->id >= 9633 && $game->id <= 9644) || ($game->id >= 9658 && $game->id <= 9660)) {
                    continue;
                }

                $liveEvolutionLobbyGames[] = $game;
            }
        }

        // $casino = $gameData->content->gameList;
        // $sportBetGames = [];
        // foreach ($casino as $game) {
        //     if ($game->label === 'sport_betting') {
        //         $sportBetGames[] = $game;
        //     }
        // }

        $data = [
            'labels' => $gameData->content->gameLabels,
            'games' => $gameData->content->gameList,
            'liveGames' => $liveEvolutionLobbyGames,
            // 'sportBetGames' => $sportBetGames
        ];


        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);
        curl_close($chr);


        return view('client.client_casino', compact('allGames'))->with('data', $data);
    }

    public function cric_ket()
    {

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/cricket/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);


        //Casino games api
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tbs2api.aslot.net/API/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{
        "cmd": "gamesList",
        "hall": "3203740",
        "key": "ArT657OIY809TyyuFD",
        "cdnUrl": ""
        }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                'Cookie: PHPSESSID=ab4edemrk4d7edk2mc057vgfeq'
            ),
        ));

        $responseCas = curl_exec($curl);

        curl_close($curl);
        $gameData = json_decode($responseCas);

        // $liveEvolutionLobbyGames = [];
        // for($i=0; $i<=50; $i++){
        //     if ($gameData->content->gameList[$i]->label === 'evolution_lobby') {
        //         $liveEvolutionLobbyGames[] = $gameData->content->gameList[$i];
        //     }
        // }

        $casino = $gameData->content->gameList;
        $liveEvolutionLobbyGames = [];
        foreach ($casino as $game) {
            if ($game->label === 'evolution_lobby') {
                if (($game->id >= 9325 && $game->id <= 9630) || ($game->id >= 9281 && $game->id <= 9286) || ($game->id >= 9633 && $game->id <= 9644) || ($game->id >= 9658 && $game->id <= 9660)) {
                    continue;
                }

                $liveEvolutionLobbyGames[] = $game;
            }
        }

        // $casino = $gameData->content->gameList;
        // $sportBetGames = [];
        // foreach ($casino as $game) {
        //     if ($game->label === 'sport_betting') {
        //         $sportBetGames[] = $game;
        //     }
        // }

        $data = [
            'labels' => $gameData->content->gameLabels,
            'games' => $gameData->content->gameList,
            'liveGames' => $liveEvolutionLobbyGames,
            // 'sportBetGames' => $sportBetGames
        ];


        if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
            return view('client.cricket_mobile', compact('response', 'allGames'))->with('data', $data);
        } else {
            return view('client.cricket', compact('response', 'allGames'))->with('data', $data);
        }
    }

    public function cricket_details($game_id)
    {

        //get match list
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        $url = "https://ujala11games.com/api/cricket/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);


        //get Games list
        $gm = curl_init();
        // Disable SSL verification
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        $url = "https://ujala11games.com/api/cricket/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        // Execute
        $res = curl_exec($gm);
        // Will dump a beauty json <3
        $game_single = json_decode($res, true);

        curl_close($gm);

        // if ($game_id == 1) {
        //             return view('client.Cricket-details-ipl', compact('response', 'game_single'));
        //         }
        return view('client.Cricket-details', compact('response', 'game_single'));
    }

    public function cricket_bet_place(Request $request)
    {

        // $url = "https://ujala11games.com/api/cricket/game/place-bet";

        // $post = [
        //   'bet_odds' => $request->bet_odds,
        //   'bet_stake' => $request->bet_stake,
        //   'back_lay' => $request->back_lay,
        //   'match_id' => $request->match_id,
        //   'bet_profit' => $request->bet_profit,
        //   'bet_team_name' => $request->bet_team_name,
        //   'user_id' => Auth::guard('client')->user()->id
        // ];

        //  $headers = [
        //     'X-CSRF-TOKEN' => $request->_token
        // ];

        // $response = Http::withHeaders($headers)->post($url, $post);

        // $statusCode = $response->status();
        // $responseBody = json_decode($response->getBody(), true);
        // $myBets = $responseBody['played_matches'];

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new CricketPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = CricketPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();


        // if($statusCode=='200'){
        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
        // }


    }



    public function foot_ball()
    {

        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/football/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);

        if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
            return view('client.football_mobile', compact('response', 'allGames'));
        } else {
            return view('client.football', compact('response', 'allGames'));
        }
       
    }

    public function football_details($game_id)
    {

        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/football/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/football/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.Football-Details', compact('response', 'game_single'));
    }

    public function football_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new FootballPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = FootballPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }



    public function ten_nis()
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/tennis/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);

        if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
            return view('client.Tennis_mobile', compact('response', 'allGames'));
        } else {
            return view('client.Tennis', compact('response', 'allGames'));
        }
      
    }

    public function tennis_details($game_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/tennis/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/tennis/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.Tennis-details', compact('response', 'game_single'));
    }

    public function tennis_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new TennisPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = TennisPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }

    public function horse()
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/horseracing/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);
        if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
            return view('client.horse_mobile', compact('response', 'allGames'));
        } else {
            return view('client.horse', compact('response', 'allGames'));
        }

        
    }

    public function horse_detail($time_slot_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/horseracing/match-list/" . $time_slot_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/horseracing/game/single/" . $time_slot_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.hosre_detail', compact('response', 'game_single'));
    }

    public function horseracing_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new HorseRacingPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = HorseRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }

    public function greyhound()
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/greyhoundracing/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);

        if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) {
            return view('client.greyhound_mobile', compact('response', 'allGames'));
        } else {
            return view('client.greyhound', compact('response', 'allGames'));
        }
       
    }

    public function greyhound_detail($time_slot_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/greyhoundracing/match-list/" . $time_slot_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/greyhoundracing/game/single/" . $time_slot_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.greyhound_detail', compact('response', 'game_single'));
    }

    public function greyhoundracing_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new GreyhoundRacingPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = GreyhoundRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }

  public function mybets()
    {
        $user_id = Auth::guard('client')->user()->id;
        $betRecords = BetRecord::where('admin_id',$user_id)->orderBy('id','desc')->get();
        $cricketBets = CricketPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();
        $footballBets = FootballPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();
        $tennisBets = TennisPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();
        $horseBets = HorseRacingPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();
        $greyhoundBets = GreyhoundRacingPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();

        return view('client.mybets', compact('betRecords','cricketBets','footballBets','tennisBets','horseBets','greyhoundBets'));

        // return view('client.mybets', get_defined_vars());
    }

    public function loss_profit()
    {
        $user_id = Auth::guard('client')->user()->id;
        $betRecords = BetRecord::where('admin_id', $user_id)->orderBy('id', 'desc')->paginate(10);

        return view('client.profitloss', compact('betRecords'));
    }

    public function statement()
    {
        $bankingHistories = BankingHistory::where('user_id', Auth::guard('client')->user()->id)->orderBy('banking_history_id', 'desc')->get();
        return view('client.accountstatement', compact('bankingHistories'));
    }

    function changepassword()
    {

        return view('client.changepassword');
    }
    public function submit_change_pass(Request $request)
    {
        $oldPass = $request->oldPassword;
        $newPass = $request->newPassword;
        $confirmPass = $request->confirmPassword;
        if ($newPass == $confirmPass) {
            $user = Admin::where('id', Auth::guard('client')->user()->id)->first();
            $user->password = Hash::make($newPass);
            $user->save();
            return redirect()->back()->with('message', 'Password changed successfully');
        }
        return redirect()->back()->with('error', "Password doesn't match!");
    }














    public function transferstatement()
    {
        return view('client.transferstatement');
    }

    public function secureauth()
    {
        return view('client.secureauth');
    }
    public function message()
    {
        return view('client.message');
    }

    public function tenis()
    {
        return view('client.table-tennis');
    }
    public function dart()
    {
        return view('client.darts');
    }
    public function badmint_on()
    {
        return view('client.badminton');
    }
    public function kaba_ddi()
    {
        return view('client.Kabaddi');
    }

    public function queen_result()
    {
        return view('client.queen-results');
    }
    public function boxi_ng()
    {
        return view('client.boxing');
    }
    public function artss()
    {
        return view('client.arts');
    }
    public function motor_sport()
    {
        return view('client.Motor-Sport');
    }
    public function basketball()
    {
        return view('client.basketball');
    }
    public function election()
    {
        return view('client.election2023');
    }
    public function icc()
    {
        return view('client.Icc2023');
    }
    public function lottery()
    {
        return view('client.lottery');
    }
    public function casino()
    {
        return view('client.live-casino');
    }
    public function details4()
    {
        return view('client.Cricket-details-pages-4');
    }
    public function details3()
    {
        return view('client.Cricket-details-pages-3');
    }
    public function details2()
    {
        return view('client.Cricket-details-pages-2');
    }
    public function basket_details()
    {
        return view('client.basketball-details');
    }
    public function kabaddi_details()
    {
        return view('client.Kabaddi-details');
    }
    public function race20()
    {
        return view('client.race20');
    }
    public function queen_20()
    {
        return view('client.queen');
    }
    public function andarbahar2()
    {
        return view('client.andarbahar2');
    }
    public function dragon_tiger()
    {
        return view('client.20-20-dragon-tiger');
    }
    public function casino_result()
    {
        return view('client.casino-results');
    }
    public function andarbahar_result()
    {
        return view('client.andarbahar-results');
    }
    public function tiger_result()
    {
        return view('client.tiger-results');
    }
}
