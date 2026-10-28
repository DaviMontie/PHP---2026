<?php

	echo "WHILE\n";
	$controle = 0;

	while($controle < 10){
		$controle++;
		echo $controle . ' ';
	}

	echo "\nDO-WHILE\n";
	$controle = 0;
	do{
		$controle++;
		echo $controle . ' ';
	}while($controle < 10);

	echo "\nFOR\n";
	for($i=1;$i<11;$i++){
		echo $i . ' ';
	}
	echo "\n";
