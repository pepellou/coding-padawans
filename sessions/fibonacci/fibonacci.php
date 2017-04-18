<?php

function fibonacci($n) {
	if ($n < 2) {
		return $n;
	}
	return fibonacci($n - 1) + fibonacci($n - 2);
}

function fibonacci_iterativo($n) {
	$i = 0;
	$j = 1;
	for ($k = 0; $k <= $n; $k++) {
		$t = $i + $j;
		$j = $i;
		$i = $t;
	}
	return $j;
}

for ($i = 0; $i < 20; $i++) {
	echo "f($i) = ".fibonacci_iterativo($i)."\n";
}
