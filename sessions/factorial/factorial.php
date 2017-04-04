<?php

function factorial($numero) {
	if ($numero == 1) {
		return 1;
	}
	return $numero * factorial($numero - 1);
}

for ($i = 1; $i <= 10; $i++) {
	echo "$i! = ".factorial($i)."\n";
}
