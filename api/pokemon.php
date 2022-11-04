<?php

$url_pok = 'https://raw.githubusercontent.com/fanzeyi/pokemon.json/master/pokedex.json';
$url_mov = 'https://raw.githubusercontent.com/fanzeyi/pokemon.json/master/moves.json';

/* 

    pok >> pokemon
    mov ->> movimento 

*/

// Json decoding
$pok = json_decode(file_get_contents($url_pok));
$mov = json_decode(file_get_contents($url_mov));
