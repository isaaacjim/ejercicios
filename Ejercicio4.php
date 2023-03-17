<?php

$pokemonsJson = file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=151');
$pokemonsData = json_decode($pokemonsJson, true);

$pokemons = "";
foreach ($pokemonsData["results"] as $pokemon) {
    $pokemons .= "<strong>" . $pokemon["name"] . "---" . "</strong>" . " " . $pokemon["url"] .  "<br>";
}

echo $pokemons;
