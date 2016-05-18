<?php

header("Content-Type: text/html; charset=UTF-8");
    $url = 'http://api.football-data.org/v1/teams/67';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 99ed5ff3ba2a4d9191d6aea496bee971';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($url, false, $stream_context);
    $fixtures = json_decode($response);
    echo  "<br/><br/>";
    //var_dump($fixtures);
    print_r($fixtures->name);
?>
<p>
object(stdClass)#1 (6) {
	["_links"]=> object(stdClass)#2 (3) { 
		["self"]=> object(stdClass)#3 (1) { ["href"]=> string(40) "http://api.football-data.org/v1/teams/66" } 
		["fixtures"]=> object(stdClass)#4 (1) { ["href"]=> string(49) "http://api.football-data.org/v1/teams/66/fixtures" } 
		["players"]=> object(stdClass)#5 (1) { ["href"]=> string(48) "http://api.football-data.org/v1/teams/66/players" } 
	} 
	["name"]=> string(20) "Manchester United FC" 
	["code"]=> string(4) "MUFC" 
	["shortName"]=> string(4) "ManU" 
	["squadMarketValue"]=> string(15) "394,550,000 €" 
	["crestUrl"]=> string(70) "http://upload.wikimedia.org/wikipedia/de/d/da/Manchester_United_FC.svg" 
}
</p>