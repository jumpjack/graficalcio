<?php
		header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With, X-AUTH-TOKEN');

    $urlTeams = 'http://api.football-data.org/v4/competitions/SA/teams/'; // SA = Serie A Italia
    $urlMatches = 'http://api.football-data.org/v4/competitions/SA/matches/'; // SA = Serie A Italia

	if ( $_GET['type'] == "partite" ) {
       $uri = $urlMatches;
    } else {
       //
    }

	if ( $_GET['type'] == "squadre" ) {
       $uri = $urlTeams;
    } else {
       //
    }

    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 1fe331b9a62a4020a2de808446cf6c51';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    echo $response;


   ?>