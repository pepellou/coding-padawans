<?php

$diccionario = array(
	"спасибо" => array(
		"gracias",
		"oh yeah",
		"graciñas"
	),
	"привет" => array(
		"hola",
		"holi"
	),
	"до свидания" => array(
		"adiós"
	),
	"пожалуйста" => array(
		"por favor"
	),
	"друг" => array(
		"amigo",
		"amiga"
	),
);

function getLista($listaPalabras) {
	if (count($listaPalabras) == 1) {
		return $listaPalabras[0];
	}
	$last = array_pop($listaPalabras);
	return implode("', '", $listaPalabras)."' o '".$last;
}

$claves = array_keys($diccionario);
$indice_al_azar = rand(0, count($diccionario) - 1);
$clave_al_azar = $claves[$indice_al_azar];

echo "Traduce '".$clave_al_azar."': ";
$guess = readline();

if (in_array($guess, $diccionario[$clave_al_azar])) {
	echo "Has acertado, eres un crack!";
} else {
	echo "Has dicho '$guess' pero debería ser '".getLista($diccionario[$clave_al_azar])."', paquete!";
}
