<?php

$diccionario = array(
);

$contents = file_get_contents(dirname(__FILE__)."/diccionario.txt");
foreach(explode("\n", $contents) as $line) {
	$line = trim($line);
	if ($line != "") {
		if ($line[strlen($line) - 1] == ":") {
			$current_key = substr($line, 0, strlen($line) - 1);
			$is_first_value = true;
		} else {
			if ($is_first_value) {
				$diccionario[$current_key] = array($line);
			} else {
				$diccionario[$current_key][] = $line;
			}
			$is_first_value = false;
		}
	}
}

function getLista($listaPalabras) {
	if (count($listaPalabras) == 1) {
		return $listaPalabras[0];
	}
	$last = array_pop($listaPalabras);
	return implode("', '", $listaPalabras)."' o '".$last;
}

if (count($diccionario) == 0) {
	echo "No hay diccionario, así no puedo";
} else {
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
}
