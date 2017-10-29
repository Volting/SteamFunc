<?php

// SteamFunc - By Groupe PFC | Volting
// https://github.com/Volting/SteamFunc
// Don't forget to add your Steam API key ( https://steamcommunity.com/dev/apikey )

$api = "Add your API key here";






if(md5($api) == "c226ff18022c2dc1a3d73d6db8b26b89"){
    die('SteamFunc Library | Error: API Key not set');
}

function steam_getpic($id){
	global $api;
	$json = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$api.'&steamids='.$id);
	$parsed = json_decode($json);

	foreach($parsed->response->players as $player){
		return $player->avatar;
	}
}

function steam_getpic_medium($id){
	global $api;
	$json = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$api.'&steamids='.$id);
	$parsed = json_decode($json);

	foreach($parsed->response->players as $player){
		return $player->avatarmedium;
	}
}

function steam_getpic_full($id){
	global $api;
	$json = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$api.'&steamids='.$id);
	$parsed = json_decode($json);

	foreach($parsed->response->players as $player){
		return $player->avatarfull;
	}
}

function steam_steamid($id){
	$authserver = bcsub($id, '76561197960265728') & 1; 
	$authid = (bcsub($id, '76561197960265728')-$authserver)/2;
	$steamid = "STEAM_0:$authserver:$authid";
	return $steamid;
}

function steam_getname($id){
	global $api;
	$json = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$api.'&steamids='.$id);
	$parsed = json_decode($json);

	foreach($parsed->response->players as $player){
		return $player->personaname;
	}
}

?>